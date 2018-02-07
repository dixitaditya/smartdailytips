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
        //alert(url1);
        $.ajax({
            type:'POST',
            url:'./subscribeonly',
            data:{email: email1, _token: token},           
            success:function(data){     
                //alert('done');
                console.log('added to subscription');
                document.getElementById("subsContId").innerHTML=data;
            }
         });
      

    }
     
    document.getElementById("subs_modal_submit").addEventListener("click",sendSubscriptionRequest);
</script>
</body>
</html>