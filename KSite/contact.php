<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Cabinet Kessentini</title>
    <meta name="description" content="Contactez le Cabinet Kessentini pour prendre rendez-vous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <section class="hero">
            <h1>Prendre Rendez-Vous</h1>
            <p class="subtitle">Chez Kessentini, votre tranquillité est notre priorité !</p>
        </section>

        <section class="contact-section">
            <div class="contact-form-container">
                <form action="https://formspree.io/f/manbbrkl" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="_replyto" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Envoyer</button>
                </form>
            </div>
        </section>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>