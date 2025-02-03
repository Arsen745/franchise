const burger = document.querySelector('.burger')
const modal = document.querySelector('.modal')
const close = document.querySelector('.close')

burger.addEventListener('click', () => {
    modal.style.display = 'flex'
})
close.addEventListener('click', () => {
    modal.style.display = 'none'
})

