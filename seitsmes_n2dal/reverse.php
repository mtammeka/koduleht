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
        function reverseMyString($text) {
          $reversed = "";
          for ($i = strlen($text) - 1; $i >= 0; $i -= 1) {
            $reversed = $reversed . $text[$i];
          }
          return $reversed;
        }

        function reverseTheString($text) {
          for ($i = 0; $i < strlen($text); $i += 1) {
            $text = substr($text, -1, 1) . substr($text, 0, -1);
            // muudab argumendiks antud massiivi ennast, ei pea returnima seega
          }
        }
      ?>

    	<?php
        $tekst = "Test!";	
        echo "Tekst: $tekst<br>";
        echo "Teistpidi: ". reverseMyString($tekst) . "<br>";
        reverseTheString($tekst);
        echo "Veel: $tekst <br>";
        
      ?>

    </div>
  
  </body>
</html>
