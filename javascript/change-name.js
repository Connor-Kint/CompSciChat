const open = document.getElementById('change-name');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close-button');

open.addEventListener('click', ()=> {
    modal_container.classList.add('show');
});
close.addEventListener('click', ()=>{
    modal_container.classList.remove('show');
});