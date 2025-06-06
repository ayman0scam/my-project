<?php
$host = 'localhost';
$db = 'root';
$user = ''; // change if needed
$pass = 'projet_edacy';     // change if needed

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
// login.php (traitement)
if ($user && password_verify($password, $user['mot_de_passe'])) {
    $_SESSION['user_id'] = $user['id_utilisateur'];
    $_SESSION['username'] = $user['username'];
    header('Location: index.php'); // redirection vers la page que tu as montrée
    exit;
}

?>
