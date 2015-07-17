<html>
  <head>
    <title> </title>
  </head>
  <body>
    <h1>Sitio web</h1>
    <?php

      foreach ($articulos as $item):
      //  $url = '/detalle/'.$item->id_articulo.'/';
        $url = 'detalle/';
      //  $url.= url_title(convert_accented_characters($item->nombre),'-',TRUE);
      $url .= $item->url_articulo;

        echo anchor('detalle/'.$item->url_articulo,$item->nombre)."<br>";

      endforeach; ?>

  </body>
</html>
