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
        $stmt = $db->prepare("SELECT * FROM corps");
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <table class="table table-striped">
            <thead class ="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Corp</th>
                    <th scope="col">Established</th>
                    <th scope="col">Email</th>
                    <th scope="col">Zip</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col"><a class = "btn btn-secondary" href="./createCrud.php">Create</a></th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo $row['incorp_dt']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['zipcode']; ?></td>
                    <td><?php echo $row['owner']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="./readCrud.php?id=<?php echo $row['id']; ?>">Read</a>
                                <a class="dropdown-item" href="./updateCrud.php?id=<?php echo $row['id']; ?>">Update</a>
                                <a class="dropdown-item" href="./deleteCrud.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
