
/* start progress */


const progress = document.querySelectorAll('.progress-done');

progress.forEach(element=> {
  
  if(element.getAttribute('data-done') >= 90) {
    element.style.background = "#080";
  } 
  else if (element.getAttribute('data-done') >= 50){
    element.style.background = "rgb(45 45 45)";
  } 
  else {
    element.style.background = "red";
  }
  element.style.width = element.getAttribute('data-done') + '%';
  element.style.opacity = 1;
})


/* End progress */

