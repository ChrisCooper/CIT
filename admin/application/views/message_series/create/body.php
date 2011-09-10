<div id="left">
 <p>
  Fill in the information and choose a file to upload it to the website.
 </p>
</div>

<div id="right">
 <h1>
  Add a new message series
 </h1>
 <p>
  &nbsp;
 </p>
 
 
 <div id="upload_form">
  <div id="validation_errors">
   <?=validation_errors(); ?>
   <p>
    <?=$upload_errors?>
   </p>
  </div>

 <?= form_open_multipart('admin/message_series/create');?>

 Title: 
 <?php $data = array(
              'name'        => 'title',
              'id'          => 'message_series_title',
              'maxlength'   => '255',
              'size'        => '50',
              'value'       => set_value('title'),
              
            );

 echo form_input($data); ?><br /><br />
 
  Ministry: 
 <?php $data = array(
              'name'        => 'ministry',
              'id'          => 'message_series_ministry',
              'maxlength'   => '255',
              'size'        => '50',
              'value'       => set_value('ministry'),
            );

 echo form_input($data); ?><br /><br />

 <p>Recording:<input type="file" name="userfile" size="20" value=""/></p>
 <p>Max file size: 100KB, allowed type: png </p>

 <br /><br />

 <input type="submit" name="submit" value="upload" />

</form>
 </div>
 
</div>