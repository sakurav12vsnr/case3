$(".tab-label").on("click", function () {
    var $th = $(this).index();
    $(".tab-label").removeClass("active");
    $(".tab-panel").removeClass("active");
    $(this).addClass("active");
    $("tab-panel").eq($th).addClass("active");
})