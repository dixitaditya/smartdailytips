@include('layouts.header')
<div class="quiz_box">
    <div class="title"><span><img src="images/star.png"></span>Daily Quiz</div>
    <div class="content">
        <div class="sub_title">Dancing for an hour burns approximately how many calories?</div>				
        <div class="dislike"><img src="images/dislike.png"></div>
        <div class="incorrect_box">
            <div class="inc_in">
            <div class="inc_title">Incorrect!</div>
            <div class="incs_title">The correct answer is: 470 calories</div>
            </div>
        </div>
        <div class="bot_text">
            Kicking up the intensity of your dance steps can help expend more energy, which has a direct impact on the number of calories burned. At a more vigorous pace, you can expect to burn about 450 calories per hour.
        </div>
        <div class="subscribe">
            <input type="submit" value="Next">
        </div>	
        <div class="card">
            <a href="#" title="click here"><img src="images/card.jpg"></a>
        </div>
    </div>	
</div>	
@include('layouts.footer')