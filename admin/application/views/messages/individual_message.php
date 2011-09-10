<div id="message">
    <a href="" onclick="window.open('<?= site_url("listen/play/" . $filename); ?>','mywindow','width=550,height=160')">
        <img src="<?= image_url("Luke-Icon.png"); ?>" width="50" height="50" alt="luke" />
    </a>
    <div id="info">
        <strong>
            <a href="" class="message_title"onclick="window.open('<?= site_url("listen/play/" . $filename);?>','mywindow','width=550,height=160')">
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
                     $hidden = array('id' => $id);
                     echo form_open('admin/messages/edit/', '', $hidden);
                 ?>
     
                 <input type="submit" name="submit" value="Edit" />
                
                </form>
           </span>

        </p>
    </div>   
</div>