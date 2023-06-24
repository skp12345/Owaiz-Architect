<style>
.dropbtn {
	width:100vw;
  /* background-color: #4CAF50; */
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;

}

.image-container {
  position: relative !important;
  overflow: hidden !important;
}

.zoom-image {
  transition: transform 1s ease !important;
}

.zoom-image:hover {
  transform: scale(1.1) !important; 
}


.mydropdown{
	z-index: 10000;
	margin-bottom : 1rem;
}

.dropdown {
  position: relative;
  display: inline-block;
}


	.dropdown-content {
    width: 100vw;
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 10000;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

/* .dropdown:hover .dropdown-content {
  display: block;
} */

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>


<header class="container no-padd mynavbar">


	<div class="prague-header-wrapper">

		<div class="prague-navigation">
			<div class="pargue-navigation-wrapper">
				<div class="prague-navigation-inner">


					<nav>
						<ul class="main-menu">
							
							<li id="menu-item-2317" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2317">
								<a href="<?= base_url('projects');?>"><b class="headingsize" style="color:<?php if($category=="ALL"){echo "red";}?>">ALL PROJECTS</b></a>
							</li>
							<li id="menu-item-2317" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2317">
								<a href="<?= base_url('base/project_normal/');?>RESIDENTIAL"><b class="headingsize" style="color:<?php if($category=="RESIDENTIAL"){echo "red";}?>">RESIDENTIAL</b></a>
							</li>
							<li id="menu-item-2317" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2317">
								<a href="<?= base_url('base/project_normal/COMMERCIAL');?>"><b class="headingsize" style="color:<?php if($category=="COMMERCIAL"){echo "red";}?>">COMMERCIAL</b></a>
							</li>
							<li id="menu-item-2317" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2317">
								<a href="<?= base_url('base/project_normal/LEISURE');?>"><b class="headingsize" style="color:<?php if($category=="LEISURE"){echo "red";}?>">LEISURE</b></a>
							</li>
							<li id="menu-item-2317" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2317">
								<a href="<?= base_url('base/project_normal/PUBLIC');?>"><b class="headingsize" style="color:<?php if($category=="PUBLIC"){echo "red";}?>">PUBLIC</b></a>
							</li>

							<li id="menu-item-2317" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2317">
								<a href="<?= base_url('base/project_normal/INDUSTRIAL');?>"><b class="headingsize" style="color:<?php if($category=="INDUSTRIAL"){echo "red";}?>">INDUSTRIAL</b></a>
							</li>



						</ul>
					</nav>

				</div>
			</div>
		</div>


		<!-- mobile icon -->
		<div class="prague-nav-menu-icon">
			<a href="#">
				<i></i>
			</a>
		</div>



	</div>
</header>

<div class="mydropdown">
<div class="dropdown">
  <button class="dropbtn" onclick="fun()">Project Category ▼</button>
  <div class="dropdown-content" id="myElement">
  <a href="<?= base_url('projects');?>" onclick="fun()">ALL PROJECTS</a>
  <a href="<?= base_url('base/project_normal/');?>RESIDENTIAL" onclick="fun()">RESIDENTIAL</a>
  <a href="<?= base_url('base/project_normal/COMMERCIAL');?>" onclick="fun()">COMMERCIAL</a>
  <a href="<?= base_url('base/project_normal/LEISURE');?>" onclick="fun()">LEISURE</a>
  <a href="<?= base_url('base/project_normal/PUBLIC');?>" onclick="fun()">PUBLIC</a>
  <a href="<?= base_url('base/project_normal/INDUSTRIAL');?>" onclick="fun()">INDUSTRIAL</a>

  </div>
</div>
</div>

<!--MAIN BODY-->
<div class="container no-padd">
	<div class="row-fluid  margin-lg-145t margin-sm-100t">
		<div class="col-sm-12 ">
			<div class="">
				<div data-unique-key="14ad5b356d917aa464e6341724c17a46" class="js-load-more" data-start-page="1" data-max-page="1" data-next-link="">
					<div class="row prague_masonry prague_count_col4 prague_gap_col15  no-footer-content prague-load-wrapper" data-columns="prague_count_col4" data-gap="prague_gap_col15">



						<?php

           foreach ($project->result() as $project) 
           { ?>

						<div class="portfolio-item-wrapp  p_f_cee8d6b p_f_aa40b54 p_f_061cb85  column_paralax">
							<div class="portfolio-item image-container">
								<div class="project-masonry-wrapper">
									<a class="project-masonry-item-img-link" href="<?php echo base_url('project/')?><?php echo $project->id;?>" target="_self">
										<img class="zoom-image" src="<?php echo base_url('assets/upload/gallery/');?><?php echo  $project->img1?>" class="s-img-switch" alt="dance-and-music-theatre image" data-s-hidden="true" data-s-sibling="true" />
										<div class="project-masonry-item-img"></div>
									</a>
								</div>
							</div>
							<div class="project_title_related">
							<h3 class="project-masonry-item-title"><?php echo $project->title?></h3>
											<div class="project-masonry-item-category"><?php echo $project->category?></div>
							</div>
						</div>

						<?php } 
           ?>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/MAIN BODY-->

<script>
function fun(){
	// console.log("run hua");
	const element = document.getElementById("myElement");
// Set the display property to block
// element.style.display = "block";
if(element.style.display=="block"){
	element.style.display = "none";
}else{
	element.style.display = "block";	
}
}
</script>

<?php include_once 'application/views/frontend/shared/footer.php';
