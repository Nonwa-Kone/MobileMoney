<?php

use Class\Transactions;

require '../vendor/autoload.php';

$date = date('Y-m-d');

$transactions = Transactions::listeTransactionParJour($date);
$nombreDeTransactionParJour = Transactions::nombreDeTransactionParJour($date);
$montantTotalDesTransactionParJour = Transactions::montantTotalDesTransactionParJour($date);
?>

<div class="row ùb-3">
    <h2>Liste des transactions par jour</h2>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <p class="lead">Transaction effectuée <span class="bg-success text-light p-2 rounded"><?= $nombreDeTransactionParJour->nombre ?></span></p>
    </div>
    <div class="col-md-6">
        <p class="">Bilan de la journeé <span class="bg-success text-light p-2 rounded"><?= $montantTotalDesTransactionParJour->montant . ' F CFA' ?></span></p>
    </div>
</div>

<div class="row">
    <table class="table table-striped table-responsive table-sm table-active">
        <tr>
            <th>Numero transaction</th>
            <th>Numero destinateur</th>
            <th>Type operation</th>
            <th>Operateur Mobile Money</th>
            <th>Montant</th>
            <th>Statu</th>
        </tr>
        <?php foreach ($transactions as $transaction) : ?>
            <tr>
                <td><?= $transaction->id_transaction ?></td>
                <td><?= $transaction->numero_destinateur ?></td>
                <td><?= $transaction->type_transaction ?></td>
                <td><?= $transaction->op_mobile ?></td>
                <td><?= $transaction->montant_transaction ?></td>
                <td><?= $transaction->statu_transaction ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>