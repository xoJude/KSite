<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet Kessentini - Avocats</title>
    <meta name="description" content="Cabinet d'avocats Kessentini - Expertise juridique fiable et personnalisée">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <section class="hero">
            <h1>Bienvenue au Cabinet Kessentini</h1>
            <p class="subtitle">Avocats experts à votre service</p>
            
            <div class="intro-content">
                <p>Avec le cabinet Kessentini, faites le choix d'une expertise fiable et engagée pour relever vos défis juridiques.</p>
                <p>Notre approche : <strong>stratégique</strong>, <strong>personnalisée</strong>, et résolument tournée vers vos intérêts.</p>
            </div>
        </section>

        <section class="services">
            <!-- Première case -->
            <div class="service-card">
                <div class="service-image">
                    <img src="images/service1.jpg" alt="Service juridique 1">
                </div>
                <div class="service-description">
                    <h3>Droit des affaires</h3>
                    <p>Nous accompagnons les entreprises dans leurs démarches juridiques quotidiennes : création de société, rédaction de contrats, négociations commerciales et résolution de litiges.</p>
                </div>
            </div>

            <!-- Deuxième case -->
            <div class="service-card">
                <div class="service-image">
                    <img src="images/service2.jpg" alt="Service juridique 2">
                </div>
                <div class="service-description">
                    <h3>Droit de la famille</h3>
                    <p>Notre cabinet vous conseille et vous représente dans toutes les situations familiales : divorce, garde d'enfants, succession, adoption. Un accompagnement humain et professionnel.</p>
                </div>
            </div>
        </section>

        <div class="cta-container">
            <a href="contact.php" class="btn-rdv">Prendre RDV</a>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>