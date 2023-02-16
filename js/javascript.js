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

    

    var val_inp_com = "";
    var val_nam_com = "";
    var my_inp_obj = {};
    var page_id;



    jQuery("body").on("click", ".sumbit_div", function() {
        jQuery("#form_comments input[type='text'], #form_comments textarea").each(function(){
            val_inp_com = jQuery(this).val();
            val_nam_com = jQuery(this).attr("name");
            my_inp_obj[val_nam_com] = val_inp_com;

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



    // TABS 

    
});