<!DOCTYPE html>
<!--
  Seitsmes nädal
-->

<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
    <meta name="author" content="Madis Tammekänd">
		<title>
      PHP
    </title>

    <style type="text/css">
      .active { background: skyblue; padding: 10px;}
    </style>
    
    <script type="text/javascript">
  
      window.addEventListener("DOMContentLoaded", function() {
    
        console.log("Tere!");
    
      });

    </script>

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