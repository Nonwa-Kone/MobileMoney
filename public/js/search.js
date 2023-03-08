const form = document.getElementById("form");
const expediteur = document.getElementById("expediteur");
const destinateur = document.getElementById("destinateur");
const dateOperation = document.getElementById("dates");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(form);

  fetch("http://localhost/mobile_money_project/Controllers/formSearchController.php", {
    method: "post",
    body: formData,
  })
    .then(function (response) {
      return response.text();
    })
    .then(function (text) {
      document.getElementById("reponse-serveur").innerHTML = text;
    })
    .catch(function (error) {
      console.log(error);
    });
});
