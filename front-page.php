<?php get_header(); ?>

<div class="dano_home_header">

	<div class="callback_form home_callback">
		<h2 class="callback_header">stand out</h2>
		<div class="callback_form_inner">
			<?php echo do_shortcode('[contact-form-7 id="65" title="Callback Form"]'); ?>
		</div>
	</div>

</div>

<div class="dano_level_2_container container">

	<div class="dano_home_success">
		<h3>What does success look like to you?</h3>
		<p>We can't score a goal until we know where to shoot.  More sales?  More followers?  More exposure?  Purpose, direction, always.  Once we define your goal, we're focused.  Once we're focused, we win.</p>
	</div>

	<div class="dano_home_circles">
		<div class="dano_home_circles__circle circle1">Web<br>Design</div>
		<div class="dano_home_circles__circle circle2">Web<br>Coding</div>
		<div class="dano_home_circles__circle circle3">Managed<br>Hosting</div>
		<div class="dano_home_circles__circle circle4">SEO</div>
		<div class="dano_home_circles__circle circle5">Digital<br>Marketing</div>
		<div class="dano_home_circles__circle circle6">Managed<br>Analytics</div>
	</div>

</div>

<div class="dano_homepage_image_2"></div>

<div class="dano_level_4_container container">

	<div class="dano_home_are_you_ready">
		<h3>Are you ready?</h3>
		<p class="dano-mb-2">The website is not the end but the beginning.  Work smart with analytics and heatmapping.  Advertise smart with content marketing and intelligent SEO.  Shoot, assess, improve, shoot again.  We have an arsenal at our disposal, we just need to pull the trigger.</p>
		<p><a class="button" href="#">See all services</a></p>
	</div>

	<div class="dano_lets_work d-none d-lg-block">
	<h3>Let's work</h3>
	<p>Inital chat</p>
	<p><i class="fas fa-arrow-down"></i></p>
	<p>Quote</p>
	<p><i class="fas fa-arrow-down"></i></p>
	<p>Proposal + agreement</p>
	<p><i class="fas fa-arrow-down"></i></p>
	<p class="dano-mb-2">Project Start</p>
	<p><a class="button" href="#">How I work</a></p>

</div>

</div>

<div class="dano_homepage_huts"></div>

<div class="dano_lets_work d-block d-lg-none">
	<h3>Let's work</h3>
	<p>Inital chat</p>
	<p><i class="fas fa-arrow-down"></i></p>
	<p>Quote</p>
	<p><i class="fas fa-arrow-down"></i></p>
	<p>Proposal + agreement</p>
	<p><i class="fas fa-arrow-down"></i></p>
	<p class="dano-mb-2">Project Start</p>
	<p><a class="button" href="#">How I work</a></p>
</div>

<div class="dano_home_low_image d-block d-lg-none"></div>

<div class="dano_homepage_video">
	<video class="dano_splash_video dano-mb-2" id="splash_video" controls autoplay playsinline controlsList="nodownload" muted>
		<source src="<?php echo get_stylesheet_directory_uri(); ?>/chris-dann-web.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<div class="dano_home_ready_lets_talk dano-pb-3">
		<h3 class="dano-mb-1">Ready to talk web strategy?</h3>
		<p><a class="button" href="#">Let's Talk</a></p>
	</div>
</div>



<?php get_footer();
