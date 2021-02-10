<!DOCTYPE html>
<html>

    <head>
        <title>WIKI</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <script></script>
    </head>

    <body>
        <header>
            <nav id="block">
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="article.php">Saitama</a></li>
                    <li><a href="Commentaire">Commentaire</a></li>
                </ul>
            </nav>
        </header>
        


            <section class="Third">
                <div class="damn">
                <div class="sommaire">
                    <ol>
                    <li><a href="#Apparence-Vêtements">Apparence Vêtements</a><br></li>
                    <li><a href="#Personnalité">Personnalité<br></li>
                    <li><a href="#Power">Capacités et pouvoirs<br></li>
                    <li><a href="#Capacités">Capacités physiques<br></li>
                    <li><a href="#Combat">Style de combat<br></li>
                    <li><a href="#Divers">Capacités diverses<br></li>
                    <li><a href="#Classement">Classement des héros<br></li>
                    <li><a href="#Citations">Citations</li>
                    </ol>
                </div>
                </div>
                
                <div class="caractéristiques">
                
                <a href="#"><img src="Images/Saitama1.png" alt="Saitama"></a>

                        <h2>Caractéristiques</h2>
                    <div class="sub-car">
                        <h3>Nom</h3>
                        <p>Saitama</p>
                    </div>
                    <div class="sub-car">
                        <h3>Pseudo</h3>
                        <p>One Punch Man / Caped Baldy</p>
                    </div>
                    <div class="sub-car">
                        <h3>Race</h3>
                        <p>Humain</p>
                    </div>
                    <div class="sub-car">
                        <h3>Genre</h3>
                        <p>Homme</p>
                    </div>
                    <div class="sub-car">
                        <h3>Âge</h3>
                        <p>25</p>
                    </div>
                    <div class="sub-car">
                        <h3>Statut</h3>
                        <p>Vivant</p>
                    </div>
                    <div class="sub-car">
                        <h3>Emplacement</h3>
                        <p>Z-City<br>
                            Z-City Ghost Town<br>
                            Saitama's Apartment</p>
                    </div>
                        <h2>Capacités</h2>
                    <div class="sub-car">
                        <h3>Capacités</h3>
                        <p>Prouesses physiques incommensurables<br>
                        Réflexes et sens surnaturels<br>
                        Invulnérabilité<br>
                        Volonté indomptable<br>
                        Interaction non physique<br>
                        Génération d'ondes de choc</p>
                    </div>
                        <h2>Statut</h2>
                    <div class="sub-car">
                        <h3>Occupation</h3>
                        <p>Héros</p>
                    </div>
                    <div class="sub-car">
                        <h3>Rang</h3>
                        <p>Classe B Rang 7</p>
                    </div>
                    <div class="sub-car">
                        <h3>Affiliation</h3>
                        <p>Association des Héros<br>
                            Groupe de Saitama</p>
                    </div>
                    <div class="sub-car">
                        <h3>Les partenaires</h3>
                        <p>Genos (disciple)</p>
                    </div>
                </div>
            </section>
            <section>
                <div class="Text">
                    <h3 id="Apparence-Vêtements">Apparence et Vêtements</h3>
                    <p>Saitama est un homme chauve 
                        d'apparence ordinaire avec un 
                        physique mince mais bien bâti 
                        et de taille et de poids moyens. 
                        Il avait l'habitude d'avoir une 
                        tête pleine de cheveux noirs 
                        courts mais les a perdus à 
                        cause de l'intensité de son 
                        programme d'entraînement de héros.</p>
                        <p>Saitama est généralement délibérément dessiné dans un style plus simpliste que les autres personnages, similaire au style <br>
                            de la bande dessinée originale , avec une tête elliptique et des traits du visage simples. Lorsqu'il est dessiné dans un <br>
                            style plus sérieux, Saitama se révèle avoir des traits du visage nets, des yeux effrayants et une musculature ciselée. <br>
                            Sa posture change également, avec une posture relâchée et des épaules inclinées quand elles sont relâchées, et une posture <br>
                            redressée et des épaules carrées quand elles sont sérieuses.</p>
                </div>
            </section>
            <section>
                <div class="Text">
                    <h3 id="Personnalité">Personnalité</h3>
                    <p>gang</p>
                </div>
            </section>
            <section>
                <div class="Text">
                    <h3 id="Power">Capacités et pouvoirs</h3>
                    <p>gang</p>
                </div>
            </section>
            <section>
                <div class="Text">
                    <h3 id="Capacités">Capacités physiques</h3>
                    <p>gang</p>
                </div>
            </section>
            <section>
                <div class="Text">
                    <h3 id="Combat">Style de combat</h3>
                    <p>gang</p>
                </div>
            </section>
            <section>
                <div class="Text">
                    <h3 id="Divers">Capacités diverses</h3>
                    <p>gang</p>
                </div>
            </section>
            <section>
                <div class="Text">
                    <h3 id="Classement">Classement des héros</h3>
                    <p>gang</p>
                </div>
            </section>
            <section>
                <div class="Text">
                    <h3 id="Citations">Citations</h3>
                    <p>gang</p>
                </div>
            </section>
            <section>
        <div>
            <?php
                $aConnect = array();

                $aConnect['ip'] = "localhost"; // le serveur
                $aConnect['login'] = "root"; // le login
                $aConnect['password'] = ""; // mot de passe
                $aConnect['database'] = "Wiki OnePunchMan"; // nom de la base de donnee
                $aConnect['port'] = "3306"; // 

                $oConnect = mysqli_connect($aConnect['ip'], $aConnect['login'], $aConnect['password'], $aConnect['database'], $aConnect['port']);

                if ($oConnect) {
                    // echo "Connexion réussie : version du serveur = ".$oConnect->server_info."<br />"; 
                } else {
                    echo "Erreur lors de la connexion.<br />";
                    exit();
                }

                $s_sqlSelect = "SELECT titre, imageUrl,corps FROM articles WHERE id=" . $_GET['id'];
                // echo "Requête: " . $s_sqlSelect;
                $oResult = @mysqli_query($oConnect, $s_sqlSelect);

                // si la requête a réussie ?
                if ($oResult) {
                    // echo "Requête exécutée.<br />";

                    // parcours de tous les résultats
                    while ($oSqlObject = mysqli_fetch_object($oResult)) {
                        $sTitre = $oSqlObject->titre;
                        $sCorps = $oSqlObject->corps;
                        $sImageUrl = $oSqlObject->imageUrl;

                        echo "<p class='txtart'><strong>" . $sTitre . "</strong><br /><img src='" . $sImageUrl . "' alt='premiere image du site'><br>" . $sCorps . "</p>";
                    }
                } else {
                    echo "Echec de l'exécution de la requête.<br />";
                    echo "Error description: " . mysqli_error($oConnect) . "<br />";
                }


                // Déconnexion. 
                $bClose = mysqli_close($oConnect);

                // echo "Déconnexion : bClose = ".$bClose."<br />"; 
            ?>
        </div>
    </section>

        <footer>

        </footer>
    </body>
</html>