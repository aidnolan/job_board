<?php

function job_data_search() {
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

    return $job_list_array;
}

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

function email_information()
{
    $sql_data = input_cleaner($_POST);
    $output = mysql_real_escape_string($sql_data);
}
