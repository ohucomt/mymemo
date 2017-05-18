<div class="card-block">
    <div>
        <h3><i class="fa fa-pencil"> New Memo:</i></h3>
        <hr class="mt-2 mb-2">
    </div>
    <form method="post" action="<?=ROOT_PATH.'memo/add'?>">
        <div class="md-form">
            <textarea class="md-textarea validate" id="form1" type="text" name="body" require></textarea>
            <label for="form1">Content</label>
        </div>
        
        <div class="text-right">
            <button class="btn btn-success" type="submit" name="submit" value="submit">Add</button>
        </div>
        
    </form>
</div>

<div class="row">
    <?php

	foreach ($viewmodel as $item) {
        
    ?>
    <div class="col-md-4">
        <div class="card hoverable">
            <div class="card-block">
                <div class="card-title ">
                   <div class="row">
                       <div class="col-md-9">
                           <small style="font-size: 0.9em;"><?= $item['created_date']?></small>
                       </div>
                       <div class="col-md-1">
                            <a href="<?=ROOT_PATH.'memo/edit/'.$item['id']?>"><i class="fa fa-pencil" ></i></a>
                       </div>
            
                       <div class="col-md-1">
                           <a href="<?=ROOT_PATH.'memo/delete/'.$item['id']?>"><i class="fa fa-trash" ></i></a>
                       </div>
                   </div>
                </div>

            
                <p class="card-text"><?= nl2br($item['body'])?></p>
                
            </div>
        </div>
        <br>
    </div>

    <?php
    }
          
    ?>
    
</div>

