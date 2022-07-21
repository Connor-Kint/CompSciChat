const open = document.getElementById('change-name');
const modal_container = document.querySelector('.modal-container');
const close = document.querySelector(".exit-button");
const form = document.querySelector(".change-name"),
continueBtn = form.querySelector(".save-name");

form.onsubmit = (e)=>{
    e.preventDefault();
}

open.onclick = () => {
    modal_container.style.display = "flex";
}

close.onclick = () => {
    modal_container.style.display = "none";

}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/update.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
             data = xhr.response;
             modal_container.style.display = "none";
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}