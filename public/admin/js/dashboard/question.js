

let answerType_content =  Array.from(document.querySelectorAll('.answerType_content'));



function addQuestionMultipleOption () {

    const answerContent = Array.from(document.querySelectorAll('.answer_content'));
    const answer_html_item =`<div class="d-flex align-items-center mt-5">
        <input type="text" placeholder="الاجابة" class="form-control"/>
        <span class="ms-3 delete_btn_Xmark" role="button">
            <i class="fa-solid fa-xmark fs-1"></i>
        </span>
    </div>`;
   

    let multiple_answer_add_btn = Array.from(document.querySelectorAll('.multiple_answer_add_btn'));


    multiple_answer_add_btn.forEach((btn, idx)=> {

        btn.addEventListener("click", ()=> {


            answerContent[idx].innerHTML += answer_html_item;
            
            handleRemoveMultiQuestionBtn();
        })
    })
    

    function handleRemoveMultiQuestionBtn() {

        let allBtns = Array.from(document.querySelectorAll('.delete_btn_Xmark'));
    
    
        allBtns.forEach(btn => {
    
            btn.addEventListener("click", ()=> {
        
                btn.parentNode.remove()
            })
        })
        
    }
    handleRemoveMultiQuestionBtn();

}



function multypleAnswerContent () {

    const multypleAnswerContent = `<div class="answer_content mt-5">
        <div class="d-flex align-items-center">
            <input type="text" placeholder="الاجابة" class="form-control"/>
            <span class="ms-3 delete_btn_Xmark" role="button">
                <i class="fa-solid fa-xmark fs-1"></i>
            </span>
        </div>
        <div class="d-flex align-items-center mt-5">
            <input type="text" placeholder="الاجابة" class="form-control"/>
            <span class="ms-3 delete_btn_Xmark" role="button">
                <i class="fa-solid fa-xmark fs-1"></i>
            </span>
        </div>
    </div>
    <div class="mt-5">
        <button class="btn bg-black text-white multiple_answer_add_btn">أضافة اختيار</button>	
    </div>
    <div style="border-top: 1px solid #f4f4f4;" class="py-4 mt-4">
        <div class="row gy-4">
            <div class="col-md-6">
                <div>
                    <h3>الدرجة</h3>
                    <input type="text" class="form-control" placeholder="الدرجة"/>	
                </div>	
            </div>	
            <div class="col-md-6">
                <div>
                    <h3>الاجابة الصحيحة</h3>
                    <input type="text" class="form-control" placeholder="الاجابة الصحيحة"/>	
                </div>	
            </div>	
        </div>
    </div>`;
   
    answerType_content[answerType_content.length - 1].innerHTML = multypleAnswerContent;

    addQuestionMultipleOption();


}


function longAnswer(idx) {

    let longAnswerItem = `
    <div class="mt-5">
        <h3>الأجابة</h3>
        <textarea placeholder="اكتب الاجابة هنا" class="form-control" rows="7"></textarea>
    </div>
    <div style="border-top: 1px solid #f4f4f4;" class="py-4 mt-4">
        <div class="row gy-4">
            <div class="col-md-6">
                <div>
                    <h3>الدرجة</h3>
                    <input type="text" class="form-control" placeholder="الدرجة"/>	
                </div>	
            </div>		
        </div>
    </div>`;

    answerType_content[idx].innerHTML = longAnswerItem;

} 

function yesOrNoAnswer(idx) {

    let yesOrNoItem = `
        <div class="answer_content mt-5">
            <div>
                <h5 class="my-5">الاجابة الأولي</h5>
                <input type="text" placeholder="الاجابة" class="form-control"/>
            </div>
            <div>
                <h5 class="my-3">الاجابة الثانية</h5>
                <input type="text" placeholder="الاجابة" class="form-control"/>
            </div>
        </div>
        <div style="border-top: 1px solid #f4f4f4;" class="py-4 mt-4">
            <div class="row gy-4">
                <div class="col-md-6">
                    <div>
                        <h3>الدرجة</h3>
                        <input type="text" class="form-control" placeholder="الدرجة"/>	
                    </div>	
                </div>	
                <div class="col-md-6">
                    <div>
                        <h3>الاجابة الصحيحة</h3>
                        <input type="text" class="form-control" placeholder="الاجابة الصحيحة"/>	
                    </div>	
                </div>	
            </div>
        </div>`;

    answerType_content[idx].innerHTML = yesOrNoItem;
}



function handleSelectChange () {

    let AllSelectionBox = Array.from(document.querySelectorAll('.question_select'));

    AllSelectionBox.forEach((item, idx) => {

        item.addEventListener('change', (e)=> {

            if (e.target.value == 1) {
                multypleAnswerContent(idx);
            }
            else if (e.target.value == 2) {
                yesOrNoAnswer(idx);
            }
            else if (e.target.value == 3) {
                longAnswer(idx);
            }
        })
    })
}


multypleAnswerContent(0);
handleSelectChange();



function addMoreQuestion() {


    let all_question_content = document.querySelector('.all_question_content');

    let Q_item = `
    <div class="question_box border rounded mt-10">
    <div class="question_head bg-gray py-4 d-flex align-items-center justify-content-between px-4 rounded">
        <h3 class="m-0 question_number"></h3>
        <div class="d-flex align-items-center">
                <span  class="mx-3 add_question_box rounded-circle position-relative"
                style="width: 25px; height: 25px;border: 1px solid #000;"
                role="button"
                >
                 <i class="fa-solid fa-plus fs-6 text-black position-absolute top-50 start-50 translate-middle"></i>	
                </span>
                <span role="button" class="question_box_delete_btn">
                    <i class="fa-solid fa-trash fs-3 text-black"></i>
                </span>
            </div>
        </div>	
        <div class="question_body px-4">
            <div class="d-flex align-items-center justify-content-between mt-5">
                <div class="w-75">
                    <h4 class="fw-bold">السؤال</h4>
                    <input class="form-control" placeholder="السؤال" type="text" />
                </div>
                <div class="w-25 ms-5">
                    <h4 class="fw-bold">نوع السؤال</h4>
                    <select class="form-select question_select">
                        <option value="1">خيارات متعدده</option>
                        <option value="2">صح أم خطأ</option>
                        <option value="3">اجابات طويلة</option>	
                    </select>
                </div>
            </div>
            <!--begin::Image input-->
            <div class="image-input image-input-empty" style="margin-top: 50px;" data-kt-image-input="true">
                <!--begin::Image preview wrapper-->
                <div class="image-input-wrapper w-125px h-125px"></div>
                <!--end::Image preview wrapper-->

                <!--begin::Edit button-->
                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="change"
                data-bs-toggle="tooltip"
                data-bs-dismiss="click"
                title="تحميل صوره">
                    <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                    <!--begin::Inputs-->
                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="avatar_remove" />
                    <!--end::Inputs-->
                </label>
                <!--end::Edit button-->

                <!--begin::Cancel button-->
                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="cancel"
                data-bs-toggle="tooltip"
                data-bs-dismiss="click"
                title="Cancel avatar">
                    <i class="ki-outline ki-cross fs-3"></i>
                </span>
                <!--end::Cancel button-->

                <!--begin::Remove button-->
                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="remove"
                data-bs-toggle="tooltip"
                data-bs-dismiss="click"
                title="Remove avatar">
                    <i class="ki-outline ki-cross fs-3"></i>
                </span>
                <!--end::Remove button-->
            </div>
        <!--end::Image input-->

            <div class="answerType_content">
                
            </div>
        </div>
    </div>`;

    let add_question_box = Array.from(document.querySelectorAll('.add_question_box'));

    add_question_box.forEach((btn, idx)=> {

        btn.addEventListener("click", ()=> {
            all_question_content.innerHTML += Q_item;
            answerType_content =  Array.from(document.querySelectorAll('.answerType_content'));
            multypleAnswerContent(add_question_box.length);
            handleSelectChange();
            addMoreQuestion();
            setQuestionNumber();
            handleRemoveMultiQuestionFn();
        })
    })
   
}

addMoreQuestion();



function setQuestionNumber() {

    let question_number = Array.from(document.querySelectorAll('.question_number'));

    for (let i  = 0; i < question_number.length; i++ ) {

        question_number[i].innerHTML = `السؤال ${i + 1}`;
    }

}

setQuestionNumber();


function removeQuestionBox () {


    document.getElementById('deleteQuestion').addEventListener('click', function() {

        var questionBox = this.closest('.question_box');
    
        console.log(questionBox);
    });
}


function handleRemoveMultiQuestionFn() {

    let questionBoxAllDeleteBtn = Array.from(document.querySelectorAll('.question_box_delete_btn'));

    questionBoxAllDeleteBtn.forEach(btn=> {


        btn.addEventListener("click", ()=> {

            btn.closest('.question_box').remove();
            setQuestionNumber();
        });
    })

    
}

handleRemoveMultiQuestionFn();






function selectTime() {
    new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_time_only"), {
        display: {
            viewMode: "clock",
            components: {
                decades: false,
                year: false,
                month: false,
                date: false,
                hours: true,
                minutes: true,
                seconds: false
            }
        }
    });
}
selectTime();
