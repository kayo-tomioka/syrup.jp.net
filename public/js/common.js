// mouseover
$(function(){
    $('.img-over').each(function(){
        var img = $(this);
        var src_off = img.attr('src');
        var src_on = src_off.replace(/^(.+)_out(\.[^\.]+)$/, '$1_over$2');
        $('<img />').attr('src', src_on);
        img.hover(function(){
            img.attr('src', src_on);
        },function(){
            img.attr('src', src_off);
        });
    });
});