jQuery(document).ready(function($) {     
   
  
  jQuery.validator.addMethod("lettersandspace", function(value, element) {
  return this.optional(element) || /^[a-z\s\.]+$/i.test(value);
    }, "Letters only please");                

  jQuery.validator.addMethod("mobilecheck", function(value, element) {
  return this.optional(element) || /^[0-9]\d{2}-\d{3}-\d{4}$/i.test(value);
  }, "Please Enter Valid Phone Number"); 
  
  //validate city
  jQuery.validator.addMethod("citycheck", function(value, element) {
    return this.optional(element) || /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$/i.test(value);
    }, "Please Enter Valid City Name"); 

    // validations for select
  $.validator.addMethod("valueNotEquals", function(value, element, arg){
    return arg != value;
  }, "Value must not equal arg."); 

  //validate date
  jQuery.validator.addMethod("dateValidate", function(value, element) {
    return this.optional(element) || /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/i.test(value);
    }, "Please Enter Valid Date"); 
 
  jQuery.validator.addMethod("emailcheck", function(value, element) {
  return this.optional(element) || /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i.test(value);
    }, "Please enter valid email");   

  jQuery.validator.addMethod("pwcheck", function(value) {
     return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
         && /[A-Za-z]/.test(value) // has a lowercase letter
         && /\d/.test(value) // has a digit
  });

      $('.signup-inner-wrapper form').validate({
          rules: { 
                title_name:{ valueNotEquals: "title" },                  
                first_name: {
                  required: true,
                  minlength: 2,
                  maxlength: 25,
                  lettersandspace: true                         
                },
                last_name: {
                  required: true,
                  minlength: 2,
                  maxlength: 100,
                  lettersandspace: true                         
                },
                street_add: {
                  required: true,
                  maxlength: 255                      
                },
                apt: {
                  required: true,
                  maxlength: 255                      
                },
                city: {
                  required: true,
                  citycheck:true,
                  maxlength: 255                         
                },
                dob_cal: {
                  required: true,
                  dateValidate:true,
                  maxlength: 10                         
                },
                state:{ valueNotEquals: "selecte_state" },
                zip: {
                  required: true,
                  number:true ,
                  maxlength: 10                       
                },         
                dob_month:{ valueNotEquals: "Month" },
                title_name:{ valueNotEquals: "title" },  
                dob_day:{ valueNotEquals: "Day" },
                dob_year:{ valueNotEquals: "Year" },          
                email: {
                  required: true,
                  emailcheck: true,
                  email: true,
                  maxlength: 255 
                },
                email_confirmation: {
                    equalTo: "#email"
                  },
                password: {
                  required: true,
                  pwcheck: true,
                  maxlength: 255                         
                },
                password_confirmation: {
                    equalTo: "#password"
                  }                                     
          },
          
          messages: {                   
          first_name: "Please enter valid first name [max 25 letters]",
          title_name:"Please Select a title ",
          last_name: "Please enter valid last name [max 100 letters]",
          email: "Please enter valid email [max 255 letters]",       
          email_confirmation: "Please enter the same email",          
          password: "Password must contain digit, alphabet",
          password_confirmation: "Please enter the same password",
          apt: "Please enter your apartment details [max 255 letters]",
          street_add: "Please enter your street address/PO Box [max 255 letters]",
          city: "Please enter Valid city name",
          zip: "Please enter your zip [max 10 digit]",
          state: "Please select state / region" ,
          dob_month:"Please select month",  
          dob_day:"Please select day",
          dob_year:"Please select year"             
          },
          errorElement: "div",
          errorPlacement: function(error, element) {
            element.after(error);
          }
      });

});