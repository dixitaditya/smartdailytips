@include('layouts.header')

<div class="banner clearfix">
	<ul class="bxslider">
	  <li>
	  	<div class="slide1">
		  	<div class="tab">
		  		<div class="tab_wrap">
			  		<div class="head">Don't Cook? <br/>Try This!</div>
			  		<div class="sub_head">Recipes from Celebrity Chefs</div>
		  		</div>
		  	</div>
	  	</div>
	  </li>
	  <li>
	  	<div class="slide1">
		  	<div class="tab">
		  		<div class="tab_wrap">
			  		<div class="head">Don't Cook? <br/>Try This!</div>
			  		<div class="sub_head">Recipes from Celebrity Chefs</div>
		  		</div>
		  	</div>
	  	</div>
	  </li>
	  <li>
	  	<div class="slide1">
		  	<div class="tab">
		  		<div class="tab_wrap">
			  		<div class="head">Don't Cook? <br/>Try This!</div>
			  		<div class="sub_head">Recipes from Celebrity Chefs</div>
		  		</div>
		  	</div>
	  	</div>
	  </li>
	  <li>
	  	<div class="slide1">
		  	<div class="tab">
		  		<div class="tab_wrap">
			  		<div class="head">Don't Cook? <br/>Try This!</div>
			  		<div class="sub_head">Recipes from Celebrity Chefs</div>
		  		</div>
		  	</div>
	  	</div>
	  </li>
	</ul>
	<div class="category">
		<div class="container">
			<ul>
				<li class="cat_box">
					<a href="#">
						<div class="cat_img"><img src="images/img1.jpg"></div>
						<div class="cat_wrap"><div class="cat_title l_blue_label">Diet & Fitness</div>
						<div class="cat_desc">Quick Workout</div></div>
					</a>		
				</li>
				<li class="cat_box">
					<a href="#">
						<div class="cat_img"><img src="images/img2.jpg"></div>
						<div class="cat_wrap"><div class="cat_title green_label">Food & Recipes</div>
						<div class="cat_desc">Healthy Dinner Hacks</div></div>
					</a>		
				</li>
				<li class="cat_box">
					<a href="#">
						<div class="cat_img"><img src="images/img3.jpg"></div>
						<div class="cat_wrap"><div class="cat_title yellow_label">STYLE & BEAUTY</div>
						<div class="cat_desc">Bad Hair Day Fixes</div></div>	
					</a>	
				</li>
				<li class="cat_box">
					<a href="#">
						<div class="cat_img"><img src="images/img4.jpg"></div>
						<div class="cat_wrap"><div class="cat_title blue_label">MOMS</div>
						<div class="cat_desc">Speed Clean</div></div>
					</a>	
				</li>
				<li class="cat_box mg0">
					<a href="#">
						<div class="cat_img"><img src="images/img5.jpg"></div>
						<div class="cat_wrap"><div class="cat_title red_label">LOVE</div>
						<div class="cat_desc">Unique Date Ideas</div></div>
					</a>	
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="info_panel clearfix">
	<div class="container">
		<div id="subs_replace_here" style="clear: both">
			@include('partials.subscribe')			
		</div>
		@if(Auth::check())
		<div id="quiz_replace_here">
			@include('partials.dynamic_quiz_start')		
		</div>
		@else
		<div id="quiz_replace_here">
			@include('partials.dynamic_quiz_guest')	
		</div>
		@endif
		<div class="big_ed_box">
			<a href="#" title="click here"><img src="images/big_ed.jpg"></a>
		</div>	
		
	</div>
</div>
@include('layouts.footer')