<?php
/**
 * Template Name: Company
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>

<!-- Begin Page Content -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="companyslider company">

			</div>
		</div>
	</div>
	<div class="row justify-content-end">
		<div class="col-md-12">
			<div class="companysub">
				<div class="content">
					<h1>A world leading zinc scientist's discovery sparked an innovation in metal energy storage.</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="about-intro-greg">
	<div class="container">
		<div class="row">

			<div class="col-md-6 bioHalf">
				<div class="gregBio">
					<h3>Gregory X. Zhang</h3>
					<h4>Founder, CEO, Ph.D.</h4>
					<p>Bio about greg, in here wil will tell a short story and make note of the books he authored and his career. Now its time for a zinc energy storagy.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="gregImgContainer">
					<img src="/wp-content/uploads/2018/02/gregory-zhang-mountain.jpg" alt="Gregory Zhang" class="gregimg">
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Timeline -->
<div class="project">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/e-zn-founded.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">October 2012</h3>
						<h2 class="eventTitle">Company founded</h2>
						<p>Demonstration of the application feasibility of solar energy storage in zinc metal with Zn-Reactor</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="project alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/inside-reactor-resize-recolor-landscape.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">2013 - 2016</h3>
						<h2 class="eventTitle">Prototype Reactors</h2>
						<p>extensive development with 8 iterations in design. The first lab was set up and we went to work. The system was developed to be fully automated with electronic boards.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="project">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/photo-office-resize.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">2017</h3>
						<h2 class="eventTitle">New facility; USA and Chinese patents</h2>
						<p>e-Zn upgraded to current office. US and chinese patents have been issued.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="project alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/e-zn-solar-panels-1.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">December 2017</h3>
						<h2 class="eventTitle">SDTC Solar Project Installation</h2>
						<p>e-Zn was awarded grant by Sustainable Devlopment Technology Canada to install solar panels to work directly with the reactors.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="project">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/e-zn-20-reactor-cells.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">January 2018</h3>
						<h2 class="eventTitle">20 cell system integrated</h2>
						<p>the zinc reactors are up and running.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- End Page Content -->

<?php

get_footer();
