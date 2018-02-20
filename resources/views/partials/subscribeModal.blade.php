<div id="subs_modal_wrapper">
<div id="subscribe" class="modal">
        <!-- Modal content -->
          <div class="modal-content">
            <div class="subscribeWrap subscribeWrapnobg signInWrap">
              <div class="closebtnWrap">
                  <a href="javascript:void(0);" data-dissmiss="modal" onclick="modalClose('subscribe')"><img src="images/closebtn.png"/></a>
              </div>
              <div class="subsHead"><div class="subsLogo"><img src="https://stagingdemoonline.com/smartdailytips/wp-content/themes/smartdailytip/images/logo.png" class="subsmodallogo"></div></div>
              <div class="subsBtnHead1"><img src="images/subsarrow1.png"></div>
              {{--  <form method="POST" action="{{ route('subscribeonly') }}">  --}}
                <form name="subscriptionModal" method="POST">
                    {{ csrf_field() }}
              <div class="subsCont" id="subsContId">
                  <div class="tpText">Become Smarter with</div>
                  <div class="quotes">our Daily Tips!</div>
                  <p>Get your Health, Parenting, Home &amp; Love <br /> smart tips directly in your mailbox.</p>
                  <input type="text" name="email" placeholder="Enter your email address" class="inputBox" id="modalSubsEmail"/>
                  <input type="button" name="submit" class="subsBtn" value="Subscribe" id="subs_modal_submit"/>
                  <div class="subspp">By clicking Subscribe, I agree to the <a href="https://stagingdemoonline.com/smartdailytips/privacy-policy/">Privacy Policy</a> &amp; <a href="https://stagingdemoonline.com/smartdailytips/terms-of-service/"> Terms &amp; Conditions</a> and understand that I may opt out of the subscription at any time.</div>
              </div>
            </form>
              </div>
          </div>
      </div>
    </div>