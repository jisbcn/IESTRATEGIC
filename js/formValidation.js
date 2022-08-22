const form_submitter = document.getElementById("form_submitter");
const accpetance_check = document.getElementById("accpetance");
const COMENTARIOS = document.getElementById("COMENTARIOS");
const EMAIL = document.getElementById("EMAIL");
const TELÉFONO = document.getElementById("TELÉFONO");
const APELLIDOS = document.getElementById("APELLIDOS");
const NOMBRE = document.getElementById("NOMBRE");

const error = document.querySelector(".error")

function Validtor(input) {
    let isvalid = true;


    if (input.value.length == 0) {

        input.style.border = "red solid 1px"
        isvalid = false

    } else {
        input.style.border = ""
    }



    return isvalid
}

function Valid() {

    let isvalid = true;


    if (!Validtor(EMAIL)) {


        isvalid = false

    }

    if (!Validtor(NOMBRE)) {
        isvalid = false
    }

    if (!Validtor(TELÉFONO)) {
        isvalid = false
    }

    if (!Validtor(APELLIDOS)) {
        isvalid = false
    }

    if (!Validtor(COMENTARIOS)) {
        isvalid = false
    }



    return isvalid



}

form_submitter.addEventListener("click", () => {

    console.log(Valid());
    if (Valid()) {
        error.classList.remove("error_anim")
        if (accpetance_check.checked) {
            alert("OK!")
        } else {
            error.children[0].textContent = "Por favor acepte primero"
            error.classList.add("error_anim")
        }

    } else {
        error.classList.add("error_anim")
    }







})