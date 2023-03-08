const numeroExpediteur = document.getElementById('numero-expediteur');
const numeroDestinateur = document.getElementById('numero-destinateur');
const typeOperateur = document.getElementById('type-operation');
const operateurMobile = document.getElementById('operateur-mobile');
const montant = document.getElementById('montant');
const statu = document.getElementById('statu');

numeroExpediteur.addEventListener('input', (e)=>{
    if(isNaN(e.target.value)){
        document.getElementById('error-expediteur').innerText = 'Vous devez saisir des chiffres';
    } else if (((e.target.value).length < 10) || ((e.target.value).length > 10)) {
        document.getElementById('error-expediteur').innerText = 'Le numero du client doit comporter 10 chiffres';
    } else {
        document.getElementById('error-expediteur').innerText = null;
    }
});

numeroDestinateur.addEventListener('input', (e)=>{
    if(isNaN(e.target.value)){
        document.getElementById('error-destinateur').innerText = 'Vous devez saisir des chiffres';
    } else if (((e.target.value).length < 10) || ((e.target.value).length > 10)) {
        document.getElementById('error-destinateur').innerText = 'Le numero du destinateur doit comporter 10 chiffres';
    } else {
        document.getElementById('error-destinateur').innerText = null;
    }
});

montant.addEventListener('input', (e)=>{
    if(isNaN(e.target.value)){
        document.getElementById('error-montant').innerText = 'Vous devez saisir des chiffres';
    } else if ((e.target.value).length < 3) {
        document.getElementById('error-montant').innerText = 'Le montant doit comporter 3 chiffres au minimum';
    } else {
        document.getElementById('error-montant').innerText = null;
    }
});

statu.addEventListener('input', (e)=>{
    if(isNaN(e.target.value)){
        document.getElementById('error-statu').innerText = null;
    } else {
        document.getElementById('error-statu').innerText = 'Vous devez saisir uniquement que de chaine de caractere';
    }
});

const form = document.getElementById('form');

form.addEventListener('submit', (e)=>{
    e.preventDefault();

    if (numeroExpediteur.value != "" || numeroDestinateur.value != "" || montant.value != "" || statu.value != ""){
        
        const formData = new FormData(form);
    
        fetch("http://localhost/mobile_money_project/Controllers/enregistrerTransactionController.php", {
            method: 'post',
            body: formData,
        }).then(function(response){
            return response.text();
        }).then(function(text){
            document.getElementById('reponse-serveur').innerHTML = text;
        }).catch(function(error){
            console.log(error);
        });
    } else {
        document.getElementById('reponse-serveur').innerHTML = '<p class="alert alert-danger">Vous devez renseigné tous les champs</p>';
    }
})