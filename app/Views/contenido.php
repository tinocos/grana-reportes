<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet" /> 
        <?php if ($letra=="Times"){
            echo '<link rel="stylesheet" type="text/css" href="/css/style_times.css">';
        }else{
            echo '<link rel="stylesheet" type="text/css" href="/css/style_cormorantgaramond.css">';
        }
        ?>
        <!--
        <style>
        
         p:first-child img{
             width:400px;
                height:auto;
              text-align:center;   
             }
        </style> -->
        
    </head>
<body>
<div>
    
    <?php 
        ini_set("pcre.backtrack_limit", "5000000");
        $buscado = ['Fortalezas', 'Debilidades', 'Plan de mejoramiento', 'Calificaci&oacute;n', 'Grafindic&aacute;metro del rubro'];
        $reemplazo = ['<strong>Fortalezas</strong>', '<strong>Debilidades</strong>', '<strong>Plan de mejoramiento</strong>', '<strong>Calificaci&oacute;n</strong>', '<strong>Grafindic&aacute;metro del rubro</strong>'];

        $texto = html_entity_decode('<h2>I. Apertura</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_1'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>II. Presentaci&oacute;n</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_2'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>III. Contexto</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_3'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>IV. Antecedentes</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_4'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>V. Metodolog&iacute;a</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_5'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>VI. Resultados de la Aplicaci&oacute;n Metodol&oacute;gica</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_6'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>VII. Comit&eacute; Evaluador Interno</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_7'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>VIII. Comit&eacute; Evaluador Externo</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_8'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>IX. &Iacute;tems Evaluados</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_9'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>X. Resultados de la Evaluaci&oacute;n Externa</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_10'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>XI. Percepci&oacute;n de los entes Involucrados en los Programas Acad&eacute;micos</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_11'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>XII. Niveles de Calidad</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_12'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>XIII. Conclusi&oacute;n</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_13'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>XIV. Per&iacute;odo de la Acreditaci&oacute;n</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_14'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>XV. Seguimiento al Incremento en el Puntaje o en el Nivel de Calidad</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_15'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>XVI. Cierre</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_16'], ENT_QUOTES); 
        // $texto = $texto . html_entity_decode('<h1 class="new-page" style="text-align: center;"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />ANEXOS</h1><h2 class="new-page">Evaluación Interna Actual</h2>');
        $texto = $texto . html_entity_decode('<table style="width: '.$w.'pt; border:0px; margin: 0; padding: 0;" cellpadding="0" cellspacing="0"><tr><td style="height: '.$h.'pt; border:0px; text-align: center; vertical-align: middle; margin: 0;"><h1>ANEXOS</h1></td></tr></table>');
        $texto = $texto . html_entity_decode('<h2 class="new-page">Evaluación Interna Actual</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_17'], ENT_QUOTES); 
        $texto = $texto . html_entity_decode('<h2>Evoluci&oacute;n de las Evaluaciones Externas del Mejoramiento Permanente</h2>');
        $texto = $texto .''. html_entity_decode($contenido['indice_18'], ENT_QUOTES); 
        
        
        //$texto =utf8_decode($texto);
        
        $texto_reemplazado = str_replace($buscado, $reemplazo, $texto);
        
        
        echo $texto_reemplazado;
        
    ?>

        </div>
    </body>
</html>