jQuery(document).ready(function($) {
    jQuery.validator.addMethod("lettersandspace", function(value, element) {
        return this.optional(element) || /^[a-z\s\.]+$/i.test(value);
          }, "Letters only please");                
  
        jQuery.validator.addMethod("mobilecheck", function(value, element) {
        return this.optional(element) || /^[0-9]\d{2}-\d{3}-\d{4}$/i.test(value);
        }, "Please Enter Valid Phone Number"); 
  
        // validations for select
       $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
       }, "Value must not equal arg."); 
  
        jQuery.validator.addMethod("emailcheck", function(value, element) {
        return this.optional(element) || /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i.test(value);
          }, "Please enter valid email");   
  
        jQuery.validator.addMethod("pwcheck", function(value) {
           return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
               && /[A-Za-z]/.test(value) // has a lowercase letter
               && /\d/.test(value) // has a digit
        });
  
        $('.signInWrap form').validate({
            rules: { 
                           
                  email: {
                    required: true,
                    emailcheck: true,
                    email: true
                  },
                  password: {
                    required: true,
                    pwcheck: true                        
                  }
                                        
            },
  
  
            messages: {                   
            email: "Please enter valid email",               
            password: "Password must contain digit, alphabet"            
            },
            errorElement: "div",
            errorPlacement: function(error, element) {
              element.after(error);
            }
        });
  
  });