<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">  
<title>smartdailytips.com</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" alt="" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" alt="" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" href="css/jquery.bxslider.css">
<link href="css/style.css" rel="stylesheet" media="all">
<link href="css/adi.css" rel="stylesheet" media="all">

<!--[if lte IE 9]>
<script type="text/javascript">
(function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(',');for(var i=0;i<e.length;i++){document.createElement(e[i])}})()
</script>
<style type="text/css">
</style>
<![endif]-->
<!--[if IE]>
<style>
  .subsciber_box .checkbox input[type=checkbox]{display: inline-block;}
.quiz_box .quiz_form .options input[type=radio]{display: inline-block;}


.subsciber_box .email input{width: 228px;height: 40px;border-radius: 5px;border: solid 1px #6b6b6b;padding: 0 10px;margin: 25px 0 25px;line-height:40px}
</style>
<![endif]-->

<!--[if lte IE 8]>    
<style type="text/css">
    .banner .bx-wrapper .bx-next{border:0}
.banner .bx-wrapper .bx-prev{border:0}
.subscribeWrap .inputBox{height:30px;line-height:30px}
.signInWrap .signCont .inputBox{height:30px;line-height:30px;}
.signup-fieldset .signup-inputBox{height:20px;line-height:20px}
</style>
<![endif]-->
<!--[if lte IE 7]>    
{{--  signup form was breaking in IE7  --}}
<style type="text/css">
INPUT[type=checkbox].signup-checkbox{display:block;}
.headerRht{width:220px}
.signupform-wrapper{background-position: top center;}
.signup-step, .signup-row{overflow: auto;}
.signup-row{clear: both;}
.main-signup-form .signup-form-inner{border:1px solid #e6e6e6}
.signup-fieldset .bginput_email, .signup-fieldset .bginput_password, .signInWrap .signCont .sEmal, .signInWrap .signCont .sPwd{background:none; padding-left:10x;}
</style>
<![endif]-->
</head>
<body id="body"> 
        {{--  #menu_overlay {background: #000 none repeat scroll 0 0;  height: 100%; left: 0; opacity: 0.5; position: fixed; top: 0; width: 100%;   --}}
<div id="menu_overlay" class="menu_overlay"></div>            
<header>
        <div class="headerTop clearfix">
            <h1 class="logo">
                <a href="{{ route('home') }}" title="mensLifestyle.com">
                    {{--  <img class="logo" src="{{ asset('/images/logo.jpg') }}" alt="smartdailytips.com"/>  --}}
                    <img class="logo" src="{{ asset('/images/logosmartdailytips.png') }}" alt="smartdailytips.com"/>
                </a>
            </h1>
            <div class="headerRht adi_headerRht">
                    @if(Auth::check())
            <a class="signIn" href="javascript:void(0);" onclick="document.getElementById('frm-logout').submit();" title="click to Logout from {{Auth::user()->email}}">
                        Log Out 
                    </a>    
                    {{--  <button class="signIn" onclick="document.getElementById('frm-logout').submit();">
                        Log Out
                    </button>   --}}
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form></li>
                    @else
                    <a href="javascript:void(0);" onclick="modalOpen('signin')" class="signIn">Sign In</a>
                    @include('partials.signinModal')                    
                    @endif
                    @if(Auth::check())
                    <p class="signIn"  title="Howdy {{Auth::user()->first_name}} {{Auth::user()->last_name}}!!  Welcome to 'Your Smart Daily tips' " >Hi {{Auth::user()->first_name}}</p>
                    @else
                    <a href="javascript:void(0);" onclick="modalOpen('subscribe')" class="subscribe">Subscribe</a>
                    @endif
                    @include('partials.subscribeModal') 
            </div>
        </div>



        <a id="nav-toggle"  href="javascript:void(0);"><span></span></a> 
        <nav class="clearfix"> 
            <div class="navIn clearfix">          
                <ul id="nav">
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/diet-fitness/" title="Diet & Fitness" class="active">Diet &amp; Fitness</a></li>
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/food-recipes/" title="Food & Recipes">Food &amp; Recipes</a></li>
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/style-beauty/" title="Style & Beauty">Style &amp; Beauty</a></li>
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/moms/" title="Moms">Moms</a></li>
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/love/" title="Love">Love</a></li>
                </ul>
                <ul class="mobNav" id="mobNav">
                    <li class="searchwrap">
                        <input type="text" name="text" class="search" placeholder="Search" />
                        <input type="submit" name="submit" value="" class="button" />
                    </li>
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/diet-fitness/" title="Diet & Fitness" class="active">Diet &amp; Fitness</a></li>
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/food-recipes/" title="Food & Recipes">Food &amp; Recipes</a></li>
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/style-beauty/" title="Style & Beauty">Style &amp; Beauty</a></li>
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/moms/" title="Moms">Moms</a></li>
                    <li><a href="https://stagingdemoonline.com/smartdailytips/category/love/" title="Love">Love</a></li>
                </ul>
                <div class="searchBox clearfix">
                    <input type="text" name="text" class="search" placeholder="Search" />
                    <input type="submit" name="submit" value="" class="button" />
                </div>
            </div>
        </nav>
    </header>
    <div class="top_ad clearfix">
        <div class="container">
            <img src="images/top_ad.jpg">
        </div>
        @if(Session::has('info'))
        <div style="background:#C2185B; color:#fff;width:500px;padding:20px 60px;margin-left:-310px;position:absolute;top:3px;left:50%;font-size:20px">
               {{ Session::get('info') }}
               <script>function modalOpen(event) {        
                    var modal = document.getElementById(event);
                    modal.style.display = "block";
                    window.onclick = function(event) {            
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                      }
                    }
                
                    modalOpen('signin');
                </script>
                    
        </div>
        @endif
    </div>