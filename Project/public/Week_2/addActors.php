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
        include '../Functions/dbconnect.php';
        include '../Functions/functions.php';

        $results = '';

        if (isPostRequest()) {
            $db = getDatabase();

            $stmt = $db->prepare("INSERT INTO actors SET firstname = :firstname, lastname = :lastname, dob = :dob, height = :height");

            $firstname = filter_input(INPUT_POST, 'firstname');
            $lastname = filter_input(INPUT_POST, 'lastname');
            $dob = filter_input(INPUT_POST, 'dob');
            $height = filter_input(INPUT_POST, 'height');

            $binds = array(
                ":firstname" => $firstname,
                ":lastname" => $lastname,
                ":dob" => $dob,
                ":height" => $height,
            );

            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Data Added';
            }
            echo $results;
        }
        ?>

        <form style="margin-left: 5%; margin-right:5%;" method="post" action="#">
            <div class="card">
            <div class="form-group">
                <label>First Name</label>
                <input class="form-control"placeholder="Ex. John" type="text" name="firstname">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input class="form-control" placeholder="Ex. Doe" type="text" name="lastname">
            </div>
            <div class="form-group">
                <label>DOB</label>
                <input class="form-control" placeholder="Ex. MM/DD/YYYY" type="text" name="dob">
            </div>
            <div class="form-group">
                <label>Height</label>
                <input class="form-control" placeholder="Ex. 5' 11 " type="text" name="height">
            </div>
                <div class="row">
                    <div class="col" style="margin-left:40%;">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../Week 2/viewActors.php" class = "btn btn-secondary">View</a>
                    </div>

                </div>
            </div>
        </form>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
