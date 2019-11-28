<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Board Search</title>
</head>
<body>
    <h1>Job Board Search</h1>
    <form action="display_test.php" method="GET">
        <div style="margin-top: 10px">
            <label for="job_title">Job Title</label>
        </div>
        <div>
            <input name="job_title" type="text">
        </div>
        <div style="margin-top: 10px">
            <label for="description">Description</label>
        </div>
        <div>
            <input name="description" type="text">
        </div>
        <div style="margin-top: 10px">
            <label for="job_tags">Keyword search</label>
        </div>
        <div>
            <input name="job_tags" type="text">
        </div>
        <div style="margin-top: 10px">
            <label for="location">Location</label>
        </div>
        <div>
            <input name="location" type="text">
        </div>
        <div style="margin-top: 10px">
            <label for="role_type">Role Type</label>
        </div>
        <div>
            <input name="role_type" type="text">
        </div>
        <input style="margin-top: 10px" type="submit">
    </form>
</body>
</html>
