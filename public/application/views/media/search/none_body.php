<div id="left">
 <h2>
  Search
 </h2>
 
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
	   Messages by date
	    </h1>
	     <p>
	         &nbsp;
		  </p>
		       
			   <p>
			   There are currently no messages matching your search criteria.
			   </p>
			    </div>
