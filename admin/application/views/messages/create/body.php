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
  <div id="validation_errors">
   <?=validation_errors(); ?>
   <p>
    <?=$upload_errors?>
   </p>
  </div>

 <?= form_open_multipart('admin/messages/create');?>

 Title: 
 <?php $data = array(
              'name'        => 'title',
              'id'          => 'message_title',
              'maxlength'   => '255',
              'size'        => '50',
              'value'       => set_value('title'),
              
            );

 echo form_input($data); ?><br /><br />
 
  Author: 
 <?php $data = array(
              'name'        => 'author',
              'id'          => 'message_author',
              'maxlength'   => '255',
              'size'        => '50',
              'value'       => set_value('author'),
            );

 echo form_input($data); ?><br /><br />


 <input type="file" name="userfile" size="20" value="<?=set_value('author')?>"/>
 <p>Max file size: 40MB</p>

 <br /><br />

 <input type="submit" name="submit" value="upload" />

</form>
 </div>
 
</div>