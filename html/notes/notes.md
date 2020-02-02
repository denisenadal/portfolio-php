TODO if content taller than windowheight, add to "normalscroll" list


TODO content page styles
    white bgs all around, 
    dots as section breaks
    light blue cards, dark text for figures
    fix up preview image
    and intro fonts
    and top nav
    
 ======
TODO debug contact form 



.fp-section.active
$(window).height()


///resizer pseudo code
var normalScrolls = [];

on INIT & pageResize 
    if ($('.fp-section.active').height() > $(window).height()){
        var id = this.attr('id');
        normalScrolls.push( '#'+id);
    }