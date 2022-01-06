<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dictamen</h4>
      </div>
      <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Nuevo</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <h1>Dictamen</h1>
            <form action="/home/guardarNuevoDetalle" method="post">

              <div class="row">

                <div class="col-md-3">
                  <div class="form-group">      
                    <label for="id" class="form-label">Dictamen no.</label>
                    <input type="text" name="cert_no" id="cert_no" class="form-control" value="" required>
                  </div>
                </div>
                <div class="col-md-9">
                                    <div class="form-group">      
                                        <label for="id" class="form-label">Programa Académico</label>
                                        <input type="text" name="programa_academico" id="programa_academico" class="form-control" value="<?php echo $datos['programa_academico']; ?>" >
                                    </div>
                                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>Institucion</h2>
                  <textarea  name="institucion" id="institucion">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>I. Apertura</h2>
                  <textarea id="indice_1" name="indice_1">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>II. Presentación</h2>
                  <textarea id="indice_2" name="indice_2">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>III. Contexto</h2>
                  <textarea id="indice_3" name="indice_3">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>IV. Antecedentes</h2>
                  <textarea id="indice_4" name="indice_4">
                        <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>V. Metodología</h2>
                  <textarea id="indice_5" name="indice_5">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>VI. Resultados de la Aplicación Metodológica</h2>
                  <textarea id="indice_6" name="indice_6">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>VII. Comité Evaluador Interno</h2>
                  <textarea id="indice_7" name="indice_7">
                         <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>VIII. Comité Evaluador Externo</h2>
                  <textarea id="indice_8" name="indice_8">
                           <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>IX. Ítems Evaluados</h2>
                  <textarea id="indice_9" name="indice_9">
                            <p><strong>1. Impacto social de la formaci&oacute;n</strong></p>

<p>1.1. Coherencia entre la visi&oacute;n, misi&oacute;n y los objetivos planteados en la g&eacute;nesis de la formaci&oacute;n con los resultados actuales.<br />
1.2 Participaci&oacute;n de entes internos y externos a la instituci&oacute;n en la planeaci&oacute;n.<br />
1.3 Pertinencia y competitividad en el &aacute;mbito nacional e internacional.<br />
1.4 Reconocimiento de la sociedad a los egresados por su desempe&ntilde;o.<br />
1.5 Competitividad de los egresados ante similares externos.<br />
1.6 Percepci&oacute;n de la comunidad cient&iacute;fica, colegios especializados, egresados y empleadores.<br />
1.7 Impacto en la inserci&oacute;n laboral nacional e internacional.<br />
1.8 Percepci&oacute;n de los estudiantes, profesores y personal administrativo.<br />
1.9 Egresados inscritos en el posgrado.<br />
1.10 Participaci&oacute;n de egresados en la mejora de la formaci&oacute;n.</p>

<p><strong>2.Resultados de la investigaci&oacute;n vinculados a la formaci&oacute;n </strong></p>

<p>2.1 Distinciones por organismos de prestigio nacional e internacional.<br />
2.2 Patentes vinculadas.<br />
2.3 Desarrollos tecnol&oacute;gicos vinculados.<br />
2.4 Art&iacute;culos publicados en medios de prestigio y libros.<br />
2.5 Reportes t&eacute;cnicos.<br />
2.6 Tesis dirigidas.<br />
2.7 Participaci&oacute;n en congresos y en grupos nacionales e internacionales de investigaci&oacute;n.<br />
2.8 Divulgaci&oacute;n y difusi&oacute;n.<br />
2.9 Resultados de la investigaci&oacute;n aplicados a la docencia y al mundo laboral relacionados con la formaci&oacute;n.<br />
2.10 Proyectos formales de investigaci&oacute;n en el que participa el estudiante y en la consultor&iacute;a.</p>

<p><b>3. Ingreso</b><b>, permanencia y eficiencia terminal en la formaci&oacute;n </b></p>

<p>3.1 Cobertura geograf&iacute;a y equidad etnogr&aacute;fica de ingreso a la formaci&oacute;n.<br />
3.2 Equidad de g&eacute;nero en la admisi&oacute;n.<br />
3.3 Principios ideol&oacute;gicos y requisitos de ingreso.<br />
3.4 Reconocimiento a estudiantes por su capacidad y competitividad.<br />
3.5 Atenci&oacute;n en alumnos de primer ingreso, asesor&iacute;as y tutor&iacute;as.<br />
3.6 Cobertura y suficiencia en el Programas de becas.<br />
3.7 Participaci&oacute;n de estudiantes en evaluaci&oacute;n y seguimiento a los servicios que le ofrece la instituci&oacute;n.<br />
3.8 Participaci&oacute;n en eventos y redes acad&eacute;micos de la disciplina nacional e internacional.<br />
3.9 Participaci&oacute;n en eventos culturales, deportivos, medioambientales y de sustentabilidad.<br />
3.10 Eficiencia terminal.</p>

<p><strong>4. Profesores vinculados a la formaci&oacute;n</strong></p>

<p>4.1 Reconocimiento y premios otorgados en el &aacute;mbito de su disciplina.<br />
4.2 Resultados como docente.<br />
4.3 Resultados como investigador.<br />
4.4 Resultados en actividades de extensi&oacute;n.<br />
4.5 Resultados de la actividad tutorial y de asesor&iacute;a a estudiantes.<br />
4.6 Resultados en la actividad de gesti&oacute;n.<br />
4.7Actividades y resultados con grupos acad&eacute;micos en el &aacute;mbito de su disciplina.<br />
4.8 Percepci&oacute;n de estudiantes en su desempe&ntilde;o.<br />
4.9. Superaci&oacute;n acad&eacute;mica y grado acad&eacute;mico.<br />
4.10. Antecedentes curriculares.</p>

<p><strong>5. Pertinencia del modelo educativo y estructura curricular</strong></p>

<p>5.1 Congruencia del plan de estudios con los objetivos de la formaci&oacute;n.<br />
5.2 Comparativa del plan de estudios con otros similares.<br />
5.3 Evaluaci&oacute;n y actualizaci&oacute;n del plan de estudios.<br />
5.4 Organizaci&oacute;n y operaci&oacute;n del plan de estudios.<br />
5.5 La investigaci&oacute;n vinculada al plan de estudios.<br />
5.6 Plan de estudios vinculado al postgrado.<br />
5.7 Contenidos en el plan de estudios sobre cuidados del medio ambiente, uso de energ&iacute;as alternativas, cuidado del aire, agua, equidad de g&eacute;nero, etc.<br />
5.8Las disciplinas relacionadas al plan de estudios en vinculaci&oacute;n con redes tem&aacute;ticas.<br />
5.9Vinculaci&oacute;n de las tecnolog&iacute;as de la informaci&oacute;n y la comunicaci&oacute;n en el plan de estudios.<br />
5.10Servicio social, pr&aacute;cticas profesionales, actividades vinculadas al plan de estudios.</p>

<p><strong>6. Estrategias metodol&oacute;gicas de aprendizaje en los procesos formativos</strong></p>

<p>6.1 Cumplimiento en el conjunto de competencias de acuerdo con el perfil de egreso programado.<br />
6.2Adecuaci&oacute;n a los objetivos del plan de estudios; cumplimiento de los contenidos y los objetivos de cada asignatura.<br />
6.3Efectividad de los instrumentos y procedimientos utilizados por las instancias responsables de la evaluaci&oacute;n.<br />
6.4Evaluaci&oacute;n de los diversos tipos de aprendizaje alcanzados por los estudiantes.<br />
6.5Supervisi&oacute;n de los aprendizajes, la evaluaci&oacute;n de los conocimientos y las competencias adquiridas por los estudiantes en el servicio social y/o en las pr&aacute;cticas profesionales.<br />
6.6Actividad tutorial y asesor&iacute;a.<br />
6.7Actividades para reafirmar el conocimiento relacionados con los sectoresSociales.<br />
6.8Actividades en formaci&oacute;n integral.<br />
6.9 Certificaci&oacute;n de competencias por organismos de prestigio.<br />
6.10Nivel de la autogesti&oacute;n en el proceso formativo.</p>

<p><strong>7. Infraestructura, equipamiento, tecnolog&iacute;as y bibliograf&iacute;a en la formaci&oacute;n</strong></p>

<p>7.1 Congruencia entre instalaciones, equipamiento y tecnolog&iacute;a con la formaci&oacute;n.<br />
7.2 Suficiencia, pertinencia y cobertura entre instalaciones, equipamiento y tecnolog&iacute;a con la formaci&oacute;n.<br />
7.3 Eficiencia y eficacia en el uso de instalaciones, equipamiento y tecnolog&iacute;a con la formaci&oacute;n.<br />
7.4 Estrategias de actualizaci&oacute;n.<br />
7.5Uso de las tecnolog&iacute;as de la informaci&oacute;n.<br />
7.6 Sustentabilidad en el uso de las energ&iacute;as, recursos naturales y control de desechos org&aacute;nicos e inorg&aacute;nicos.<br />
7.7 Plan institucional de crecimiento de infraestructura, tecnolog&iacute;a y financiamiento en congruencia con los requerimientos de la formaci&oacute;n.<br />
7.8 Protecci&oacute;n civil en las instalaciones y uso de las tecnolog&iacute;as.<br />
7.9 Construcci&oacute;n de edificaciones en congruencia con los procesos formativos.<br />
7.10 Programa de actualizaci&oacute;n tecnol&oacute;gica pertinente para uso en la formaci&oacute;n.</p>

<p><strong>8.Impacto de las actividades de extensi&oacute;n, vinculaci&oacute;n y difusi&oacute;n en la formaci&oacute;n</strong></p>

<p>8.1 Reconocimiento de actividades de extensi&oacute;n a profesores y estudiantes.<br />
8.2 Estudiantes vinculados a los sectores sociales y/o cient&iacute;ficos.<br />
8.3 Profesores vinculados a los sectores sociales y/o cient&iacute;ficos.<br />
8.4 Servicio social vinculado con pr&aacute;cticas profesionales de la formaci&oacute;n a los sectores de la sociedad.<br />
8.5 Actividades cient&iacute;ficas tecnol&oacute;gicas que organiza la instituci&oacute;n vinculada a la sociedad en el que participan los profesores y estudiantes de la formaci&oacute;n; como eventos, ferias, concursos, exposiciones.<br />
8.6 Resultados de convenios, proyectos y servicios espec&iacute;ficos con los sectores sociales en apoyo a la formaci&oacute;n.<br />
8.7Art&iacute;culos de difusi&oacute;n cient&iacute;fica publicados en el que participan profesores y estudiantes.<br />
8.8 Programa de difusi&oacute;n especifico de la formaci&oacute;n.<br />
8.9 Torneos, olimpiadas y concursos de conocimientos de la disciplina de la formaci&oacute;n en el que participan profesores y estudiantes.<br />
8.10 Programas de extensi&oacute;n vinculadas a la formaci&oacute;n.</p>

<p><strong>9.Reconocimiento Internacional de la formaci&oacute;n</strong></p>

<p>9.1 Reconocimiento del egresado en el exterior.<br />
9.2 Premios otorgados a estudiantes en olimpiadas de conocimiento.<br />
9.3 Participaci&oacute;n de estudiantes en eventos acad&eacute;micos internacionales.<br />
9.4 Participaci&oacute;n de profesores en eventos y actividades acad&eacute;micas internacionales.<br />
9.5 Estrategias de socializaci&oacute;n sobre experiencias de estudiantes en el exterior.<br />
9.6 Pol&iacute;ticas y estrategias de la instituci&oacute;n en la internacionalizaci&oacute;n de la formaci&oacute;n.<br />
9.7 Impacto en la recepci&oacute;n de estudiantes.<br />
9.8Convenios de internacionalizaci&oacute;n.<br />
9.9 Reconocimiento internacional de la formaci&oacute;n.<br />
9.10 Profesores con formaci&oacute;n en universidades de prestigio.</p>

<p><strong>10. Impacto en la pertinencia de la normatividad, la administraci&oacute;n y las finanzas como facilitadoras en la formaci&oacute;n</strong></p>

<p>10.1 Certificaci&oacute;n de calidad en los procesos y procedimientos administrativos en atenci&oacute;n a la formaci&oacute;n.<br />
10.2 Atenci&oacute;n a las demandas y propuestas de requerimientos administrativos de estudiantiles y profesores.<br />
10.3 Capacidad financiera en la formaci&oacute;n.<br />
10.4 Eficiencia y eficacia en el ejercicio presupuestal de la formaci&oacute;n.<br />
10.5 Eficiencia y eficacia en la gesti&oacute;n de recursos financieros.<br />
10.6 Nivel de captaci&oacute;n de ingresos propios o extraordinarios.<br />
10.7 Plan estrat&eacute;gico de crecimiento prospectivo, financiero y administrativo acorde a la formaci&oacute;n.<br />
10.8 Suficiencia administrativa y financiera para el desarrollo de la investigaci&oacute;n, la extensi&oacute;n y la internacionalizaci&oacute;n de los entes de la formaci&oacute;n.<br />
10.9 Pertinencia en la normatividad aplicada a la formaci&oacute;n.<br />
10.10 Participaci&oacute;n de la comunidad universitaria en adecuaci&oacute;n normativa</p>

                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>X. Resultados de la Evaluación Externa</h2>
                  <textarea id="indice_10" name="indice_10">
                            <p>La Evaluaci&oacute;n Externa (EE) se realiz&oacute; con base a la Evaluaci&oacute;n Interna (EI) que fue integrada a la plataforma SIEVAS la cual describe las fortalezas las debilidades, el plan de mejoramiento continuo, las estad&iacute;sticas de comportamiento retroactivo a 5 a&ntilde;os y la asignaci&oacute;n de calificaci&oacute;n para los 100 &iacute;tems.</p>

<p>La escala de valores para medir la percepci&oacute;n por el Comit&eacute; Evaluador Externo (CEE) y el Comit&eacute; Verificador (CV) se bas&oacute; en los siguientes criterios:</p>

<p>10- Muy Alta o Excelente</p>

<p>9-Alta</p>

<p>8-Medianamente Alta</p>

<p>7-Incipientemente Alta</p>

<p>6-Incipiente</p>

<p>5-Medianamente Incipiente</p>

<p>4-Poco Incipiente</p>

<p>3-Medianamente Escasa</p>

<p>2-Escasa</p>

<p>1-Muy Escasa</p>

<p>NA-No Aplica (las respuestas a los &iacute;tems que aparecen con este valor no son promediarles).</p>

<p><b>Los resultados de le Evaluaci&oacute;n Externa y de Verificaci&oacute;n In Situ fueron los siguientes:</b></p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>XI. Percepción de los entes involucrados en los Programas Académicos</h2>
                  <textarea id="indice_11" name="indice_11">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>XII. Niveles de calidad</h2>
                  <textarea id="indice_12" name="indice_12">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>XIII. Conclusión</h2>
                  <textarea id="indice_13" name="indice_13">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>XIV. Período de la Acreditación</h2>
                  <textarea id="indice_14" name="indice_14">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>


              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>XV. Seguimiento al incremento en el puntaje o en el nivel de calidad</h2>
                  <textarea id="indice_15" name="indice_15">
                            <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>XVI. Cierre</h2>
                  <textarea id="indice_16" name="indice_16">
                        <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>Anexos</h2>
                  <textarea id="indice_17" name="indice_17">
                        <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>


              <hr />
              <div class="row">
                <div class="col-md-12">
                  <h2>Anexos</h2>
                  <textarea id="indice_18" name="indice_18">
                        <p>{ CONTENIDO }</p>
                  </textarea>
                </div>
              </div>

              <div>
                <button style="margin-bottom:30px; margin-top:30px;" class="btn btn-info">Guardar</button> 
              </div>

            </form>

            <div style="position: fixed; bottom: 10px; right: 20px;">
              <textarea id="pasteArea" placeholder="Carga IMG" style="float:left; margin:0px; width:140px; height:33px; border:3px solid; border-color: #D35400;"></textarea>

              <p><button class="btn btn-info" onclick="clearIMG();" style="float:right; margin-top: 10px;">Limpiar IMG</button></p>
              <p><img id="pastedImage" style="max-width:200px; max-height: auto; margin-top: 50px; margin-bottom:50px; float:right;"></img></p>
            </div>

          </div>
        </div>
      </div>
    </div>


  </div>
</div>