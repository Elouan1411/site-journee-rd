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
            <img src="../pictures/photo-chercheur.jpg" width="200px" height="200px" alt="photo du conférencier" loading="lazy">
            <h3>Conférencier</h3>
            <p><strong><i>Nom Prénom</i></strong> est -- à --. Spécialiste de --.</p>
        </article>
        <br><br><br>

        <h3>Une de ces recherches...</h3>
        <p class="text">Explications...</p>
        <br>

        <h3>Description de la Conférence :</h3>
        <p class="text">Rejoignez-nous pour une exploration fascinante de --.</p>
        <br>

        <h3>Thème :</h3>
        <p class="text">La conférence s'inscrit dans le thème plus large de l'informatique quantique et de la recherche & développement, explorant les liens entre --.</p>
        <br>

        <h3>Durée de la Conférence :</h3>
        <p class="text">La conférence durera environ -- minutes est sera suivie d'une session de questions-réponses.</p>
        <br>

        <h3>Public Cible :</h3>
        <p class="text">Cette conférence s'adresse aux étudiants, au "grand-public" ainsi qu'aux passionnés d'informatique quantique et de recherche & développement.</p>
        <br>

        <h3>Programme :</h3>
        <br>
        <ul>
            <li>Lieu : Université de Franche-Comté, Besançon</li>
            <li>Date : mercredi 27 mars 2025</li>
            <li>Heure : de 9h à 18h</li>
            <li>De --h à --h : Conférence par --</li>
        </ul>

        <br><br><br>
        <p class="text">Pour plus d'information sur le déroulement de la journée, <a href="./lieu.php">voir la page d'informations</a>.</p>
        <p class="text">Pour toute question, veuillez contacter notre support par Mail à <a href="mailto:tristan.amiotte-suchet@edu.univ-fcomte.fr">contact@rday.fr</a>.</p>
    </div>
</section>
   

<?php include('./footer.php'); ?>
