<?php 
	header('Content-Type: text/html; charset=utf-8');

	/*****************************************************************
	*
	* Þessi síða (og hafasamand.class.php)
	* er byggð að mjög miklu leiti á sýnilausn Ólafs Sverris á verkefni 5.
	* Þegar ýtt er á Senda sendist það sem er í forminu í gagnagrunn
	* og á email.
	* 
	*****************************************************************/

	require('hafasamband.class.php');
	$db = new PDO('sqlite:db/hafasamband3.db');
	$fyrirsp = new Spurning();
	$fail = ""; /*Breyta fyrir bakendavalidate*/

	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$fyrirsp->gilding($_POST);
		
		if ($fyrirsp->valid())
		{
			$insert = $db->prepare(
				"INSERT INTO hafasamband 
					(nafn, netfang, simi, fyrirspurn) 
				VALUES(:nafn, :netfang, :simi, :fyrirspurn)"
			);
			if (!$insert -> execute ($fyrirsp->insert()))
			{
				header('Location: hafasamband.php?ekkiigagnagrunn=true');
			}
			else
			{
				$fail = "";
				$fyrirsp->emaila();
				header('Location: hafasamband.php?success=true');
			}
		}
		else
		{
			$fail = "true";
		}
	}
	$activePage = 'hafasamband.php';
	include('header.php');

	if (isset($_GET['success']) && $_GET['success'] === 'true'): ?>
		<div class="alert alert-success">Fyrirspurn þín hefur verið send á Sjúkraþjálfunarstöðina. Svarað verður eins fljótt og auðið er.</div> 
<?php endif;
	include('form.php');
	include('footer.php'); 
?>