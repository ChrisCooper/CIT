<div id="message">
    <img src="<?=site_url('message_series/'. $filename); ?>" width="50" height="50" alt="luke" />
    <div id="info">
        <strong>
            <p>
                <?=$title;?> , <?=$id;?>
            </p>
        </strong>
        <p>
            <?= $ministry;?>
        </p>
        <p>
            <span>
                <?php
                    $hidden = array('id' => $id);
                    echo form_open('admin/message_series/confirm_deletion', '', $hidden);
                ?>
    
                <input type="submit" name="submit" value="Delete" />
               
               </form>
           
           </span>
            <span>
                <?php
                     $hidden = array('id' => $id);
                     echo form_open('admin/message_series/edit/', '', $hidden);
                 ?>
     
                 <input type="submit" name="submit" value="Edit" />
                
                </form>
           </span>

        </p>
    </div>   
</div>