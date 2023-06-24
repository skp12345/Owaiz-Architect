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
      <h1>Add Project</h1>
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
      <form enctype="multipart/form-data" action="<?php echo base_url();?>addproject_process" method="post">
        <!-- Left side columns -->
        <div class="col-lg-12">
        <h3 class="text-center mt-3"></h3>
        <div class="card p-5">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select Project Category</label>
    <!-- <input type="text" <?php if(isset($_POST['category'])) echo $_POST['category']?> class="form-control" id="file" name="category" required> -->
    <select <?php if(isset($_POST['category'])) echo $_POST['category']?> name="category" class="form-select" aria-label="Default select example" required>
  <option selected disabled>Select</option>
  <option value="RESIDENTIAL">Residential</option>
  <option value="COMMERCIAL">Commercial</option>
  <option value="LEISURE">Leisure</option>
  <option value="PUBLIC">Public</option>
  <option value="INDUSTRIAL">Industrial</option>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Project Title</label>
    <input type="text" <?php if(isset($_POST['title'])) echo $_POST['title']?> class="form-control" id="file" name="title" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Location</label>
    <input type="text" class="form-control" id="file" name="location" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Team Members
</label>
    <input type="text" class="form-control" id="file" name="director" required>
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Select first image</label>
    <input type="file" class="form-control" id="file" name="img1" required>
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Select second image</label>
    <input type="file" class="form-control" id="file" name="img2" required>
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Select first from two image section</label>
    <input type="file" class="form-control" id="file" name="img3" required>
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Select second from two image section</label>
    <input type="file" class="form-control" id="file" name="img4">
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Select Multiple Images</label>
    <input type='file' class="form-control" name='files[]' multiple=""> <br/><br/>
  </div>
  <div class="mb-3">
      <label class="form-label" for="Desciption">Desciption</label>
    <textarea type="Desciption" class="form-control" id="Desciption" name="description" rows="2"></textarea>
  </div>
  <button type="submit" class="btn btn-primary w-25">Submit</button>
</form>
  
  </div>
</div>
</form>
			
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