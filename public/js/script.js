'use strict'

{
    const bars = document.getElementById('bars');
    const drawer = document.getElementById('drawer');
    const logo = document.getElementById('header__logo');
    const body = document.querySelector('body');

    bars.addEventListener('click', () => {
        drawer.classList.toggle('drawer__none');
        logo.classList.toggle('drawer__none2');
        body.classList.toggle('overflow');
    });
}

// {
//     const up = document.getElementById('page-up');

//     up.addEventListener('click', ()=> {
//         window.scroll({
//             top: 0,
//             behavior: 'smooth',
//         });
//     });

// }

{
    const question = document.querySelectorAll('.question__item-question');
    const answer = document.querySelectorAll('.question__item-answer');

    question.forEach(ques => {
        ques.addEventListener('click', () => {
            ques.nextElementSibling.classList.toggle('question__none');
            ques.lastElementChild.classList.toggle('question__content2');

            question.forEach(el => {
                if (ques !== el) {
                    el.nextElementSibling.classList.remove('question__none');
                    el.lastElementChild.classList.remove('question__content2');
                }
            });
        });
    });
}