let btns = document.querySelectorAll('.dboard-body .dboard-list ul li a');

// console.log(btns);
btns.forEach ((btn) =>{
    btn.onclick = () => {
        // console.log(btn);
        // let tab = btn.getAttribute('data-tab');
        // let page = document.querySelectorAll('.page');

        // page.forEach((el) => {
        //     el.style.display = 'none';
        // })
        // console.log(tab);
        // document.querySelector(tab).style.display = 'block';
        btns.forEach((e) => {
            e.classList.remove('active');
            btn.classList.add('active');
        })
    }
})