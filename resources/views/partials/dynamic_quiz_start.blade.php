<div class="quiz_box questions adi_question_style">
    <div class="title"><span><img src="images/star.png"></span>Daily Quiz</div>
    <div class="content">
        <div class="sub_title">{{$quiz->question}}</div>
        <form method="POST" class="quiz_form">
            {{csrf_field()}}
            <div class="options">
                <input type="radio" id="rad1" name="answer" value="1" class="quiz_options">
                <label for="rad1">{{$quiz->option1}}</label>
            </div>	
            <div class="options">
                <input type="radio" id="rad2" name="answer" value="2" class="quiz_options">
                <label for="rad2">{{$quiz->option2}}</label>
            </div>
            <div class="options">
                <input type="radio" id="rad3" name="answer" value="3" class="quiz_options">
                <label for="rad3">{{$quiz->option3}}</label>
            </div>
            <div class="options">
                <input type="radio" id="rad4" name="answer" value="4" class="quiz_options">
                <label for="rad4">{{$quiz->option4}}</label>
            </div>
            <div class="subscribe q_submit">
                <input type="button" value="Submit" id="quiz_bot_submit">
            </div>	
        </form>			
    </div>	
</div>