<?php

session_start();

function input_cleaner($input)
{
    $clean_search_input = [];

    foreach ($input as $heading => $data) {
        $cleaned_data =
        htmlspecialchars(
            stripslashes(
                trim(
                    strip_tags(
                        strtolower(
                            $data
                        )
                    )
                )
            )
        );
        $clean_search_input[$heading] = $cleaned_data;
    }
    return $clean_search_input;
}

function job_data_search()
{
    include("db_connection.php");

    $output = input_cleaner($_GET);

    $sql = 'SELECT job_title,job_description,job_tags,job_location,job_type FROM job_listings ';

    foreach ($output as $heading => $input) {
        if ($input) {
            if ($heading === "job_title") {
                $sql .= "WHERE ";
            } else {
                $sql .= "AND ";
            }
            $sql .= $heading .  " LIKE '%" . $input . "%' " ;
        }
    }
    $query = $pdo->query($sql);
    $job_list_array = $query->fetch();
    $_SESSION['job_info'] = $job_list_array;
    return $job_list_array;
}

function email_information()
{
    include("db_connection.php");

    $output = input_cleaner($_POST);
    $sql = "
        INSERT INTO enquiries (enq_name, enq_email, enq_tel)
        VALUES ('".$output["enq_name"]."','".$output["enq_email"]."','".$output["enq_tel"]."')";
    
    $query = $pdo->query($sql);

    $email_job_table = $_SESSION['job_info'];
    
    var_dump($email_job_table);
    exit;
    mail($output['enq_email'], 'Candidate Job Search Results', $email_body);
}
