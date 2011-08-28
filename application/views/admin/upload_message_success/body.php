<div id="left">
 <p>
  That message has been uploaded.
 </p>
</div>

<div id="right">
 <h1>
  Add a new message
 </h1>
 <p>
  &nbsp;
 </p>
 
 <p>
  Some stuff here. 
 </p>
 
 <ul>
 <?php foreach ($upload_data as $item => $value):?>
  <li>
   <?php echo $item;?>: <?php echo $value;?>
  </li>
 <?php endforeach; ?>
 </ul>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</form>
 </div>
 
</div>