$(document).ready(function() {
    $('i.menu').click(function() {
        $('nav').addClass('eject');
        $('div.overlay').addClass('show-menu');
    });

    $('div.overlay').click(function(){

        $('nav').removeClass('eject');
        $('div.overlay').removeClass('show-menu');
    });

    $('.edit-title').click(function(){
        $('.title').focus();
    });

    $('.edit-price').click(function(){
        $('.price > span').focus();
    });

    $('.edit-descr').click(function(){
        $('.tab-pane.active > p').focus();
    });
});