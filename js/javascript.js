jQuery(document).ready(function () {
    console.log("ready");



    jQuery("body").on("click", ".add_comments", function () {
        var elements = {};
        var id_int_my = jQuery(this).attr("id_post_comments");
        jQuery("#form_comments input[type=text],#form_comments textarea").each(function () {
            elements[this.name] = jQuery(this).val();
        });
        console.log(elements);
        console.log(id_int_my);


        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { elements: elements, id_int_my: id_int_my },
            success: function (data, status, xhr) {
                console.log(data);
                jQuery("#text_log_comments").html(data);
                location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }
        })
    })
});