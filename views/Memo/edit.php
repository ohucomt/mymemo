
<?php
	$item = $viewmodel[0];
	

?>

<div class="card-block">
    <div>
        <h3><i class="fa fa-pencil"> New Memo:</i></h3>
        <hr class="mt-2 mb-2">
    </div>
    <form method="post" action="<?=ROOT_PATH.'memo/edit/'.$item['id']?>">
        <div class="md-form">            
            <textarea type="text" id="bodytext" name="body" class="md-textarea"></textarea>
            <label for="bodytext">Content</label>
            <input type="hidden" id="body" value="<?= $item['body']?>">
        </div>
        
        <div class="text-right">
            <button class="btn btn-success" type="submit" name="submit" value="submit">Done</button>
            <a class="btn btn-danger" href="<?=ROOT_PATH.'memo'?>">Cancel</a>
        </div>
        
    </form>
</div>



<script type="text/javascript">
	var body = document.getElementById("body").value;
	document.getElementById("bodytext").value = body;

</script>