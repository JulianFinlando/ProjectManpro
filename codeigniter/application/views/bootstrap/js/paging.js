$(document).ready(function(){
    $('#hal1').click(hal1);
    $('#hal2').click(hal2);
    $('#hal3').click(hal3);
    $('#hal4').click(hal4);
});

function hal1(){
    $('.col1').slideDown();
    $('.col2').slideUp();
    $('.col3').slideUp();
    $('.col4').slideUp();
}
function hal2(){
    $('.col1').slideUp();
    $('.col2').slideDown();
    $('.col3').slideUp();
    $('.col4').slideUp();
}
function hal3(){
    $('.col1').slideUp();
    $('.col2').slideUp();
    $('.col3').slideDown();
    $('.col4').slideUp();
}
function hal4(){
    $('.col1').slideUp();
    $('.col2').slideUp();
    $('.col3').slideUp();
    $('.col4').slideDown();
}
