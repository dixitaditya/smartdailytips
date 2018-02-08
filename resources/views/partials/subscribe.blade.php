    <div class="subsciber_box">
    <div class="title"><span><img src="images/mail.png"></span>Subscribe</div>
    <div class="content">
        <div class="sub_title">Need fun and free advice on love, food, health and more?</div>
    <div class="notfc">Subscribe to our free newsletter</div>
    {{--  <form method="POST" name="subscriptionBot" action={{route('subscribewithcategories')}}>  --}}
        <form method="POST" name="subscriptionBot" >
            {{ csrf_field() }}
        <div class="checkbox">
            <input type="checkbox" id="chk1" name="option1" value="1">
            <label for="chk1">Mind & Body</label>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="chk2" name="option2" value="2">
            <label for="chk2">Healthy Bytes</label>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="chk3" name="option3" value="3">
            <label for="chk3">Good Parenting</label>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="chk4" name="option4" value="4">
            <label for="chk4">Beauty Tips</label>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="chk5" name="option5" value="5">
            <label for="chk5">Love Tips</label>
        </div>
        <div class="email">
            <input type="text" placeholder="Enter email address" name="email" id="botSubsEmail">
        </div>
        <div class="subscribe">
            {{--  <input type="submit" value="Subscribe" >  --}}
            <input type="button" value="Subscribe" id="subs_bot_submit">
        </div>
    </form>
    <div class="bot_text">By clicking the button above, you agree to the Terms & Conditions and Privacy Policy, and understand that you can opt out of the subscription at any time.</div>
    </div>			
</div>