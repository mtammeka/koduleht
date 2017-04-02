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
        $tekst = "Test!";	
        $reversed = ""; // pole tingimata vist vajalik

        echo "Tekst: $tekst <br>";

        for ($i = strlen($tekst) - 1; $i >= 0; $i -= 1) {
          $reversed = $reversed . $tekst[$i];
        }

        echo "Teistpidi: $reversed <br>";
        
      ?>

    </div>
  
  </body>
</html>
