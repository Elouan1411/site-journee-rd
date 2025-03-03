<?php
$title = 'R&Day';
$title_page = 'Intervenant';
$description_page = "Page de l'intervenant de la journée";
?>
<?php include('header.php'); ?>


<section class="template-section avant-block">
    <div class="template-container">
        <h1 class="template"><?= $title_page; ?></h1>
        <br><br><br><br>

        <article class="article-container-intervenant">
            <img src="../pictures/photo-chercheur.jpg" width="200px" height="200px" alt="photo du conférencier"
                loading="lazy">
            <h3>Conférencier</h3>
            <p><strong><i>NEVES Simon</i></strong> est un maître de conférence et chercheur au sein de l’université Marie et Louis Pasteur et du laboratoire FEMTO. <br><br>Après avoir fait une école préparatoire au lycée Victor Hugo de Besançon, il a obtenu sa licence et son master à l’université de Lyon. Il a ensuite étudié l’université de La Sorbonne pour un nouveau master en physique ainsi que pour son doctorat en physique. <br><br>Après ses etudes, il est parti à l’université de Genève, en Suisse dans la section de recherche post doctorale et développer ses premières recherches suite à son doctorat. 
            Il devient ensuite maître de conférences à l’université de franche comté en septembre 2024 et continue ses recherches au laboratoire de FEMTO</p>
        </article>
        <br><br><br>

        <h3>Une de ces recherches...</h3>
        <p class="text">Explications...</p>
        <br>

        <h3>Description de la Conférence :</h3>
        <p class="text">Rejoignez-nous pour une exploration fascinante de --.</p>
        <br>

        <h3>Thème :</h3>
        <p class="text">La conférence s'inscrit dans le thème plus large de l'informatique quantique et de la recherche
            & développement,  .</p>
        <br>

        <h3>Durée de la Conférence :</h3>
        <p class="text">La conférence durera environ 45 minutes et sera suivie d'une session de questions-réponses.</p>
        <br>

        <h3>Public Cible :</h3>
        <p class="text">Cette conférence s'adresse aux étudiants, au "grand-public" ainsi qu'aux passionnés
            d'informatique quantique et de recherche & développement.</p>
        <br>

        <h3>Programme :</h3>
        <br>
        <ul>
            <li>Lieu : Université Marie et Louis Pasteur (Anciennement Université de Franche-Comté), Besançon</li>
            <li>Date : mercredi 27 mars 2025</li>
            <li>Heure : de 9h à 18h</li>
            <li>De --h à --h : Conférence par --</li>
        </ul>

        <br><br><br>
        <p class="text">Pour plus d'information sur le déroulement de la journée, <a href="./lieu.php">voir la page
                d'informations</a>.</p>
        <p class="text">Pour toute question, veuillez contacter notre support par Mail à <a
                href="mailto:samia.benali@edu.univ-fcomte.fr">contact@rday.fr</a>.</p>
    </div>
</section>


<?php include('./footer.php'); ?>