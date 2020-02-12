<section id="Présentation">
            <h2>Ecoles et formations</h2>
            <section>
                <ul> 
                    <li> Préparation BTS Optique	Marseille
                        Ecole ISO	2016
                    </li> </br>   
                    <li>Baccalauréat Professionnel TMESEC		Marseille
                        Lycée Don Bosco	2015
                    </li> </br>
                    <li>B.E.P M.S.E.C	Marseille
                        Lycée Don Bosco 2014
                    </li>  </br>
                    <li>Certificat de sauveteur Secouriste au Travail (SST)		Marseille
                        Lycée Don Bosco 	2014
                    </li>
                </ul>
            </section>
        </section>
        <section id="Experiences">
            <h2>Experiences Professionels</h2>
            <section>
                <ul>
                <li>WING Scooter	Marseille
                    Employé Polyvalent - CDD	Juin 2019 – Oct. 2019
                    Ramassage des trottinettes 
                    Référence : Jonas Nezri - Responsable
                </li> </br>
                <li>FFESSM (Fédération Française d’Etudes et de Sports Sous-Marins)	Marseille
                    Magasinier/Carriste – Intérim	Août 2019 – Sept. 2019
                    En charge des expéditions (envoie, affranchissement…)
                    Tâches informatiques
                    Manutention
                    Référence : Jean-Marc BRONNER-Directeur 
                </li> </br>
                <li>Soins Assistances	Marseille
                    Agent Logistique – Intérim	Fév. 2019 – Avril 2019
                    Livraison de matériels consommables médical chez les patients de l'HAD
                    Travail de désinfectation 
                    Manutention
                    Référence : Vinciane COUR – Agence d’emploi 
                </li> </br>
                <li>Tradition de Provence – Four des Navettes	Marseille
                    Manutentionnaire – Intérim	Déc. 2018 – Fév. 2019
                    Manutention
                    Emballage
                    Aide boulanger
                    Référence : Sandrine SINAPI – Directrice du Four 
                </li> </br>
                <li>La Poste / Chronopost	Marseille
                    Facteur Courrier à pied et vélo / Manutentionnaire– CDD	Déc. 2018 – Fév. 2019
                </li>
            </ul>
            </section>
        </section>
        <section id="Compétences">
            <h2>Compétences</h2>
            <div> Ipsum dolor sit amet consectetur adipisicing elit. Omnis minima at quam repellendus 
            </div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta porro voluptas nesciunt reiciendis, incidunt, ipsam ab illum minus vitae doloribus eos, magnam minima fugiat. Placeat vel eligendi ratione libero nam.
            </div>
            <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit, velit enim iusto magnam alias perspiciatis! Vel et velit doloremque excepturi sint maiores blanditiis voluptate enim. Suscipit, porro vel? Accusamus, exercitationem.
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla vel perspiciatis, rem voluptates quaerat id laboriosam ea maiores reprehenderit accusamus quam, doloremque ex cum molestiae sapiente libero adipisci? Cumque, aut.
            </p>
        </section>
        
<div class="container"> 
<?php
    $tableau    = [ "logo1.png", "logo3.png", "logo2.png", "logo4.png", "logo5.png" ];
    $tableauAlt = ["alt1", "alt2", "alt3", "alt4", "alt5" ];
    for($i=0; $i < count($tableau); $i++)
    {
        echo
    <<<CODEHTML
                <img src="assets/img/$tableau[$i] " alt="$tableauAlt[$i]">
     
    CODEHTML;    
    }
?>    
</div>
    </section>
    <form action="#s5" method="GET">
            <input type="text" name="nom" placeholder="entrez votre nom" required>
            <br>
            <input type="email" name="email" placeholder="entrez votre email"required>
            <br>
            <textarea name="message" cols="60" rows="8" maxlength="1000" placeholder="entrez votre message" required></textarea>
            <button type="submit">envoyer votre message</button>
            <div>
                <?php require_once "php/controller/traitement-contact.php" ?>
            </div>
        </form>
