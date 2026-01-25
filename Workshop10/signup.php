<?php
require 'db.php';
require 'session.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $passwordInput = $_POST['password'] ?? '';

    if (!$email || empty($passwordInput) || strlen($passwordInput) < 6) {
        $error = "Invalid email or password";
    } else {
        $password = password_hash($passwordInput, PASSWORD_DEFAULT);

        try {
            $stmt = $pdo->prepare(
                "INSERT INTO users (email, password) VALUES (:email, :password)"
            );
            $stmt->execute([
                ':email' => $email,
                ':password' => $password
            ]);
            header("Location: login.php");
            exit;
        } catch (PDOException $e) {
            $error = "Invalid email or password";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Signup</h2>
<form method="post">
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <button type="submit">Signup</button>
</form>
<p><?= htmlspecialchars($error) ?></p>
</body>
</html>
