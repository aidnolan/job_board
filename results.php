<?php
    require("search_processing.php");
    $job_data = job_data_search();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
</head>
<body>
    <?php if ($job_data): ?>
        <table border=1>
            <tr>
                <th>Job Title</th>
                <th>Description</th>
                <th>Keywords</th>
                <th>Location</th>
                <th>Role Type</th>
            </tr>
            <tr>
                <?php foreach ($job_data as $input): ?>
                    <td>
                        <?= $input ?>
                    </td>
                <?php endforeach ?> 
            </tr>
        </table>
        <div>
            <form action="email_interest.php" method="POST">
                <div style="margin-top: 10px">
                    <label for="enq_name">Name</label>
                </div>
                <div>
                    <input name="enq_name" type="text">
                </div>
                <div style="margin-top: 10px">
                    <label for="enq_email">Email</label>
                </div>
                <div>
                    <input name="enq_email" type="email">
                </div>
                <div style="margin-top: 10px">
                    <label for="enq_tel">Tel. No</label>
                </div>
                <div>
                    <input name="enq_tel" type="tel">
                </div>
                <input style="margin-top: 10px" type="submit">
            </form>
        </div>
    <?php else: ?>
        <h3>No records matched your search criteria</h1>
        <a href="index.php" class="button">Return to search fields</a>
    <?php endif ?>   
</body>
</html>
