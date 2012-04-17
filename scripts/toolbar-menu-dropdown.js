(function ($) {
  $(document).ready(function(){ toolbarMenuDropdown.ready(); });
  
  toolbarMenuDropdown = new Object;
  
  toolbarMenuDropdown.ready= function() {
    var dropdownLinks = $('#toolbar').find('.menu .expanded > a');
    
    dropdownLinks.click( function(event) {
      $(this).closest('.expanded').toggleClass('dropdown');
      return false;
    });
    
    $('#page-wrapper').click( function() {
      $('#toolbar').find('.menu .expanded').removeClass('dropdown');
    });
    
  }
  
})(jQuery);