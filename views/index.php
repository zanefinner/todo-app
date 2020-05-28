<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo-list</title>
</head>
<body>
    <?php
    foreach($data as $key)
    {
        echo '<b>'.$key['name'].' '.$key['date'].' | <a href="/">delete</a> | <a href="/">update</a> | <a href="/">view</a>';
    }
    ?>
</body>
</html>