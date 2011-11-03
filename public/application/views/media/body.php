<div id="left">
 <h1>
  Search
 </h1>
 <br/>
 <p>
    
  <form method="get" action="<?=site_url('media/search/');?>">
  Title: <br/>
 <?php $data = array(
              'name'        => 'title',
              'id'          => 'title',
              'maxlength'   => '255',
              'size'        => '20',
              'value'       => set_value('title'),
              
            );

 echo form_input($data); ?><br /><br />
 
  Speaker: <br/> 
 <?php $data = array(
              'name'        => 'author',
              'id'          => 'author',
              'maxlength'   => '255',
              'size'        => '20',
              'value'       => set_value('author'),
            );

 echo form_input($data); ?><br /><br />
 
 Message Series:
 
 <?=form_dropdown('series_id', $options, ''); ?><br /><br />

After this date: <input type="text" name="date_recorded_after" id="datepicker_after">
<br/>
<br/>
Before this date: <input type="text" name="date_recorded_before" id="datepicker_before">

<br/>
<br/>
 <input type="submit" name="submit" value="Search" />
<br/>
&nbsp;
<br/>
</form>
  
 </p>
</div>

<div id="right">
 <h1>
  Messages by Date
 </h1>
 <p>&nbsp;
    
 </p>
 <div id="all_messages">
  <?=$messages;?>
 </div>
 
 <div id="pagination_links">
  <?=$pagination_links;?>
 </div>
 
</div>