//after click hiding the 1st slide
$("button a").click(function () {
    $("#first").hide();
});
// hide all divs is second div
$("div#second > div").hide();
// Selector
var divs = $("#one, #two, #three, #four");
// Show chosen div, and hide all others
$("button a").click(function () {
    $(divs).hide();
    $("#" + $(this).attr("class")).show();
});