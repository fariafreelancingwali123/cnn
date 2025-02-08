<?php include 'db.php';

$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
    $stmt = $pdo->prepare('UPDATE blogs SET title = ?, author = ?, content = ? WHERE id = ?');
    $stmt->execute([$title, $author, $content, $id]);
    header('Location: dashboard.php');
}

$stmt = $pdo->prepare('SELECT * FROM blogs WHERE id = ?');
$stmt->execute([$id]);
$blog = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Blog</title>
    <style>
        body { font-family: Arial, sans-serif; }
        form { max-width: 500px; margin: 0 auto; }
        label { display: block; margin: 10px 0 5px; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Edit Blog</h1>
    <form method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= $blog['title'] ?>" required>
        
        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="<?= $blog['author'] ?>" required>
        
        <label for="content">Content</label>
        <textarea name="content" id="content" rows="5" required><?= $blog['content'] ?></textarea>
        
        <button type="submit">Update Blog</button>
    </form>
</body>
</html>
