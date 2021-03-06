<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <!-- I understand what is going on, I was assisted designing the look -->
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
            <p>The Navigation Tab above contains the Assignments web pages, where this container will have the Git repository and files.</p>
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
                    <li class = "list-group-item"><a href="https://stackoverflow.com">Stack OverFlow</a></li>
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
                                    <a href="../SE266/Week 1/hello.zip" class="list-group-item list-group-item-action">Hello</a>
                                    <a href="../SE266/Week 1/FizzBuzz.zip" class="list-group-item list-group-item-action ">FizzBuzz</a>
                                    <a href="../SE266/Week 1/Card Lab 1.zip" class="list-group-item list-group-item-action ">Credit Card</a>

                                </div>
                            </div>
                    </div>
<!-- New Card Slot -------------------------------------------------->
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#WeekTwoFiles" aria-expanded="false" aria-controls="WeekTwoFiles">
                                Week_2
                              </button>
                            </h5>
                          </div>
                            <div id="WeekTwoFiles" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="../SE266/Week 2/03add.zip" class="list-group-item list-group-item-action">Add</a>
                                    <a href="../SE266/Week 2/03view.zip" class="list-group-item list-group-item-action ">View</a>
                                    <a href="../SE266/Week 2/addActors.zip" class="list-group-item list-group-item-action ">AddActor</a>
                                    <a href="../SE266/Week 2/viewActors.zip" class="list-group-item list-group-item-action ">ViewActor</a>
                            </div>
                        </div>
                </div>
<!-- New Card Slot -------------------------------------------------->
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#WeekThreeFiles" aria-expanded="false" aria-controls="WeekThreeFiles">
                                Week_3
                              </button>
                            </h5>
                          </div>
                            <div id="WeekThreeFiles" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="../SE266/Week 3/corpCrud.zip" class="list-group-item list-group-item-action">corpCrud</a>
                                    <a href="../SE266/Week 3/createCrud.zip" class="list-group-item list-group-item-action ">createCrud</a>
                                    <a href="../SE266/Week 3/deleteCrud.zip" class="list-group-item list-group-item-action ">deleteCrud</a>
                                    <a href="../SE266/Week 3/readCrud.zip" class="list-group-item list-group-item-action ">readCrud</a>
                                    <a href="../SE266/Week 3/updateCrud.zip" class="list-group-item list-group-item-action ">updateCrud</a>
                            </div>
                        </div>
                </div>
<!-- New Card Slot -------------------------------------------------->
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#WeekFourFiles" aria-expanded="false" aria-controls="WeekFourFiles">
                                Week_4
                              </button>
                            </h5>
                          </div>
                            <div id="WeekFourFiles" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="../SE266/Week 4/form.zip" class="list-group-item list-group-item-action">Form</a>
                            </div>
                        </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- To remove redundant CSS problem (Stack Over Flow Source) and it fixed my problem -->
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
        <!-- The note and the use of Popper.js was suggested by a friend who help me design a good looking web page (He's a Web Page Designer for a job and didn't like the idea of a basic page I had. ) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
