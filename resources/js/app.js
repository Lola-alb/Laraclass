require('./bootstrap');

window.addEventListener('DOMContentLoaded', () => {
    hideStudents();})


function hideStudents(){
    students = document.querySelectorAll('.classroom-section article');
    for(i=0;i<students.length;i++){
        students[i].style.display="none";
    }
}


selectedClass = document.querySelectorAll('.classroom-section h2')
selectedClass.forEach(function(element){
    element.addEventListener('click', filterStudents);
});


function filterStudents(event){
    classStudents = document.querySelectorAll('.classroom-section article')
    for(i=0;i<classStudents.length;i++){
       if(event.target.id == classStudents[i].id){
        classStudents[i].style.display = "block";
       }else{
        classStudents[i].style.display = "none";
       }
    }
};


/*Burger menu*/
burgerMenu = document.querySelector('.toggle-button')

burgerMenu.addEventListener('click', displayMenu);
burgerMenu.addEventListener('click', menuTransition);


function displayMenu(){
    items = document.querySelectorAll(".menu-item") 
    for(i=items.length - 1;i >= 0; i--){
        items[i].classList.toggle("visible") 
    }
    burger = document.getElementById('menu')
    burger.classList.toggle('menu-open');  
}

function menuTransition(){
    burger = document.getElementById('menu')
    list = document.querySelector('nav')
    if(burger.classList.contains('menu-open')){
        list.style.height = "100vh";
    }
    else{
        list.style.height = "90px";
    }
}