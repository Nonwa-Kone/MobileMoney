<?php

use Class\Transactions;

require '../vendor/autoload.php';

$numeroExpediteur = htmlentities($_POST["expediteur"]);
$numeroDestinateur = htmlentities($_POST["destinateur"]);
$dateOperation = htmlentities($_POST["dates"]);

$req = Transactions::query($numeroExpediteur, $numeroDestinateur, $dateOperation);
if (sizeof($req) > 0) {
    $reponse = $req;
?>
    <h4 class="mb-3">Resultat de votre requete</h4>
    <table class="table table-striped">
        <tr>
            <th>Numéro expéditeur</th>
            <th>Numéro destinateur</th>
            <th>Date de l'opération</th>
            <th>Type opération</th>
            <th>Montant</th>
            <th>Operateur Mobile</th>
            <th>Statu</th>
        </tr>
        <?php foreach ($reponse as $result) : ?>

            <tr>
                <td><?= $result->numero_destinateur ?></td>
                <td><?= $result->tel_client ?></td>
                <td><?= $result->date_transaction ?></td>
                <td><?= $result->type_transaction ?></td>
                <td><?= $result->montant_transaction ?></td>
                <td><?= $result->op_mobile ?></td>
                <td><?= $result->statu_transaction ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php

} else {
?>
    <h4>Aucune reponse trouver</h4>
<?php
}
