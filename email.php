<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once "header.php"; ?>
    <main>
        <form action="App/Http/EmailController" method="post">
            <input type="hidden" name="action" value="email">
            <label for="email">email</label>
            <input type="email" name="email">
            <label for="content">content</label>
            <input type="text" name="content">
            <input type="submit">
        </form>
    </main>
    <?php require_once "footer.php"; ?>    
</body>
</html>