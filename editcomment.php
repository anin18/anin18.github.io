<?php
require 'header.php';
?>

<main class="main-comments" style="background-image: url('images/assets/pink1.jpg'); padding-top:200px">
    <?php
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    echo '
    <article class="comment-item p-3 container" style="width: 50%;">
      <div class="ccomment p-sm-3 ">
        <div class="mb-2">
          <form method = "post" action="includes/editComment.inc.php" >
            <input type ="hidden" name= "cid" value="' . $cid . '">
            <input type ="hidden" name= "uid" value="' . $uid . '">
            <input type ="hidden" name= "date" value="' . $date . '">
            <textarea name="message" class="form-control w-100 mb-md-0 input-comment">' . $message . '</textarea><br>
            <button type="submit" name="commentSubmit" class="log btn btn-pinkdark text-warning btn-sm"> Izmeni </button>
          </form>
        </div>
      </div>
  </article>';
    ?>
</main>
<?php
require 'footer.php';
?>