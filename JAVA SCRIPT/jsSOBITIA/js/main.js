

function displayNone() {

    let elem = document.querySelector('.click__form');
    let elem2 = document.querySelector('.click__bg');
    console.log(elem);
    console.log(elem2);
    elem.style.display = "none";
    elem2.style.display = "none";
}

function displayFlex() {
    let elem = document.querySelector('.click__form');
    let elem2 = document.querySelector('.click__bg');
    elem.style.display = "flex";
    elem2.style.display = "flex";
}

function displayPromptPhone() {
    let elem = document.querySelector('.form__prompt-phone');
    let phone = document.querySelector('.click__phonenum');
    //elem.style.visibility = "visible";
    phone.addEventListener("focusin", () => elem.style.visibility = "visible");
    phone.addEventListener("focusout", () => elem.style.visibility = "hidden");

}

function displayPromptPassword() {
    let elem = document.querySelector('.form__prompt-password');
    let pass = document.querySelector('.click__password');
    //elem.style.visibility = "visible";
    pass.addEventListener("focusin", () => elem.style.visibility = "visible");
    pass.addEventListener("focusout", () => elem.style.visibility = "hidden");
}

function submitEvent() {

    let phone = document.querySelector('.click__phonenum');
    let pass = document.querySelector('.click__password');
    let type = typeof phone;
    console.log(phone.value);
    console.log(type);
    if (phone.value == false || phone.length >= 10 || type != "number") {
        phone.style.background = "#f79eb0";
    }
}