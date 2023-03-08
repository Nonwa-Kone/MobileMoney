fetch("http://localhost/mobile_money_project/Controllers/controllerListeDeTransaction.php", {
    method: 'get',
}).then(function(response){
    return response.text();
}).then(function(text){
    document.getElementById('serveur').innerHTML = text;
}).catch(function(error){
    console.log(error);
});