<div id="message">
    <a href="" onclick="window.open('<?= site_url("media/listen/" . $id); ?>','mywindow','width=476,height=245')">
        <img src="<?= site_url("message_series/" . $series_filename); ?>" width="69" height="50"/>
    </a>
    <div id="info">
        <strong>
            <a href="" class="message_title" onclick="window.open('<?= site_url("media/listen/" . $id);?>','mywindow','width=476,height=245')">
             <?=$title;?>
            </a>
        </strong>
        <p>
            <?= $author;?>
        </p>
        <p>
            <?=$date_recorded;?> - <a href="" class="message_title" onclick="window.open('<?= site_url("media/listen/" . $id);?>','mywindow','width=476,height=245')">Listen</a> - <a href="" class="message_title" onclick="window.open('<?= site_url("media/download/" . $id);?>','message_download')">Download</a>
        </p>
    </div>   
</div>