$(function () {

});
$( "#click" ).click(function() {

    let elem = document.querySelector('.codeName');
    let colname = document.querySelector('.colorName');
    
   $(".color_block").css('background-color', elem.value );
   // $(".name").text(colorName.value);
   $('.name').text(colname.value);
});