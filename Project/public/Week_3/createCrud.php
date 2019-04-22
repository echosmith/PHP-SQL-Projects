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

        $results = '';

        if (isPostRequest()) {
            $db = getDatabase();

            $stmt = $db->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = now(), email = :email, zipcode = :zipcode, owner = :owner, phone = :phone");

            $corp = filter_input(INPUT_POST, 'corp');
            $email = filter_input(INPUT_POST, 'email');
            $zipcode = filter_input(INPUT_POST, 'zipcode');
            $owner = filter_input(INPUT_POST, 'owner');
            $phone = filter_input(INPUT_POST, 'phone');

            $binds = array(
                ":corp" => $corp,
                ":email" => $email,
                ":zipcode" => $zipcode,
                ":owner" => $owner,
                ":phone" => $phone
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
                <label>Corp</label>
                <input class="form-control"placeholder="Ex. Corp LLC" type="text" name="corp">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" placeholder="Ex. John.Doe@something.com" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Zip Code</label>
                <input class="form-control" placeholder="Ex. 00000" type="text" name="zipcode">
            </div>
            <div class="form-group">
                <label>Owner</label>
                <input class="form-control" placeholder="Ex. John Doe" type="text" name="owner">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" placeholder="Ex. (800)555-5555" type="text" name="phone">
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
