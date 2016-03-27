<!doctype html>
<html lang="is">
    <head>
    	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    	<link type="text/css" rel="stylesheet" href="css/slider.css"/>
    	<link type="text/css" rel="stylesheet" href="css/default.css"/>
    	<link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Heimasíða Sjúkraþjálfunarstöðvarinnar">
		<meta name="keywords" content="Sjúkraþjálfun, sjúkraþjálfari, sjúkraþjálfarar, Niðri í bæ, Þverholt, Þverholti, Sjúkraþjálfunarstöð, Sjúkraþjálfunarstöðin">
		<meta name="author" content="Steinunn Friðgeirsdóttir">
        <title>Sjúkraþjálfunarstöðin</title> 
    </head>

    <body>
    	<div class="wrapper">
			<nav>
		      <div class="navbar navbar-default navbar-static-top"  role="navigation">
		        <div class="container">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		           <h1><a class="navbar-brand" href=".">Sjúkraþjálfunarstöðin</a></h1>
		          </div>
		          <div class="collapse navbar-collapse">
		            <ul class="nav navbar-nav">
					            <li <?php if('index.php' === $activePage):?> class="active" <?php else:?> class="" <?php endif;?>><a href=".">Heim</a></li>
					            <li <?php if('uppl.php' === $activePage):?> class="active" <?php else:?> class="" <?php endif;?>>
					            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Upplýsingar <b class="caret"></b></a>
					            		<ul class="dropdown-menu">
					            			<li><a href="stadsetning.php">Staðsetning</a></li>
					            			<li><a href="opnunartimar.php">Opnunartímar</a></li>
					            		</ul>	
					            </li>
		              <li <?php if('starfsfolk.php' === $activePage):?> class="active dropdown" <?php else:?> class="" <?php endif;?>>
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Starfsfólk <b class="caret"></b></a>
			        	<ul class="dropdown-menu">
			        		<li class="dropdown-header"><a href="starfsfolk.php">Sjúkraþjálfarar</a></li>
			  				<li><a href="starfsfolk.php#Asdis">Ásdís</a></li>
				            <li><a href="starfsfolk.php#Fridgeir">Friðgeir</a></li>
							<li><a href="starfsfolk.php#Hlynur">Hlynur</a></li>
							<li><a href="starfsfolk.php#Kolbrun">Kolbrún</a></li>
				            <li><a href="starfsfolk.php#Laufey">Laufey</a></li>
				            <li><a href="starfsfolk.php#Ragnheidur">Ragnheiður</a></li>
				            <li><a href="starfsfolk.php#Rosa">Rósa</a></li>
				            <li class="divider"></li>
		                  	<li class="dropdown-header">Aðstoðarfólk</li>
		                	<li><a href="starfsfolk.php#Gudbjorg">Guðbjörg</a></li>
		                	<li><a href="starfsfolk.php#Ingibjorg">Ingibjörg</a></li>
		                </ul>
		              </li>
		            </ul>
		          </div>
		        </div>
		      </div>
		    </nav>
		    <div class="efni">