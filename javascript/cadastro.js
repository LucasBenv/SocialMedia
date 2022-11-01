const form = document.querySelector('form');
const btncadastro = document.querySelector('button');
const p = document.querySelector('.error-msg');
const inputs = document.querySelectorAll('form input')

form.onsubmit = (e) => {
    e.preventDefault();
}

btncadastro.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-user.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.response === 'success'){
            alert("Usuario cadastrado com sucesso");
            p.textContent = "";
            limparCampos();
          }else{
            p.textContent = xhr.response;
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

function limparCampos(){
  inputs.forEach( campo => {
    campo.value = '';
  });
}