let button = document.querySelector(".add");
let error = document.querySelector(".error");
let table = document.querySelector("#fake_table");
console.log(table);

function search() {
    let level = document.querySelector(".level").value
    let filliere = document.querySelector(".filliere").value
    let group = document.querySelector(".groupe").value

    let niveau = level + filliere + group;

    console.log(niveau);
    if (niveau === "") {
        error.textContent = "Veuiller remplir la date"
    } else {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                table.innerHTML = this.responseText
                console.log(this.responseText)
                console.log("Data collected")
            }
        }

        xhttp.open("GET", "../../controller/SubController/ClassEdtLookup.php?niveau=" + niveau, true);
        xhttp.send();

    }
}


button.addEventListener("click", search);