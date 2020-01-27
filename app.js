const form = document.getElementById("formTables");
const result = document.getElementById("result");

form.addEventListener("submit", function (e) {
    e.preventDefault();
    const formData = new FormData(form);

    fetch("traitement.php", {
            method: "post",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            //console.log(data);
            result.innerHTML = "";
            data.forEach(value => {
                result.innerHTML += value;
            })
        })
        .catch(console.log("error!!!"));
})