$(function () {

    $('.modal_ajax').on('click', function (e) {
        e.preventDefault();
        $('.modal').html('Carregando...');
        $('.modal_bg').show();
        var link = $(this).attr('href');

        $.ajax({
            url: 'ajax/adicionar.php',
            type: 'GET',
            success: function (html) {
                $('.modal').html(html);
            }
        });


    });

    $("#close").click(function () {
        $(".modal_bg").hide();
    });

});

document.getElementById("close").onclick = function () {
    document.querySelector(".modal_bg").style.display = "none";
}