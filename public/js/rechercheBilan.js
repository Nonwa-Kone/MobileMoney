const form = document.getElementById('form');

form.addEventListener('submit', (e)=>{
    e.preventDefault();

    const data = new FormData(form);

    fetch('../Controllers/rechercheBilanController.php', {
        method: "post",
        body: data
    })
    .then((reponse) => reponse.text())
    .then((text) => document.getElementById('result').innerHTML = text);
})