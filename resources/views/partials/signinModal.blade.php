
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
            <input type="text" name="email" placeholder="Email" class="inputBox sEmal" value="{{ old('email') }}"/>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            <input type="password" name="password" placeholder="Password" class="inputBox sPwd" />
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <div class="clearfix">
                <div class="signinCheckbox">
                <input id="pp" name="remember" type="checkbox" checked>
                    <label for="pp">
                        <div class="signinnote">Keep me signed in</div>
                    </label>
                </div> 
                <div class="forgotlink">
                    <a href="javascript:void(0);" onclick="modalOpen('forgotPass')" data-dismiss="modal">forgot password?</a>
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
