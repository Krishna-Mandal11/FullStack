<?php
require 'db.php';
require 'session.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$userEmail = $_SESSION['user_email'] ?? 'User';
?>

<!DOCTYPE html>
<html>
<body>
<h2>Dashboard</h2>
<p>Welcome, <?= htmlspecialchars($userEmail) ?></p>

<form method="post" action="logout.php">
    <button type="submit">Logout</button>
</form>

</body>
</html>
