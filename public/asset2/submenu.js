$('.btn').click(function () {
    $(this).toggleClass("click");
    $('.sidebar').toggleClass("show");
});
$('.feat-btn').click(function () {
    $('nav ul .feat-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
});
$('.serv-btn').click(function () {
    $('nav ul .serv-show').toggleClass("show1");
    $('nav ul .second').toggleClass("rotate");
});

$('.short-btn').click(function () {
    $('nav ul .short-show').toggleClass("show2");
    $('nav ul .third').toggleClass("rotate");
});

$('.osp-btn').click(function () {
    $('nav ul .osp-show').toggleClass("show3");
    $('nav ul .fourth').toggleClass("rotate");
});

$('.session-btn').click(function () {
    $('nav ul .session-show').toggleClass("show4");
    $('nav ul .five').toggleClass("rotate");
});

$('nav ul li').click(function () {
    $(this).addClass("active").siblings().removeClass("active");
});