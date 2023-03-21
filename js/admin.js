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
        var admin_upd_btn = jQuery(this).next().attr("admin_del_btn");
        var val_admin = jQuery(this).prev();
        console.log(val_admin);

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { admin_upd_btn: admin_upd_btn, val_admin: val_admin },
            success: function (data, status, xhr) {
                console.log(data);
                //location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {

            }
        })
    });

});

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}