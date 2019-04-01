<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>SE_266</title>
    </head>
    <body>
        <?php include './NavigationTab.php'; ?>
            <div class="jumbotron shadow-lg p-3 mb-5 bg-white rounded container-fluid h-100">
                <div class ="row" style="margin-left: 4%">
                    <div class="col-">
                <h1 class="display-4">Project Web Page</h1>
            <p class="lead" style="margin-top:4%">Welcome to William Connolly's PHP project page!</p>
            <hr class="my-4">
            <p>The Nav Bar above contains the Assignments web pages, where this container will have the Git repository and files.</p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom: 2%;">
                PHP Files
            </button>
                </div>
            
            
<!-- Panel ------------------------------------------------------>
            <div class="col-4 mb-0">
            <img class="rounded-circle mx-auto d-block" src="./Content/generic.png" alt="Generic placeholder image" width="140" height="140">
            <h2 class = "text-center"><a href="https://github.com/echosmith/PHP-SQL-Projects">William Connolly's Git</a></h2>
            <p class = "text-center">This Link above directly leads to the PHP git repository. Three educational instances used for PHP are below.</p>
                <ul class="list-group">
                    <li class="list-group-item"><a href="https://www.w3schools.com/php/default.asp">w3schools</a></li>
                    <li class = "list-group-item"><a href="http://www.php.net/">php.net</a></li>
                    <li class = "list-group-item"><a href="https://www.learn-php.org/">Learn Php</a></li>
                </ul>
        </div>
            
                </div>
            
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#WeekOneFiles" aria-expanded="false" aria-controls="WeekOneFiles">
                                Week_1
                              </button>
                            </h5>
                          </div>
                            <div id="WeekOneFiles" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="../Week 1/hello.zip" class="list-group-item list-group-item-action">Hello</a>
                                    <a href="../Week 1/FizzBuzz.zip" class="list-group-item list-group-item-action ">FizzBuzz</a>
                                    <a href="../Week 1/Card Lab 1.zip" class="list-group-item list-group-item-action ">Credit Card</a>

                                </div>
                            </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <script>
            var toggler = document.getElementsByClassName("caret");
            var i;

            for (i = 0; i < toggler.length; i++) {
                toggler[i].addEventListener("click", function() {
                    this.parentElement.querySelector(".nested").classList.toggle("active");
                    this.classList.toggle("caret-down");
                });
            }
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
