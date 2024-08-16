<?php
	#Demarer la session
	session_start();
	try {
		$connexion=new PDO('mysql:dbname=gilka_gestion_marchand; host=localhost', 'root', '');
		} catch (Exception $e) {
			echo $e->getMessage();
		}

