

window.addEventListener("load", function () {
    Popups();
});

function Popups(){
    let open_popups = document.querySelectorAll('.js-item-popup');
    open_popups.forEach((item) => {
        item.querySelector('.preview').addEventListener('click', (e) => {
            item.querySelector('.popup').classList.add('active');
            document.body.style.overflow = 'hidden';
        })

        item.querySelector('.js-close-popup').addEventListener('click', (e) => {
            item.querySelector('.popup').classList.remove('active');
            document.body.style.overflow = 'unset';
        })
    });
}