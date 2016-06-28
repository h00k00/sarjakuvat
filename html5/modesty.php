<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modesty Blaise</title>

<link rel="stylesheet" type="text/css" href="joonas/css/styles.css" />

</head>
<body>

<div id="slideShowContainer">	
    <div id="slideShow">    
    	<ul>
  <?php
$kk = array('01','02','03','04','05','06','07','08','09','10','11','12');
$pp = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');
	for ($j=0; $j<12; $j++) {
		for ($i=0; $i<31; $i++) {
			print "<li><img src=\"http://static.iltalehti.fi/sarjakuvat/Modesty_2012$kk[$j]$pp[$i].jpg\" width='100%'/></li>";
		}
	}
  ?>
      </ul>    
    </div>    
    <a id="previousLink" href="#">&raquo;</a>
    <a id="nextLink" href="#">&laquo;</a>    
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="joonas/js/script.js"></script>

</body>
</html>