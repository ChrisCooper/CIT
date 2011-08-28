<div id="left">
 <p>
  Fill in the information and choose a file to upload it to the website.
 </p>
</div>

<div id="right">
 <h1>
  Add a new message
 </h1>
 <p>
  &nbsp;
 </p>
 
 
 <div id="upload_form">
  <?php echo $error;?>

 <?php echo form_open_multipart('admin/do_upload_message');?>

 Title: 
 <?php $data = array(
              'name'        => 'title',
              'id'          => 'message_title',
              'maxlength'   => '255',
              'size'        => '50',
            );

 echo form_input($data); ?><br /><br />
 
  Author: 
 <?php $data = array(
              'name'        => 'author',
              'id'          => 'message_author',
              'maxlength'   => '255',
              'size'        => '50',
            );

 echo form_input($data); ?><br /><br />


 <input type="file" name="userfile" size="20" />
 <p>Max file size: 40MB</p>

 <br /><br />

 <input type="submit" value="upload" />

</form>
 </div>
 
</div>