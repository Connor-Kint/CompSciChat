const pswrdfield = document.querySelector(".form input[type='password']"),
toggleBtn = document.querySelector(".form .field button");

toggleBtn.onclick = ()=>{
    if(pswrdfield.type == "password") {
        pswrdfield.type = "text";
    }else {
        pswrdfield.type = "password"
    }
}