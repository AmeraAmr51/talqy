
const ReplaysChevron = Array.from(document.querySelectorAll(".replays-chevron"));
const replaysChevronArrow = Array.from(document.querySelectorAll(".replays-chevron-arrow"));
const replayOnCommentForm = Array.from(document.querySelectorAll(".replay-on-comment-from"));
const replayOnCommentBtn = Array.from(document.querySelectorAll(".replay-on-comment"));
const replaysSendBtn = Array.from(document.querySelectorAll(".replays-send-btn"));


ReplaysChevron.forEach((replay, indx)=>{
    replay.addEventListener("click", ()=> {
        console.log("done")
        console.log(replaysChevronArrow[indx])
       replaysChevronArrow[indx].classList.toggle("rotate-chevron");
    })
})


replayOnCommentForm.forEach(form=> {

    form.addEventListener("submit", e=> e.preventDefault());
});


replayOnCommentBtn.forEach((btn, idx)=> {
  
    btn.addEventListener("click", ()=> {

        btn.classList.add("d-none");
        replayOnCommentForm[idx].classList.remove("d-none");
    });
})


replaysSendBtn.forEach((btn, idx)=> {

    btn.addEventListener("click", ()=> {
        replayOnCommentBtn[idx].classList.remove("d-none");
        replayOnCommentForm[idx].classList.add("d-none");
    })
})

