const burger = document.querySelector('.burger')
const modal = document.querySelector('.modal')
const close = document.querySelector('.close')
const buttons = document.querySelectorAll('.modal a')

burger.addEventListener('click', () => {
    modal.style.display = 'flex'
})
close.addEventListener('click', () => {
    modal.style.display = 'none'
})

buttons.forEach(el => {
    el.addEventListener('click', () => {
        modal.style.display = 'none'
    })
})
