const form = document.querySelector('form');
const btncadastro = document.querySelector('button');

form.onsubmit = (e) => {
    e.preventDefault();
}

btncadastro.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              if(xhr.status === 200){
                textarea.value = "";
                console.log('tnc 3')
                //scrollToBottom();
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
    console.log('tnc 2')
}