const publishBtn = document.querySelector(".publish-btn");
const publishLines = document.querySelectorAll(".publish-line");


const publishVideoContainer = document.querySelector(".publish-video-Container");
const publishVideoContent = document.querySelector(".publish-video-content");
const publishVideoXMark = document.querySelector(".publish-video-Xmark-verification");


function closeAndNavigaet() {

    publishVideoContainer.classList.add("d-none");
    window.location.href = "/files/allFiles.html";
}


publishVideoContainer.addEventListener("click", closeAndNavigaet);
publishVideoContent.addEventListener("click",(e)=>e.stopPropagation());
publishVideoXMark.addEventListener("click", closeAndNavigaet);



function makePublishActive() {
    publishLines.forEach(item=> item.classList.add('active-added'));
}

publishBtn.addEventListener("click",() => {
    makePublishActive();
    publishVideoContainer.classList.remove("d-none"); 
});



