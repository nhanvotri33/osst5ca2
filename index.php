<?php require_once "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BookStore - Trang Chủ</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php include "includes/header.php"; ?>

<h1>📚 BookStore</h1>
<p>Danh sách sách mới nhất:</p>

<div class="book-container">
<?php
$sql = "SELECT * FROM Books";
$stmt = sqlsrv_query($conn, $sql);

if ($stmt === false) {
    echo "<p>Lỗi truy vấn database!</p>";
    die(print_r(sqlsrv_errors(), true));
}

while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)):
?>
    <div class="book-card">
        <h3><?= htmlspecialchars($row['Title']) ?></h3>
        <p>Tác giả: <?= htmlspecialchars($row['Author']) ?></p>
        <p>Giá: <?= number_format($row['Price']) ?>₫</p>
    </div>
<?php endwhile; ?>
</div>

</body>
</html>