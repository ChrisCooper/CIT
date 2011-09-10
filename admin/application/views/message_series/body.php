<div id="left">
 <h2>
  Message Series
 </h2>
 <p>
  From here, you can see all message series. Select "Create a new message series", or click on the "edit" and "delete" buttons to manage existing message series.
 </p>
</div>

<div id="right">
 <h1>
  Manage Message Series
 </h1>
 <p>
  &nbsp;
 </p>
 <a href="<?= site_url("admin/message_series/create"); ?>">Create a new message series</a>
 <p>
  &nbsp;
 </p>
 
 <div id="all_message_series">
  <?=$message_series;?>
 </div>
 
 <div id="pagination_links">
  <?=$pagination_links;?>
 </div>
 
</div>