<div class="quiz_box questions">
    <div class="title"><span><img src="images/star.png"></span>Daily Quiz</div>
    <div class="content">
        <div class="sub_title">{{$quiz->question}}</div>			
        <div class="answers">
                <div class="wrong_ans">
                    <div class="dislike"><img src="images/dislike.png"></div>
                    <div class="incorrect_box">
                        <div class="inc_in">
                        <div class="inc_title">Incorrect!</div>
                        
                        <div class="incs_title">The correct answer is: {{$quiz->$correct_field}}</div>
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