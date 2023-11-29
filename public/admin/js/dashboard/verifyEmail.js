
const convert_email = document.querySelector('.convert_email');
const originalEmail = "AhmedSalem45636@gmail.com";


function maskEmail(email) {
    if (!email) return ''; 

    const [username, domain] = email.split('@');

    const asterisks = '*'.repeat(username.length - 3);

    const maskedEmail = username.slice(0, 3) + asterisks + '@' + domain;

    return maskedEmail;
}



convert_email.textContent = maskEmail(originalEmail)



/*******************************************(counter)**************************************************/
display = document.querySelector('#time');
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}


window.onload = function () {
    var fiveMinutes = 60 * 1;
    startTimer(fiveMinutes, display);
};