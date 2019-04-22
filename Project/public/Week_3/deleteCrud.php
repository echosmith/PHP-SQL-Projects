<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <?php include '../NavigationTab.php'; ?>
        <?php

            include './dbconnect.php';
            include './functions.php';

            /*
             * get and hold a database connection
             * into the $db variable
             */
            $db = getDatabase();

            $id = filter_input(INPUT_GET, 'id');

            $stmt = $db->prepare("DELETE FROM corps where id = :id");

            $binds = array(
                ":id" => $id
            );


        $isDeleted = false;
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $isDeleted = true;
        }

        ?>


        <h1> Record <?php echo $id; ?>
         <?php if ( !$isDeleted ): ?>
          Not
        <?php endif; ?>
        Deleted</h1>

        <p> <a href="./corpCrud.php">View page</a></p>



    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
