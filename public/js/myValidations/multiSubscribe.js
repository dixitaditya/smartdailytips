jQuery(document).ready(function($) {
    
     // extra rules are already written elsewhere in jq signup include
         $('.subsciber_box form').validate({
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