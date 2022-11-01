const form = document.querySelector(".card-login")
const btnLogin = document.querySelector(".btn-login")
const error = document.querySelector(".error-msg")

form.onsubmit = (e) => {
    e.preventDefault();
}

btnLogin.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                error.textContent = "";
                location.href = "painel.php";
              }else{
                error.textContent = xhr.response;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}