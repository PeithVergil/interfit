<?php
/*
 * Template Name: Program Page Template
 */
?>


<?php get_header(); ?>

<div class="body">
	<div class="ip-1">
		<div class="body-navigation">
			<div id="left-navigation">
				<label>interfit <span>programs</span></label>
			</div>
			<div id="navigation">
				<ul>
					<li class="selected">
						<a href="#weight">Weight</a>
					</li>
					<li>
						<a href="#cardio">Cardio</a>
					</li>
					<li>
						<a href="#change">Interfit Change</a>
					</li>
					<li>
						<a href="#intbox">Interfit Box</a>
					</li>
					<li>
						<a href="#pilate">Pilates</a>
					</li>	
				</ul>
			</div>
		</div><!--<div style="clear:both;">fdfdfd</div>-->
		<div class="interfit" id="weight">
			<img alt="logo" src="<?php bloginfo( 'template_url' ); ?>/images/programs-pic1.png"> 
			<div class="interfit-details">
				<label>weights</label>
				<p>
					Innovative and exciting weights training for all body parts and all fitness levels.
				</p>
				<p>
					Train with either Jesse or Lauren and see what a difference they can help you make.
				</p>
				<p>
					All workouts are static, requiring no gym equipment meaning you can literally train anywhere &ndash; home, office, outdoors: ANYWHERE!
				</p>
				<p>
					Chest, biceps, triceps, back, shoulders, legs, core and abs.
				</p>
			</div>
		</div>
		<div class="interfit" id="cardio">
			<img alt="logo" src="<?php bloginfo( 'template_url' ); ?>/images/programs-pic2.png"> 
			<div class="interfit-details">
				<label>cardio</label>
				<p>
					Running on a treadmill? Riding on a bike? Running around a park? 
				</p>
				<p>
					Boring? We know. 
				</p>
				<p>
					We understand how dull cardio can be, so we have come up with new, fun, fresh and engaging workouts that will keep you excited, healthy and wanting more!
				</p>
				<p>
					Don’t give up your comfort to do cardio - we’ll bring it to you. 
				</p>
			</div>
		</div>
		
		<div class="interfit" id="change">
			<div class="challenge">
				<div id="ic-title"><label>interfet <span>challenge</span></label></div>
				<p>
					The InterFit Challenge is a groundbreaking fitness program aimed at doing one thing alone: 
					challenging YOU to KEEP UP! Developed by and for fitness industry leaders, 
					the InterFit Challenge is a must for anybody looking for their next fitness challenge! 
				</p>
				<p>
					These workouts have been tested and tried by sports stars, elite trainers and fitness enthusiasts. 
					The InterFit Challenge cleverly incorporates the following: high-intensity cardio, core strengthening, 
					body mass, agility, resistance and plyometrics. Better yet, the workouts rely purely on your own body weight, 
					meaning there is no need for any equipment at all &ndash; not even weights.
				</p>
				<p>
					The result: An explosive, intense and quick workout, engineered to make your body work! 
				</p>
				<p>
					All InterFit Challenges are less than 2 minutes in length. Sounds easy doesn’t it? 
					We promise it’s not. Try is for yourself and see if you can meet the InterFit Challenge!
				</p>
			</div>
		</div>
		
		<div class="interfit" id="intbox">
			<img alt="logo" src="<?php bloginfo( 'template_url' ); ?>/images/programs-pic3.png"> 
			<div class="interfit-details">
				<label>interfitbox</label>
				<p>
					Running on a treadmill? Riding on a bike? Running around a park? 
				</p>
				<p>
					Boring? We know. 
				</p>
				<p>
					We understand how dull cardio can be, so we have come up with new, fun, fresh and engaging workouts that will keep you excited, healthy and wanting more!
				</p>
				<p>
					Don’t give up your comfort to do cardio - we’ll bring it to you. 
				</p>
			</div>
		</div>
		
		<div class="interfit" id="pilate">
			<img alt="logo" src="<?php bloginfo( 'template_url' ); ?>/images/Untitled-4.png"> 
			<div class="interfit-details">
				<label>pilates</label>
				<p>
					Running on a treadmill? Riding on a bike? Running around a park? 
				</p>
				<p>
					Boring? We know. 
				</p>
				<p>
					We understand how dull cardio can be, so we have come up with new, fun, fresh and engaging workouts that will keep you excited, healthy and wanting more!
				</p>
				<p>
					Don’t give up your comfort to do cardio - we’ll bring it to you. 
				</p>
			</div>
		</div>
	</div>
</div>

<?php wp_enqueue_script('interfit_program', get_bloginfo('template_url') . '/js/app/program.js', array('jqueryui'), '1.0', true); ?>

<?php get_footer(); ?>
