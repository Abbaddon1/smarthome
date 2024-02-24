window.addEventListener('load', () => {
    console.log('Window loaded!')
    // initClickArea();
})

document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM loaded!')
    initScrollWindow();
    initFaqButtons();
})


const initFaqButtons = () => {
    const faqCard = document.querySelectorAll('.faq__card');
    let activeCard = null; //устанавливаем флаг

    faqCard.forEach((card) => {
        const answer = card.querySelector('.faq__answer');
        const plus = card.querySelector('.faq__plus');
        const minus = card.querySelector('.faq__minus');

        card.addEventListener('click', () => {
            if (activeCard !== card) { // Если текущая карточка не равна карточке, которая уже открыта
                // Закрыть предыдущую активную карточку
                if (activeCard) {
                    const activeAnswer = activeCard.querySelector('.faq__answer');
                    const activePlus = activeCard.querySelector('.faq__plus');
                    const activeMinus = activeCard.querySelector('.faq__minus');
                    
                    activeAnswer.classList.remove('_active');
                    activePlus.classList.remove('_active');
                    activeMinus.classList.remove('_active');
                    activeCard.classList.remove('_active');
                }

                // Открыть карточку
                answer.classList.add('_active');
                plus.classList.add('_active');
                minus.classList.add('_active');
                card.classList.add('_active');
                console.log('1');
                activeCard = card; // Обновить активную карточку
                
            } else {
                // Закрыть карточку, если она уже открыта
                answer.classList.remove('_active');
                plus.classList.remove('_active');
                minus.classList.remove('_active');
                card.classList.remove('_active');
                activeCard = null; // Обновить флаг
            }
        });
    });
}







const initScrollWindow = () => {
    const menuLinks = document.querySelectorAll('.menu__link[data-goto]');
    // console.log(menuLinks);
    menuLinks.forEach((link) => {
        link.addEventListener('click', () => {
            // console.log('click')
            link.removeAttribute('href');
            console.log(link);

            const goToBlockSelector = link.dataset.goto;//забираем позицию куда нам нужно переместиться
            // console.log(goToBlockSelector);//.footer - тип данных строка string
            const goToBlock = document.querySelector(goToBlockSelector);//теперь это будет объект
            console.log(typeof goToBlock)//объект
            const header = document.querySelector('.header__menu__container')
            const goToSection = goToBlock.getBoundingClientRect().top+window.scrollY - header.clientHeight - 20;
            window.scrollTo({
                top: goToSection,
                behavior: 'smooth'
            })


        })
    })
}




