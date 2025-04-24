$(document).ready(function() {
    $("#image_list a").each(function() {
        var image = new Image();
        image.src = $(this).attr("href");
    });
  
    $("#image_list a").click(function(event) {
        event.preventDefault();
        var imageURL = $(this).attr("href");
        var caption = $(this).attr("title");

        $("#image, #caption").fadeOut(1000, function() {
            $("#image").attr("src", imageURL);
            $("#caption").text(caption);
            $("#image, #caption").fadeIn(1000);
        });
    });
    
    $("li:first-child a").focus();
});