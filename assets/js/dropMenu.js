$("li.products").children("div.ul__wrapper").addClass('d-none')
$("li.products").hover(function () {
    $(this).children("div.ul__wrapper").removeClass('d-none')
}, function () {
    $(this).children("div.ul__wrapper").addClass('d-none')
})