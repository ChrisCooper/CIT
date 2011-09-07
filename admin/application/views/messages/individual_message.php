<div id="message">
    <a href="" onclick="window.open('<?= site_url("listen"); ?>','mywindow','width=550,height=160')">
        <img src="<?= image_url("Luke-Icon.png"); ?>" width="50" height="50" alt="luke" />
    </a>
    <div id="info">
        <strong>
            <a href="" class="message_title"onclick="window.open('<?= site_url("listen"); ?>','mywindow','width=550,height=160')">
             <?=$title;?>
            </a>
        </strong>
        <p>
            <?= $author;?>
        </p>
        <p>
            Recorded: <?=$date_recorded;?>
        </p>
    </div>   
</div>