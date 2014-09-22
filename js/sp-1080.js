function() {
        var a = $("#menu");
        $(".menu_btn").click(function() {
            $(this).toggleClass("active"), a.slideToggle(300)
        }), $("#list_more").on("click", function() {
            return $(this).hide(), $("#category_list li:hidden").slideDown(), !
                1
        })
    }