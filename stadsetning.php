<?php 
	header('Content-Type: text/html; charset=utf-8');
	$activePage = 'uppl.php';
	include('header.php');

?>
	<div class="midja">		
			<a class="btn btn-warning btn-lg" href="http://ja.is/sjukrathjalfunarstodin-sjukrathjalfun">Já.is</a>
			<a class="btn btn-primary btn-lg" href="https://maps.google.com/maps?q=64.140755,-21.913587&amp;ll=64.140755-21.913587&amp;z=15">Google kort</a>
			<a class="btn btn-warning btn-lg" href="http://s.is/journeyplanner/showJourneyDetailsPage.do?rid=1384704231420&amp;hss=jnrSb92393748">Strætó.is</a>
			<div id="map_canvas"></div>
	</div>
<?php 
	include('footer.php');
?>
