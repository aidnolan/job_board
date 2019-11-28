<?php

function job_data_search() {

    $output = input_cleaner($_GET);

    $sql = "SELECT * FROM job_board ";
    // foreach ($clean_search_input as $heading => $input) {
    //     if ($heading === "job_title") {
    //         $sql .= "WHERE ";
    //     } else {
    //         $sql .= "AND ";
    //     }
    //     $sql .= $heading .  " LIKE '%" . $input . "%' " ;
    // }
    // var_dump($sql);
    // $query = mysql_query($sql);
    // $job_list_array = mysql_fetch_array($query);
    return $output;
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
