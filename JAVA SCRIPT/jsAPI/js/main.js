$(function () {

});


fetch('http://194.58.122.219/test/weather-api-test2/?t=7eb0161d-9012-46e5-afa9-bbc27718c7e1&lat=54&lon=37')
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        console.log(data.data.fact);
        let tempElem = document.querySelector(".temp");
        let condElem = document.querySelector(".condition");
        let feelElem = document.querySelector(".feel")
        tempElem.innerHTML = data.data.fact.temp;
        condElem.innerHTML = data.data.fact.condition;
        feelElem.innerHTML = data.data.fact.feels_like;
    });