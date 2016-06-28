<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Joonas ja Mirimari</title>

<link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>
<body>

<div id="slideShowContainer">	
    <div id="slideShow">    
    	<ul>
  <?php
      for ($i=1; $i<=30; $i++) {
			print "<li><img src=\"http://sarjakuvaseura.fi/galleria/albums/userpics/10004/$i.jpg\" width='100%'/></li>";
		}
      for ($i=31; $i<=60; $i++) {
			print "<li><img src=\"http://sarjakuvaseura.fi/galleria/albums/userpics/10004/$i~0.jpg\" width='100%'/></li>";
		}
      for ($i=61; $i<=90; $i++) {
			print "<li><img src=\"http://sarjakuvaseura.fi/galleria/albums/userpics/10004/$i~0.jpg\" width='100%'/></li>";
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
