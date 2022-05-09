feather.replace()
const btnMenuMobile = document.getElementById('menuMobile');
const asideMenu = document.getElementById('container-aside');
const btnCloseMenu = document.getElementById('closeMenu');

btnMenuMobile.addEventListener('click', function () {

    asideMenu.classList.toggle('active')

})


btnCloseMenu.addEventListener('click', function () {
    asideMenu.classList.remove('active')
})