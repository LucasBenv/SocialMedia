const form = document.querySelector('.form-envio');
const chat = document.querySelector('.chat-box');
const btnEnviar = document.querySelector('.btn-enviar');
const textarea = document.querySelector('textarea');

form.onsubmit = (e) => {
    e.preventDefault();
}

btnEnviar.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              textarea.value = "";
              console.log(xhr.response)
              scrollToBottom();
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
    console.log('tnc 2')
}

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chat.innerHTML = data;
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();
}, 500);

function scrollToBottom(){
    chat.scrollTop = chat.scrollHeight;
  }

  textarea.value = "";