
<?php 
include_once "dbhandler.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a href="index.php" class="navbar-brand">
                <img src="https://www.supermicro.com/sites/default/files/Super_Micro_Computer_Logo.svg" height="50"
                    width="100" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a href="componentStrap.html" class="nav-link">Components</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page"> Common Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="productFamilyStrap.html" class="nav-link">Product Family</a>
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
                /*
                $family = $_GET['family'];
                $sql = "SELECT * FROM tickets_1 WHERE family=?;";
                */

                $family = mysqli_real_escape_string($conn, $_GET['family']);
                $sql = "SELECT * FROM tickets_1 WHERE family=?;";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s",$family);
                $stmt->execute();
                $result = $stmt->get_result();
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        //echo $row['family'].$row['ticket_id']."<br>";\
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
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> 
                                            $subject
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="questionOne"
                                        data-bs-parent="#commonQuestions">
                                        <div class="accordion-body">
                                            Question:  $description
                                            <br>
                                            <br>
                                            Answer:  $answer
                                            <br>
                                            <br>
                                            $url
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        RES;
                        echo $message;
                    }
                }

                
    ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
</body>

</html>