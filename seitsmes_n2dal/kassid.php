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
    <style type="text/css">
      p {
        display:inline-block;
        width:29%;
        border:solid #c0c0c0 2px;
        border-radius:5px;
        padding:10px;
        margin:1%;
      }
    </style>

	</head>
  
  <body>
    <?php

      $kassid= array( 
        array('nimi'=>'Miisu', 'vanus'=>2, 'varv'=>'oranž', 'sook'=>'kala', 'koht'=>'vaibal'), 
        array('nimi'=>'Rael', 'vanus'=>12, 'varv'=>'hall', 'sook'=>'hakkliha', 'koht'=>'teleka peal'), 
        array('nimi'=>'Rafa', 'vanus'=>9, 'varv'=>'kirju', 'sook'=>'whiskas', 'koht'=>'köögilaua all'), 
        array('nimi'=>'Liisu', 'vanus'=>3, 'varv'=>'sinine', 'sook'=>'värske kurk', 'koht'=>'aknalaual'), 
      );
      
      foreach ($kassid as $kass) {
        
        include 'kass.php';
      }

    ?>

  
  </body>
</html>

