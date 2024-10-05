const formOpenBtn = document.querySelector("#btn-register"),
registerForm = document.querySelector(".register-form"),
formCloseBtn = document.querySelector('.form_close'),
registerBtn = document.querySelector('#registerBtn');

formOpenBtn.addEventListener("click", () => registerForm.classList.add("show"));
formCloseBtn.addEventListener("click", () => registerForm.classList.remove("show"));