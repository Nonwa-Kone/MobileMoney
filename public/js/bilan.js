const totalMobileMoney = document.getElementById('total-mobile-money');
const caisse = document.getElementById('caisse');
const montantTotalDuJour =document.getElementById('total-jour');

const totalTotalDuJour = () => {
    let montantTotal = 0;

    montantTotal = parseInt(totalMobileMoney.value) + parseInt(caisse.value);
    
    return montantTotal;
}

const afficheMontantTotal = () => {
    if (caisse.value === "" || caisse.value === " ")
    {
        document.getElementById('error-caisse').innerText = 'Vous renseigné ce champs';
    } else {
        document.getElementById('error-caisse').innerText = ' ';
        montantTotalDuJour.value = totalTotalDuJour();
    }
}

caisse.addEventListener('input', afficheMontantTotal);