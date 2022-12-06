//global variable for timer
var idleTimer;

//start up
$(document).ready(function() {
    resetIdleTimer();
});

//reset timer
$('body').on('click touchstart keydown scroll', 'body', function() {
    resetIdleTimer();
});

//function for reset. Time is in ms (5 minutes).
function resetIdleTimer() {
    clearTimeout(idleTimer);
    idleTimer = setTimeout(function() {
        //exit survey here
        window.location.href = 'ENTER_HTML_SURVEY_LANDING_PAGE_URL';
    }, 300000);
}
