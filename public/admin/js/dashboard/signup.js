

const input_eye = Array.from(document.querySelectorAll(".input_eye"));
const input_password = Array.from(document.querySelectorAll(".input_password"));


input_eye.forEach((ipt, idx) => {

    ipt.addEventListener('click',()=> {

        if(input_eye[idx].classList.contains('showing')) {
            hiddePassword(idx);
            return;
        }
        showPassword(idx);
    })
});




function showPassword (idx) {
    input_password[idx].setAttribute('type', 'text');
    input_eye[idx].classList.remove('fa-eye-slash');
    input_eye[idx].classList.add('fa-eye');
    input_eye[idx].classList.add("showing");
}
function hiddePassword (idx) {
    input_password[idx].setAttribute('type', 'password');
    input_eye[idx].classList.remove('fa-eye');
    input_eye[idx].classList.add('fa-eye-slash');
    input_eye[idx].classList.remove("showing");
}
