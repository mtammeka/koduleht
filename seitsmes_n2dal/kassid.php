<!DOCTYPE html>
<!--
  include harjutus
-->

<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
    <meta name="author" content="Madis Tammekänd">
		<title>
      Template
    </title>
    <link rel="stylesheet" type="text/css" href="stiil.css">

	</head>
  
  <body>
    <?php

      $kassid= array( 
        array('nimi'=>'Miisu', 'vanus'=>2, 'varv'=>'oranž', 'sook'=>'kala'), 
        array('nimi'=>'Rael', 'vanus'=>12, 'varv'=>'hall', 'sook'=>'hakkliha'), 
        array('nimi'=>'Rafa', 'vanus'=>9, 'varv'=>'kirju', 'sook'=>'whiskas'), 
        array('nimi'=>'Liisu', 'vanus'=>3, 'varv'=>'sinine', 'sook'=>'värske kurk'), 
      );
      
      foreach ($kassid as $kass) {
        
        include 'kass.php';
      }

    ?>

  
  </body>
</html>

