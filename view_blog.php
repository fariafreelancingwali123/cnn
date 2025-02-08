<?php include 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM blogs WHERE id = ?');
$stmt->execute([$id]);
$blog = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $blog['title'] ?></title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
    </style>
</head>
<body>
    <h1><?= $blog['title'] ?></h1>
    <p><strong>Author:</strong> <?= $blog['author'] ?></p>
    <p><?= $blog['content'] ?></p>
</body>
</html>
