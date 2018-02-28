<div class="quiz_box questions">
    <div class="title"><span><img src="images/star.png"></span>Daily Quiz</div>
    <div class="content">
        <div class="sub_title">{{$quiz->question}}</div>			
        <div class="answers">
                <div class="right_ans">
                    <div class="like"><img src="images/like.png"></div>
                    <div class="correct_box">
                        <div class="c_in">
                        <div class="c_title">You are correct!</div>
                        <div class="cs_title">The answer is: {{$quiz->$correct_field}}</div>
                        </div>
                    </div>	
                </div>
                <div class="bot_text">
                        {{$quiz->details}}
                </div>
                
                <div class="subscribe">
                    <form method="GET">
                        <input type="button" value="Next" id="bot_next_quiz">
                    </form>
                </div>	
                <div class="card">
                    <a href="#" title="click here"><img src="images/card.jpg"></a>
                </div>
            </div>
    </div>	
</div>