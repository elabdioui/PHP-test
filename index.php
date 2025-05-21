<?php
// Traitement du formulaire
$successMessage = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et sécurisation des données
    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $message = htmlspecialchars($_POST["message"] ?? "");

    // Exemple de traitement : juste une confirmation (pas d'envoi réel)
    $successMessage = "Merci $name, votre message a été reçu !";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact Simple en PHP</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; background: #f2f2f2; }
        form { background: #fff; padding: 20px; max-width: 400px; margin: auto; border-radius: 8px; }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; }
        button { background: #007BFF; color: white; padding: 10px; border: none; cursor: pointer; }
        .message { background: #d4edda; padding: 10px; margin-top: 20px; border: 1px solid #c3e6cb; }
    </style>
</head>
<body>

<h2>Formulaire de contact</h2>

<?php if ($successMessage): ?>
    <div class="message"><?= $successMessage ?></div>
<?php endif; ?>

<form method="post">
    <label>Nom :</label>
    <input type="text" name="name" required>

    <label>Email :</label>
    <input type="email" name="email" required>

    <label>Message :</label>
    <textarea name="message" rows="5" required></textarea>

    <button type="submit">Envoyer</button>
</form>

</body>
</html>
