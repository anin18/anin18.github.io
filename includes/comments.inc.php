<?php

function setComments($conn)
{
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $id = $_POST['id'];

        $sql = "INSERT INTO comments (uid, date, message, id) VALUES ('" . $uid . "', '" . $date . "', '" . $message . "', '" . $id . "')";
        $result = $conn->query($sql);
    }
}

function getComments($conn)
{
   
    $sql = "SELECT cid, date, message, uid FROM `comments`
    ORDER BY date desc";
    $result = $conn->query($sql);
    echo '<div class="bg-light pb-5" id="comm">';
    while ($row = $result->fetch_assoc()) {
        echo '
        <article class="comment-item p-3 m-auto">
            <div class="ccomment p-2 p-sm-3 ">
                <div>
                    <span class="cname font-weight-bold">'.$row["uid"].'</span>
                    <p class="date small mb-2">
                        <span class="ctime text-secondary">'.$row["date"].'</span>
                    </p>
                </div>
                <div class="mb-2">
                    <p>'. nl2br($row["message"]).'</p>
                </div>
            <div>';
       

        if ($_SESSION['userUid']==$row["uid"]) {
            echo " 
            <div>
                <form method='POST' action='editcomment.php' style='display: inline-block'>
                    <input type='hidden' name='cid' value='" . $row['cid'] . "'>
                    <input type='hidden' name='uid' value='" . $row['uid'] . "'>
                    <input type='hidden' name='date' value='" . $row['date'] . "'>
                    <input type='hidden' name='message' value='" . $row['message'] . "'>
                    <button type='submit' class='log btn btn-pinkdark text-white btn-sm'> Izmeni </button>
                </form>";

            echo "
                <form method='POST' action='includes/deleteComment.inc.php' style='display: inline-block'>
                    <input type='hidden' name='cid' value='" . $row['cid'] . "'>              
                    <button type='submit' name='commentDelete' class='btn btn-warning btn-sm text-white ml-md-4'> Obriši </button>
                </form>
            </div>";
            }
            echo "</article>";      
    }
    echo "</div>";
}
