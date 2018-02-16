
<div id="signin" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
              
<div class="signInWrap">
        <div class="closebtnWrap">
            <a href="javascript:void(0);" data-dismiss="modal" onclick="modalClose('signin')"><img src="images/closebtn.png"/></a>
        </div>
        <div class="signHead">Sign In</div>
        <div class="signCont">
        <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                <br/>
                @endif    
            <div class="signInInputPadding">
                <!--[if lte IE 7]> <label for="email">Enter Email</label>  <![endif]-->
            <input type="text" name="email" placeholder="Email" class="inputBox sEmal" value="{{ old('email') }}"/>
            </div>
            <div class="signInInputPadding">
                <!--[if lte IE 7]> <label for="password">Enter Password</label>  <![endif]-->
            <input type="password" name="password" placeholder="Password" class="inputBox sPwd" />
            </div>
            {{--  @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif  --}}
            <div class="clearfix">
                <div class="signinCheckbox">
                <input id="ppp" name="remember" type="checkbox" >
                    <label for="ppp">
                        <div class="signinnote">Keep me signed in</div>
                    </label>
                </div> 
                <div class="forgotlink">
                    {{--  <a href="javascript:void(0);" onclick="modalOpen('forgotPass')" data-dismiss="modal">forgot password?</a>  --}}
                    <a href="{{ route('password.request') }}" >forgot password?</a>
                </div>
            </div> 
          
            <div class="signinbtnwrap">
                <input type="submit" name="signin" class="signinBtn" value="Sign In" />
            </div>
        </form> 
            <div class="signupbtnwrap">
                <a href="{{route('signup')}}">Sign up</a>
            </div> 
            <div class="privacytextwrap">
                <a href="#">Privacy Policy</a>
            </div>  
        
        </div>
    </div>
</div>
</div>
