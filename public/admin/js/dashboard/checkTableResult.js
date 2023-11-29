
const studentStatus = document.querySelector(".studentStatus");

function checkStudentResult() {
    
    console.log(studentStatus.textContent);

    if(studentStatus.textContent.trim() == "ناجح") {
        studentStatus.style.color = "green";        
    } else {
        studentStatus.style.color = "red";
    }
}

checkStudentResult();