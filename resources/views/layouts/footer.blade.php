<footer>
    <div class="footerInn clearfix">
        <div class="footLinks">
        <a href="#">About Us</a><a href="#">Terms of Service</a><a href="#">Privacy Policy</a>
        </div>
    </div>
</footer> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        /*for mobile navigation button start*/
        $("#nav-toggle").click(function () {
            if (!($(this).hasClass('active'))) {
                $(this).addClass('active');
                $(".mobNav").animate({ right: "0" }, "med");            
                $('.menu_overlay').css('display','block');
                $("#scrollUp").css("zIndex" , "0")
                $("#menu_overlay").animate(150, 'easeInSine');
                $('#mobNav a').click(function () {
                $("#nav-toggle").removeClass('active');
                //              
                $(this).closest('nav').prev().removeClass('active');
                $(".mobNav").animate({ right: "-105%" }, "med");
                $("#menu_overlay").css("display" , "none");                
                });
            }
            else {
                $(this).removeClass('active');
                $(".mobNav").animate({ right: "-105%" }, "med");           
                $('.menu_overlay').css('display','none');            
            }
        });
        $('#menu_overlay').click(function() {
            $("#nav-toggle").removeClass('active');
            $(".mobNav").animate({ right: "-105%" }, "med");
            $(this).css("display", "none");       
            $('.menu_overlay').css("display", "none");
        }); 
        /*for mobile navigation button end*/
        $('.bxslider').bxSlider({
            responsive:true,
            pager:false
          });
        $('.categorySlider').bxSlider({
            pager: false
          });
          
    });
    function modalOpen(event) {        
        var modal = document.getElementById(event);
        modal.style.display = "block";
        window.onclick = function(event) {            
            if (event.target == modal) {
                modal.style.display = "none";
            }
          }
        }

    function modalClose(event) {
        var modal = document.getElementById(event);
        modal.style.display = "none";
    }

    function sendSubscriptionRequest(){
       
        var email1 = document.getElementById('modalSubsEmail').value;
        var token = document.subscriptionModal._token.value;
       //alert(token);
        var url1 = '{{route('substest')}}';
       // alert(url1);
        $.ajax({
            type:'POST',
            url:'./subscribeonly',
           data:{email: email1, _token: token},
           beforeSend: function() {
               //alert('going');
           },           
            success:function(data){     
                //alert(data);
                console.log('added to subscription');
                document.getElementById("subsContId").innerHTML=data;
            },
            error:function(data){     
                console.log(data);
            }
         });
      

    }

    function ajaxsendMultipleSubscriptionRequest(){
        
         var emailBot = document.getElementById('botSubsEmail').value;
         var tokenBot = document.subscriptionBot._token.value;
         //var option1 = document.getElementById('chk1').checked ;
         //var option2 = document.getElementById('chk2').checked ;
         //var option3 = document.getElementById('chk3').checked ;
         //var option4 = document.getElementById('chk4').checked ;
         //var option5 = document.getElementById('chk5').checked ;
         
         var option1 = document.getElementById('chk1').checked ? document.getElementById('chk1').value : null ;
         var option2 = document.getElementById('chk2').checked ? document.getElementById('chk2').value : null ;
         var option3 = document.getElementById('chk3').checked ? document.getElementById('chk3').value : null ;
         var option4 = document.getElementById('chk4').checked ? document.getElementById('chk4').value : null ;
         var option5 = document.getElementById('chk5').checked ? document.getElementById('chk5').value : null ;

         //alert(tokenBot+ "<br/>"+option1+ "<br/>"+option2+ "<br/>"+option3+ "<br/>"+option4+ "<br/>"+option5);
         var url1 = '{{route('substest')}}';
         //alert(url1);
         
         $.ajax({
             type:'POST',
             url:'./ajaxsubscribewithcategories',
             data:{email: emailBot,
                _token: tokenBot,
                option1: option1,
                option2: option2,
                option3: option3,
                option4: option4,
                option5: option5,
            
            },           
             success:function(data){     
                 //alert('done');
                 console.log('added to subscription multiple');
                 document.getElementById("subs_replace_here").innerHTML=data;
             }
          });
       
 
     }
     function sendResultCheckRequest(){
        
         var option = document.querySelector('input[name="answer"]:checked').value;
         //alert(option);
         var token = document.subscriptionModal._token.value;
        //alert(token);
         var url1 = '{{route('checkresult')}}';
        // alert(url1);
         $.ajax({
             type:'POST',
             url:'./checkresult',
            data:{answer: option, _token: token},
            beforeSend: function() {
                //alert('going');
            },           
             success:function(data){     
                 //alert(data);
                 console.log('Result checked');
                 document.getElementById("quiz_replace_here").innerHTML=data;

                 //below function is added as a hack beacuse after server side rendering 
                 // of next page the function below is not fired automatically
                 // so as a hack we are firing it here

                 $("#bot_next_quiz").click(function(){
            
                    getNextQuiz();
                });
             },
             error:function(data){     
                 console.log(data);
             }
          });
       
 
     }

     function getNextQuiz(){
         $.ajax({
             type:'GET',
             url:'./nextquiz',
            beforeSend: function() {
                //alert('going');
            },           
             success:function(data){     
                 //alert(data);
                 console.log('Next quiz fetched');
                 document.getElementById("quiz_replace_here").innerHTML=data;

                 //below function is added as a hack beacuse after server side rendering 
                 // of next page the function below is not fired automatically
                 // so as a hack we are firing it here
                 $("#quiz_bot_submit").click(function(){
                    sendResultCheckRequest();
                });
             },
             error:function(data){     
                 console.log(data);
             }
          });
       
 
     }

    //document.getElementById("subs_modal_submit").addEventListener("click",sendSubscriptionRequest);
    $("#subs_modal_submit").click(function(){
        sendSubscriptionRequest();
    });
    //document.getElementById("subs_bot_submit").addEventListener("click",ajaxsendMultipleSubscriptionRequest);
    $("#subs_bot_submit").click(function(){
        ajaxsendMultipleSubscriptionRequest();
    });
    $("#quiz_bot_submit").click(function(){
        sendResultCheckRequest();
    });
    
    $("#bot_next_quiz").click(function(){
        getNextQuiz();
    });


    
    /*
    |--------------------------------------------------------------------------
    | dont use add event listener the enter key ajax won't work
    | rather use keypress or keyup - Priyanka
    |--------------------------------------------------------------------------
    |
    | Test routes delete in production
    | keyup not working
    |
    */

    $('#modalSubsEmail').keypress(function (e) {
        
        if(e.keyCode == 13)  // the enter key code
        {   e.preventDefault();
            $('#subs_modal_submit').click();
            return false;  
        }
        });
    
    $('#botSubsEmail').keypress(function (e) {
        
        if(e.keyCode == 13)  // the enter key code
        {   e.preventDefault();
            $('#subs_bot_submit').click();
            return false;  
        }
        });
    
</script>
</body>
</html>