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
            Recorded: <?=$date_recorded;?>
        </p>
        <p>
            <span>
                <?php
                    $hidden = array('id' => $id);
                    echo form_open('admin/messages/confirm_deletion', '', $hidden);
                ?>
    
                <input type="submit" name="submit" value="Delete" />
               
               </form>
           
           </span>
            <span>
                <?php
                     //$hidden = array('id' => $id);
                     //echo form_open('admin/messages/edit/', '', $hidden);
                     //echo '<input type="submit" name="submit" value="Edit" />';
                 ?>
                
                </form>
           </span>

        </p>
    </div>   
</div>