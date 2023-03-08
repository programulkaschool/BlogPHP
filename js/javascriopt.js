$(document).ready(function () {
    console.log("ready");
    //jQuery(".new_post .article").append("<p>gfidgjo</p>")
    //    var text= jQuery(".new_text h3")
    //    jQuery(".new_text h3")
    //     console.log(text)

    // jQuery(".new_post .article").each(function(i,val){
    //     jQuery(this).addClass("my_class"+1)
    //     jQuery(this).find(".article__info__preview").append("<p>"+(i+1)+"</p>")
    //     console.log(jQuery(this).find(".article__info__preview"))

    // })
    // console.log(jQuery('li').html());
    // jQuery('li').each(function(i){
    //     jQuery(this).html(i);
    // });

    //jQuery("li:first").css("background-color","red")
    // jQuery('a').each(function(i){
    //     jQuery(this).append(i)
    // })

    //jQuery('h3').wrap('div')

    //jQuery('li').before("!").after("!")

    //jQuery('h3').remove();

    //console.log(jQuery('.photo__content').attr('alt'))

    // jQuery('h3').each(function () {
    //     jQuery(this).append("<p>??</p>")
    // })

    //console.log(jQuery("a:first").attr('href'))

    //console.log(jQuery('a').attr('href',"!"))

    //jQuery('a').attr('target','blank')

    //jQuery("li").addClass("test")


    // jQuery('a').each(function(e){
    //    var hp= jQuery(this).attr("href");
    //    jQuery(this).html(hp);
    // })

    // jQuery('li').each(function(){
    //     if(jQuery(this).attr('class')=='www'){
    //         jQuery(this).removeAttr('class')
    //     }else{
    //         jQuery(this).addClass('www')
    //     }
    // })

    // jQuery("p").on("click",function(){
    //     jQuery(this).html(jQuery(this).html()*jQuery(this).html());
    // })

    // jQuery("body").on("click",".button-click", function(){
    //     var category =jQuery(".header__bottom a");

    //     category.each(function(){
    //         jQuery(".categorie-all").append("<p>"+jQuery(this).text() +"</p>")
    //     });
    // });



    //comments
    var val_inp_com = "";
    var name_inp_com = "";
    var my_inp_obj = {};
    var page_id;
    jQuery("body").on("click", ".form_controlmy", function () {
        jQuery("#form_comments input[type='text'], #form_comments textarea").each(function () {
            val_inp_com = jQuery(this).val();
            name_inp_com = jQuery(this).attr("name");
            my_inp_obj[name_inp_com] = val_inp_com;
        });
        page_id = jQuery("#form_comments ").attr("id_page")

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

    //delete post
    var delet = "";
    jQuery("body").on("click", ".delete", function () {
        var post_id = jQuery(this).attr("id_delete")
        var post_del = confirm("Ви дійсно хочите видалити цей пост?")
        if (post_del) {
            jQuery.ajax({
                url: 'ajaxController.php',
                type: 'Post',
                data: { post_id: post_id },
                success: function (data, status, xhr) {
                    alert("Post delete");
                    location.reload();
                },
                error: function (jqXhr, textStatus, errorMessage) {
                }
            });
        };

    });

    //ON/OF

    jQuery("body").on("click", ".on_of", function () {
        var i_on_of = jQuery(this).attr("id_on_of");
        var chec = jQuery(this).prop('checked');
        console.log(i_on_of);
        console.log(chec);

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { i_on_of: i_on_of, chec: chec },
            success: function (data, status, xhr) {

            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });

    });


    //ad categories

    jQuery("body").on("click", ".ad_button", function () {
        var add_categorie = jQuery(".text_button").val();

        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { add_categorie: add_categorie },
            success: function (data, status, xhr) {
                location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });


    });


    //delete categories

    jQuery("body").on("click", ".delete_categories", function () {
        var categories_id = jQuery(this).attr("id_delete_categories")
        var categories_del = confirm("Ви дійсно хочите видалити цю категорію?")
        if (categories_del) {
            jQuery.ajax({
                url: 'ajaxController.php',
                type: 'Post',
                data: { categories_id: categories_id },
                success: function (data, status, xhr) {
                    alert("categories delete");
                    location.reload();
                },
                error: function (jqXhr, textStatus, errorMessage) {
                }
            });
        };

    });

    //update categories

    jQuery("body").on("click", ".update_categories", function () {
        var id_categories_update = jQuery(this).attr("id_1");
        var previousElement = jQuery(this).prev('input').val();
        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { previousElement: previousElement, id_categories_update: id_categories_update },
            success: function (data, status, xhr) {
                location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });
    })


    //add post
    jQuery("body").on("click", ".add_title", function () {
        var chec_post
        var add_post_title = jQuery(".title_button_post").val();
        var add_post_text = jQuery(".text_button_post").val();
        if (jQuery(".on_of_post").prop('checked') == true) {
            chec_post = 1
        } else {
            chec_post = 0
        }
        var chec_post_selected = jQuery('.id_post_select').val();
        console.log(add_post_title)
        console.log(add_post_text)
        console.log(chec_post)
        console.log(chec_post_selected)
        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: { add_post_title: add_post_title, add_post_text: add_post_text, chec_post: chec_post, chec_post_selected: chec_post_selected },
            success: function (data, status, xhr) {
                location.reload();
            },
            error: function (jqXhr, textStatus, errorMessage) {
            }
        });


    });

    jQuery("body").on("click", ".wid_and_heig", function () {
        jQuery('.galer_photo_fon').fadeIn();
    });

    jQuery("body").click(function (event) {
        //console.log(event.target.className)
        if (event.target.className != "btn btn-dark wid_and_heig" ) {
            jQuery('.galer_photo_fon').fadeOut();
        };
    })

    jQuery("body").on("click", ".galeri_img", function(){
       var photo_src = jQuery(this).attr("src");
       jQuery(".img-thumbnail").attr("src", photo_src);
    });


})


