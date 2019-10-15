<?php

    // session_start();
    $id = 0;
    $name = '';
    $comment = '';
    $times='';
    $update = false;

    $mysqli = new mysqli('localhost', 'root', '', 'register') or die (mysqli_error($mysqli));
    
    if(isset($_POST['save'])) {

        $name = $_POST['name'];
        $comment = $_POST['comment'];

        
        $mysqli->query("INSERT INTO data (name, comment) VALUES('$name', '$comment')") or die($mysqli->error);

        // $_SESSION['message'] = "Record has been saved!";
        // $_SESSION['msg_type'] = 'success';
        header("location: comments.php");
    }

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());
        // $_SESSION['message'] = "Record has been deleted!";
        // $_SESSION['msg_type'] = "danger";
        header("location: comments.php");
    }
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
        if ($result->num_rows) {
            $row = $result->fetch_array();
            $name = $row['name'];
            $comment = $row['comment'];
            $times = $row['times'];
        }
    }
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $mysqli->query("UPDATE data SET name='$name', comment='$comment' WHERE id=$id") or die($mysqli->error);
        // $_SESSION['message'] = "Record has been updated!";
        // $_SESSION['msg_type'] = "warning";
        header('location: comments.php');
    }
    

?>