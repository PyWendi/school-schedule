let button = document.querySelector(".add");
let error = document.querySelector(".error");
let table = document.querySelector("#fake_table");

function search() {
    let date = document.querySelector("#date").value

    console.log(date + " date");

    if (date === "") {
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

        xhttp.open("GET", "../../controller/SubController/SalleLookup.php?date=" + date, true);
        xhttp.send();

    }
}


button.addEventListener("click", search);