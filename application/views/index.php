<html>
  <head>
    <title> </title>
  </head>
  <body>
    <h1>Sitio web</h1>
    <?php
      foreach ($articulos as $item):
        echo $item->nombre;
      endforeach; ?>

  </body>
</html>
