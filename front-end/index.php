<!DOCTYPE html>
<html lang="pt-br" bs-theme="dar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Athlon</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>UEPA</h1>
    <p><?php echo htmlspecialchars( $_GET['error']); ?></p>
    <form action="database/req/create-message.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>