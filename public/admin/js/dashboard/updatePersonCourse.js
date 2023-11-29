tinymce.init({
    selector: ".kt_docs_tinymce_hidden", height : "480",
    menubar: false,
    toolbar: ["styleselect fontselect fontsizeselect",
        "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
        "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
    plugins : "advlist autolink link image lists charmap print preview code"
});

/************************************** start update **********************************************************/





let all_items = Array.from(document.querySelectorAll('.main_item'));
let verifyPublish = document.querySelector('.publish-video-Container');
let line_of_process = Array.from(document.querySelectorAll('.line_process'));


let current_item = 0;
let last_active = 0;



function hiddeAllItems() {
    all_items.forEach(item=> item.classList.add('d-none'));
}

hiddeAllItems();




function handleIncreaseItem() {

    if (current_item >= all_items.length) {
    
        return make_final_step();
    }
 
    hiddeAllItems();
    all_items[current_item++].classList.remove('d-none');
    
}

handleIncreaseItem();


function make_final_step() {
    verifyPublish.classList.remove('d-none');
}



const publishVideoContainer = document.querySelector(".publish-video-Container");
const publishVideoContent = document.querySelector(".publish-video-content");
const publishVideoXMark = document.querySelector(".publish-video-Xmark-verification");


function closeAndNavigaet() {

    publishVideoContainer.classList.add("d-none");
    window.location.href = "/personCourses/allPersonCourses.html";
}


publishVideoContainer.addEventListener("click", closeAndNavigaet);
publishVideoContent.addEventListener("click",(e)=>e.stopPropagation());
publishVideoXMark.addEventListener("click", closeAndNavigaet);




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






/* End upload video */




/*start clickable lines*/


let line_step = document.querySelectorAll('.line_step');


line_step.forEach((item, index) => {

    item.addEventListener('click', ()=> {

        hiddeAllItems();  
        current_item = index;      
        all_items[index].classList.remove('d-none');
    })
})

/*End clickable lines*/


/* start publish btn */

let publish_btn = document.querySelector('.publish_btn');

publish_btn.addEventListener('click', ()=> {
    make_final_step();
})

/* end publish btn */

let person_course_choose_book = Array.from(document.querySelectorAll('.person_course_choose_book'));
let person_course_choose_baba = Array.from(document.querySelectorAll('.person_course_choose_baba'));
let person_course_class = Array.from(document.querySelectorAll('.person_course_class'));




person_course_choose_book.forEach(item=> {

    item.addEventListener("click", ()=> {
        item.classList.add('choosen-Book');
        makeAllUnclickable(person_course_choose_book);
    })
})

person_course_choose_baba.forEach(item=> {

    item.addEventListener("click", ()=> {
        item.classList.add('choosen-Book');
        makeAllUnclickable(person_course_choose_baba);
    })
})


person_course_class.forEach(item=> {

    item.addEventListener("click", ()=> {
        item.classList.add('choosen-Book');
        makeAllUnclickable(person_course_class);
    })
})


function makeAllUnclickable (list) {

    list.forEach(item=> {
        item.style.pointerEvents= "none";
    })
}
