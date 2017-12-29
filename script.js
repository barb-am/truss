/**
 * Created by jorgesilva on 05/12/17.
 */
$(window).load(function(){
    $('.conto').find('img').each(function(){
        var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';
        $(this).addClass(imgClass);
    })
});