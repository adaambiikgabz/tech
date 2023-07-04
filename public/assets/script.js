(function ($) {
    'use strict';
  
    // data background
    $('[data-background]').each(function () {
      $(this).css({
        'background-image': 'url(' + $(this).data('background') + ')'
      });
    });
  
    // collapse
    $('.collapse').on('shown.bs.collapse', function () {
      $(this).parent().find('.ti-plus').removeClass('ti-plus').addClass('ti-minus');
    }).on('hidden.bs.collapse', function () {
      $(this).parent().find('.ti-minus').removeClass('ti-minus').addClass('ti-plus');
    });
  
    // match height
    $('.match-height').matchHeight({
      byRow: true,
      property: 'height',
      target: null,
      remove: false
    });
    
  })(jQuery);

  //$(".default_option").click(function(){
  //  $(".dropdown ul").addClass("active");
  //});
  
  //$(".dropdown ul li").click(function(){
  //  var text = $(this).text();
  //  $(".default_option").text(text);
  //  $(".dropdown ul").removeClass("active");
  //});

  $(document).ready(function() {
  $(".default_option").click(function(){
    $(".dropdown ul").toggleClass("active");
  });

  $(".dropdown ul li").click(function(){
    var text = $(this).text();
    $(".default_option").text(text);
    $(".dropdown ul").removeClass("active");
  });

  $(".search_field input").keypress(function(event) {
    if (event.which === 13) { // Check if the Enter key is pressed
      var searchText = $(this).val();
      performSearch(searchText);
    }
  });

  function performSearch(searchText) {
    // Replace the following code with your actual search implementation
    console.log("Search text:", searchText);
    // Implement your search logic here
  }
});

