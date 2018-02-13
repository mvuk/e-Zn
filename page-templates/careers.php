<?php
/**
 * Template Name: Careers
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

<div class="careers-intro">
	<div class="container">
		<div class="row bg">
			<div class="col-md-10">
				<div class="bg-top">
					<div class="content">
						<h1>Join a materials science revolution</h1>
						<p>e-Zn is looking for the most qualified scientists for the project. They will be working on zinc. We have state of the art facilities.</p>
						<p>e-Zn is looking for the most qualified scientists for the project.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row img justify-content-end">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<div class="job postings">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<h2>Open Positions</h2>
				<div class="jobs">
					<div class="row">
						<div class="col-md-8">
							<h3>Job Title</h3>
						</div>
						<div class="col-md-4">
							<h3>Location</h3>
						</div>
					</div>
					<!--  -->
					<div class="row">
						<div class="col-md-8">
							<p>Zinc Scientist</p>
						</div>
						<div class="col-md-4">
							<p>Toronto, Canada</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<p>Engineering Manager</p>
						</div>
						<div class="col-md-4">
							<p>Toronto, Canada</p>
						</div>
					</div>
				</div>
				<div id="submit">
					<script type="text/javascript">
						function showForm() {
							var applyBtn = document.getElementById('applyBtn');
							var applyForm = document.getElementById('applyForm');
							applyForm.classList.remove('displayNone');							
						}
					</script>
					<!--  -->
					<a class="sq-btn" id="applyBtn" onclick="showForm()">Submit your application</a>
					<div class="job application form displayNone" id="applyForm">
						<h1>job app form</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
