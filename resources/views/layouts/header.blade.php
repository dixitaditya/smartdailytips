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
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" href="css/jquery.bxslider.css">
<link href="css/style.css" rel="stylesheet" media="all">

<!--[if lte IE 9]>
<script type="text/javascript">
(function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(',');for(var i=0;i<e.length;i++){document.createElement(e[i])}})()
</script>
<style type="text/css">
</style>
<![endif]-->

<!--[if lte IE 7]>    
<style type="text/css">
</style>
<![endif]-->
</head>
<body> 
<header>
        <div class="headerTop clearfix">
            <h1 class="logo">
                <a href="index.php" title="mensLifestyle.com">
                    <img class="logo" src="{{ asset('/images/logo.jpg') }}" alt="smartdailytips.com"/>
                </a>
            </h1>
            <div class="headerRht">
                    @if(Auth::check())
                   <a class="signIn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        Log Out
                    </a>    
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form></li>
                    @else
                    <a href="javascript:void(0);" onclick="modalOpen('signin')" class="signIn">Sign In</a>
                    @include('partials.signinModal')                    
                    @endif
                
                <a href="#" class="subscribe">Subscribe</a>
            </div>
        </div>



        <a id="nav-toggle"  href="javascript:void(0);"><span></span></a> 
        <nav class="clearfix"> 
            <div class="navIn clearfix">          
                <ul id="nav">
                    <li><a href="{{route('category')}}" title="Diet & Fitness" class="active">Diet &amp; Fitness</a></li>
                    <li><a href="#" title="Food & Recipes">Food &amp; Recipes</a></li>
                    <li><a href="#" title="Style & Beauty">Style &amp; Beauty</a></li>
                    <li><a href="#" title="Moms">Moms</a></li>
                    <li><a href="#" title="Love">Love</a></li>
                </ul>
                <ul class="mobNav" id="mobNav">
                    <li class="searchwrap">
                        <input type="text" name="text" class="search" placeholder="Search" />
                        <input type="submit" name="submit" value="" class="button" />
                    </li>
                    <li><a href="index.html" title="Diet & Fitness" class="active">Diet &amp; Fitness</a></li>
                    <li><a href="#" title="Food & Recipes">Food &amp; Recipes</a></li>
                    <li><a href="#" title="Style & Beauty">Style &amp; Beauty</a></li>
                    <li><a href="#" title="Moms">Moms</a></li>
                    <li><a href="#" title="Love">Love</a></li>
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
    </div>