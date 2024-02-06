
let navbar = document.getElementsByClassName('navbar')[0];
let navLink = document.getElementsByClassName('nav-link');
let fa_newspaper = document.getElementsByClassName('fa-newspaper')[0];
let fa_question = document.getElementsByClassName('fa-question')[0];
let fa_user_doctor = document.getElementsByClassName('fa-user-doctor')[0];
let fa_address_book = document.getElementsByClassName('fa-address-book')[0];
let login = document.getElementsByClassName('btnn')[0];
let sign = document.getElementsByClassName('btnn')[1];
window.addEventListener('scroll',function(){
    let current = window.pageYOffset;
    if(current>0){
        navbar.style.backgroundColor = "#16d4adcc";
        login.style.backgroundColor = "white";
        sign.style.backgroundColor = "white";
        fa_newspaper.style.color = "white";
        fa_address_book.style.color = "white";
        fa_question.style.color = "white";
        fa_user_doctor.style.color = "white";
        for(let i=0; i<navLink.length;i++){
            navLink[i].classList.add('scrollMenu');
        }
    }else{
        login.style.backgroundColor = "#16d4ad77";
        sign.style.backgroundColor = "#16d4ad77";
        navbar.style.backgroundColor = "white";
        fa_newspaper.style.color = "#16d4ad77";
        fa_address_book.style.color = "#16d4ad77";
        fa_question.style.color = "#16d4ad77";
        fa_user_doctor.style.color = "#16d4ad77d";
        for(let i=0; i<navLink.length;i++){
            navLink[i].classList.remove('scrollMenu');
        }
    }
})