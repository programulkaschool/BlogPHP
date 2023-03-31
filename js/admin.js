jQuery(document).ready(function () {
    console.log("ready");

    jQuery("body").on("click", "#tr_btn", function () {
        var admin_btn = jQuery(this).attr("admin_btn");
        //console.log(admin_btn);

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { admin_btn: admin_btn },
            success: function (data, status, xhr) {
                console.log(data);
                location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }
        })
    });

    jQuery("body").on("click", "#flexSwitchCheckDefault", function () {

        var admin_checkbox = jQuery(this).attr("admin_checkbox");
        console.log(admin_checkbox);
        var check_admin = jQuery(this).is(':checked');

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { admin_checkbox: admin_checkbox, check_admin: check_admin },
            success: function (data, status, xhr) {
                console.log(data);
                //location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }
        })
    });

    jQuery("body").on("click", "#del_btn", function () {
        var admin_del_btn = jQuery(this).attr("admin_del_btn");


        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { admin_del_btn: admin_del_btn },
            success: function (data, status, xhr) {
                console.log(data);
                location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }
        })
    });
    jQuery("body").on("click", "#add_btn", function () {
        var admin_add_btn = jQuery("#inp_add").val();
        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { admin_add_btn: admin_add_btn },
            success: function (data, status, xhr) {
                console.log(data);
                location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }
        })
    });
    jQuery("body").on("click", "#upd_btn", function () {
        var admin_upd_btn = jQuery("#del_btn").attr("admin_del_btn");
        var val_admin = jQuery(this).prev().val();

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { admin_upd_btn: admin_upd_btn, val_admin: val_admin },
            success: function (data, status, xhr) {
                console.log(data);
                location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }
        })
    });
    jQuery("body").on("click", "#save_btn", function () {
        var title_sc = jQuery('#title_scd').val();
        var text_sc = jQuery('#text_scd').val();
        var select_sc = jQuery('#select_scd option:selected').val();
        var checkbox_sc = jQuery('#check_scd').is(':checked');

        console.log(title_sc);
        console.log(text_sc);
        console.log(select_sc); console.log(checkbox_sc);

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { title_sc: title_sc, text_sc: text_sc, select_sc: select_sc, checkbox_sc: checkbox_sc },
            success: function (data, status, xhr) {
                console.log(data);
                //location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }
        })
    });
    jQuery("body").on("click", "#edit_btn", function () {
        jQuery("#overlay").fadeIn();
    });


    jQuery("body").click(function (e) {
        if (jQuery(e.target).attr("id") != "edit_btn" && jQuery(e.target).attr("id") != "overlay" && jQuery(e.target).attr("id") != "gallery") {
            jQuery("#overlay").fadeOut();
        }
    });
    var showimg;
    jQuery("body").on("click", ".responsive img", function () {
        jQuery(".text-center .img-thumbnail").attr("src", jQuery(this).attr("src"))



        var editimg = jQuery(this).attr("src").split("/")
        showimg = editimg[editimg.length - 1];

    });

    jQuery("body").on("click", "#save_button", function () {
        var title_edit = jQuery('#title_edit').val();
        var text_edit = jQuery('#text_edit').val();
        var select_edit = jQuery('#select_edit option:selected').val();
        var checkbox_edit = jQuery('#check_edit').is(':checked');
        var img_edit = jQuery("#img_center img").attr("src");
        var sv_post = jQuery(this).attr("sv_edit");

        var edit_photo = jQuery("#upload_inputFile")[0].files[0];
        var formData = new FormData();

        if (showimg == undefined) {
            showimg = false;
        } 
        console.log(showimg);
        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { title_edit: title_edit, text_edit: text_edit, select_edit: select_edit, checkbox_edit: checkbox_edit, showimg: showimg, sv_post: sv_post },
            success: function (data, status, xhr) {
                console.log(data);
                //location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }
        })
    });


    jQuery("body").on("click", "#save_button_photo", function () {

        var edit_photo = jQuery("#upload_inputFile")[0].files[0];
        var formData = new FormData();
        var id_edit_photo = jQuery("#save_button").attr("sv_edit");

       /* formData.append('customFile', edit_photo);
        formData.append('id_edit_photo', id_edit_photo);
        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data, status, xhr) {
                alert(data);
                location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }

        })*/

    });
    jQuery('#upload_inputFile').on('change', function () {

        var file_edit = this.files[0];
        console.log(file_edit);
        var reader = new FileReader();
        reader.onload = function (event) {
            jQuery('#image_preview').attr('src', event.target.result);
        }
        reader.readAsDataURL(file_edit);
    });
});


function openCity(evt, cityName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
