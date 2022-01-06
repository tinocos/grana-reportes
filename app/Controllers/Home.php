<?php

namespace App\Controllers;

use App\Models\DetalleModel;
use App\Models\UsuariosModel;
use iio\libmergepdf\Merger;
use iio\libmergepdf\PagesInterface;
use iio\libmergepdf\Pages;

class Home extends BaseController {

  protected $detalle;
  protected $session;
  protected $usuarios;

  public function __construct() {

    $this->detalle = new DetalleModel();
    $this->usuarios = new UsuariosModel();
    $this->session = session();
  }

  // Trae todos los dictámenes
  public function index() {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $contenido = $this->detalle->select('*')->findAll();
    $data = ['datos' => $contenido];

    echo view('header');
    echo view('menu');
    echo view('informes', $data); //informes
    echo view('footer');
  }

  public function dictamenes() {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $contenido = $this->detalle->select('*')->findAll();
    $data = ['datos' => $contenido];

    echo view('header');
    echo view('menu');
    echo view('informes', $data); //informes
    echo view('footer');
  }

  public function vlogin() {
    $usuarios = $this->usuarios->select('*')->where('usuario', $this->request->getPost('username'))->first();
    if ($usuarios != null) {
      if (!password_verify($this->request->getPost('password'), $usuarios['password'])) {
        return redirect()->to(base_url());
      }
      $datosSession = [
          'nombre' => $usuarios['nombre'],
          'usuario' => $usuarios['usuario']
      ];
      $session = session();
      $session->set($datosSession);
      return redirect()->to(base_url());
    } else {
      return redirect()->to(base_url() . '/home/login');
    }
  }

  public function login() {
    echo view('login');
  }

  public function logout() {
    $session_usuario = session();
    $session_usuario->destroy();
    return redirect()->to(base_url() . '/home/login');
  }

  // Edita el dictamen ID
  public function editarReporte($id = 1) {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $contenido = $this->detalle->select('*')->where('id', $id)->first();
    $data = ['datos' => $contenido];

    echo view('header');
    echo view('menu');
    echo view('inf_edicion', $data);
    echo view('footer');
  }

  // Muestra la pantalla de nuevo dictamen
  public function nuevoReporte() {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    echo view('header');
    echo view('menu');
    echo view('inf_nuevo');
    echo view('footer');
  }

  // Crea la portada de cabeceras con el no de dictamen y el nombre de la escuela
  public function crearPDFPortada($id = 1, $tipo, $letra) {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $file = fopen("./debug_" . date('Y-m-d') . ".log", "a+w+");
    fwrite($file, date('Y-m-d H:i:s') . ' $letra ' . PHP_EOL . PHP_EOL);
    fclose($file);

    set_time_limit(300);

    if ($tipo == 'Legal') {
      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215.9, 339.85]]);
    } else {
      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215.9, 279.4]]);
    }

    $h = $mpdf->hPt;
    $w = $mpdf->wPt;

    $file = fopen("./debug_" . date('Y-m-d') . ".log", "a+w+");
    fwrite($file, date('Y-m-d H:i:s') . $h . '->' . $w . PHP_EOL . PHP_EOL);
    fclose($file);

    $contenido = $this->detalle->select('id, cert_no, institucion')->where('id', $id)->first();
    $datos = ['titulo' => 'titulo', 'contenido' => $contenido, 'letra' => $letra, 'tipo' => $tipo, 'h' => $h, 'w' => $w];

    $mpdf->setTitle('GRANA');
    $mpdf->setAuthor('Dr Donato Vallín González');

    $mpdf->SetHTMLHeader('<div style="alight:right;"><img style="width:120px; height:auto; float:right;" src="' . base_url() . '/imgs/logo_grana.png" /></div>');

    $mpdf->AddPage('', // L - landscape, P - portrait 
            '', '', '', '',
            10, // margin_left
            10, // margin right
            30, // margin top
            20, // margin bottom
            5, // margin header
            15); // margin footer
    $data = ['tabla' => $this->crearIndice($id), 'h'->$h, 'w'->$w, 'letra' => $letra, 'tipo' => $tipo];
    $html = view('indices', $data);
    $mpdf->setFooter('Grana International - Evaluation and Certification');
    $mpdf->WriteHTML($html);
    $this->response->setHeader('Content-Type', 'application/pdf');
    $mpdf->Output('./PDF/portada_' . $id . '.pdf', 'F');
    $mpdf->Output('portada_' . $id . '.pdf', 'I');
  }

  // Crea el archivo PDF principal
  public function crearPDF($id = 1, $tipo, $letra) {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }


    set_time_limit(300);

    if ($tipo == 'Legal') {
      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215.9, 339.85]]);
    } else {
      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215.9, 279.4]]);
    }

    $h = $mpdf->hPt;
    $w = $mpdf->wPt;

    $contenido = $this->detalle->select('id, cert_no, institucion, indice_1, indice_2, indice_3, indice_4, indice_5, indice_6, indice_7, indice_8, indice_9, indice_10, indice_11, indice_12, indice_13, indice_14, indice_15, indice_16, indice_17, indice_18')->where('id', $id)->first();
    $datos = ['titulo' => 'titulo', 'contenido' => $contenido, 'letra' => $letra, 'h' => $h, 'w' => $w];

    // Se establecen las metadatos
    $mpdf->setTitle('GRANA');
    $mpdf->setAuthor('Dr. Donato Vallín González');

    $mpdf->SetHTMLHeader('<div style="alight:right;"><img style="width:120px; height:auto; float:right;" src="' . base_url() . '/imgs/logo_grana.png" /></div>');

    $mpdf->AddPage('', // L - landscape, P - portrait 
            '', '', '', '',
            10, // margin_left
            10, // margin right
            30, // margin top
            20, // margin bottom
            5, // margin header
            15); // margin footer

    $html = view('portada', $datos);
    $mpdf->setFooter('Grana International - Evaluation and Certification');
    // Imprime la portada
    $mpdf->WriteHTML($html);

    // Agrega una nueva página con el contenido general
    $mpdf->AddPage('', // L - landscape, P - portrait 
            '', '1', '1', '',
            20, // margin_left
            20, // margin right
            30, // margin top
            20, // margin bottom
            5, // margin header
            10); // margin footer
    $html = view('contenido', $datos);
    $mpdf->AliasNbPages('[pagetotal]');
    $mpdf->setFooter('Grana International - Evaluation and Certification - <span style="font-size: 1.4em;"> {PAGENO}</span>');
    $mpdf->WriteHTML($html);
    $this->response->setHeader('Content-Type', 'application/pdf');
    $mpdf->Output('./PDF/archivo_' . $id . '.pdf', 'F');
    $mpdf->Output('archivo_' . $id . '.pdf', 'I');
    // return json_encode($res["guardado"] = true);
  }

  // Crea el archivo y hoja de indices
  public function crearIndice($id = 1) {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $parser = new \Smalot\PdfParser\Parser();
    $pdf = $parser->parseFile(base_url() . '/PDF/archivo_' . $id . '.pdf');

    $pages = $pdf->getPages();
    $pag = 0;

    $IOk = 0;
    $II = 0;
    $III = 0;
    $IV = 0;
    $V = 0;
    $VI = 0;
    $VII = 0;
    $VIII = 0;
    $IX = 0;
    $X = 0;
    $XI = 0;
    $XII = 0;
    $XIII = 0;
    $XIV = 0;
    $XV = 0;
    $XVI = 0;
    $XVII = 0;
    $XVIII = 0;

    foreach ($pages as $page) {
      $pag++;

      if (strstr(strtoupper($page->getText()), strtoupper('I. Apertura')) and $I == 0) {
        $I = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('II. Presentación')) and $II == 0) {
        $II = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('III. Contexto')) and $III == 0) {
        $III = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('IV. Antecedentes')) and $IV == 0) {
        $IV = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('V. Metodología')) and $V == 0) {
        $V = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('VI. Resultados de la Aplicación Metodológica')) and $VI == 0) {
        $VI = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('VII. Comité Evaluador Interno')) and $VII == 0) {
        $VII = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('VIII. Comité Evaluador Externo')) and $VIII == 0) {
        $VIII = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('IX. Ítems Evaluados')) and $IX == 0) {
        $IX = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('X. Resultados de la Evaluación Externa')) and $X == 0) {
        $X = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('XI. Percepción de los Entes Involucrados en los Programas Académicos')) and $XI == 0) {
        $XI = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('XII. Niveles de Calidad')) and $XII == 0) {
        $XII = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('XIII. Conclusión')) and $XIII == 0) {
        $XIII = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('XIV. Período de la Acreditación')) and $XIV == 0) {
        $XIV = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('XV. Seguimiento al Incremento en el Puntaje o en el Nivel de Calidad')) and $XV == 0) {
        $XV = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('XVI. Cierre')) and $XVI == 0) {
        $XVI = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('Evaluación Interna Actual')) and $XVII == 0) {
        $XVII = $pag - 1;
      }

      if (strstr(strtoupper($page->getText()), strtoupper('Evolución de las Evaluaciones Externas del Mejoramiento Permanente')) and $XVIII == 0) {
        $XVIII = $pag - 1;
      }
    }

    $tabla = '
        <h1>CONTENIDO</h1>
        <table class="tabla_centrada" style="max-width:540px;">
                <thead>
                    <tr>
                        <th  style="width:10%;"></th>
                        <th style="width:80%;">Capítulos</th>
                        <th style="width:10%;">Página</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>I</td><td>Apertura</td><td>' . $I . '</td></tr>
                    <tr><td>II</td><td>Presentación</td><td>' . $II . '</td></tr>
                    <tr><td>III</td><td>Contexto</td><td>' . $III . '</td></tr>
                    <tr><td>IV</td><td>Antecedentes</td><td>' . $IV . '</td></tr>
                    <tr><td>V</td><td>Metodología</td><td>' . $V . '</td></tr>
                    <tr><td>VI</td><td>Resultados de la Aplicación Metodológica</td><td>' . $VI . '</td></tr>
                    <tr><td>VII</td><td>Comité Evaluador Interno</td><td>' . $VII . '</td></tr>
                    <tr><td>VIII</td><td>Comité Evaluador Externo</td><td>' . $VIII . '</td></tr>
                    <tr><td>IX</td><td>Ítems Evaluados</td><td>' . $IX . '</td></tr>
                    <tr><td>X</td><td>Resultados de la Evaluación Externa</td><td>' . $X . '</td></tr>
                    <tr><td>XI</td><td>Percepción de los Entes Involucrados en los Programas Académicos</td><td>' . $XI . '</td></tr>
                    <tr><td>XII</td><td>Niveles de Calidad</td><td>' . $XII . '</td></tr>
                    <tr><td>XIII</td><td>Conclusión</td><td>' . $XIII . '</td></tr>
                    <tr><td>XIV</td><td>Período de la Acreditación</td><td>' . $XIV . '</td></tr>
                    <tr><td>XV</td><td>Seguimiento al Incremento en el Puntaje o en el Nivel de Calidad</td><td>' . $XV . '</td></tr>
                    <tr><td>XVI</td><td>Cierre</td><td>' . $XVI . '</td></tr>
                    <tr><td></td><td><strong>Anexos</strong></td><td></td></tr>
                    <tr><td></td><td>Evaluación Interna Actual</td><td>' . $XVII . '</td></tr>
                    <tr><td></td><td>Evolución de las Evaluaciones Externas del Mejoramiento Permanente</td><td>' . $XVIII . '</td></tr>
                </tbody>
            </table>';
    $datos = ['titulo' => 'Textos', 'tabla' => $tabla];
    return view('indices', $datos);
  }

  public function portada() {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    return view('portada');
  }

  public function contenido($id) {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $contenido = $this->detalle->select('*')->where('id', $id)->first();
    $datos = ['titulo' => 'titulo', 'contenido' => $contenido];

    return view('contenido', $datos);
  }

  // QUITA ATRIBUTOS DE LOS ELEMENTOS

  public function quitarAtributos($contenido) {

    $contenido = mb_convert_encoding($contenido, 'HTML-ENTITIES', 'UTF-8');

    $contenido = strip_tags($contenido, '<p><b><strong><ol><ul><li><img><br><h1><h2><h3><h4><table><tr><th><td><div><small>');
    $contenido = str_replace('<p><br />', '<p>', $contenido);
    $contenido = str_replace('&nbsp;', '', $contenido);


    $contenido = str_replace('<p></p>', '', $contenido);
    $contenido = str_replace('<p>&nbsp;</p>', '', $contenido);

    $contenido = str_replace('<p><img', '<p style="align:center;"><img', $contenido);


    $contenido = str_replace('<h2>&nbsp;</h2>', '', $contenido);
    $contenido = str_replace('<h2></h2>', '', $contenido);


    $dom = new \DOMDocument();
    $dom->loadHTML($contenido);

    foreach ($dom->getElementsByTagName('img') as $image) {
      $image->removeAttribute('alt');
      $image->removeAttribute('align');
    }

    foreach ($dom->getElementsByTagName('li') as $li) {
      $li->removeAttribute('class');
      $li->removeAttribute('style');
    }

    foreach ($dom->getElementsByTagName('p') as $pes) {
      $pes->removeAttribute('style');
      $pes->removeAttribute('align');
      $pes->removeAttribute('class');
      $pes->removeAttribute('dir');
    }

    foreach ($dom->getElementsByTagName('table') as $tablas) {
      $tablas->removeAttribute('class');
      $tablas->removeAttribute('style');
      $tablas->removeAttribute('width');
    }

    $contenido = $dom->saveHTML();
    $quitar = ['<html>', '</html>', '<body>', '</body>', '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">', '<p>&nbsp;</p>', '<p align="left">&nbsp;</p>'];

    $contenido = str_replace($quitar, '', $contenido);

    return $contenido;
  }

  public function guardarCapitulo() {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $id = $this->request->getPost('id');
    $capitulo = $this->request->getPost('capitulo');
    $contenido = $this->request->getPost('contenido');

    $file = fopen("./debug_" . date('Y-m-d') . ".log", "a+w+");
    fwrite($file, date('Y-m-d H:i:s') . ' - Capitulo: ' . $capitulo . ' - ID: ' . $id . ' Contenido: ' . $contenido . PHP_EOL . PHP_EOL);
    fclose($file);

    $contenido = mb_convert_encoding($contenido, 'HTML-ENTITIES', 'UTF-8');

    $contenido = strip_tags($contenido, '<p><b><strong><ol><ul><li><img><br><h1><h2><h3><h4><table><tr><th><td><div><small>');
    $contenido = str_replace('<p><br />', '<p>', $contenido);
    $contenido = str_replace('&nbsp;', '', $contenido);


    if ($capitulo <> 'institucion') {
      $contenido = str_replace('<p></p>', '', $contenido);
      $contenido = str_replace('<p>&nbsp;</p>', '', $contenido);
    }

    $contenido = str_replace('<h2>&nbsp;</h2>', '', $contenido);
    $contenido = str_replace('<h2></h2>', '', $contenido);


    $dom = new \DOMDocument();
    $dom->loadHTML($contenido);

    foreach ($dom->getElementsByTagName('img') as $image) {
      $image->removeAttribute('alt');
    }

    foreach ($dom->getElementsByTagName('li') as $li) {
      $li->removeAttribute('class');
      $li->removeAttribute('style');
    }


    if ($capitulo <> 'institucion') {
      foreach ($dom->getElementsByTagName('p') as $pes) {
        $pes->removeAttribute('style');
        $pes->removeAttribute('align');
        $pes->removeAttribute('class');
        $pes->removeAttribute('dir');
      }
    }

    foreach ($dom->getElementsByTagName('table') as $tablas) {
      $tablas->removeAttribute('class');
      $tablas->removeAttribute('style');
      $tablas->removeAttribute('width');
    }



    $contenido = $dom->saveHTML();
    $quitar = ['<html>', '</html>', '<body>', '</body>', '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">', '<p>&nbsp;</p>', '<p align="left">&nbsp;</p>'];

    $contenido = str_replace('<p><img', '<p style="text-align:center;"><img', $contenido);

    $contenido = str_replace($quitar, '', $contenido);

    $contenido_procesado = htmlentities($contenido, ENT_QUOTES);

    if ($this->detalle->query('update grana_detalle set ' . $capitulo . '="' . $contenido_procesado . '" where id="' . $id . '"')) {
      $res["guardado"] = true;
    } else {
      $res["guardado"] = false;
    }

    echo json_encode($res);
  }

  /*
    public function guardarDetalle() {

    $id = $this->request->getPost('id');

    $indice_1 = $this->request->getPost('indice_1');
    $indice_2 = $this->request->getPost('indice_2');
    $indice_3 = $this->request->getPost('indice_3');
    $indice_4 = $this->request->getPost('indice_4');
    $indice_5 = $this->request->getPost('indice_5');
    $indice_6 = $this->request->getPost('indice_6');
    $indice_7 = $this->request->getPost('indice_7');
    $indice_8 = $this->request->getPost('indice_8');
    $indice_9 = $this->request->getPost('indice_9');
    $indice_10 = $this->request->getPost('indice_10');
    $indice_11 = $this->request->getPost('indice_11');
    $indice_12 = $this->request->getPost('indice_12');
    $indice_13 = $this->request->getPost('indice_13');
    $indice_14 = $this->request->getPost('indice_14');
    $indice_15 = $this->request->getPost('indice_15');
    $indice_16 = $this->request->getPost('indice_16');
    $indice_17 = $this->request->getPost('indice_17');
    $indice_18 = $this->request->getPost('indice_18');

    $cert_no = $this->request->getPost('cert_no');
    $institucion = $this->request->getPost('institucion');


    $indice_1 = $this->quitarAtributos($indice_1);
    $indice_2 = $this->quitarAtributos($indice_2);
    $indice_3 = $this->quitarAtributos($indice_3);
    $indice_4 = $this->quitarAtributos($indice_4);
    $indice_5 = $this->quitarAtributos($indice_5);
    $indice_6 = $this->quitarAtributos($indice_6);
    $indice_7 = $this->quitarAtributos($indice_7);
    $indice_8 = $this->quitarAtributos($indice_8);
    $indice_9 = $this->quitarAtributos($indice_9);
    $indice_10 = $this->quitarAtributos($indice_10);
    $indice_11 = $this->quitarAtributos($indice_11);
    $indice_12 = $this->quitarAtributos($indice_12);
    $indice_13 = $this->quitarAtributos($indice_13);
    $indice_14 = $this->quitarAtributos($indice_14);
    $indice_15 = $this->quitarAtributos($indice_15);
    $indice_17 = $this->quitarAtributos($indice_17);
    $indice_18 = $this->quitarAtributos($indice_18);


    $this->detalle->query('update grana_detalle set
    indice_1="' . htmlentities($indice_1, ENT_QUOTES) . '",
    indice_2="' . htmlentities($indice_2, ENT_QUOTES) . '",
    indice_3="' . htmlentities($indice_3, ENT_QUOTES) . '",
    indice_4="' . htmlentities($indice_4, ENT_QUOTES) . '",
    indice_5="' . htmlentities($indice_5, ENT_QUOTES) . '",
    indice_6="' . htmlentities($indice_6, ENT_QUOTES) . '",
    indice_7="' . htmlentities($indice_7, ENT_QUOTES) . '",
    indice_8="' . htmlentities($indice_8, ENT_QUOTES) . '",
    indice_9="' . htmlentities($indice_9, ENT_QUOTES) . '",
    indice_10="' . htmlentities($indice_10, ENT_QUOTES) . '",
    indice_11="' . htmlentities($indice_11, ENT_QUOTES) . '",
    indice_12="' . htmlentities($indice_12, ENT_QUOTES) . '",
    indice_13="' . htmlentities($indice_13, ENT_QUOTES) . '",
    indice_14="' . htmlentities($indice_14, ENT_QUOTES) . '",
    indice_15="' . htmlentities($indice_15, ENT_QUOTES) . '",
    indice_16="' . htmlentities($indice_16, ENT_QUOTES) . '",
    indice_17="' . htmlentities($indice_17, ENT_QUOTES) . '",
    indice_18="' . htmlentities($indice_18, ENT_QUOTES) . '",
    cert_no="' . htmlentities($cert_no, ENT_QUOTES) . '",
    institucion="' . htmlentities($institucion, ENT_QUOTES) . '" where id="' . $id . '"');

    return redirect()->to(base_url());
    }
   */

  public function guardarNombreDictamen() {

    $cert_no = $this->request->getPost('cert_no');
    $programa_academico = $this->request->getPost('programa_academico');
    $id = $this->request->getPost('id');

    $sql = 'update grana_detalle set cert_no="' . trim($cert_no) . '", programa_academico="' . trim($programa_academico) . '" where id=' . $id;


    $file = fopen("./debug_" . date('Y-m-d') . ".log", "a+w+");
    fwrite($file, date('Y-m-d H:i:s') . $sql . PHP_EOL . PHP_EOL);
    fclose($file);

    if ($this->detalle->query($sql)) {
      $res["guardado"] = true;
    } else {
      $res["guardado"] = false;
    }
    echo json_encode($res);
  }

  public function guardarNuevoDetalle() {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $indice_1 = $this->request->getPost('indice_1');
    $indice_2 = $this->request->getPost('indice_2');
    $indice_3 = $this->request->getPost('indice_3');
    $indice_4 = $this->request->getPost('indice_4');
    $indice_5 = $this->request->getPost('indice_5');
    $indice_6 = $this->request->getPost('indice_6');
    $indice_7 = $this->request->getPost('indice_7');
    $indice_8 = $this->request->getPost('indice_8');
    $indice_9 = $this->request->getPost('indice_9');
    $indice_10 = $this->request->getPost('indice_10');
    $indice_11 = $this->request->getPost('indice_11');
    $indice_12 = $this->request->getPost('indice_12');
    $indice_13 = $this->request->getPost('indice_13');
    $indice_14 = $this->request->getPost('indice_14');
    $indice_15 = $this->request->getPost('indice_15');
    $indice_16 = $this->request->getPost('indice_16');
    $indice_17 = $this->request->getPost('indice_17');
    $indice_18 = $this->request->getPost('indice_18');

    $cert_no = $this->request->getPost('cert_no');
    $institucion = $this->request->getPost('institucion');
    $programa_academico = $this->request->getPost('programa_academico');

    /*  $indice_1 = $this->quitarAtributos($indice_1);
      $indice_2 = $this->quitarAtributos($indice_2);
      $indice_3 = $this->quitarAtributos($indice_3);
      $indice_4 = $this->quitarAtributos($indice_4);
      $indice_5 = $this->quitarAtributos($indice_5);
      $indice_6 = $this->quitarAtributos($indice_6);
      $indice_7 = $this->quitarAtributos($indice_7);
      $indice_8 = $this->quitarAtributos($indice_8);
      $indice_9 = $this->quitarAtributos($indice_9);
      $indice_10 = $this->quitarAtributos($indice_10);
      $indice_11 = $this->quitarAtributos($indice_11);
      $indice_12 = $this->quitarAtributos($indice_12);
      $indice_13 = $this->quitarAtributos($indice_13);
      $indice_14 = $this->quitarAtributos($indice_14);
      $indice_15 = $this->quitarAtributos($indice_15);
      $indice_16 = $this->quitarAtributos($indice_16);
      $indice_17 = $this->quitarAtributos($indice_17);
      $indice_18 = $this->quitarAtributos($indice_18);
     */


    $this->detalle->query('insert into grana_detalle(cert_no, institucion, indice_1, indice_2, indice_3, indice_4, 
                                indice_5, indice_6, indice_7, indice_8, indice_9, indice_10, indice_11, indice_12, 
                                indice_13, indice_14, indice_15, indice_16, indice_17, indice_18, programa_academico) 
                values("' . htmlentities($cert_no, ENT_QUOTES) . '", 
                "' . htmlentities($institucion, ENT_QUOTES) . '", 
                "' . htmlentities($indice_1, ENT_QUOTES) . '", 
                "' . htmlentities($indice_2, ENT_QUOTES) . '",
                "' . htmlentities($indice_3, ENT_QUOTES) . '",
                "' . htmlentities($indice_4, ENT_QUOTES) . '",
                "' . htmlentities($indice_5, ENT_QUOTES) . '",
                "' . htmlentities($indice_6, ENT_QUOTES) . '",
                "' . htmlentities($indice_7, ENT_QUOTES) . '",
                "' . htmlentities($indice_8, ENT_QUOTES) . '",
                "' . htmlentities($indice_9, ENT_QUOTES) . '",
                "' . htmlentities($indice_10, ENT_QUOTES) . '",
                "' . htmlentities($indice_11, ENT_QUOTES) . '",
                "' . htmlentities($indice_12, ENT_QUOTES) . '",
                "' . htmlentities($indice_13, ENT_QUOTES) . '",
                "' . htmlentities($indice_14, ENT_QUOTES) . '",
                "' . htmlentities($indice_15, ENT_QUOTES) . '",
                "' . htmlentities($indice_16, ENT_QUOTES) . '",
                "' . htmlentities($indice_17, ENT_QUOTES) . '",
                "' . htmlentities($indice_18, ENT_QUOTES) . '",
                "' . $programa_academico . '")');

    $ultimoId = $this->detalle->select('LAST_INSERT_ID() as ultimoId')->first();

    return redirect()->to(base_url() . '/home/editarReporte/' . $ultimoId['ultimoId']);
  }

  // FUNCION PARA COMBINAR DOCUMENTOS
  public function traerReporte($no, $tamanoHoja, $letra) {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $contenido = $this->detalle->select('*')->where('id', $no)->first();
    $datos = ['titulo' => 'titulo', 'contenido' => $contenido];

    $this->crearPDF($no, $tamanoHoja, $letra);
    $this->crearPDFPortada($no, $tamanoHoja, $letra);
    $this->combinarDocumentos($no);
  }

  // COMBINA LOS DOCUMENTOS DE INDICE Y CONTENIDO
  public function combinarDocumentos($id = 1) {

    if (!isset($this->session->usuario)) {
      return redirect()->to(base_url() . '/home/login');
    }

    $combinador = new Merger;

    $parser = new \Smalot\PdfParser\Parser();
    $pdf = $parser->parseFile(base_url() . '/PDF/archivo_' . $id . '.pdf');
    $pages = $pdf->getPages();

    $combinador->addFile('./PDF/archivo_' . $id . '.pdf', new Pages('1'));
    $combinador->addFile('./white/blanco.pdf', new Pages('1'));
    $combinador->addFile('./PDF/portada_' . $id . '.pdf', new Pages('1'));
    $combinador->addFile('./PDF/archivo_' . $id . '.pdf', new Pages('2-' . count($pages)));

    $salida = $combinador->merge();
    $nombreArchivo = './PDF/Dictamen_' . $id . '.pdf';

    $bytesEscritos = file_put_contents('./PDF/Dictamen_' . $id . '.pdf', $salida);


    header("Content-type:application/pdf");
    header("Content-disposition: inline; filename=$nombreArchivo");
    header("content-Transfer-Encoding:binary");
    header("Accept-Ranges:bytes");
    # Imprimir salida luego de encabezados
    echo $salida;
    exit;
  }

}
