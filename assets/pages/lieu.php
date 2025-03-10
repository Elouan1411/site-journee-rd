<?php 
$title = 'R&Day';
$title_page = 'Informations';
$description_page = "Page d'information sur le lieu de la journée";
?>
<?php include('header.php'); ?>


<section class="template-section avant-block">
    <div class="template-container">
        <h1 class="template"><?= $title_page; ?></h1>
        <br><br><br><br><br>
        <h3 class="animbegintext">Lieu de la journée :</h3>
        <br>
        <p class="text animbegintext">Le <strong>matin</strong> et <strong>l'après midi</strong> :  Hall Propédeutique - 43 Avenue de l'Observatoire, 25000 Besançon <i>(Des places de parking <strong>gratuites</strong> sont disponible juste à coté, sur le parc de stationnement de l'université)</i></p>
        <p class="text animbegintext">Le <strong>midi</strong> : (li)VE  - Médiacenter de l'université de Franche-Comté, 38 Av. de l'Observatoire, 25000 Besançon</p>
        <p class="text google" >
            <iframe title="google-map: Hall Propédeutique, 25000 Besançon" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1412.2739565775137!2d5.983148565176012!3d47.245598446146495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478d634be6c23c1b%3A0x11d6ff2c8de3bcac!2sHall%20Prop%C3%A9deutique!5e1!3m2!1sfr!2sfr!4v1705593389455!5m2!1sfr!2sfr" height="450" class="google-map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
        <br><br><br><br>

        <h3>Horaires de la journée :</h3>
        <br>
        <p class="text">Votre journée commence le <strong>mercredi 27 mars</strong> 2025 à 11h et se termine le même jour à 18h.</p>
        <p class="text">Des ateliers, sur le thème de <i>« Physique quantique et Informatique, le duo qui redéfinit l'avenir »</i>, serons animés tout le temps de la journée. Une conférence des PICS (physique quantique) par Monsieur <i>Benjamin Rousseaux</i> est prévue à 11h dans l'amphithéâtre Lorius, et une conférence INFO (informatique quantique) avec Monsieur <i>Simon Neves</i> est prévue à 14h, (<a href="./intervenant.php">voir la page sur les intervenants</a>).</p>

        <br><br><br>
        <h3>Ateliers proposés :</h3>
        <br>
        <p class="text">Des ateliers conçues et animés par les étudiants d'informatiques et de physique de l'université, serons présentés tout au long de la journée, en voici la liste :</p>

        <p class="text">Le midi au <a href="https://mediacenter.univ-fcomte.fr/videos/live/" target="_blank">(li)VE</a> (à proximité du RU lumière) :</p>

        <dl>
            <dt>Paradox toe</dt>
            <dd>Les règles classique du tic tac toe ? Oubliez les.
            Ici chaque case peut devenir quantique. Attention chaque mouvement peut altérer le jeu et le résultat.
            Alignez vos symboles et devenez le maître du plateau !</dd>

            <dt>Schrödinger's Gamble</dt>
            <dd>Une boîte noir, une bille dont la couleur est incertaine et des pouvoirs quantique pour changer son destin.
            Manipulez la probabilité et défiez le hasard !</dd>
        </dl>

        <p class="text">L'après midi dans le <a href="http://sciences.univ-fcomte.fr/pages/fr/menu3795/ufr-st/plans-15171.html" target="_blank">hall propédeutique</a> :</p>

        <dl>
            <dt>Quantum Duel :</dt>
            <dd>Un jeu de cartes stratégique opposant deux joueurs, où chaque carte incarne un concept de la mécanique quantique. Entre manipulation de qubits, utilisation de portes quantiques et cartes atouts inspirées de l’univers quantique, chaque duel met à l’épreuve réflexion et tactique.</dd>

            <dt>Histoire Quantique :</dt>
            <dd>Une aventure interactive où un personnage explore diverses dimensions en maîtrisant les principes de la mécanique quantique. Entre superposition, intrication et paradoxes temporels, chaque choix façonne son voyage à travers le multivers.</dd>

            <dt>Simulation Quantique :</dt>
            <dd>Une simulation simplifiée d’un ordinateur quantique avec la manipulation de portes logiques ainsi qu’un jeu mobile développé par IBM.</dd>
        </dl>

        <!--TODO: rajouter les stands des PICS -->

        <br><br><br>
        <h3>Autres :</h3>
        <br>
        <p class="text">Des pulls, des écocups et des goodies aux couleurs de la journée seront disponibles !</p>
        <p class="text">Des viennoiseries seront en libre service.</p>
        <p class="text">Toute l'équipe organisatrice vous attend avec impatience pour cette journée !</p>
    </div>
</section>


<?php include('./footer.php'); ?>
