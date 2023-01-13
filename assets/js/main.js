const hamburger = document.querySelector('.hamburger')
const sidebar = document.querySelector('.sidebar')

const hamburgerHandler = () => {
    hamburger.classList.toggle('is-active')
    sidebar.classList.toggle('sidebar-is-active')
    console.log('ok');
}


hamburger.addEventListener('click', hamburgerHandler)
