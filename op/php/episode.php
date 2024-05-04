                               <?php
                                /*---------------------------------------------------------------*/
                                /*
    Titre : Créer un nouveau fichier                                                                                     
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=337
    Date édition     : 05 Fév 2008                                                                                        
    Date mise à jour : 22 Sept 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
                                /*---------------------------------------------------------------*/

                                $nom_file = "episode.php";
                                $texte = "Hello world!";

                                // création du fichier
                                $f = fopen($nom_file, "x+");
                                // écriture
                                fputs($f, $texte);
                                // fermeture
                                fclose($f);
                                ?>

                               User
                               <?php
                                // Boucle pour générer les liens des épisodes
                                $numEpisodes = 1102; // Nombre total d'épisodes
                                $baseURL = "https://nalyd2121.github.io/NANIM3/op/";

                                echo '<div class="scroller">';
                                for ($i = 1; $i <= $numEpisodes; $i++) {
                                    // Génération du lien avec le numéro d'épisode
                                    $episodeURL = $baseURL . $i . ".html";
                                    echo '<a class="dropdowns-item" href="' . $episodeURL . '">Episode ' . $i . '</a>';
                                }
                                echo '</div>';
                                ?>



                               (
                               <!DOCTYPE html>
                               <html lang="en">

                               <head>
                                   <meta charset="UTF-8">
                                   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                   <title>Liste des épisodes</title>
                               </head>

                               <body>

                                   <!-- Contenu de la page -->
                                   <h1>Liste des épisodes</h1>

                                   <!-- Inclusion du fichier PHP -->
                                   <?php include '<op>episodes.php'; ?>

                               </body>

                               </html>
                               )