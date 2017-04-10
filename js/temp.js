   
    
$( document ).ready(function() {
    $('.toggle-modal').on('click', function(e) {
      $('.ReactModalPortal').toggleClass("sg-toggle"); //you can list several class names 
      e.preventDefault();
    });

    $('.toggle-blue-media').on('click', function(e) {
        $('.mediaBox').removeClass("mediaBox--green");
          $('.mediaBox').toggleClass("mediaBox--blue"); 
    });
    $('.toggle-green-media').on('click', function(e) {
        $('.mediaBox').removeClass("mediaBox--blue");
          $('.mediaBox').toggleClass("mediaBox--green"); 
    });

    $('.toggle-style-media').on('click', function(e) {
          $('.mediaBox').toggleClass("mediaBox--padded mediaBox--circle"); 
    });
    $('.toggle-blue-campaign').on('click', function(e) {
        $('.campaignBox').removeClass("campaignBox--green");
          $('.campaignBox').toggleClass("campaignBox--blue"); 
    });
    $('.toggle-green-campaign').on('click', function(e) {
        $('.campaignBox').removeClass("campaignBox--blue");
          $('.campaignBox').toggleClass("campaignBox--green"); 
    });
});