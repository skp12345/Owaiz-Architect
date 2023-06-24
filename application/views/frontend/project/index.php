<!--MAIN BODY-->
<?php

foreach ($project->result() as $project) { ?>

<div class="container-fluid no-padd">
	<div class="col-xs-12 no-padd">
		<div class="container-fluid top-banner no-padd  big fullheight light">

			<img src="<?php echo base_url('assets/upload/gallery/'); ?><?php echo  $project->img1 ?>" class="s-img-switch" alt="main-banner image">
			
		</div>
	</div>
</div>

	<div class="container no-padd margin-lg-135t margin-xs-100t margin-lg-135b margin-sm-100b">
		<div class="row-fluid no-padd ">
		<div class="subtitle align-left brieft"><?php echo $project->category ?></div>
						<h2 class="title align-left brieft"><?php echo $project->title ?></h2>
		<div class="vc_column_container col-sm-6  margin-xs-50t no-padd">
				<div class="no-padd-inner ">
				<div class="project-detail-splitted-info ">
						<div class="project-detail-block-outer">
							<div class="project-detail-block-wrapper">
								<div class="project-detail-block-item">
									<div class="project-detail-block-title">
										LOCATION </div>
									<div class="project-detail-block-descr">
										<p>
											<?php echo $project->location ?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="project-detail-block-outer">
							<div class="project-detail-block-wrapper">
								<div class="project-detail-block-item">
									<div class="project-detail-block-title">
										TEAM MEMBERS</div>
									<div class="project-detail-block-descr">
										<p>
											<?php echo $project->director ?>
										</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			<div class="vc_column_container col-sm-5 no-padd">
				<div class="padd-right-only-lg">
					<div class="heading left dark no-padd-top">

						
						<div class="content align-left">
							<?php echo $project->description ?>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="project-detail-splitted-info">
						<!-- <div class="prague-share-icons ">
							<div class="prague-share-label">SHARE PROJECT</div>
							<button data-share="http://www.facebook.com/sharer.php?u=http://prague.loc/splitted-creative-banner/&amp;t=Splitted Creative Banner" class="icon fa fa-facebook"></button>
							<button data-share="http://twitter.com/home/?status=Splitted Creative Banner - http://prague.loc/splitted-creative-banner/" class="icon fa fa-twitter"></button>
							<button data-share="http://www.linkedin.com/shareArticle?mini=true&amp;title=Splitted Creative Banner&amp;url=http://prague.loc/splitted-creative-banner/" class="icon fa fa-linkedin"></button>
							<button data-share="http://pinterest.com/pin/create/button/?url=http://prague.loc/splitted-creative-banner/&media=" class="icon fa fa-pinterest-p"></button>
						</div> -->
					</div>
	</div>

<div class="container no-padd">
	<div class="col-xs-12 no-padd">
		<div class="container-fluid top-banner no-padd  big fullheight light">

			<img src="<?php echo base_url('assets/upload/gallery/'); ?><?php echo  $project->img2 ?>" class="s-img-switch" alt="main-banner image">
			
		</div>

<!-- two two images -->
<div class="row" style="margin:0;">
<div class="col-md-6">
<div class="card twoimgcard1">
  <img src="<?php echo base_url('assets/upload/gallery/'); ?><?php echo  $project->img3 ?>" class="card-img-top" alt="...">
</div>
</div>
<div class="col-md-6">
<div class="card twoimgcard2" style="">
  <img src="<?php echo base_url('assets/upload/gallery/'); ?><?php echo  $project->img4 ?>" class="card-img-top" alt="...">
</div>
</div>
</div>

<!-- two two images -->

<!-- after two images  -->


<?php 
$myfiles = $project->totalFiles;
if($myfiles){
  $data=json_decode($myfiles);
foreach ($data as $file) {
    echo '<img class="mt-3"  style="width:100vw; margin-top:1rem;" src="' . base_url('assets/upload/gallery/') . $file . '" alt="" class="s-img-switch" alt="main-banner image">';
}
}
?>


<!-- <div class="container-fluid top-banner no-padd  big fullheight light aftertwoimg">

<img src="<?php echo base_url('assets/upload/gallery/'); ?><?php echo  $project->img4 ?>" class="s-img-switch" alt="main-banner image">

</div> -->
<!-- after two images  -->

	</div>
</div>
<?php } 
           ?>

	<div class="container no-padd  margin-xs-100t margin-lg-135b margin-sm-100b">
		<div class="row-fluid no-padd ">
		<div class="project-detail-splitted-info">
						<div class="prague-share-icons ">
							<div class="prague-share-label">SHARE PROJECT</div>
							<button data-share="http://www.facebook.com/sharer.php?u=http://prague.loc/splitted-creative-banner/&amp;t=Splitted Creative Banner" class="icon fa fa-facebook"></button>
							<button data-share="http://twitter.com/home/?status=Splitted Creative Banner - http://prague.loc/splitted-creative-banner/" class="icon fa fa-twitter"></button>
							<button data-share="http://www.linkedin.com/shareArticle?mini=true&amp;title=Splitted Creative Banner&amp;url=http://prague.loc/splitted-creative-banner/" class="icon fa fa-linkedin"></button>
							<button data-share="http://pinterest.com/pin/create/button/?url=http://prague.loc/splitted-creative-banner/&media=" class="icon fa fa-pinterest-p"></button>
						</div>
					</div>

			<div class="vc_column_container col-sm-6 no-padd related_projects">
				<div class="padd-right-only-lg">
					<div class="heading left dark no-padd-top project_title_related">
						<h2 class="title related align-left">Related Projects</h2>
					</div>
				</div>
			</div>

			<!-- related projects -->
			<div class="container-fluid no-padd">
	<div class="row-fluid  margin-lg-145t margin-sm-100t">
		<div class="col-sm-12 ">
			<div class="">
				<div data-unique-key="14ad5b356d917aa464e6341724c17a46" class="js-load-more" data-start-page="1" data-max-page="1" data-next-link="">
					<div class="row prague_masonry prague_count_col4 prague_gap_col15  no-footer-content prague-load-wrapper" data-columns="prague_count_col4" data-gap="prague_gap_col15">
					<?php
foreach ($related_project->result() as $related_project) { ?>
						<div class="portfolio-item-wrapp  p_f_cee8d6b p_f_aa40b54 p_f_061cb85  column_paralax">
							<div class="portfolio-item">
								<div class="project-masonry-wrapper">
									<a class="project-masonry-item-img-link" href="<?php echo base_url('project/')?><?php echo $related_project->id;?>" target="_self">
										<img src="<?php echo base_url('assets/upload/gallery/');?><?php echo  $related_project->img1?>" class="s-img-switch" alt="dance-and-music-theatre image" data-s-hidden="true" data-s-sibling="true" />
										<div class="project-masonry-item-img"></div>
									</a>
								</div>
							</div>
							<div class="project_title_related">
							<h3 class="project-masonry-item-title"><?php echo $related_project->title?></h3>
											<div class="project-masonry-item-category"><?php echo $related_project->category?></div>
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
			<!-- related projects -->

		</div>
		
	</div>

<!--/MAIN BODY-->




<?php include_once 'application/views/frontend/shared/footer.php';
