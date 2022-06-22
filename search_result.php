<?php

<<<<<<< HEAD
=======
<?php 
//include($_SERVER['DOCUMENT_ROOT'].'/includes/dbhandler.inc.php');
>>>>>>> ebc23fac085bdaedf3dab42907bba42ba93c6d14
include_once "./includes/dbhandler.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/results.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!--link href="stylesheet" href = "style.css"-->
    <title>Results</title>
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
                <img src="https://www.supermicro.com/sites/default/files/Super_Micro_Computer_Logo.svg" height="50" width="100" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto mt-2 gap-3 mt-lg-0 fw-bold">
                    <li class="nav-item active">
                        <a href="product_family.php" class="nav-link">Product Family</a>
                    </li>
                    <li class="nav-item">
                        <a href="components.php" class="nav-link">Components</a>
                    </li>
                    <li class="nav-item">
                        <a href="common_questions.php" class="nav-link">Common Questions</a>
                    </li>
                </ul>
                <form action="search_result.php" method="get">
                    <input name="search_string" type="search" />
                    <button type="submit" class="btn btn-primary">search</button>
                </form>

            </div>
        </div>
    </nav>

    <?php
    // Pagination 


    // Grab search_string from submitted form
    if (isset($_GET['search_string'])) {
        //$search_string = $_REQUEST['search_string'];
        $search_string = mysqli_real_escape_string($conn, $_GET['search_string']);

        /*// v1 search

        // removing any possible punctation from the search string except hyphens
        $search_string = preg_replace('/(?![-])[[:punct:]]/', '', $search_string);

        // remove common words
        //$search_string = str_replace(array('the', 'and', 'or', 'of', 'a', 'is', 'Where', 'where', 'What', 'what', 'for', 'not', 'to', 'it'), '', $search_string);
        $wordlist = array('The', 'the', 'and', 'or', 'of', 'Are', 'are', 'A', 'a', 'Is', 'is', 'Where', 'where', 'What', 'what', 'Why', 'why', 'Who', 'who', 'for', 'not', 'to', 'it', 'in');

        foreach ($wordlist as &$word) {
            $word = '/\b' . preg_quote($word, '/') . '\b/';
        }
        $search_string = preg_replace($wordlist, '', $search_string);

        // split remaining words into an array
<<<<<<< HEAD

=======
>>>>>>> ebc23fac085bdaedf3dab42907bba42ba93c6d14
        $search_terms = preg_split('@ @', $search_string, NULL, PREG_SPLIT_NO_EMPTY);


        // Get number of remaining search terms
        $search_term_length = count($search_terms);

        // Create base statement for SQL query 
        // Concat all three columns so the where statement can search on all three simultaneously
        $columns = "CONCAT_WS(\" \", status, answer, subject, family) LIKE ";

        // Create SQL query 
        // CAUTION: Not entirely sure if SQL injection can occur at this point given that all punctation has been stripped
        $sql = "SELECT * FROM tickets_2 WHERE ";
        for ($i = 0; $i < count($search_terms); $i++) {
            $sql .= $columns . "\"%" . $search_terms[$i] . "%\"";
            if ($i != count($search_terms) - 1) {
                $sql .= " OR ";
            }
        }
<<<<<<< HEAD
        $sql .= ";";
        //$sql .= "LIMIT $start, $rpp;";

        // Get Results from query
        $resultSet = mysqli_query($conn, $sql);

        if ($resultSet) {
            print("Queried succesfully");
        } else {
            print("Unable to query");
        }

        $numRows = mysqli_num_rows($resultSet);

        // end v1 search block

        // v2 search funtion
        $search_string = preg_replace('/(?![-])[[:punct:]]/', '', $search_string);
=======
        $sql .=";";
        
        // Get Results from query
        $resultSet = mysqli_query($conn, $sql);
        if($resultSet){
            print("Queried succesfully");
        }else{
            print("Unable to query");
        }
        $numRows = mysqli_num_rows($resultSet);

        */// end v1 search block

        // v2 search funtion
        $search_string = preg_replace('/(?![-])[[:punct:]]/', '', $search_string); 
>>>>>>> ebc23fac085bdaedf3dab42907bba42ba93c6d14
        $search_terms = preg_split('@ @', $search_string, NULL, PREG_SPLIT_NO_EMPTY);
        // full text
        $sql = "SELECT * FROM tickets_2 WHERE MATCH(subject, answer, family) AGAINST (' ";
        $sql .= $search_string;
<<<<<<< HEAD
        $sql .= "' IN NATURAL LANGUAGE MODE);";

        print($sql);
        $resultSet = mysqli_query($conn, $sql);
        if ($resultSet) {
            print("Queried successfully");
        } else {
            print("Unable to query");
        }
=======
        $sql .="' IN NATURAL LANGUAGE MODE);";
        
        $resultSet = mysqli_query($conn, $sql);
>>>>>>> ebc23fac085bdaedf3dab42907bba42ba93c6d14
        $numRows = mysqli_num_rows($resultSet);
        // end v2
        print($sql);

        /*// v3 search function
        $search_string = preg_replace('/(?![-])[[:punct:]]/', '', $search_string); 
        $search_terms = preg_split('@ @', $search_string, NULL, PREG_SPLIT_NO_EMPTY);
        $sql = "SELECT * FROM tickets_2 WHERE MATCH(subject, answer, family) AGAINST (' ";
        $sql .= $search_string;
        $sql .="' IN NATURAL LANGUAGE MODE);";
        $stmt = $conn->prepare();
        $stmt->bind_param("s", $search_string);
        $resultSet = $stmt->execute();
        */ // end v3 search function

        // Pagination
        // How many records per page
        $rpp = 5;
        // Check for set page
        isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;
        // Check for page 1
        if ($page > 1) {
            $start = ($page * $rpp) - $rpp;
        } else {
            $start = 0;
        }
        $totalPages = $numRows / $rpp;

        /* v1 pagination
        $sql = "SELECT * FROM tickets_2 WHERE ";
        for ($i = 0; $i < count($search_terms); $i++) {
            $sql .= $columns . "\"%" . $search_terms[$i] . "%\"";
            if ($i != count($search_terms) - 1) {
                $sql .= " OR ";
            }
        }
        $sql .= "LIMIT $start, $rpp;";
        $resultSet = mysqli_query($conn, $sql);
        */// v1 pagination end
        // v2 pagination
        $sql = "SELECT * FROM tickets_2 WHERE MATCH(subject, answer, family) AGAINST (' ";
        $sql .= $search_string;
        $sql .="' IN NATURAL LANGUAGE MODE) ORDER BY date DESC "; 
        $sql .= "LIMIT $start, $rpp;";
        $resultSet = mysqli_query($conn, $sql);
        // v2 pagination end

        if ($resultSet->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($resultSet)) {
                $subject = $row['subject'];
                $answer = $row['answer'];
                $url = $row['url'];
                $status = $row['status'];
                $message = <<<RES
                
                
                <div class="container col-sm-8">
                    <div class="accordion mt-3 mb-3" id="commonQuestions">
                    <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="questionOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse.show"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            $subject
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="questionOne"
    
                        data-bs-parent="#commonQuestions"><div class="accordion-body">
                        <b>Status</b>:  $status
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
                echo $message;
            }
        } else {
            echo 'No Results';
        }
    }

    ?>



    <div style="text-align: center;">
        <div style="width: 500px; margin: 0 auto;">
            <?php
            for ($page = 1; $page <= $totalPages + 1; $page++) {
                echo '<a href="search_result.php?search_string=' . $search_string . '&page=' . $page . '">' . $page . '</a>  ';
            }
            ?></div>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <a href="index.php" class="nav-link px-2 text-muted">Home</a>
                </li>
                <li class="nav-item">
                    <a href="product_family.php" class="nav-link px-2 text-muted">Product Family</a>
                </li>
                <li class="nav-item">
                    <a href="components.php" class="nav-link px-2 text-muted">Components</a>
                </li>
                <li class="nav-item">
                    <a href="common_questions.php" class="nav-link px-2 text-muted">Common Questions</a>
                </li>
            </ul>
            <p class="text-center text-muted">@ 2022 Supermicro</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>