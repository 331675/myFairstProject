let btns = document.querySelectorAll('header nav ul li a');

btns.forEach ((btn) =>{
    btn.onclick = () => {
        btn.classList.remove('active');
        btn.classList.add('active');
    }
})