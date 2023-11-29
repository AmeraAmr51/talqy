
let all_items = Array.from(document.querySelectorAll('.main_item'));
let verifyPublish = document.querySelector('.publish-video-Container');
let line_of_process = Array.from(document.querySelectorAll('.line_process'));


let current_item = 0;
let last_active = 0;

function hiddeAllItems() {
    all_items.forEach(item=> item.classList.add('d-none'));
}

hiddeAllItems();


function addActiveToLine(ok) {
    if (ok) {
        for (let i = 0; i < 2; i++) {
            line_of_process[last_active++].classList.add('active-added');
        }
    }
}


function handleIncreaseItem(ok) {

    if (current_item >= all_items.length) {
        addActiveToLine(ok);
        return make_final_step();
    }
    addActiveToLine(ok);
    hiddeAllItems();
    all_items[current_item++].classList.remove('d-none');
    
}
handleIncreaseItem(false);



function make_final_step() {
    verifyPublish.classList.remove('d-none');
}


// const publishBtn = document.querySelector(".publish-btn");
// const publishLines = document.querySelectorAll(".publish-line");


const publishVideoContainer = document.querySelector(".publish-video-Container");
const publishVideoContent = document.querySelector(".publish-video-content");
const publishVideoXMark = document.querySelector(".publish-video-Xmark-verification");


function closeAndNavigaet() {

    publishVideoContainer.classList.add("d-none");
    window.location.href = "/videos/allVideos.html";
}


publishVideoContainer.addEventListener("click", closeAndNavigaet);
publishVideoContent.addEventListener("click",(e)=>e.stopPropagation());
publishVideoXMark.addEventListener("click", closeAndNavigaet);



// function makePublishActive() {
//     publishLines.forEach(item=> item.classList.add('active-added'));
// }

// publishBtn.addEventListener("click",() => {
//     makePublishActive();
//     publishVideoContainer.classList.remove("d-none"); 
// });



// let video_choose_item = Array.from(document.querySelectorAll('.video_choose_item'));


// video_choose_item.forEach(item=> {

//     item.addEventListener("click", ()=> {
//         item.classList.add('choosen-Book')
//     })
// })


// console.log(video_choose_item);

let video_choose_book = Array.from(document.querySelectorAll('.video_choose_book'));
let video_choose_baba = Array.from(document.querySelectorAll('.video_choose_baba'));
let video_choose_class = Array.from(document.querySelectorAll('.video_choose_class'));


video_choose_book.forEach(item=> {

    item.addEventListener("click", ()=> {
        item.classList.add('choosen-Book');
        makeAllUnclickable(video_choose_book);
    })
})

video_choose_baba.forEach(item=> {

    item.addEventListener("click", ()=> {
        item.classList.add('choosen-Book');
        makeAllUnclickable(video_choose_baba);
    })
})


video_choose_class.forEach(item=> {

    item.addEventListener("click", ()=> {
        item.classList.add('choosen-Book');
        makeAllUnclickable(video_choose_class);
    })
})


function makeAllUnclickable (list) {

    list.forEach(item=> {
        item.style.pointerEvents= "none";
    })
}



/* start upload video */


let allItems = [];

let video_input_lesson = Array.from(document.querySelectorAll('.video_input_lesson'));
let videos_content = document.querySelector('.videos_content');


video_input_lesson.forEach(item => {

    item.addEventListener('change', (e)=> {

        let x = Array.from(document.querySelectorAll('.video_input_lesson:checked'));

        console.log(x);


        if (item.checked) {

            allItems.push(e.target.value);
            setAllItemsInItsPlace();
        } 
       
    })
    
})




function setAllItemsInItsPlace() {

    videos_content.innerHTML = '';
    allItems.forEach(head=> {
        videos_content.innerHTML +=  `
        <h5>${head}</h5>
        <div class="container mt-5">
            <div class="w-100 custom-border rounded position-relative" role="button" style="height: 150px;"> 
                <input  role="button" type="file" class="position-absolute top-0 end-0 start-0 bottom-0" style="opacity: 0;z-index: 999;"/>
                <div style="margin-top: 40px;" class="d-flex justify-content-center ">
                    <i class="fa-solid fa-upload mx-auto" style="font-size: 40px;"></i>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-5 fs-5">
                    <p class="m-0 text-gray-400">قم بتحميل الملف أو</p>
                    <p class="m-0 fw-bold" style="text-decoration: underline;"> تصفح جهازك</p>
                </div>
            </div>
        </div>
    
        <div class="container my-5">
            <h4>اسم مقطع الفيديو</h4>
            <input type="text" placeholder="اسم مقطع الفيديو" class="form-control"/>
        </div>
    `
    })
}



/* End upload video */


let liveVideo = document.getElementById('videos_cycle_type');
let selectBox = document.querySelector('.type_cycle');


function handleSelect () {


    liveVideo.addEventListener("click", ()=> {

        if(selectBox.classList.contains('d-none')) {
            selectBox.classList.remove('d-none')
        }
        else {
            selectBox.classList.add('d-none')
        }
    })
}

handleSelect();

