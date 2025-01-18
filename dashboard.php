<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <a href="add_blog.php">Add New Blog</a>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        <?php
        $stmt = $pdo->query('SELECT id, title, author FROM blogs');
        while ($blog = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>{$blog['title']}</td>";
            echo "<td>{$blog['author']}</td>";
            echo "<td>
                    <a href='edit_blog.php?id={$blog['id']}'>Edit</a> | 
                    <a href='delete_blog.php?id={$blog['id']}'>Delete</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
