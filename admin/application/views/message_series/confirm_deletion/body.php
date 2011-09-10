<div id="left">
 <p>
  Please confirm or cancel the deletion.
 </p>
</div>

<div id="right">
 <h1>
  Are you sure you want to delete this message series?
 </h1>
 <p>
  &nbsp;
 </p>
 <p>
  If you delete this message series, any messages associated with it not be serachable by series, and will show a default image as their thumbnail.
 </p>
 
 <p>
  
  <?php
     echo form_open('admin/message_series/');
 ?>
 
 <input type="submit" name="submit" value="Cancel" />
 
 </form>
 
  
 <?php
     $hidden = array('id' => $id);
     echo form_open('admin/message_series/delete', '', $hidden);
 ?>
 
 <input type="submit" name="submit" value="Delete" />
 
 </p>
 
</div>