let button = document.querySelector(".add");
let convert = document.querySelector(".convert")
console.log(convert)
let table = document.querySelector("#fake_table");

function search() {
    let date = document.querySelector("#date-pdf").value

    console.log(date + " : date");

    if (date === "") {
        alert("Veuiller remplir le champs de la date !");
    } else {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                table.innerHTML = this.responseText;
                console.log("Data collected");
            }
        }

        xhttp.open("GET", "../../controller/SubController/pdf.php?date=" + date, true);
        xhttp.send();

    }
}


function givePdf() {
    let dateA = document.querySelector(".dateA").value
    let dateB = document.querySelector(".dateB").value

    window.location.href = "../../controller/SubController/pdfconfirm.php?dateA=" + dateA + "&&dateB=" + dateB;

}

button.addEventListener("click", search);
// convert.addEventListener("click", givePdf);