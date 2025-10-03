<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Équipe - Cabinet Kessentini</title>
    <meta name="description" content="Découvrez l'équipe du Cabinet Kessentini et le parcours de nos avocats">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <section class="hero">
            <h1>Notre Équipe</h1>
            <p class="subtitle">Des professionnels dévoués à votre service</p>
        </section>

        <section class="services">
            <!-- Premier avocat -->
            <div class="service-card">
                <div class="service-image">
                    <img src="images/avocat1.jpg" alt="Maître Kessentini">
                </div>
                <div class="service-description">
                    <h3>Maître [Prénom] Kessentini</h3>
                    <p><strong>Avocat associé - Droit des affaires</strong></p>
                    <p>Diplômé de [Université], Maître Kessentini a débuté sa carrière en 2010 au sein de prestigieux cabinets parisiens. Spécialisé en droit commercial et droit des sociétés, il a accompagné de nombreuses entreprises dans leur développement.</p>
                    <p>Fort de plus de 13 ans d'expérience, il met son expertise au service des PME et grandes entreprises pour les conseiller dans leurs stratégies juridiques et leurs opérations de croissance.</p>
                </div>
            </div>

            <!-- Deuxième avocat -->
            <div class="service-card">
                <div class="service-image">
                    <img src="images/avocat2.jpg" alt="Maître Kessentini">
                </div>
                <div class="service-description">
                    <h3>Maître [Prénom] Kessentini</h3>
                    <p><strong>Avocate associée - Droit de la famille</strong></p>
                    <p>Diplômée de [Université] avec mention, Maître Kessentini exerce depuis 2012. Passionnée par le droit de la famille et le droit des personnes, elle a développé une approche humaine et bienveillante de son métier.</p>
                    <p>Elle accompagne ses clients dans les moments les plus délicats de leur vie : divorces, successions, protection des mineurs. Son écoute et sa rigueur font d'elle une avocate reconnue et respectée.</p>
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