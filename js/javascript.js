//const jquery = require("./jquery");

//const jquery = require("./jquery");


$(document).ready(function () {
    console.log("ready!");
    // jQuery(".new_post .article").each(function (i, val) {
    //     jQuery(this).find(".articles_info");
    //     jQuery(this).addClass("my_class"+i);
    //     jQuery(this).find(".article_info_preview");
    // });

    // console.log(jQuery('h3').html("0-0"));

    // jQuery('li').each(function(i,e){
    //     jQuery(jQuery('li').text + e).html(i);
    //     jQuery('li:first').css("background-color","red");
    // });

    // jQuery('a').each(function(i,e){
    //     jQuery(this).append(i+1);
    // });

    // jQuery('h3').wrap('div');
    // jQuery('li').before("!!!");
    // jQuery(".photo_content").attr("src");

    // jQuery('a').each(function(){
    // console.log(jQuery(this).attr('href'));
    // });

    // console.log(jQuery('a').attr("class","test"));

    // jQuery('a').each(function(){
    //     var httpd = jQuery(this).attr("href");
    //     jQuery(this).text(httpd);
    // });

    // jQuery('li').each(function(){
    //     are = jQuery(this).attr("class")
    //     if(are == "www"){
    //         jQuery(this).removeAttr("class");
    //     } else{
    //         jQuery(this).attr("class","www");
    //     }
    // });

    // ADD COMMENTS

    var val_inp_com = "";
    var val_nam_com = "";
    var my_inp_obj = {};
    var page_id;



    jQuery("body").on("click", ".sumbit_div", function () {
        jQuery("#form_comments input[type='text'], #form_comments textarea").each(function () {
            val_inp_com = jQuery(this).val();
            val_nam_com = jQuery(this).attr("name");
            my_inp_obj[val_nam_com] = val_inp_com;

        });

        page_id = jQuery("#form_comments").attr("id_page");

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { my_inp_obj: my_inp_obj, page_id: page_id },
            success: function (data, status, xhr) {
                jQuery('#position_button').html(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                jQuery('#position_button').append('Error' + errorMessage);
            }
        });
    });



    // DELETE POST

    jQuery("body").on("click", ".delbtn", function () {
        console.log("true");
        var cns = jQuery(this).attr("id_delete");
        var post_del = confirm("Ви дійсно хочете видалити цей пост???");

        console.log(post_del);
        if (post_del) {
            jQuery.ajax({
                url: 'ajaxController.php',
                type: 'Post',
                data: { del_post: cns },
                success: function (data, status, xhr) {
                    alert("Post deleted")
                    location.reload();
                },
                error: function (jqXhr, textStatus, errorMessage) {
                }
            });
        };
    });

    jQuery("body").on("click", ".chck", function () {
        var onoff = jQuery(this).attr("id_on_off");
        var tf = jQuery(this).prop('checked');
        console.log(tf);

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { onoff: tf, idpost: onoff },
            success: function (data, status, xhr) {
                console.log(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });

    });


    jQuery("body").on("click", ".add_button", function () {
        var addinp = jQuery(".add_input").val();
        console.log(addinp);

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { inp: addinp },
            success: function (data, status, xhr) {
                console.log(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });


    });

    // update button

    jQuery("body").on("click", ".uptbtn", function () {
        var upt = jQuery(this).attr(".uptbtn");
        var previousInputValue = jQuery(this).prev('input').val();
        var uptid = jQuery(this).attr("updt");

        console.log(previousInputValue);
        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { inpuptd: previousInputValue, catid: uptid },
            success: function (data, status, xhr) {
            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });


    });

    jQuery("body").on("click", ".delctbtn", function () {
        var dlid = jQuery(this).attr("delbtn");

        console.log(dlid);

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { deleteidbtn: dlid },
            success: function (data, status, xhr) {
            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });


    });


    jQuery("body").on("click", ".addpst", function () {
        var formDataPost = new FormData();
        console.log(jQuery('#add_photo')[0].files[0]);
        formDataPost.append('add_photo', jQuery('#add_photo')[0].files[0]);

        var usr = jQuery(".pstttl").val();
        var addtext = jQuery(".txtadd").val();
        var selectedVal = jQuery('.myselect').val();
        var yn = jQuery(".ch").prop('checked');
        var upload_photo_img
        var oneortwo;
        yn ? oneortwo = 1 : oneortwo = 0;

        console.log(usr + "     " + addtext + "     " + selectedVal + "     " + oneortwo);



        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: formDataPost,
            processData: false,
            contentType: false,
            success: function (data, status, xhr) {
                console.log(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });

    });

    // jQuery("body").on("click", ".btn-close") function () {
    //     var close_fnc = jQuery(".btn-close").css("display", "none");

    // };

    jQuery("body").on("click", ".pht-edit", function () {
        jQuery("#galere").fadeIn();
    });

    jQuery("body").click(function (event) {
        if (event.target.id !== 'galere' && event.target.id !== 'pga') {
            jQuery("#galere").fadeOut();
        }
    });

    var fa;

    jQuery("body").on("click", ".responsive .pht", function () {
        console.log("cliiiick!!!!");
        fa = jQuery(this).attr("src");
        jQuery(".upload_photo_img").attr("src", fa);
    });


    // Показуємо попередній перегляд зображення після вибору файлу
    $("#customFile").change(function () {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.upload_photo_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
    });

    jQuery(".save_buttonn1").click(function () {
        var formData = new FormData();

        var post_title_val = jQuery(".title_text").val();
        var post_text_val = jQuery(".pst_text").val();
        var selected_post_categorie = jQuery(".cat_slct option:selected").val()
        var post_id = jQuery(".save_change_btn").attr("edit_post_id");
        var photo_name;



        if (fa !== undefined) {
            photo_name = fa.split("/").pop();
        } else {
            photo_name = false;
        }

        var post_all_edit = {
            post_title_val: post_title_val,
            post_text_val: post_text_val,
            selected_post_categorie: selected_post_categorie,
            post_id: post_id,
            photo_name: photo_name,
        };
        //  var pstid = jQuery(this).attr("edit_post_id");

        formData.append(('customFile'), jQuery('#customFile')[0].files[0]);
        formData.append('post_all_edit', JSON.stringify(post_all_edit));
        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data, status, xhr) {
                console.log(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });
    })


    //     jQuery("body").on("click", ".save_buttonn1", function () {

    //         console.log(photo_name);

    //         jQuery.ajax({
    //             url: 'ajaxController.php',
    //             type: 'Post',
    //             data: { photo_name: photo_name, post_title_val: post_title_val, post_text_val: post_text_val, selected_post_categorie: selected_post_categorie, post_id:post_id },
    //             success: function (data, status, xhr) {
    //                 console.log(data);
    //             },
    //             error: function (jqXhr, textStatus, errorMessage) {
    //             }
    //         });
    //     });

    $("#add_photo").change(function () {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo_add').attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
    });


});