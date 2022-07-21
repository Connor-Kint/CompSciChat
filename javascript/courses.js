ICButton = document.querySelector(".CP476")
AFButton = document.querySelector(".CP468")
TRButton = document.querySelector(".CP423")


ICButton.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              location.href="chat.php?courseid=CP476";
          }
      }
    }

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded;');
    xhr.send('course=CP476');
}

AFButton.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            location.href="chat.php?courseid=CP468";
        }
      }
    }

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded;');
    xhr.send('course=CP468');
}

TRButton.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            location.href="chat.php?courseid=CP423";
        }
      }
    }

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded;');
    xhr.send('course=CP423');
}