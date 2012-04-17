(function ($) {
  $(document).ready(function(){ toolbarMenuDropdown.ready(); });
  
  toolbarMenuDropdown = new Object;
  
  toolbarMenuDropdown.ready= function() {
    var dropdownLinks = $('#toolbar').find('.menu .expanded > a');
    
    dropdownLinks.click( function(event) {
      $(this).closest('.expanded').toggleClass('dropdown');
      return false;
    });
    
    dropdownLinks.blur( function(event) {
      $(this).closest('.expanded').removeClass('dropdown');
    });
  }
  
})(jQuery);