
<?php 
include($_SERVER['DOCUMENT_ROOT'].'/includes/dbhandler.inc.php');
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
                <img src="https://www.supermicro.com/sites/default/files/Super_Micro_Computer_Logo.svg" height="50"
                    width="100" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto mt-2 gap-3 mt-lg-0 fw-bold">
                    <li class="nav-item active">
                        <a href="components.php" class="nav-link">Components</a>
                    </li>
                    <li class="nav-item">
                        <a href="common_questions" class="nav-link"> Common Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="product_family.php" class="nav-link">Product Family</a>
                    </li>
                </ul>
                <form action="search_result.php" method="get">
                        <input name="search_string" type="search"/> 
                        <input type="submit"/>
                </form>
                    
            </div>
        </div>
    </nav>
    <?php
    // Pagination 

        
    // Grab search_string from submitted form
    if(isset($_GET['search_string'])){
        //$search_string = $_REQUEST['search_string'];
        $search_string = mysqli_real_escape_string($conn, $_GET['search_string']);

        // removing any possible punctation from the search string except hyphens
        $search_string = preg_replace('/(?![-])[[:punct:]]/', '', $search_string); 

        // remove common words
       //$search_string = str_replace(array('the', 'and', 'or', 'of', 'a', 'is', 'Where', 'where', 'What', 'what', 'for', 'not', 'to', 'it'), '', $search_string);
        $wordlist = array('the', 'and', 'or', 'of', 'a', 'is', 'Where', 'where', 'What', 'what', 'for', 'not', 'to', 'it');

        foreach ($wordlist as &$word) {
            $word = '/\b' . preg_quote($word, '/') . '\b/';
        }
        $search_string = preg_replace($wordlist, '', $search_string);

        // split remaining words into an array
        //$search_terms = explode(" ", $search_string);
        $search_terms = array_diff(explode(",", $search_string), array(""));
        $search_terms = explode(" ", $search_terms[0]);
        
        print_r($search_terms);
        // Get number of remaining search terms
        $search_term_length = count($search_terms);

        // Create base statement for SQL query 
        // Concat all three columns so the where statement can search on all three simultaneously
        $columns = "CONCAT_WS(\" \", status, answer, subject, family) LIKE ";

        // Create SQL query 
        // CAUTION: Not entirely sure if SQL injection can occur at this point given that all punctation has been stripped
        $sql = "SELECT * FROM tickets_2 WHERE ";
        for( $i = 0; $i < count($search_terms); $i++){
            $sql .= $columns . "\"%" . $search_terms[$i] . "%\"";
            if ($i != count($search_terms)-1){
                $sql .= " OR ";
            }
        }
        $sql .=";";
        //$sql .= "LIMIT $start, $rpp;";

        // Get Results from query
        $resultSet = mysqli_query($conn, $sql);
        $numRows = mysqli_num_rows($resultSet);

        // Pagination
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
        $totalPages = $numRows/ $rpp;

        $sql = "SELECT * FROM tickets_2 WHERE ";
        for( $i = 0; $i < count($search_terms); $i++){
            $sql .= $columns . "\"%" . $search_terms[$i] . "%\"";
            if ($i != count($search_terms)-1){
                $sql .= " OR ";
            }
        }
        $sql .= "LIMIT $start, $rpp;";
        $resultSet = mysqli_query($conn, $sql);


        if($resultSet->num_rows > 0){
            while($row = mysqli_fetch_assoc($resultSet)) {
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
        }
    }
    
    ?>
    
    <div style="text-align: center;">
      <div style="width: 500px; margin: 0 auto;"><?php
        for($page=1; $page <= $totalPages + 1; $page++){
            echo '<a href="search_result.php?search_string='.$search_string.'&page='.$page.'">'. $page .'</a>  ';
        }
        ?></div>
    </div>
    

    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
</body>

</html>