<?php
$title = 'R&Day';
$title_page = 'Intervenants';
$description_page = "Page des intervenants de la journée";
?>
<?php include('header.php'); ?>


<section class="template-section avant-block">
    <div class="template-container">
        <h1 class="template"><?= $title_page; ?></h1>
        <br><br><br><br>
        <h3 class="animbegintext">Du coté informatique :</h3>
        <br>
        <article class="article-container-intervenant">
            <img src="../pictures/photo-chercheur1.jpg" width="200px" height="200px" alt="photo du conférencier"
                loading="lazy">
            <h3>Conférencier</h3>
            <p><strong><i>NEVES Simon</i></strong> est un maître de conférence et chercheur au sein de l’université Marie et Louis Pasteur et du laboratoire FEMTO. <br><br>Après avoir fait une école préparatoire au lycée Victor Hugo de Besançon, il a obtenu sa licence et son master à l’université de Lyon. Il a ensuite étudié l’université de La Sorbonne pour un nouveau master en physique ainsi que pour son doctorat en physique. <br><br>Après ses études, il est parti à l’université de Genève, en Suisse dans la section de recherche post doctorale et développer ses premières recherches suite à son doctorat. 
            Il devient ensuite maître de conférences à l’université de franche comté en septembre 2024 et continue ses recherches au laboratoire de FEMTO</p>
        </article>
        <br><br><br>
        <br>

        <h3>Thème de la conférence :</h3> <p class="text">Plongez au cœur de <strong>l'intrication quantique et ses applications</strong> en communication, cryptographie et capteurs. Ce phénomène fascinant ouvre la voie à des technologies révolutionnaires, offrant une sécurité inégalée et des performances inédites en détection et transmission de l'information.</p>
        <br>

        <h3>Durée de la Conférence :</h3>
        <p class="text">La conférence durera environ 45 minutes et sera suivie d'une session de questions-réponses.</p>
        <br>

        <h3>Public Cible :</h3>
        <p class="text">Cette conférence s'adresse aux étudiants, au "grand-public" ainsi qu'aux passionnés
            d'informatique quantique et de recherche & développement.</p>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <br>
        <h3 class="animbegintext">Du coté physique :</h3>
        <br>
        <article class="article-container-intervenant">
            <img src="../pictures/photo-chercheur2.jpg" width="200px" height="200px" alt="photo du conférencier"
                loading="lazy">
            <h3>Conférencier</h3>
            <p><strong><i>Benjamin Rousseaux</i></strong> travaille largement sur la théorie et la modélisation des interactions lumière-matière quantiques dans des objets à l’échelle nanométrique. <br><br>Il a obtenu son doctorat à l’Université de Bourgogne en 2016, avant de travailler en tant que postdoctorant à l’Université de Technologie de Chalmers à Göteborg, en Suède (2017-2020), au Laboratoire de Physique de l’École Normale Supérieure à Paris (2020-2021) et à l’Institut d’Optique à Bordeaux (2022-2024). <br><br>Il est désormais maître de conférences au sein du groupe de nano-optique de l’Institut FEMTO-ST.

            Son projet de recherche actuel vise à construire des modèles pour comprendre le couplage dissipatif entre des nano-résonateurs et des émetteurs quantiques.</p>
        </article>
        <br><br><br>


        <h3>Thème de la conférence :</h3>
        <p class="text_centre"><strong>Interaction lumière-matière pour les sciences et technologies quantiques</strong></p>
        <p class="text">
        
        <br>Nous assistons au développement rapide de nouvelles technologies basées sur la mécanique quantique, dont l’année 2025 est le centenaire. Cette conférence abordera le développement de la mécanique quantique et son impact sociétal : un changement de paradigme impliquant une nouvelle compréhension de phénomènes à l’échelle microscopique, ou encore le développement de technologies désormais incontournables (transistor, laser…). Aujourd’hui, le développement rapide actuel concerne ce qu’on appelle « la deuxième révolution quantique », qui s’adresse à la manipulation de systèmes quantiques individuels. Cela aboutit à des perspectives intéressantes et des applications telles que l’ordinateur quantique ou des capteurs pouvant dépasser les limites standards en matière de sensibilité.<br><br>

        Les systèmes quantiques reposent, pour beaucoup, sur l’interaction lumière-matière. Dans une deuxième partie, je présenterai alors une vue d’ensemble des dispositifs ayant permis d’explorer le couplage d’atomes et des états quantiques de la lumière, les « photons ». Depuis une trentaine d’années, nous voyons une évolution radicale de ces dispositifs, pouvant désormais piéger la lumière à l’échelle du nanomètre. C’est dans ce contexte précis que j’exposerai mes travaux de recherche en tant qu’expert en théorie et modélisation de systèmes quantiques interagissant avec des photons.</p>
        <br>

        <h3>Durée de la Conférence :</h3>
        <p class="text">La conférence durera environ 45 minutes et sera suivie d'une session de questions-réponses.</p>
        <br>

        <h3>Public Cible :</h3>
        <p class="text">Cette conférence s'adresse aux étudiants, au "grand-public" ainsi qu'aux passionnés
            de physique quantique et de recherche & développement.</p>
        <br>

        <hr>
        <br><br>
        <h3>Programme :</h3>
        <br>
        <ul>
            <li>Lieu : Université Marie et Louis Pasteur (Anciennement Université de Franche-Comté), Besançon</li>
            <li>Date : mercredi 27 mars 2025</li>
            <li>Heure : de 11h à 18h</li>
            <li>De 11h à 12h : Conférence par Benjamin Rousseaux</li>
            <li>De 14h à 15h : Conférence par Simon Neves</li>
        </ul>

        <br><br><br>
        <p class="text">Pour plus d'information sur le déroulement de la journée, <a href="./lieu.php">voir la page
                d'informations</a>.</p>
        <p class="text">Pour toute question, veuillez contacter notre support par Mail à <a
                href="mailto:samia.benali@edu.univ-fcomte.fr">contact@rday.fr</a>.</p>
    </div>
</section>


<?php include('./footer.php'); ?>