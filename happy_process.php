<?php
    require_once('./global/connection.php');

    global $db;
    $picNumber = rand(1 , 10);
    $add_pic_path = $picNumber . ".jpg";
    $add_pic_id = 1;
    try {
        $query = "UPDATE picture
        SET
        pic_path = :add_pic_path
        WHERE
        pic_id = :add_pic_id;
        ";
        $statement= $db->prepare($query);
        $statement->bindParam(':add_pic_path', $add_pic_path);
        $statement->bindParam(':add_pic_id', $add_pic_id);
        $statement->execute();
            
        $statement->closeCursor();
    }
    catch (PDOException $e) {
        $error= $e->getMessage();
        display_db_error($error);
    }
    header('Location: http://www.andrewpendergast.com/dab');
?>