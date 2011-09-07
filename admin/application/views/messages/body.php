<div id="left">
 <h2>
  Messages
 </h2>
 <p>
  From here, you can see all messages. Select "Upload a new message", or click on the "edit" and "delete" buttons to manage existing messages.
 </p>
</div>

<div id="right">
 <h1>
  Manage Messages
 </h1>
 <p>
  &nbsp;
 </p>
 <a href="<?= site_url("admin/messages/create"); ?>">Upload a new message</a>
 <p>
  &nbsp;
 </p>
 
 <div id="all_messages">
  <?=$messages;?>
 </div>
 
 <div id="pagination_links">
  <?=$pagination_links;?>
 </div>
 
</div>