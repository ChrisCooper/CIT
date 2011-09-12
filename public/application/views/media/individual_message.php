<div id="message">
    <a href="" onclick="window.open('<?= site_url("messages/" . $filename); ?>','mywindow','width=550,height=160')">
        <img src="<?= site_url("message_series/" . $series_filename); ?>" width="50" height="50"/>
    </a>
    <div id="info">
        <strong>
            <a href="" class="message_title"onclick="window.open('<?= site_url("messages/" . $filename);?>','mywindow','width=550,height=160')">
             <?=$title;?>
            </a>
        </strong>
        <p>
            <?= $author;?>
        </p>
        <p>
            <?=$date_recorded;?>
        </p>
    </div>   
</div>