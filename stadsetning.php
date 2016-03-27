<?php 
	header('Content-Type: text/html; charset=utf-8');
	$activePage = 'stadsetning.php';
	include('header.php');

?>
	<div class="midja">
		<p class="bigger">Opið er á Sjúkraþálfunarstöðinni alla virka daga</p>
		<p class="bigger">milli klukkan <strong>08:00 og 17:00</strong>.</p>
			<a target="_blank" class="btn btn-warning btn-lg" href="http://ja.is/sjukrathjalfunarstodin-sjukrathjalfun">Já.is</a>
			<a target="_blank" class="btn btn-primary btn-lg" href="https://maps.google.com/maps?q=64.140755,-21.913587&amp;ll=64.140755-21.913587&amp;z=15">Google kort</a>
			<div id="map_canvas"></div>
	</div>
<?php 
	include('footer.php');
?>
