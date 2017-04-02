<!DOCTYPE html>
<!--
  HTML template
  -MT
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
  
    <div id="content">
    	<?php
		
        echo '<p>Hello World</p>';

        for ($i = 10; $i > 0; $i -= 1) {
          echo "$i ... ";
        } 

        $version = phpversion();
        print "<br"> + $version;
        print "<br>";

        /* aga võib ka nii */
      
        print PHP_VERSION;
	
      ?>

    </div>
  
  </body>
</html>