<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet" /> 
        
        <?php if ($letra=='Times'){
            echo '<link rel="stylesheet" type="text/css" href="/css/style_times.css">';
        }else{
            echo '<link rel="stylesheet" type="text/css" href="/css/style_cormorantgaramond.css">';
        }
        ?>
        
    </head>
<body>
            <div class="portada_header">
                <p class="derecha"></p>
            </div>

            <div class="portada_center">
                
                <p>&nbsp;</p>
                <p class="derecha"><strong>Dictamen No.: <?php echo $contenido['cert_no']; ?></strong></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
          
                <?php
                    
                    $institucion = html_entity_decode($contenido['institucion'], ENT_QUOTES); 
                    $institucion =utf8_decode($institucion);

                ?>

                <div class="center_text">
                    <p class="texto_centrado"><strong><?php echo $institucion;?></strong></p>
                </div>

                
            </div>

        <div class="portada_footer">
            <p class="texto_centrado"><span class="tinto">www.certification-grana.org</span><br />
                2350 Alamo Ave. Suite 301, Albuquerque, NM; 87106; Tel.: 650 690 2130.<br />
                México: Tel: +52 317 38 5 12 03.<br />
                Copyright 2021 GRANA. Todos los derechos reservados.</p>
                <p>&nbsp;</p>
        </div>
    </body>
</html>