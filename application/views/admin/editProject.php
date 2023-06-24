<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!$_SESSION["email"]){   
    redirect('/admin','refresh');   
}
?>

<?php include 'include/sidebar.php';?>

  <main id="main" class="main">

    <div class="row">
   <div class="col-md-6">
   <div class="pagetitle">
      <h1>Edit Project</h1>
    </div>
   </div>
   <div class="col-md-6 d-flex justify-content-end">
   <div class="pagetitle">

    </div>
   </div>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      <?php 
                                             $i=1;
                                             foreach ($project->result() as $project) 
                                             { ?>
      <form enctype="multipart/form-data" action="<?php echo base_url();?>editProject_process/<?php echo $project->id?>"  method="post">
       <!-- Left side columns -->
       <div class="col-lg-12">
        <h3 class="text-center mt-3"></h3>
        <div class="card p-5">
        <form>
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select Project Category</label>
    <select <?php if(isset($_POST['category'])) echo $_POST['category']?> name="category" class="form-select" aria-label="Default select example" required>
  <option selected disabled>Select</option>
  <option <?php if($project->category=="RESIDENTIAL") echo "selected" ?> value="RESIDENTIAL">Residential</option>
  <option <?php if($project->category=="COMMERCIAL") echo "selected" ?> value="COMMERCIAL">Commercial</option>
  <option <?php if($project->category=="LEISURE") echo "selected" ?> value="LEISURE">Leisure</option>
  <option <?php if($project->category=="PUBLIC") echo "selected" ?> value="PUBLIC">Public</option>
  <option <?php if($project->category=="INDUSTRIAL") echo "selected" ?> value="INDUSTRIAL">Industrial</option>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Project Title</label>
    <input value="<?php echo $project->title ?>" type="text" <?php if(isset($_POST['title'])) echo $_POST['title']?> class="form-control" id="file" name="title" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Location</label>
    <input value="<?php echo $project->location ?>" type="text" class="form-control" id="" name="location" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Creative Director
</label>
    <input type="text" value="<?php echo $project->director ?>" class="form-control" id="" name="director" required>
  </div>
  <img class="mb-2"  style="width:120px;height:80px" src="<?php echo base_url('assets/upload/gallery/');?><?php echo  $project->img1?>" alt="">
  <div class="mb-3">
    <label for="file" class="form-label">Select first image</label>

    <input type="hidden" value="<?php echo  $project->img1?>" class="form-control" id="" name="selected_img1">
    <input type="file" class="form-control" id="" name="img1">
  </div>
  <img class="mb-2"  style="width:120px;height:80px" src="<?php echo base_url('assets/upload/gallery/');?><?php echo  $project->img2?>" alt="">
  <div class="mb-3">
    <label for="file" class="form-label">Select second image</label>

    <input type="hidden" value="<?php echo  $project->img2?>" class="form-control" id="" name="selected_img2">
    <input type="file" class="form-control" id="" name="img2">
  </div>
  <img class="mb-2"  style="width:120px;height:80px" src="<?php echo base_url('assets/upload/gallery/');?><?php echo  $project->img3?>" alt="">
  <div class="mb-3">
  <label for="file" class="form-label">Select first from two image section</label>

    <input type="hidden" value="<?php echo  $project->img3?>" class="form-control" id="" name="selected_img3">
    <input type="file" class="form-control" id="" name="img3">
  </div>
  <img class="mb-2"  style="width:120px;height:80px" src="<?php echo base_url('assets/upload/gallery/');?><?php echo  $project->img4?>" alt="">
  <div class="mb-3">
  <label for="file" class="form-label">Select second from two image section</label>
    <input type="hidden" value="<?php echo  $project->img4?>" class="form-control" id="" name="selected_img4">
    <input type="file" class="form-control" id="" name="img4">
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Select Multiple Images</label>
    <input type='file' class="form-control" name='files[]' multiple="" required> <br/><br/>
  </div>
  <div class="mb-3">
      <label class="form-label" for="Desciption">Desciption</label>
    <textarea type="Desciption" class="form-control" id="Desciption" name="description" rows="2"><?php echo $project->description ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary w-25">Submit</button>
</form>
<?php $i++;  } 
           ?>   
		</div>
		
	</div>
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
    

      </div>
    </section>

  </main><!-- End #main -->


                <script>
                        CKEDITOR.replace( 'Desciption' );
                </script>