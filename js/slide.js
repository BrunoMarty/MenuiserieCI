$().ready(function() {
    fades();
    $("#home").slideDown(1500);
    $("#texte").slideDown(1000);
});
function fades () {
    $('.fadein div:nth-of-type(1)').delay(0).fadeIn().delay(5000).fadeOut();
    $('.fadein div:nth-of-type(2)').delay(5500).fadeIn().delay(10500).fadeOut();
    setTimeout(function() {
        $('.fadein div:nth-of-type(2)').fadeOut();
        fades();
    });
}
//function fadestextes () {
//  
//    setTimeout(function() {
//            $('.fadein div:nth-of-type(2)').fadeOut();
//        $('.fadein div:nth-of-type(3)').fadeOut();
//        fadestextes();
//    });
//}
