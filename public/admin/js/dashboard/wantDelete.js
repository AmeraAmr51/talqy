
const WantDeleteContainer = document.querySelector(".want-delete-container");
const WantDeleteContent = document.querySelector(".want-delete-content");
const WantDeleteXmark = document.querySelector(".want-delete-Xmark");
const wanDeleteCancel = document.querySelector(".want_delete_Cancel");
const wantDeleteBtn = document.querySelector(".want_delete_verify_btn");
const DelteBtn = document.querySelectorAll(".want_delete_btn");



const verifyDeltedContainer = document.querySelector(".verify-deleted-container");
const verifyDeltedContent = document.querySelector(".verify-deleted-content");
const verifyDeltedXmark = document.querySelector(".verify-deleted-Xmark");



function openWantDelete() {
    WantDeleteContainer.classList.remove('d-none')
}
function closeWantDelete() {
    WantDeleteContainer.classList.add('d-none')
}

DelteBtn.forEach(btn=>btn.addEventListener("click", openWantDelete)); 
WantDeleteContainer.addEventListener("click", closeWantDelete);
WantDeleteContent.addEventListener("click", (e)=>e.stopPropagation());
wanDeleteCancel.addEventListener("click", closeWantDelete);
WantDeleteXmark.addEventListener("click", closeWantDelete);


function closeVerifyDeleted() {
    verifyDeltedContainer.classList.add("d-none");
}
function openVerifyDeleted() {
    verifyDeltedContainer.classList.remove("d-none");
}

verifyDeltedContainer.addEventListener("click", closeVerifyDeleted);
verifyDeltedContent.addEventListener("click", (e)=>e.stopPropagation());
verifyDeltedXmark.addEventListener("click", closeVerifyDeleted);



wantDeleteBtn.addEventListener("click",()=> {
    closeWantDelete();
    openVerifyDeleted();
});


