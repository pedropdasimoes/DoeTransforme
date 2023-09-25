(function readyJS(win,doc){
    'use strict';
    let btn=doc.querySelector("#hamburguer");
    let menu=doc.querySelector(".nav")
    function toggle(event) {
        if(menu.classList.contains("activeNav")){
            menu.classList.remove("activeNav")
        }else{
            menu.classList.add("activeNav")
        }
    }
    btn.addEventListener("click",toggle, false);
})(window, document);