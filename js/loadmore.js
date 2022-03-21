$(document).ready(function () {
    $(".item-more").slice(0, 3).show()
    $(".loadmore").on("click", function () {
        $(".item-more:hidden").slice(0, 3).slideDown()
        if ($(".item-more:hidden").length == 0) {
            $(".loadmore").fadeOut("slow")
        }
    })
});