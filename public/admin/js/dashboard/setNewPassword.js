

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

/*************************************************(((verififcation true)))***************************************************************/

const deleteContainer = document.getElementById("delete-date-container-verification");
const deleteXmark = document.getElementById("delete-date-Xmark-verification");
const deleteContent = document.getElementById("delete-date-content-verification");
const sending_btn = document.querySelector('.sending_btn');


// Add event listener to navigate to "index.html" when deleteContainer or deleteXmark is clicked
deleteContainer.addEventListener("click", function () {
    deleteContainer.classList.add('d-none');
    window.location.href = "/";
});

deleteXmark.addEventListener("click", function () {
    deleteContainer.classList.add('d-none');
    window.location.href = "/";
});
sending_btn.addEventListener('click', ()=> {
    
    deleteContainer.classList.remove('d-none');
})

// Add event listener to stop propagation when deleteContent is clicked
deleteContent.addEventListener("click", function (e) {
    e.stopPropagation();
});

const signUp_form = document.querySelector('.signUp_form');

signUp_form.addEventListener('click', (e)=> {

    e.preventDefault();
})