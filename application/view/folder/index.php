<div class="box">
  <!-- echo out the system feedback (error and success messages) -->
  <?php $this->renderFeedbackMessages(); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" data-background-color="red">
          <h4 class="title">Organisation Folder</h4>
            <p class="category">Here you see your domain folder</p>  
        </div>
          <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form> 
      </div>
      <div class="col-md-12">
        <h4>Here are the files being stored</h4>
          <form action="<?= config::get("URL"); ?>folder/actionFileUpload" method="post" enctype="multipart/form-data">
            <input type="file" name="uploadFile" id="uploadFile">
            <input type="submit" name="submit" value="Upload File" >
          </form>      
      </div>
    </div>
  </div>
    <?php 
      // header("Refresh:3; url=http://localhost:8888/uFlyProject/folder/index");
    ?>
</div>