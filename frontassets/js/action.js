// header
var show_list = document.getElementById('show_list'),
    showed_list = document.getElementById('showed_list'),
    object_link = document.querySelectorAll('.header ul a'),
    array_link = Array.from(object_link),
    x=0;

document.body.onclick = function(){
    'use strict';
     x=0;
}

show_list.onclick = function(){
    'use strict';
    showed_list.classList.toggle('show_hide_list');
}

array_link.forEach((el)=> {
    el.onclick = function(){
        'use strict';
        showed_list.classList.remove('show_hide_list');
    }
});

if(x==0){
    showed_list.classList.remove('show_hide_list');
}
document.body.onscroll = function(){
    showed_list.classList.remove('show_hide_list');
};



// poetflio & projects

var projectsO = document.querySelectorAll('.portfolio-content div img'),
    projects = Array.from(projectsO),
    close = document.getElementById('closepro');

    projects.forEach((el)=> {
        el.onclick = function(){
            // 'use strict';
            // projects.forEach((proel)=>{
            //     proel.classList.remove('show_pro');;
            // });
            close.style.display = 'block';
            this.parentElement.classList.toggle('show_pro');
        }
    });
    close.onclick = function(){
        'use strict';
        projects.forEach((proel)=>{
            proel.parentElement.classList.remove('show_pro');
        });
        close.style.display = 'none';
    }