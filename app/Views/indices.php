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
    </head>
<body>
<div class="texto_centrado">

    <?php
    
    echo ($tipo=='Legal')?'<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>':'';
    echo $tabla; 
    
    ?>

        </div>
    </body>
</html>