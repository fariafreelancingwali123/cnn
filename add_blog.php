<?php include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
    $stmt = $pdo->prepare('INSERT INTO blogs (title, author, content) VALUES (?, ?, ?)');
    $stmt->execute([$title, $author, $content]);
    header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Blog</title>
    <style>
        body { font-family: Arial, sans-serif; }
        form { max-width: 500px; margin: 0 auto; }
        label { display: block; margin: 10px 0 5px; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Add Blog</h1>
    <form method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        
        <label for="author">Author</label>
        <input type="text" name="author" id="author" required>
        
        <label for="content">Content</label>
        <textarea name="content" id="content" rows="5" required></textarea>
        
        <button type="submit">Add Blog</button>
    </form>
</body>
</html>
