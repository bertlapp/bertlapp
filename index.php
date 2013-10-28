<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Bertram Dahms:Web-Engeneering 1</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="css/newstyles.css" rel="stylesheet">
</head>
<body>

	<div class="container">
	
		<h1>Bertram Dahms</h1>
		<h2>Web-Engineering 1: Hausaufgabe</h2>
		<p class="lead">Homepage-Erstellung unter Verwendung des Betriebssystems Linux Debian in der VirtualBox, 
		mit der Entwicklungsumgebung Eclipse, der Versionsverwaltung Git, des Frameworks Bootstrap und 
		ver&ouml;ffentlicht auf cloudcontrol.com</p>
		
	</div>

	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
	    	<div class="item active">
	        	<img src="carousel_img/vbox_weich.jpg" alt="">
	            <div class="carousel-caption">
	            	<h4>VirtualBox</h4>
	          	</div>
	        </div>
	        <div class="item">
	        	<img src="carousel_img/ecl_weich.jpg" alt="">
	            <div class="carousel-caption">
	            	<h4>IDE Eclipse</h4>     
	            </div>
	        </div>
	        <div class="item">
	        	<img src="carousel_img/git_gui_weich.jpg" alt="">
	            <div class="carousel-caption">
	            	<h4>Versionsverwaltung mit Git</h4> 
	            </div>
	       	</div>
	    </div>
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>    
	
	<div class="container">
		<div class="row-fluid">
	    	<div class="span4">
	      		<h2>Framework Bootstrap</h2>
	      		<p>Dies ist mein erster Kontakt mit <strong>Bootstrap</strong>. Das Framework ist angenehm einfach 
	      			zu handhaben und bietet viele M&ouml;glichkeiten.<br>
	      			<i class="icon-hand-up"></i> Allerdings denke ich, dass man zuk&uuml;nftig sehr viel Energie in das CSS (bzw. LESS) stecken muss, 
	      			damit nicht alle damit erstellten Webauftritte gleich aussehen.</p>
	      
	      	</div>
	        <div class="span1">	        
		  	</div>
		  	<div class="span7">
	        	<h2>Debian in der VirtualBox</h2>
		        <p>Die gesamte f&uuml;r den Kurs ben&ouml;tigte Struktur in einer virtuellen Umgebung laufen zu lassen, 
		        hat sicher viele Vorteile. So spart man sich alle Anleitungen, Debian auf die Erfordernisse (z.B. 
		        Firefox, flashplugin, Rechtestruktur) anzupassen. Dies gilt auch f&uuml;r Webserver, Datenbanken und 
		        Entwicklungsumgebung. Der Nachteil ist allerdings die Performance, vor allem auf schw&auml;cheren Systemen.
		        <br>
		        <i class="icon-hand-up"></i> Da ich -wie viele andere wohl auch- auf allen Rechnern Multiboot-Systeme fahre und zudem meistens 
		        Ubuntu als favorisiertes Betriebssystem nutze, scheint es mir etwas kurios unter Ubuntu in der 
		        VirtualBox ein verwandtes Linux-System zu starten.<br>
		        Also werde ich, wenn mir etwas mehr Zeit zur Verf&uuml;gung steht, parallel auf einem Rechner zus&auml;tzlich 
		        Debian den anderen Betriebssystemen hinzuf&uuml;gen und entsprechend dem Kurs Web-Engeneering 1 konfigurieren. 
		        Dies werde ich dann allen anderen zur Verf&uuml;gung stellen, wenn dies nicht vorher von jemand 
		        anderes schon getan wurde.</p>
	        
			</div>
		</div>
	
	    <hr>
	
	    <div class="footer">
	    	<p>nur zu &Uuml;bungszwecken habe ich ein Beispieldesign abge&auml;ndert.</p>
	    </div>
</div>
		
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

 $(function() {
   $('#myCarousel').carousel({
	   //interval: 2400  
   });
});

 </script>
</body>
</html>
