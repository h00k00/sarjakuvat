<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lepsu ryöstetään</title>

<link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>
<body>

<div id="slideShowContainer">	
    <div id="slideShow">    
    	<ul>
  <?php
		$k = 11;
		$l = 12;
		printf("\<li\>\<img src=\http://sarjakuvaseura.fi/galleria/albums/userpics/10004/%u_%u.jpg\" width='100%'\/\>\<\/li\>", $k, $l);
      for ($i=11; $i<=53; $i=$i+2) {
      	$j=$i+1;
			printf("<li><img src=\"http://sarjakuvaseura.fi/galleria/albums/userpics/10004/%u_%u.jpg\" width='100%'/></li>", $i, $j);
		}
  ?>
      </ul>    
    </div>    
    <a id="previousLink" href="#">&raquo;</a>
    <a id="nextLink" href="#">&laquo;</a>    
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>
