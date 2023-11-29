

    

const addNewDateContainer = document.getElementById("add-new-date-container");
const addNewDateContent = document.getElementById("add-new-date-content");
const addNewDateXmark = document.getElementById("add-new-date-Xmark");
const addNewDateCancel = document.getElementById("add-new-date-cancel");
const addNewDateButton = document.getElementById("add-new-date-button");
const addNewDateverify = document.getElementById("add-new-date-verify");

const updateDateContainer = document.getElementById("update-date-container");
const updateDateContent = document.getElementById("update-date-content");
const updateDateXmark = document.getElementById("update-date-Xmark");
const updateDateCancel = document.getElementById("update-date-cancel");
const updateDateButton = document.getElementById("update-date-button");
const updateDateverify = document.getElementById("update-date-verify");


const addNewDateContainerVerfication = document.getElementById("add-new-date-container-verification");
const addNewDateContentVerfication = document.getElementById("add-new-date-content-verification");
const addNewDateXmarkVeriVerfication = document.getElementById("add-new-date-Xmark-verification");


const updateDateContainerVerfication = document.getElementById("update-date-container-verification");
const updateDateContentVerfication = document.getElementById("update-date-content-verification");
const updateateXmarkVeriVerfication = document.getElementById("update-date-Xmark-verification");


const daleteDateContainer = document.getElementById("delete-date-container");
const daleteDateContent = document.getElementById("delete-date-content");
const daleteDateXmark = document.getElementById("delete-date-Xmark");
const daleteDateCancelButton = document.getElementById("delete-date-cancel");
const daleteDateVerify = document.getElementById("delete-date-verify");


const deleteDateContainerVerfication = document.getElementById("delete-date-container-verification");
const deleteDateContentVerfication = document.getElementById("delete-date-content-verification");
const deleteDateXmarkVeriVerfication = document.getElementById("delete-date-Xmark-verification");



/*start add new date*/

addNewDateContainer.addEventListener("click", () => {
    addNewDateContainer.classList.add("d-none")
}) 
addNewDateContent.addEventListener("click", (e) =>e.stopPropagation()); 
addNewDateXmark.addEventListener("click", () => {
    addNewDateContainer.classList.add("d-none")
}) 
addNewDateCancel.addEventListener("click", () => {
    addNewDateContainer.classList.add("d-none")
}) 
addNewDateButton.addEventListener("click", ()=> {
    addNewDateContainer.classList.remove("d-none");
    addNewDateContainer.classList.add("d-block");
})
addNewDateverify.addEventListener("click", ()=> {
    addNewDateContainer.classList.add("d-none");
    addNewDateContainerVerfication.classList.remove("d-none");
    addNewDateContainerVerfication.classList.add("d-block");
})


/*End add new date*/

/*start update date*/

updateDateContainer.addEventListener("click", () => {
    updateDateContainer.classList.add("d-none")
}) 
updateDateContent.addEventListener("click", (e) =>e.stopPropagation()); 
updateDateXmark.addEventListener("click", () => {
    updateDateContainer.classList.add("d-none")
}) 
updateDateCancel.addEventListener("click", () => {
    updateDateContainer.classList.add("d-none")
}) 
function openupdateDate() {
    updateDateContainer.classList.remove("d-none")
}

updateDateverify.addEventListener("click", ()=> {
    updateDateContainer.classList.add("d-none");
    updateDateContainerVerfication.classList.remove("d-none")
})

/*End update date*/



/*satrt new date verfication */


addNewDateContainerVerfication.addEventListener("click", () => {
    addNewDateContainerVerfication.classList.add("d-none")
}) 
addNewDateContentVerfication.addEventListener("click", (e) =>e.stopPropagation()); 
addNewDateXmarkVeriVerfication.addEventListener("click", () => {
    addNewDateContainerVerfication.classList.add("d-none")
}) 

/*End new date verfication */




/*satrt update date verfication */


updateDateContainerVerfication.addEventListener("click", () => {
    updateDateContainerVerfication.classList.add("d-none")
}) 
updateDateContentVerfication.addEventListener("click", (e) =>e.stopPropagation()); 
updateateXmarkVeriVerfication.addEventListener("click", () => {
    updateDateContainerVerfication.classList.add("d-none")
}) 

/*End update date verfication */





/*start delete Date*/

daleteDateContainer.addEventListener("click", () => {
    daleteDateContainer.classList.add("d-none")
}) 
daleteDateContent.addEventListener("click", (e) =>e.stopPropagation()); 
daleteDateXmark.addEventListener("click", () => {
    daleteDateContainer.classList.add("d-none")
}) 
daleteDateCancelButton.addEventListener("click", () => {
    daleteDateContainer.classList.add("d-none")
}) 
function openVerifingDelete() {
    daleteDateContainer.classList.remove("d-none");
}
/*End Delete Date*/



/* strat delte date verivication */


deleteDateContainerVerfication.addEventListener("click", () => {
    deleteDateContainerVerfication.classList.add("d-none")
}) 
deleteDateContentVerfication.addEventListener("click", (e) =>e.stopPropagation()); 
deleteDateXmarkVeriVerfication.addEventListener("click", () => {
    deleteDateContainerVerfication.classList.add("d-none")
}) 


daleteDateVerify.addEventListener("click", ()=> {
    daleteDateContainer.classList.add("d-none")
    deleteDateContainerVerfication.classList.remove("d-none")
})


/* End delete date verivication */


/*start discuss sidebar*/

const sidebarContainer = document.querySelector(".discuss-sidebar-container");
const sidebarContent = document.querySelector(".discuss-sidebar-content");
const sidebarXmark = document.querySelector(".discuss-sidebar-Xmark");
const showMoreDiscuss = document.querySelector(".show-more-discuss");


function closeSidebar() {
    sidebarContainer.classList.add("d-none")
}
function openSidebar() {
    sidebarContainer.classList.remove("d-none")
}

sidebarContainer.addEventListener("click", ()=> {
    closeSidebar();
})
sidebarContent.addEventListener("click", (e)=>e.stopPropagation());
sidebarXmark.addEventListener("click", ()=> {
    closeSidebar();
})
showMoreDiscuss.addEventListener("click", () => {
    openSidebar();
})



