const form = document.getElementById('form');
const nom = document.getElementById('nom-client');
const prenom = document.getElementById('prenom-client');
const contact = document.getElementById('contact');

nom.addEventListener('input', function(e){
    let firstName = e.target.value;
    if(firstName.length < 3){
        document.getElementById('error-nom').innerText = 'Le nom du client est trop court';
    } else {
        document.getElementById('error-nom').innerText = null;
    }
});

prenom.addEventListener('input', function(e){
    let lastName = e.target.value;
    if(lastName.length < 4){
        document.getElementById('error-prenom').innerText = 'Le prenom du client est trop court';
    }else{
        document.getElementById('error-prenom').innerText = null;
    }
});

contact.addEventListener('input', function(e){
    let contactClient = e.target.value;
    if(contactClient.length < 10 || contactClient.length > 10){
        document.getElementById('error-contact').innerText = 'Le numéro du client doit etre egal à 10 chiffre';
    }else{
        document.getElementById('error-contact').innerText = null;
    }
})

form.addEventListener('submit', (e)=> {
    e.preventDefault();

    if (nom.value != "" || prenom.value != "" || contact.value != "") {
        const formData = new FormData(form);

        fetch("http://localhost/mobile_money_project/Controllers/formClientController.php", {
            method: 'post',
            body: formData,
        }).then(function(response){
            return response.text();
        }).then(function(text){
            document.getElementById('reponse-serveur').innerHTML = text;
        }).catch(function(error){
            console.log(error);
        });
        
    }else{
        document.getElementById('reponse-serveur').innerHTML = "<p class='alert alert-danger'>Veuillez renseigné tous les chams</p>";
    }
});