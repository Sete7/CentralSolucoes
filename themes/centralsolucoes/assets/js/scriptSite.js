//---------------------------------------SCRIPT MOBILE------------------------------------------------------
$(document).ready(function () {
    $(".sidebarBtn").click(function () {
        $(".sidebar_nav").toggleClass('active');
        $(".sidebarBtn").toggleClass('toggle');
    });
});