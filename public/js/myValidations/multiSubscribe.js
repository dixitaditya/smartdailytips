jQuery(document).ready(function($) {
    

    jQuery.validator.addMethod("emailcheck", function(value, element) {
    return this.optional(element) || /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i.test(value);
      }, "Please enter valid email");   

  
         $('.subsciber_box .content form').validate({
             rules: { 
                            
                   email: {
                     required: true,
                     emailcheck: true,
                     email: true
                   }
                                         
             },
   
   
             messages: {                   
             email: "Please enter valid email",               
             },
             errorElement: "div",
             errorPlacement: function(error, element) {
               element.after(error);
             }
         });
   
   });