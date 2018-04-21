$(document).ready(function() {
    $('.filter-mobile #dropdownMenuButton1').click(function(){
        if ($('.filter-mobile .drop-down-filter').is(":visible") == true)
            $('.filter-mobile .drop-down-filter').hide();
        else
            $('.filter-mobile .drop-down-filter').show();
    });
});