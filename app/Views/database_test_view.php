<!DOCTYPE html>
<html>
<head>
    <title>Database Test</title>
</head>
<body>
    <h1>Database Test Results</h1>

    <?php if (isset($result)) : ?>
        <h2>Query Results:</h2>
        <ul>
            <?php foreach ($result as $row) : ?>
                <li><?php echo $row->column_name; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (isset($error)) : ?>
        <h2>Error:</h2>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
