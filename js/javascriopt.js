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
        if(post_del){
            jQuery.ajax({
                url: 'ajaxController.php',
                type: 'Post',
                data: { post_id:post_id },
                success: function (data, status, xhr) {
                    alert("Post delete");
                },
                error: function (jqXhr, textStatus, errorMessage) {
                }
            });
        };
       
    });


})