$(function() {

    // Maps
    $("#closeMapWindow").click(function() {
        $(".viewMaps").hide(200);
    });

    $("#openMaps").click(function() {
        $(".viewMaps").show(200);
        $(".viewTwitter").hide(200);
        $(".viewFacebook").hide(200);
        $(".viewFolder").hide(200);
        $(".viewEmail").hide(200);
        $(".viewInternet").hide(200);
    });


});


$(function() {

    // Twitter
    $("#closeTwitterWindow").click(function() {
        $(".viewTwitter").hide(200);
    });

    $("#openTwitter").click(function() {
        $(".viewTwitter").show(200);
        $(".viewMaps").hide(200);
        $(".viewFacebook").hide(200);
        $(".viewFolder").hide(200);
        $(".viewEmail").hide(200);
        $(".viewInternet").hide(200);

    });


});