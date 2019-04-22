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

            $db = getDatabase();

            $result = '';
            if (isPostRequest()) {
                $id = filter_input(INPUT_POST, 'id');
                $corp = filter_input(INPUT_POST, 'corp');
                $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
                $email = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $owner = filter_input(INPUT_POST, 'owner');
                $phone = filter_input(INPUT_POST, 'phone');
                $stmt = $db->prepare("UPDATE corps set corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone where id = :id");

                $binds = array(
                    ":id" => $id,
                    ":corp" => $corp,
                    ":incorp_dt" => $incorp_dt,
                    ":email" => $email,
                    ":zipcode" => $zipcode,
                    ":owner" => $owner,
                    ":phone" => $phone
                );

                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $result = 'Record updated';
                }
            } else {
                $id = filter_input(INPUT_GET, 'id');
                $stmt = $db->prepare("SELECT * FROM corps where id = :id");
                $binds = array(
                    ":id" => $id
                );
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $results = $stmt->fetch(PDO::FETCH_ASSOC);
                }
                if ( !isset($id) ) {
                    die('Record not found');
                }
                $corp = $results['corp'];
                $incorp_dt = $results['incorp_dt'];
                $email = $results['email'];
                $zipcode = $results['zipcode'];
                $owner = $results['owner'];
                $phone = $results['phone'];
            }

        ?>

        <h1><?php echo $result; ?></h1>
        <form style="margin-left: 5%; margin-right:5%;" method="post" action="#">
            <div class="card">
            <div class="form-group">
                <label>Corp</label>
                <input class="form-control" value="<?php echo $corp; ?>" type="text" name="corp">
            </div>
            <div class="form-group">
                <label>Established</label>
                <input class="form-control" value="<?php echo $incorp_dt; ?>" type="text" name="incorp_dt" readonly>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" value="<?php echo $email; ?>" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Zip Code</label>
                <input class="form-control" value="<?php echo $zipcode; ?>" type="text" name="zipcode">
            </div>
            <div class="form-group">
                <label>Owner</label>
                <input class="form-control" value="<?php echo $owner; ?>" type="text" name="owner">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" value="<?php echo $phone; ?>" type="text" name="phone">
            </div>
            <div class="form-group">
                <label>ID</label>
                <input class="form-control" type="text" value="<?php echo $id; ?>" name="id" readonly/>
            </div>
                <div class="row">
                    <div class="col" style="margin-left:40%;">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="./corpCrud.php" class = "btn btn-secondary">View</a>
                    </div>

                </div>
            </div>
        </form>

    </body>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
