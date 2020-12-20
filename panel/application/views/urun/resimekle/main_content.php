<form action="<?php echo base_url("urun/image_upload");?>" 
      class="dropzone"
      id="my-awesome-dropzone">
      <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
    
    </form>

      <?php echo $this->session->userdata("urun_id");?>