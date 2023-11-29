
let allItems = [];
let videos_content = document.querySelector('.videos_content');



allItems = JSON.parse(localStorage.getItem("selectedVideoLessons"));

function setAllItemsInItsPlace() {

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


