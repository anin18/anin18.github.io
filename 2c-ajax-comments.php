<?php
/* [INIT] */
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
require PATH_LIB . "2b-lib-comments.php";
$pdo = new Comments();

/* [HANDLE AJAX REQUESTS] */
switch ($_POST['req']) {
	/* [INVALID REQUEST] */
	default:
		echo "ERROR";
		break;

	/* [SHOW COMMENTS] */
  case "show":
	$comments = $pdo->get($_POST['post_id']);
	
	function show ($cid, $rid, $name, $time, $message, $indent = 0) { ?>
	
	<div class="comment-inner">
	<article class="comment-item mb-3 p-3">
	<div class="mb-2 ccomment<?= $indent ? " creply" : "" ?>"><div>
     
		<span class="cname commentator"><?=$name?></span>
		<p class="date small mb-2">
		<span class="ctime text-secondary"><?=$time?></span>
	</p>
	  </div>
	  		<div class="col-md-9">
			  <form class="form-inline comments-item-form justify-content-between align-items-start py-2">	
			  <div class="form-group w-75">	    
			<div class="cmessage form-control w-100 mb-md-0"><?=$message?></div>
			<input type="toggle" class="cbutton btn btn-warning text-white ml-md-5" value="Reply" onclick="comments.reply(<?=$cid?>, <?=$rid?>)"/>
			</div>
			</form>
			<div id="reply-<?=$cid?>"></div>
			</div>
		</div>
		</article>
		</div>
		<?php }
		if (is_array($comments)) { foreach ($comments as $c) {
			show($c['comment_id'], $c['comment_id'], $c['name'], $c['timestamp'], $c['message']);
			if (is_array($c['reply'])) { foreach ($c['reply'] as $r) {
				show($r['comment_id'], $c['comment_id'], $r['name'], $r['timestamp'], $r['message'], 1);
			}}
		}}
		break;

	/* [SHOW REPLY FORM] */
  case "reply": ?>
		<form onsubmit="return comments.add(this)" class="creplyform form-inline comments-item-form justify-content-between align-items-start py-2">
	  <!-- <h1>Leave a comment</h1> -->
	  	
	  <input type="hidden" name="reply_id" value="<?=$_POST['reply_id']?>"/>
	  <div class="row justify-content-between no-gutters">
	  <div class="col-md-8">
	  <div class="form-group">
	  <textarea name="message" class="form-control w-100 mb-md-0" placeholder="Message" required></textarea>
      <input type="text" class="form-control btn btn-warning text-white ml-md-5" name="name" placeholder="Name" required/>
	
	  <input type="submit" class="cbutton" value="Post Comment"/>
	  </div>
	  </div>
	  </div>
	</form>
	
		<?php break;

	/* [ADD COMMENT] */
	case "add":
		echo $pdo->add($_POST['post_id'], $_POST['name'], $_POST['message'], $_POST['reply_id']) ? "OK" : "ERR";
		break;
}
?>