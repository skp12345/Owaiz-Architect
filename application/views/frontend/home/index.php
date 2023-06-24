<!--MAIN BODY-->
<div class="container-fluid no-padd margin-top">
	<div class="row-fluid no-padd">
		<div class="col-sm-12 no-padd ">
			<div class="portfolio-slider-wrap full_showcase_slider showcase_slider ">
				<div class="swiper-container" data-mouse="0" data-space="0" data-pagination-type="bullets" data-mode="horizontal" data-autoplay="6000" data-loop="2" data-speed="1500" data-center="0" data-responsive="responsive" data-slides-per-view="4" data-xs-slides="1,0" data-sm-slides="2,0" data-md-slides="3,0" data-lg-slides="4,0">

					<div class="swiper-wrapper">
					<?php

foreach ($project->result() as $project) 
{ ?>
						<div class="swiper-slide">
							<div class="slide-image full-height-window-hard">
								<a href="<?php echo base_url('project/')?><?php echo $project->id;?>">
								<span class="images-slider-wrapper">
									<img src="<?php echo base_url('assets/upload/gallery/');?><?php echo  $project->img1?>" alt="seascape-villa image" class="s-img-switch">
								</span>
								</a>
								
							</div>

							<a href="<?php echo base_url('project/')?><?php echo $project->id;?>">
							<div class="content-showcase-wrapper ">
								<div class="slide-title"><span><?php echo $project->title?></span>
								</div>
								<div class="slide-category"><span><?php echo $project->category?></span>
								</div>
							</div>
							</a>
						</div>

						<?php } 
           ?>

						<!-- <div class="swiper-slide">
							<div class="slide-image full-height-window-hard">
								<span class="images-slider-wrapper">
									<img src="<?php echo base_url(); ?>assets/frontend/img/new/Others/Jamia Masjid/Home Landing page -G.png" alt="european-lard-station image" class="s-img-switch">
								</span>

							</div>

							<div class="content-showcase-wrapper">
								<div class="slide-title"><a href="<?= base_url('project'); ?>" target="_self">Jamia Masjid</a>
								</div>
								<div class="slide-category">
									<a href="<?= base_url('project'); ?>" rel="tag">Others</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slide-image full-height-window-hard">
								<span class="images-slider-wrapper">
									<img src="<?php echo base_url(); ?>assets/frontend/img/new/Leisure/2019- 1. The Garden/Home Landing page -G.jpg" alt="european-lard-station image" class="s-img-switch">
								</span>

							</div>

							<div class="content-showcase-wrapper">
								<div class="slide-title"><a href="<?= base_url('project'); ?>" target="_self">The Garden</a>
								</div>
								<div class="slide-category">
									<a href="<?= base_url('project'); ?>" rel="tag">Leisure</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slide-image full-height-window-hard">
								<span class="images-slider-wrapper">
									<img src="<?php echo base_url(); ?>assets/frontend/img/new/Commercial/2020- 6. Zed Pentagon/Home Page Potrait-ZP.jpg" alt="european-lard-station image" class="s-img-switch">
								</span>

							</div>

							<div class="content-showcase-wrapper">
								<div class="slide-title"><a href="<?= base_url('project'); ?>" target="_self">Zed Pentagon</a>
								</div>
								<div class="slide-category">
									<a href="<?= base_url('project'); ?>" rel="tag">Commercial</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slide-image full-height-window-hard">
								<span class="images-slider-wrapper">
									<img src="<?php echo base_url(); ?>assets/frontend/img/new/Commercial/2022- 7. Orange Health/Home.jpg" alt="european-lard-station image" class="s-img-switch">
								</span>

							</div>

							<div class="content-showcase-wrapper">
								<div class="slide-title"><a href="<?= base_url('project'); ?>" target="_self">Orange Health</a>
								</div>
								<div class="slide-category">
									<a href="<?= base_url('project'); ?>" rel="tag">Commercial</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slide-image full-height-window-hard">
								<span class="images-slider-wrapper">
									<img src="<?php echo base_url(); ?>assets/frontend/img/new/Residential/2020- 3. Mohid_s Apartments/Home Page Potrait.jpg" alt="european-lard-station image" class="s-img-switch">
								</span>

							</div>

							<div class="content-showcase-wrapper">
								<div class="slide-title"><a href="<?= base_url('project'); ?>" target="_self">Mohid’s Apartments </a>
								</div>
								<div class="slide-category">
									<a href="<?= base_url('project'); ?>" rel="tag">Residential</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slide-image full-height-window-hard">
								<span class="images-slider-wrapper">
									<img src="<?php echo base_url(); ?>assets/frontend/img/new/Commercial/2019- 5. Zed Pearl/Home Page Potrait.jpg" alt="european-lard-station image" class="s-img-switch">
								</span>

							</div>

							<div class="content-showcase-wrapper">
								<div class="slide-title"><a href="<?= base_url('project'); ?>" target="_self">Zed Pearl</a>
								</div>
								<div class="slide-category">
									<a href="<?= base_url('project'); ?>" rel="tag">Commercial</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slide-image full-height-window-hard">
								<span class="images-slider-wrapper">
									<img src="<?php echo base_url(); ?>assets/frontend/img/new/Residential/2022- 5. Suhebs Residence/Home Page Potrait.jpg" alt="european-lard-station image" class="s-img-switch">
								</span>

							</div>

							<div class="content-showcase-wrapper">
								<div class="slide-title"><a href="<?= base_url('project'); ?>" target="_self">Suheb’s Residence</a>
								</div>
								<div class="slide-category">
									<a href="<?= base_url('project'); ?>" rel="tag">Others</a>
								</div>
							</div>
						</div> -->




					</div>
					<div class="swiper-button-prev swiper-buttons"></div>
					<div class="swiper-button-next swiper-buttons"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/MAIN BODY-->