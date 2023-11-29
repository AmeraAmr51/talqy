

let video_input_lesson = Array.from(document.querySelectorAll('.video_input_lesson'));
let input_1 = document.getElementById('input_1');

let allItems = [];

localStorage.removeItem('selectedVideoLessons');

function removeChecked() {
    video_input_lesson.forEach(ele=> {
        console.log(ele.checked)
        ele.checked = false;
    })

}

setTimeout(()=> {
    removeChecked();
}, 100)


video_input_lesson.forEach(item => {

    item.addEventListener('change', (e)=> {

        let x = Array.from(document.querySelectorAll('.video_input_lesson:checked'));

        console.log(x);


        if (item.checked) {

            allItems.push(e.target.value);
            localStorage.setItem("selectedVideoLessons", JSON.stringify(allItems));
           
        } 
       
    })
    
})


