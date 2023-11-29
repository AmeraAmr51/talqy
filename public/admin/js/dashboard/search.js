
const allBtns = Array.from(document.querySelectorAll(".search-btn"));
const allSearchBtn = Array.from(document.querySelectorAll(".all"));

function getValue(word){
    if (word == "جميع النتائج")
        return 'all';
    else  if (word == "الفيديوهات")
        return 'videos';
    else  if (word == "الاختبارات")
    return 'exams';
    else  if (word == "الملفات")
    return 'files';
    else  if (word == "الباقات")
    return 'packages';
    else  if (word == "دورات البث المباشر")
    return 'events';
}



allBtns.forEach(btn=> {

    btn.addEventListener("click", () => {
        allBtns.forEach(otherBtn => {
            otherBtn.classList.remove("solid-black-btn");
            otherBtn.classList.add("regular-black-btn");
        });
        btn.classList.remove("regular-black-btn");
        btn.classList.add("solid-black-btn");
        
        allSearchBtn.forEach(item=> {
            item.classList.remove("d-none");
            if (!item.classList.contains(getValue(btn.textContent)))
                item.classList.add("d-none");
        })
    });
});
    





