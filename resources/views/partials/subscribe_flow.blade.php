@include('layouts.header')
<div class="subsciber_box">
    <div class="title"><span><img src="images/mail.png"></span>Subscribe</div>
    <div class="content">
        <div class="sub_title">Need fun and free advice on love, food, health and more?</div>
    <div class="notfc">Subscribe to our free newsletter</div>
    <div class="checkbox">
        <input type="checkbox" id="chk1" name="Mind & Body" value="Mind & Body">
        <label for="chk1">Mind & Body</label>
    </div>
    <div class="checkbox">
        <input type="checkbox" id="chk2" name="Mind & Body" value="Mind & Body">
        <label for="chk2">Healthy Bytes</label>
    </div>
    <div class="checkbox">
        <input type="checkbox" id="chk3" name="Mind & Body" value="Mind & Body">
        <label for="chk3">Good Parenting</label>
    </div>
    <div class="checkbox">
        <input type="checkbox" id="chk4" name="Mind & Body" value="Mind & Body">
        <label for="chk4">Beauty Tips</label>
    </div>
    <div class="checkbox">
        <input type="checkbox" id="chk5" name="Mind & Body" value="Mind & Body">
        <label for="chk5">Love Tips</label>
    </div>
    <div class="email">
        <input type="text" placeholder="Enter email address" name="email">
    </div>
    <div class="subscribe">
        <input type="submit" value="Subscribe">
    </div>
    <div class="bot_text">By clicking the button above, you agree to the Terms & Conditions and Privacy Policy, and understand that you can opt out of the subscription at any time.</div>
    </div>			
</div>
<br/>
<div class="sub_box" style="clear: both;margin-top:50px;float: left; ">		
    <div class="content">
        <div class="title">Thank you for <br/>Signing up!</div>
        <div class="sub_title">You will receive your first <br/>newsletter with our next <br/>scheduled circulation!</div>
        <div class="card">
            <a href="#" title="click here"><img src="images/sub_card.jpg"></a>
        </div>
    </div>	
</div>
@include('layouts.footer')
