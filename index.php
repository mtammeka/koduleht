<!DOCTYPE html>

<html lang="ca" dir="ltr"> <!-- ei leidnud ladina keele tagi haha -->
	<head>
		<meta charset="UTF-8">
    <meta name="author" content="Madis Tammekänd">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>mtammeka: i244 aine esimene praktikum</title>
		<script src="eraldiSkript.js"></script>

		<link rel="stylesheet" type="text/css" href="mystyle.css">
	<script>
		function onLoad() {
			startTime();
		}
		
	</script>
	</head>

	<body onload="startTime()">
	<img src="pildid/c.gif" alt="..."/>
	<p>
		<a href="esimene_n2dal.html">i244 esimese nädala nädalatöö - Sissejuhatus HTML-i</a><br>
		i244 teise nädala nädalatöö - Peenem HTML<br>
		&nbsp;&nbsp;&nbsp;&nbsp;<a href="teine_n2dal_01_tabeliharjutus.html">1.) tabeliharjutus</a><br>
		&nbsp;&nbsp;&nbsp;&nbsp;<a href="teine_n2dal_02_vorm01.html">2.1.) vorm 1</a><br>
		&nbsp;&nbsp;&nbsp;&nbsp;<a href="teine_n2dal_02_vorm02.html">2.2.) vorm 2</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href="teine_n2dal_03_iframe.html">2.3.) iframe ja vormid</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href="galerii/teine_n2dal_galerii.html" title="Ei kuulu kodutöö alla">2.x.) praktikumi galeriitöö</a><br>
	</p>
	<p id="suvajutt">Tervitus!</p>

	<div id="timertext"></div>
	
	<button type="button" onclick="changeMyText()">Kliki mind!</button>

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
	<?php 
		$host = "localhost";
		$user = "test";
		$pass = "t3st3r123";
		$db = "test";

		$l = mysqli_connect($host, $user, $pass, $db);
		mysqli_query($l, "SET CHARACTER SET UTF8") or
		die("Error, ei saa andmebaasi charsetti seatud");
		/*...*/
		if (!$l) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$sql = "SELECT * FROM mtammeka_EsimenePraks";
		$result = mysqli_query($l, $sql);

		echo "<br>SQL-ist tabel:<br>";
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["id"] . " nimetus: " . $row["name"] . "<br>";
			// punkt on php-s "string concatenation"
			
		    }
		} else {
		    echo "0 results";
		}



		mysqli_close($l);
	?>
		
	
	<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim leo ut enim mattis porttitor. Nulla hendrerit vel eros ac tincidunt. Maecenas ac mi auctor, ultrices tortor cursus, maximus orci. Nunc ipsum erat, pellentesque quis elit a, tincidunt cursus sem. In odio massa, iaculis ut libero vel, suscipit tempor justo. Nulla congue ullamcorper tincidunt. Curabitur non accumsan nunc, sed imperdiet turpis. Donec at sodales dolor, a scelerisque felis. Sed ut est a eros dictum porttitor vitae imperdiet ante. Integer libero enim, molestie pretium mi imperdiet, porttitor fermentum lacus. Ut risus lacus, tincidunt ut odio id, vulputate scelerisque metus. Nulla non consectetur mi. Duis sed dui consectetur tortor dapibus elementum quis ac metus. Quisque cursus congue arcu, nec eleifend urna dictum eget. Nullam eleifend neque eu dolor euismod, in luctus tortor tristique. </p>

<br/>


<h1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim leo ut enim mattis porttitor. Nulla hendrerit vel eros ac tincidunt. Maecenas ac mi auctor, ultrices tortor cursus, maximus orci. Nunc ipsum erat, pellentesque quis elit a, tincidunt cursus sem. In odio massa, iaculis ut libero vel, suscipit tempor justo. Nulla congue ullamcorper tincidunt. Curabitur non accumsan nunc, sed imperdiet turpis. Donec at sodales dolor, a scelerisque felis. Sed ut est a eros dictum porttitor vitae imperdiet ante. Integer libero enim, molestie pretium mi imperdiet, porttitor fermentum lacus. Ut risus lacus, tincidunt ut odio id, vulputate scelerisque metus. Nulla non consectetur mi. Duis sed dui consectetur tortor dapibus elementum quis ac metus. Quisque cursus congue arcu, nec eleifend urna dictum eget. Nullam eleifend neque eu dolor euismod, in luctus tortor tristique.</h1>

<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim leo ut enim mattis porttitor. Nulla hendrerit vel eros ac tincidunt. Maecenas ac mi auctor, ultrices tortor cursus, maximus orci. Nunc ipsum erat, pellentesque quis elit a, tincidunt cursus sem. In odio massa, iaculis ut libero vel, suscipit tempor justo. Nulla congue ullamcorper tincidunt. Curabitur non accumsan nunc, sed imperdiet turpis. Donec at sodales dolor, a scelerisque felis. Sed ut est a eros dictum porttitor vitae imperdiet ante. Integer libero enim, molestie pretium mi imperdiet, porttitor fermentum lacus. Ut risus lacus, tincidunt ut odio id, vulputate scelerisque metus. Nulla non consectetur mi. Duis sed dui consectetur tortor dapibus elementum quis ac metus. Quisque cursus congue arcu, nec eleifend urna dictum eget. Nullam eleifend neque eu dolor euismod, in luctus tortor tristique.</h6>

<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim leo ut enim mattis porttitor. Nulla hendrerit vel eros ac tincidunt. Maecenas ac mi auctor, ultrices tortor cursus, maximus orci. Nunc ipsum erat, pellentesque quis elit a, tincidunt cursus sem. In odio massa, iaculis ut libero vel, suscipit tempor justo. Nulla congue ullamcorper tincidunt. Curabitur non accumsan nunc, sed imperdiet turpis. Donec at sodales dolor, a scelerisque felis. Sed ut est a eros dictum porttitor vitae imperdiet ante. Integer libero enim, molestie pretium mi imperdiet, porttitor fermentum lacus. Ut risus lacus, tincidunt ut odio id, vulputate scelerisque metus. Nulla non consectetur mi. Duis sed dui consectetur tortor dapibus elementum quis ac metus. Quisque cursus congue arcu, nec eleifend urna dictum eget. Nullam eleifend neque eu dolor euismod, in luctus tortor tristique.</b>

<u>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim leo ut enim mattis porttitor. Nulla hendrerit vel eros ac tincidunt. Maecenas ac mi auctor, ultrices tortor cursus, maximus orci. Nunc ipsum erat, pellentesque quis elit a, tincidunt cursus sem. In odio massa, iaculis ut libero vel, suscipit tempor justo. Nulla congue ullamcorper tincidunt. Curabitur non accumsan nunc, sed imperdiet turpis. Donec at sodales dolor, a scelerisque felis. Sed ut est a eros dictum porttitor vitae imperdiet ante. Integer libero enim, molestie pretium mi imperdiet, porttitor fermentum lacus. Ut risus lacus, tincidunt ut odio id, vulputate scelerisque metus. Nulla non consectetur mi. Duis sed dui consectetur tortor dapibus elementum quis ac metus. Quisque cursus congue arcu, nec eleifend urna dictum eget. Nullam eleifend neque eu dolor euismod, in luctus tortor tristique.</u>


<em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim leo ut enim mattis porttitor. Nulla hendrerit vel eros ac tincidunt. Maecenas ac mi auctor, ultrices tortor cursus, maximus orci. Nunc ipsum erat, pellentesque quis elit a, tincidunt cursus sem. In odio massa, iaculis ut libero vel, suscipit tempor justo. Nulla congue ullamcorper tincidunt. Curabitur non accumsan nunc, sed imperdiet turpis. Donec at sodales dolor, a scelerisque felis. Sed ut est a eros dictum porttitor vitae imperdiet ante. Integer libero enim, molestie pretium mi imperdiet, porttitor fermentum lacus. Ut risus lacus, tincidunt ut odio id, vulputate scelerisque metus. Nulla non consectetur mi. Duis sed dui consectetur tortor dapibus elementum quis ac metus. Quisque cursus congue arcu, nec eleifend urna dictum eget. Nullam eleifend neque eu dolor euismod, in luctus tortor tristique.</em>
<ul>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim leo ut enim mattis porttitor. Nulla hendrerit vel eros ac tincidunt. Maecenas ac mi auctor, ultrices tortor cursus, maximus orci. Nunc ipsum erat, pellentesque quis elit a, tincidunt cursus sem. In odio massa, iaculis ut libero vel, suscipit tempor justo. Nulla congue ullamcorper tincidunt. Curabitur non accumsan nunc, sed imperdiet turpis. Donec at sodales dolor, a scelerisque felis. Sed ut est a eros dictum porttitor vitae imperdiet ante. Integer libero enim, molestie pretium mi imperdiet, porttitor fermentum lacus. Ut risus lacus, tincidunt ut odio id, vulputate scelerisque metus. Nulla non consectetur mi. Duis sed dui consectetur tortor dapibus elementum quis ac metus. Quisque cursus congue arcu, nec eleifend urna dictum eget. Nullam eleifend neque eu dolor euismod, in luctus tortor tristique.</li>
</ul>
<ol>
	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim leo ut enim mattis porttitor. Nulla hendrerit vel eros ac tincidunt. Maecenas ac mi auctor, ultrices tortor cursus, maximus orci. Nunc ipsum erat, pellentesque quis elit a, tincidunt cursus sem. In odio massa, iaculis ut libero vel, suscipit tempor justo. Nulla congue ullamcorper tincidunt. Curabitur non accumsan nunc, sed imperdiet turpis. Donec at sodales dolor, a scelerisque felis. Sed ut est a eros dictum porttitor vitae imperdiet ante. Integer libero enim, molestie pretium mi imperdiet, porttitor fermentum lacus. Ut risus lacus, tincidunt ut odio id, vulputate scelerisque metus. Nulla non consectetur mi. Duis sed dui consectetur tortor dapibus elementum quis ac metus. Quisque cursus congue arcu, nec eleifend urna dictum eget. Nullam eleifend neque eu dolor euismod, in luctus tortor tristique.</li>
</ol>
<pre>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim leo ut enim mattis porttitor. Nulla hendrerit vel eros ac tincidunt. Maecenas ac mi auctor, ultrices tortor cursus, maximus orci. Nunc ipsum erat, pellentesque quis elit a, tincidunt cursus sem. In odio massa, iaculis ut libero vel, suscipit tempor justo. Nulla congue ullamcorper tincidunt. Curabitur non accumsan nunc, sed imperdiet turpis. Donec at sodales dolor, a scelerisque felis. Sed ut est a eros dictum porttitor vitae imperdiet ante. Integer libero enim, molestie pretium mi imperdiet, porttitor fermentum lacus. Ut risus lacus, tincidunt ut odio id, vulputate scelerisque metus. Nulla non consectetur mi. Duis sed dui consectetur tortor dapibus elementum quis ac metus. Quisque cursus congue arcu, nec eleifend urna dictum eget. Nullam eleifend neque eu dolor euismod, in luctus tortor tristique.</pre>


	<p>
		<a href="http://validator.w3.org/check?uri=referer">
	  		<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
	 	</a>
	</p>
	
	</body>

</html>

