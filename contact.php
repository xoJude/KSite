<?php

require_once 'db.php';

$message_success = '';
$message_error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    $sql = "INSERT INTO contact (nom, prénom, email, message) VALUES ('$nom', '$prenom', '$email', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        $message_success = "Message envoyé avec succès !";
    } else {
        $message_error = "Erreur : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Cabinet Kessentini</title>
    <meta name="description" content="Contactez le Cabinet d'avocats Kessentini - Expertise juridique fiable et personnalisée">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php include 'header.php'; ?>

    <main>
        <section class="contact-section">
            <div class="hero">
                <h1>Prendre rendez-vous</h1>
                <p>Veuillez indiquer la date et l'heure du rendez vous ainsi que votre numéro de tél. dans le message !</p>
            </div>

            <?php if ($message_success): ?>
                <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                    <?php echo $message_success; ?>
                </div>
            <?php endif; ?>

            <?php if ($message_error): ?>
                <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                    <?php echo $message_error; ?>
                </div>
            <?php endif; ?>

            <div class="contact-form-container">
                <form method="POST" action="contact.php" class="contact-form">
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom *</label>
                        <input type="text" id="prenom" name="prenom" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Envoyer le message</button>
                </form>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>