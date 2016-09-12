<?php
    require_once('../global/connection.php');
    global $db;
    $pic_id = 1;
    $query = "SELECT * FROM picture WHERE pic_id = :pic_id_p";
        try {
            $statement = $db->prepare($query);
            $statement->bindParam(':pic_id_p', $pic_id);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            //exit(print_r(array_values($result)));
            $result = $result[0];
        }
        catch (PDOException $e) {
            $error=$e->getMessage();
            display_db_error($error);
        }
?>
<!DOCTYPE html>
<!-- BEGIN DOCUMENT -->
<html>
<!-- ================================================================= -->
<!-- HEADER -->
<head>
<!--
	AUTHOR: Andrew Pendergast
	LAST UPDATED ON: Janurary 27, 2016
	PLATFORM: HTML
-->
	<title>Dab</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="refresh" content="1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="./css/media_queries.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body id="backgroundTwo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <h1 class="text-center">Drake Simulator</h1>
                <img src="<?php echo htmlspecialchars($result['pic_path']);?>" style="width: 100%" class="text-center" />
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="./js/script.js" type="text/javascript"></script>
</body>
</html>
