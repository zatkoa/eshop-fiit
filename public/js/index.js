$(document).ready(function() {
    $('i.menu').click(function() {
        $('nav.up').addClass('eject');
        $('div.overlay').addClass('show-menu');
    });

    $('div.overlay').click(function(){

        $('nav.up').removeClass('eject');
        $('div.overlay').removeClass('show-menu');
    });

    $('.btn-registration').click(function(){
        $('.bd-login-modal').modal('hide');
        window.setTimeout(function(){
            $('.bd-registration-modal').modal();
        }, 400);
    });

    $('.btn-login').click(function(){
        $('.bd-registration-modal').modal('hide');
        window.setTimeout(function(){
            $('.bd-login-modal').modal();
        }, 400);
    });

    $('.circle-help-chat').click(function() {
        $('.online-chat .chat-content').addClass('chat-show');
    });

    $('.close-chat').click(function() {
        $('.online-chat .chat-content ').removeClass('chat-show');
    });

    $('.first-message').click(function() {
        $('.chatting').show();
        $('.start-chatting').hide();
    });

    $('.show-search-bar').click(function(){
        if ($('.search-bar-menu').hasClass('search-bar-show'))
            $('.search-bar-menu').removeClass('search-bar-show');
        else
            $('.search-bar-menu').addClass('search-bar-show');
    });
});