<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Editar dictamen</h4>
            </div>
            <div class="col-md-7 align-self-center text-end">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edicion</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h1>Dictamen no. <?php echo $datos['cert_no']; ?></h1>
                        <hr />
                        <form action="/home/guardarDetalle" method="post">

                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">      
                                        <label for="id" class="form-label">ID</label>
                                        <input type="text" name="id" id="id" class="form-control" value="<?php echo $datos['id']; ?>" readonly>
                                    </div>
                                </div>  

                                <hr />

                            </div>
                            <div class="row mt-5">
                                <div class="col-md-3">
                                    <div class="form-group">      
                                      <label for="id" class="form-label">Dictamen no.</label>
                                      <input type="text" name="cert_no" id="cert_no" class="form-control" value="<?php echo $datos['cert_no']; ?>" required>
                                    </div>
                                  </div> 
                                  <div class="col-md-9">
                                    <div class="form-group">      
                                        <label for="id" class="form-label">Programa Académico</label>
                                        <input type="text" name="programa_academico" id="programa_academico" class="form-control" value="<?php echo $datos['programa_academico']; ?>" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="grabarNoDictamen();" class="btn btn-info">Guardar No. Dictamen</btn>        
                                    </div>    
                                </div>
                            <!-- <div class="row">
                                <div class="col-md-3">
                                    <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'cert_no');" class="btn btn-info">Guardar no. dictamen</btn>        
                                </div>    
                            </div> -->

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Institucion</h2>
                                    <textarea  name="institucion" id="institucion"><?php echo $datos['institucion']; ?></textarea></p>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'institucion');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <!-- CAPITULO II -->
                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>I. Apertura</h2>
                                      <input type="text" name="indice_1_titulo" id="indice_1_titulo" class="form-control" value="I. Apertura" readonly>
                                    <textarea id="indice_1" name="indice_1"><?php echo $datos['indice_1']; ?></textarea>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_1');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>

                            </div>


                            <!-- CAPITULO II -->
                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>II. Presentación</h2>
                                      <input type="text" name="indice_2_titulo" id="indice_2_titulo" class="form-control" value="II. Presentación" readonly>
                                    <textarea id="indice_2" name="indice_2"><?php echo $datos['indice_2']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_2');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>



                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>III. Contexto</h2>
                                      <input type="text" name="indice_3_titulo" id="indice_3_titulo" class="form-control" value="III. Contexto" readonly>
                                    <textarea id="indice_3" name="indice_3"><?php echo $datos['indice_3']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_3');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>IV. Antecedentes</h2>
                                      <input type="text" name="indice_4_titulo" id="indice_4_titulo" class="form-control" value="IV. Antecedentes" readonly>
                                    <textarea id="indice_4" name="indice_4"><?php echo $datos['indice_4']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_4');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>V. Metodología</h2>
                                      <input type="text" name="indice_5_titulo" id="indice_5_titulo" class="form-control" value="V. Metodología" readonly>
                                    <textarea id="indice_5" name="indice_5"><?php echo $datos['indice_5']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_5');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>VI. Resultados de la Aplicación Metodológica</h2>
                                      <input type="text" name="indice_6_titulo" id="indice_6_titulo" class="form-control" value="VI. Resultados de la Aplicación Metodológica" readonly>
                                    <textarea id="indice_6" name="indice_6"><?php echo $datos['indice_6']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_6');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>VII. Comité Evaluador Interno</h2>
                                      <input type="text" name="indice_7_titulo" id="indice_7_titulo" class="form-control" value="VII. Comité Evaluador Interno" readonly>
                                    <textarea id="indice_7" name="indice_7"><?php echo $datos['indice_7']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_7');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>VIII. Comité Evaluador Externo</h2>
                                      <input type="text" name="indice_8_titulo" id="indice_8_titulo" class="form-control" value="VIII. Comité Evaluador Externo" readonly>
                                    <textarea id="indice_8" name="indice_8"><?php echo $datos['indice_8']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_8');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>IX. Ítems evaluados</h2>
                                      <input type="text" name="indice_9_titulo" id="indice_9_titulo" class="form-control" value="IX. Ítems evaluados" readonly>
                                    <textarea id="indice_9" name="indice_9"><?php echo $datos['indice_9']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_9');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>X. Resultados de la Evaluación Externa</h2>
                                    <input type="text" name="indice_10_titulo" id="indice_10_titulo" class="form-control" value="X. Resultados de la Evaluación Externa" readonly>
                                    <textarea id="indice_10" name="indice_10"><?php echo $datos['indice_10']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_10');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>XI. Percepción de los entes involucrados en los Programas Académicos</h2>
                                      <input type="text" name="indice_11_titulo" id="indice_11_titulo" class="form-control" value="XI. Percepción de los entes involucrados en los Programas Académicos" readonly>
                                    <textarea id="indice_11" name="indice_11"><?php echo $datos['indice_11']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_11');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>XII. Niveles de calidad</h2>
                                      <input type="text" name="indice_12_titulo" id="indice_12_titulo" class="form-control" value="XII. Niveles de calidad" readonly>
                                    <textarea id="indice_12" name="indice_12"><?php echo $datos['indice_12']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_12');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>XIII. Conclusión</h2>
                                      <input type="text" name="indice_13_titulo" id="indice_13_titulo" class="form-control" value="XIII. Conclusión" readonly>
                                    <textarea id="indice_13" name="indice_13"><?php echo $datos['indice_13']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_13');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>XIV. Período de la Acreditación</h2>
                                      <input type="text" name="indice_14_titulo" id="indice_14_titulo" class="form-control" value="XIV. Período de la Acreditación" readonly>
                                    <textarea id="indice_14" name="indice_14"><?php echo $datos['indice_14']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_14');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>XV. Seguimiento al incremento en el puntaje o en el nivel de calidad</h2>
                                      <input type="text" name="indice_15_titulo" id="indice_15_titulo" class="form-control" value="XV. Seguimiento al incremento en el puntaje o en el nivel de calidad" readonly>
                                    <textarea id="indice_15" name="indice_15"><?php echo $datos['indice_15']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_15');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>XVI. Cierre</h2>
                                      <input type="text" name="indice_16_titulo" id="indice_16_titulo" class="form-control" value="XVI. Cierre" readonly>
                                    <textarea id="indice_16" name="indice_16"><?php echo $datos['indice_16']; ?></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_16');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>
                            
                            
                            <hr />
                            <div class="row">
                              <div class="col-md-12">
                                <h2>Anexos</h2>
                                <input type="text" name="indice_17_titulo" id="indice_17_titulo" class="form-control" value="Evaluación interna actual" readonly>
                                <textarea id="indice_17" name="indice_17"><?php echo $datos['indice_17']; ?></textarea>
                              </div>
                              <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_17');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>
            
                            
                            <hr />
                            <div class="row">
                              <div class="col-md-12">
                                <h2>Anexos</h2>
                                <input type="text" name="indice_18_titulo" id="indice_18_titulo" class="form-control" value="Evolución de las Evaluaciones Externas del Mejoramiento Permanente" readonly>
                                <textarea id="indice_18" name="indice_18"><?php echo $datos['indice_18']; ?></textarea>
                              </div>
                              <div class="row mt-3">
                                    <div class="col-md-3">
                                        <btn onclick="enviarParcial('<?php echo $datos['id']; ?>', 'indice_18');" class="btn btn-info">Guardar capítulo</btn>        
                                    </div>    
                                </div>
                            </div>
                            
                            <!-- <div>
                                <button style="margin-bottom:30px; margin-top:30px;" class="btn btn-info">Guardar Dictamen</button> 
                            </div> -->

                        </form>


                        <div style="position: fixed; bottom: 10px; right: 20px;">
                            <textarea id="pasteArea" placeholder="Carga IMG" style="float:left; margin:0px; width:140px; height:33px; border:3px solid; border-color: #D35400;"></textarea>

                            <p><button class="btn btn-info" onclick="clearIMG();" style="float:right; margin-top: 10px;">Limpiar IMG</button></p>
                            <p><img id="pastedImage" style="max-width:200px; max-height: auto; margin-top: 50px; margin-bottom:50px; float:right;"></img></p>
                        </div> 

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h2>Tamaño carta</h2>

                                <a href="<?php echo base_url() . '/home/traerReporte/' . $datos['id']; ?>/Letter/Times" target="_blank"><button style="margin-bottom:30px; margin-top:30px;" class="btn btn-success">Generar reporte - Carta - Times</button></a>    
                                <a href="<?php echo base_url() . '/home/traerReporte/' . $datos['id']; ?>/Letter/Cormorant" target="_blank"><button style="margin-bottom:30px; margin-top:30px;" class="btn btn-success">Generar reporte - Carta - Cormorant</button></a>    

                            </div>
                         <!--   <button onclick="generarContenido(<?php echo $datos['id']; ?>, 'Legal');" class="btn btn-info">Generar</button> -->

                            <div class="col-md-6">
                                <h2>Tamaño Oficio</h2>
                                <a href="<?php echo base_url() . '/home/traerReporte/' . $datos['id']; ?>/Legal/Times" target="_blank"><button style="margin-bottom:30px; margin-top:30px;" class="btn btn-success">Generar reporte - Oficio - Times</button></a>
                                <a href="<?php echo base_url() . '/home/traerReporte/' . $datos['id']; ?>/Legal/Cormorant" target="_blank"><button style="margin-bottom:30px; margin-top:30px;" class="btn btn-success">Generar reporte - Oficio - Cormorant</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>