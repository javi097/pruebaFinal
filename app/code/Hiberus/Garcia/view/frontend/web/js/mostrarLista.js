define(['jquery'], function($){
    "use strict";
    return function mostrarLista(btn,div)
    {
        $(btn).click(function(){
            $(div).slideToggle();
        });
    }
});