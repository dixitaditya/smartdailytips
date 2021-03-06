@include('layouts.header')
<div class="signup-body">
<div class="ovrblockWrap">
    <div id="menu_overlay" class="menu_overlay"></div>
</div>
<div class="signupform-wrapper sweep-wrapper"></div>
<div class="main-signup-form sweep-form">
    <h3 class="signupform-title">Tell us about yourself &amp; stand chances to win prizes!</h3>
    <div class="signup-form-inner">
        <div class="signup-inner-wrapper">
            <form action="" id="signup" method="POST">
                <div class="signup-step clearfix">
                    <p class="step-no yellow">1</p>
                    <p class="step-title">Enter your details</p>
                </div>
                <div class="signup-row clearfix">
                    <fieldset class="signup-fieldset w-20">
                        <label for="title_name" class="signup-label">Title</label>
                        <select name="title_name" id="title_name" class="signup-select">
                            <option value="select">Select</option>
                            <option value="Mr">Mr</option>
                            <option value="Ms">Ms</option>
                            <option value="Mrs">Mrs</option>
                        </select>
                    </fieldset>
                    <fieldset class="signup-fieldset w-37">
                        <label for="first_name" class="signup-label">First Name</label>
                        <input type="text" class="signup-inputBox" id="first_name" name="first_name">
                    </fieldset>
                    <fieldset class="signup-fieldset w-37 mg-right-0">
                        <label for="last_name" class="signup-label">Last Name</label>
                        <input type="text" class="signup-inputBox" id="last_name" name="last_name">
                    </fieldset>
                </div>
                <div class="signup-row clearfix">
                    <fieldset class="signup-fieldset fieldset50">
                        <label for="street_add" class="signup-label">Street Addresss / P.O. Box</label>
                        <input type="text" class="signup-inputBox" id="street_add" name="street_add">
                    </fieldset>
                    <fieldset class="signup-fieldset fieldset50 mg-right-0">
                        <label for="apt" class="signup-label">Apt</label>
                        <input type="text" class="signup-inputBox" id="apt" name="apt">
                    </fieldset>
                </div>
                <div class="signup-row clearfix">
                    <fieldset class="signup-fieldset fieldset33">
                        <label for="city" class="signup-label">City</label>
                        <input type="text" class="signup-inputBox" id="city" name="city">
                    </fieldset>
                    <fieldset class="signup-fieldset fieldset33">
                        <label for="state" class="signup-label">State</label>
                        <select name="state" id="state" class="signup-select">
                            <option value="select">Select</option>
                            <option value="1">Ohio</option>
                            <option value="2">Arizona</option>
                            <option value="3">Texas</option>
                        </select>
                    </fieldset>
                    <fieldset class="signup-fieldset fieldset33 mg-right-0">
                        <label for="zip" class="signup-label">Zip</label>
                        <input type="text" class="signup-inputBox" id="zip" name="zip">
                    </fieldset>
                </div>
                <div class="signup-row clearfix">
                    <fieldset class="signup-fieldset fieldset33">
                        <label for="dob" class="signup-label">Date of birth</label>
                        <select name="dob_month" id="dob_month" class="signup-select">
                            <option value="Month">Month</option>
                            <option value="1">Ohio</option>
                            <option value="2">Arizona</option>
                            <option value="3">Texas</option>
                        </select>
                    </fieldset>
                    <fieldset class="signup-fieldset fieldset33">
                        <label for="dob_day" class="signup-label">&nbsp;</label>
                        <select name="dob_day" id="dob_day" class="signup-select">
                            <option value="Day">Day</option>
                            <option value="1">Ohio</option>
                            <option value="2">Arizona</option>
                            <option value="3">Texas</option>
                        </select>
                    </fieldset>
                    <fieldset class="signup-fieldset fieldset33 mg-right-0">
                        <label for="dob_year" class="signup-label">&nbsp;</label>
                        <select name="dob_year" id="dob_year" class="signup-select">
                            <option value="Year">Year</option>
                            <option value="1">Ohio</option>
                            <option value="2">Arizona</option>
                            <option value="3">Texas</option>
                        </select>
                    </fieldset>
                </div>
                <div class="signup-step mt40 clearfix">
                    <p class="step-no yellow">2</p>
                    <p class="step-title">Enter your email and passsword to sign up</p>
                </div>
                <div class="signup-row clearfix">
                    <fieldset class="signup-fieldset fieldset33">
                        <label for="email" class="signup-label">Email</label>
                        <input type="text" class="signup-inputBox bginput_email" id="email" name="email">
                    </fieldset>
                    <fieldset class="signup-fieldset fieldset33 mg-right-0">
                        <label for="confirm_email" class="signup-label">Confirm email</label>
                        <input type="text" class="signup-inputBox bginput_email" id="confirm_email" name="confirm_email">
                    </fieldset>
                </div>
                <div class="signup-row clearfix">
                    <fieldset class="signup-fieldset fieldset33">
                        <label for="password" class="signup-label">Password</label>
                        <input type="text" class="signup-inputBox bginput_password" id="password" name="password">
                    </fieldset>
                    <fieldset class="signup-fieldset fieldset33 mg-right-0">
                        <label for="confirm_password" class="signup-label">Confirm Password</label>
                        <input type="text" class="signup-inputBox bginput_password" id="confirm_password" name="confirm_password">
                    </fieldset>
                </div> 
                <div class="signup-row">
                    <div class="signupCheckbox-wrapper clearfix">
                        <input id="pp" name="pp" type="checkbox" checked="" class="signup-checkbox">
                        <label for="pp" class="signupcheck-label">
                            <div class="signinnote">Keep me signed in</div>
                        </label>
                    </div>
                </div>
                <div class="signup-row ">
                    <div class="signupCheckbox-wrapper clearfix">
                        <input id="receive_updates" name="receive_updates" type="checkbox" checked="" class="signup-checkbox">
                        <label for="receive_updates" class="signupcheck-label">
                            <div class="signinnote">Yes, I&rsquo;d like to receive Smart Tips &amp; chances to win prizes from SmartDailyTips &amp; SearchSweeps. I know I can unsubscribe at any time by clicking the unsubscribe link in the email.</div>
                        </label>
                    </div>
                </div>
                <div class="signup-row">
                    <input type="submit" name="agree" class="signupbtn" value="Yes, I Agree" />
                </div>
                <div class="signup-row clearfix">
                    <p class="signup-disclaimer">By clicking above, I understand and agree to the <a href="#">Privacy Policy</a> of SmartDailyTips &amp; SearchSweeps</p>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@include('layouts.footer')