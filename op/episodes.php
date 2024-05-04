<?php
$baseURL = "https://nalyd2121.github.io/NANIM3/op/";

// Nombre total d'épisodes
$numEpisodes = 42;

// Boucle pour générer les liens des épisodes
echo '<div class="scroller">';
for ($i = 1; $i <= $numEpisodes; $i++) {
    // Formatage du numéro d'épisode avec deux chiffres
    $episodeNumber = str_pad($i, 2, '0', STR_PAD_LEFT);
    // Génération de l'URL de l'épisode
    $episodeURL = $baseURL . $episodeNumber . ".html";
    // Affichage du lien de l'épisode
    echo '<a class="dropdowns-item" href="' . $episodeURL . '">Episode ' . $episodeNumber . '</a>';
}
echo '</div>';
?>
