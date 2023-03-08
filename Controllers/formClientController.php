<?php

use Class\Clients;

require '../vendor/autoload.php';

$nom = htmlentities($_POST["nom-client"]);
$prenom = htmlentities($_POST["prenom-client"]);
$contact = htmlentities($_POST["contact"]);

$client = Clients::add([$nom, $prenom, $contact]);

echo $client;
