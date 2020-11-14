$(function () {

});

function solutionAdd() {
    //console.log(event.target.value);

    let elem = document.querySelector('.solution');
    elem.value += event.target.value;

}
function solve() {
    let elem = document.querySelector('.solution');
    elem.value = eval(elem.value);
}
function reset() {
    let elem = document.querySelector('.solution');
    elem.value = "";
}