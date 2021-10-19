
<?php 
include_once "dbhandler.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/results.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--link href="stylesheet" href = "style.css"-->
    <title>Search Results</title>
    <!--***requires fixes or can omit***-->
    <style>
        .accordian-button {
            background-color: #85C1E9;
        }

        .accordian-body {
            background-color: #fff;
        }
    </style>
    <!--********************************-->
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="../index.php" class="navbar-brand">
                <img src="https://www.supermicro.com/sites/default/files/Super_Micro_Computer_Logo.svg" height="50"
                    width="100" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a href="../componentStrap.php" class="nav-link">Components</a>
                    </li>
                    <li class="nav-item">
                        <a href="../commonqStrap.php" class="nav-link active" aria-current="page"> Common Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="../productFamilyStrap.php" class="nav-link">Product Family</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $tag = mysqli_real_escape_string($conn, $_GET['tag']);
        // How many records per page
        $rpp = 5;     
        // Check for set page
        isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;
        // Check for page 1
        if($page > 1){
            $start = ($page * $rpp) - $rpp;
        } else {
            $start = 0;
        }
        // Query for total records
        $resultSet = mysqli_query($conn, "SELECT * FROM tickets_1 WHERE tag='".mysqli_escape_string($conn,$tag)."';");       
        // Get total number of records
        $numRows = mysqli_num_rows($resultSet);
        
        // Get total number of pages
        $totalPages = $numRows/ $rpp;
        
        // Query results
        $resultSet = mysqli_query($conn, "SELECT * FROM tickets_1 WHERE tag='{$tag}' LIMIT $start, $rpp;");
        while($row = mysqli_fetch_assoc($resultSet)){
            $subject = $row['subject'];
            $answer = $row['answer'];
            $url = $row['url'];
            $description = $row['description'];
            $message = <<<RES
            
            <div class="container col-sm-8">
                <div class="accordion mt-3 mb-3" id="commonQuestions">
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="questionOne">
                            <!--Accordion header and answer section-->
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
                                $subject
                            </button>
                        </h2>
                        <div id="collapseOne"  class="accordion-collapse collapse" aria-labelledby="questionOne"
                            data-bs-parent="#commonQuestions">
                            <div class="accordion-body">
                                <b>Question</b>:  $description
                                <br>
                                <br>
                                <b>Answer</b>:  $answer
                                <br>
                                <br>
                                <b>Ticket URL</b>: <a href=$url>$url</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            
        
            RES;
            /*
            
            */
            echo $message;        
        }
?>

    <div style="text-align: center;">
      <div style="width: 500px; margin: 0 auto;"><?php
        for($page=1; $page <= $totalPages + 1; $page++){
            echo '<a href="component_results.inc.php?tag='.$tag.'&page='.$page.'">'. $page .'</a>  ';
        }
        ?></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
</body>

</html>