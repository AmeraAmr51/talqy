

const input_eye = document.querySelector(".input_eye");
const input_password = document.querySelector(".input_password");

input_eye.addEventListener("click", ()=> {

    if(input_eye.classList.contains('showing')) {
        hiddePassword();
        return;
    }
    showPassword();
})




function showPassword () {
    input_password.setAttribute('type', 'text');
    input_eye.classList.remove('fa-eye-slash');
    input_eye.classList.add('fa-eye');
    input_eye.classList.add("showing");
}
function hiddePassword () {
    input_password.setAttribute('type', 'password');
    input_eye.classList.remove('fa-eye');
    input_eye.classList.add('fa-eye-slash');
    input_eye.classList.remove("showing");
}