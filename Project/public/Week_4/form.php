<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        
        <?php

        include '../NavigationTab.php';
        include_once './functions/dbData.php';
        
        $action = filter_input(INPUT_GET, 'action');
        
        if ( $action === 'sort' ) {
            echo 'submited form 1';
            $dataone = filter_input(INPUT_GET, 'dataone');
            echo '<br>'.$dataone;
            $datatwo = filter_input(INPUT_GET, 'datatwo');
            echo '<br>'.$datatwo;
            $results = getSortTest($datatwo, $dataone);
        } else if ( $action === 'search' ) {
            echo 'submited form 2';
            $dataone = filter_input(INPUT_GET, 'dataone');
            echo '<br>'.$dataone;
            $datatwo = filter_input(INPUT_GET, 'datatwo');
            echo '<br>'.$datatwo;
            $results = getSearchTest($datatwo, $dataone);
        } else {
            $results = getAllTestData();
        }
        
        include './includes/form1.php';
        include './includes/form2.php';
        ?>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Corporation</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Zipcode</th>
                    <th>Owner</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo date("m/d/Y", strtotime($row['incorp_dt'])); ?></td>  
                    <td><?php echo $row['email']; ?></td>            
                    <td><?php echo $row['zipcode']; ?></td>            
                    <td><?php echo $row['owner']; ?></td>            
                    <td><?php echo $row['phone']; ?></td>            
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
