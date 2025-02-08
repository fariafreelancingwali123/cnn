<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Blogger</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .blog { border: 1px solid #ddd; margin: 10px; padding: 10px; }
        .blog h2 { margin: 0; }
        .read-more { color: blue; text-decoration: none; }
    </style>
</head>
<body>
    <h1>My Blogger</h1>
    <?php
    $stmt = $pdo->query('SELECT id, title, author, content FROM blogs ORDER BY created_at DESC');
    while ($blog = $stmt->fetch()) {
        echo "<div class='blog'>";
        echo "<h2>{$blog['title']}</h2>";
        echo "<p><strong>Author:</strong> {$blog['author']}</p>";
        echo "<p>" . substr($blog['content'], 0, 100) . "...</p>";
        echo "<a class='read-more' href='view_blog.php?id={$blog['id']}'>Read More</a>";
        echo "</div>";
    }
    ?>
</body>
</html>
