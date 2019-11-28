<?php
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
    <table>
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
                <label for="email">Email</label>
            </div>
            <div>
                <input name="Email" type="email">
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
</body>
</html>
