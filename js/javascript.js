//const jquery = require("./jquery");

jQuery(document).ready(function () {
    console.log("ready!");
    //jQuery(".new_post .article").append("<p>POST</p>");
    //jQuery(".new_post .article").fadeOut(3000).fadeIn(1000);
    //jQuery(".new_post .article").fadeOut(3000).delay(5000).fadeIn(1000);
    //jQuery(".new_post .article").slideUp(3000).slideDown(1000);
    //jQuery(".new_post .article").hide(3000).show(1000);
    // var txt  = jQuery(".new_text h3").text();
    // jQuery(".new_text h3").text(txt + " 999999999999");
    // console.log(txt);
    /*jQuery(".new_post .article").each(function(i,val){
        jQuery(this).addClass("my_class"+i);
        jQuery(this).find(".article__info").addClass("my_class_find"+i);
        jQuery(this).find(".article__info__preview").append("<p>"+ (i+1) +"</p>");
    })*/

    //console.log(jQuery('h3').html("!!!"));

    /* jQuery('li').each(function(i){
         //console.log();
         var txt = jQuery(this).text();
         jQuery(this).html(txt + i);
         
     });*/

    //console.log();
    // jQuery('li a').css('background-color','red');

    // jQuery('li:not(.www)').css('background-color','red');
    // jQuery('li:first').css('background-color','red');
    // jQuery('li:last').css('background-color','red');
    // jQuery('a').each(function(i){
    //     jQuery(this).append(i);
    // });
    //jQuery('h3').wrap('div');

    // jQuery('li').before("!!!").after("!!!");
    // jQuery('li').after("!!!");
    // jQuery('h3').remove();
    //console.log(jQuery('.photo__content').attr('alt'));
    // jQuery('a').attr('href','!');
    // jQuery('a').attr('target','_blank');
    // jQuery('a').attr('class','test');
    // jQuery("body").on("click", ".button-click", function () {
    //     var category = jQuery(".header__bottom a");

    //     category.each(function () {
    //         jQuery('.category-all').append("<p>"+ jQuery(this).text() +"</p>")
    //     });
    // });
     var val_inp_com = "";
     var name_inp_com = "";
     var my_inp_obj = {};
     var page_id;
    jQuery("body").on("click", ".submit_div", function () {

        
        jQuery("#form_comments input[type='text'], #form_comments textarea").each(function () {
            val_inp_com = jQuery(this).val();
            name_inp_com = jQuery(this).attr("name");
            my_inp_obj[name_inp_com] = val_inp_com;
           
        });

        page_id = jQuery("#form_comments").attr("id_page");
        
        jQuery.ajax({
            url: 'ajaxController.php',
            type: 'Post',
            data: {my_inp_obj: my_inp_obj, page_id: page_id},
            success: function(data, status, xhr){
                jQuery('#position_button').html(data);
            },
            error: function(jqXhr, textStatus, errorMessage){
                jQuery('#position_button').append('Error' + errorMessage);
            }
        });
        
    });

    
    
});

