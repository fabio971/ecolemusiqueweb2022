<?php
	if (isset($_GET["rubrique"]) && isset($_GET["operation"]) && $_GET["rubrique"] != "" && $_GET["operation"] != "") 
    {
    	//include 'include_require_manager.php';

        echo "<p><h3>".strtoupper($_GET["rubrique"]).' / '.str_replace("_", " ", strtoupper($_GET["operation"]))."</h3></p>";
        
        if (file_exists('view/'.$_GET["rubrique"].'/'.$_GET["operation"].'.php')) {
        	include 'view/'.$_GET["rubrique"].'/'.$_GET["operation"].'.php';
        }
        else
        {
        	echo '<meta http-equiv="refresh" content="0;URL=../../">';
        }

        echo "<br>";
    }
    else
    {
        echo '<meta http-equiv="refresh" content="0;URL=../../?rubrique=connexion&operation=connexion">';
    }
?>