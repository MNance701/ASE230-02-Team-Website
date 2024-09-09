<?php
//Requires data.php to exist for the function to work
require('data.php');
// Get function
$i=$_GET['index'];

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $teamMember[$i]['firstname'].' '.$teamMember[$i]['lastname']?>'s Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
								<?php 
									echo $teamMember[$i]['firstname'].' '.$teamMember[$i]['lastname'];
								?></h1>
							    <div class="title mb-3">
								<?php
									echo $teamMember[$i]['role'];
								?>
								</div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>
									<?php
										echo $teamMember[$i]['email'];
									?>
									</a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>
									<?php
										echo $teamMember[$i]['phone'];
									?>
									</a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>
									<?php
										echo $teamMember[$i]['linkedIn'];
									?>
									</a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>
									<?php
										echo $teamMember[$i]['git'];
									?>
									</a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span>
									<?php
										echo $teamMember[$i]['website'];
									?>
									</a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0">
						<?php
							echo $teamMember[$i]['summary'];
						?>
						</p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Lead Developer</h3>
										        <div class="resume-company-name ms-auto">Startup Hub</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2023 - Present</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
										    <ul>
											    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
											    <li>At vero eos et accusamus et iusto odio dignissimos.</li>
											    <li>Blanditiis praesentium voluptatum deleniti atque corrupti.</li>
											    <li>Maecenas tempus tellus eget.</li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Angular</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Python</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">PostgresSQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Senior Software Developer</h3>
										        <div class="resume-company-name ms-auto">Google</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2019 - 2023</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">React</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Redux</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">MySQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Co-Founder & Lead Developer</h3>
										        <div class="resume-company-name ms-auto">To-do Lists</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2015 - 2019</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
										    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">JavaScript</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Node.js</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Require.js</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Web Developer <small class="text-muted">(Intern)</small></h3>
										        <div class="resume-company-name ms-auto">Amazon</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2014 - 2015</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Ruby on Rails</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/LESS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">MongoDB</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name">Angular</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">React</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">JavaScript</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name">Node.js</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								<!--Loops through $education, using the array position in $education for $education_years and $education_degree-->
								<?php for($e=0;$e<count($teamMember[$i]['education']); $e++){?>
									<li class="mb-2">
										<div class="resume-degree font-weight-bold"><?php echo $teamMember[$i]['education_degree'][$e]?></div>
										<div class="resume-degree-org"><?php echo $teamMember[$i]['education'][$e]?></div>
										<div class="resume-degree-time"><?php echo $teamMember[$i]['education_years'][$e]?></div>
									</li>
								<?php }?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							<ul class="list-unstyled resume-awards-list">
								<!--Loop through each of the awards--> 
								<!--This will only work properly if each award has its own description-->
								<?php for($a=0;$a<count($teamMember[$i]['awards']); $a++){?>
									<li class="mb-2 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
										<div class="resume-award-name">
											<?php 
												echo $teamMember[$i]['awards'][$a];
											?>
										</div>
										<div class="resume-award-desc"><?php echo $teamMember[$i]['awards_desc'][$a];?></div>
									</li>
								<?php /*End of the loop*/}?>
							</ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							<ul class="list-unstyled resume-lang-list">
								<!--Uses l as a variable, not 1-->
								<!--Loops through languages, using $l to determine the array position of $language_use-->
								<?php for($l=0;$l<count($teamMember[$i]['languages']); $l++){?>
									<li class="mb-2">
										<span class="resume-lang-name font-weight-bold">
											<?php 
												echo $teamMember[$i]['languages'][$l];
											?>
										</span> 
										<small class="text-muted font-weight-normal">
											(<?php 
												echo $teamMember[$i]['language_use'][$l];
											?>)
										</small>
									</li>
								<?php }?>
							</ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								<?php for($n=0;$n<count($teamMember[$i]['interests']); $n++){?>
									<li class="mb-1"><?php echo $teamMember[$i]['interests'][$n];?></li>
								<?php }?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<!--Loops through-->
						<?php for($p=0;$p<count($teamMember[$i]['projects']); $p++){?>
							<div class="col-md-4">
								<div class="card">
									<img src=<?php echo $teamMember[$i]['project_img'][$p];?> alt=<?php echo "Project ".($p + 1);?> class="card-img-top">
									<div class="card-body">
										<!--Accounts for the project number, not the value of $p-->
										<h5 class="card-title"><?php echo "Project ".($p + 1);?></h5>
										<p class="card-text"><?php echo $teamMember[$i]['project_desc'][$p];?></p>
										<a href="btn btn-outline-primary" href=<?php echo $teamMember[$i]['project_link'][$p];?>>Go to link</a>
									</div>
								</div>
							</div>
						<?php }?>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span>
		<i class="fas fa-heart"></i> by 
		<?php 
			for($i=0;$i<count($teamMember); $i++){
				echo $teamMember[$i]['firstname'].' '.$teamMember[$i]['lastname'];
				if ($i!=count($teamMember)-1){
					echo ', ';
				}
				else{
					echo '.';
				}
			}
		?>
	</small>
    </footer>
    

</body>
</html> 

