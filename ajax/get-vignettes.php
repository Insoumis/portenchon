<?php
$json = [
    'resultat' => 'error',
    'message' => 'Une erreur est survenue.',
];

$categorieVignettes = filter_input(INPUT_GET, 'categorie', FILTER_SANITIZE_STRING);
$nombreVignettes = filter_input(INPUT_GET, 'nombre', FILTER_SANITIZE_STRING);

$fichiersVignettes = [
    'facebook' => 'facebook.xml',
    'autre' => 'others.xml',
    'twitter' => 'twitter.xml',
    'sites' => 'websites.xml',
    'youtube' => 'youtube.xml',
];

if (!isset($fichiersVignettes[$categorieVignettes])) {
    $json['message'] = 'La catégorie demandée n\'existe pas.';
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
}

$fichierVignettes = '../contents/' . $fichiersVignettes[$categorieVignettes];
if (!file_exists($fichierVignettes)) {
    echo var_export($fichierVignettes,true);
    $json['message'] = 'Une erreur est survenue lors de la lecture des données.';
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
}

// Charge le fichier en xml
$xmlVignettes = simplexml_load_file($fichierVignettes);
if (!$xmlVignettes) {
    $json['message'] = 'Une erreur est survenue lors de l\'analyse des données.';
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
}


// Détermine le nombre de vignettes demandé
$maximum = empty($nombreVignettes) ? count($xmlVignettes->content) : $nombreVignettes;

$vignettes = [];
// Pour chaque vignette 
for ($i = 0; $i < $maximum; $i++) {
    $vignette = [
        'classe'     => ($i % 3 == 0) ? 'break' : '',
        'lien'          => (string)$xmlVignettes->content[$i]->url,
        'titre'         => (string)$xmlVignettes->content[$i]->title,
        'description'   => (string)$xmlVignettes->content[$i]->description,
        'urlImage'      => '/images/' . (string)$xmlVignettes->content[$i]->img,
        'altImage'      => (string)$xmlVignettes->content[$i]->title,
    ];
    $vignettes[] = $vignette;
}

$json['resultat'] = 'success';
$json['message'] = 'Vignettes chargées avec succès.';
$json['vignettes'] = $vignettes;

echo json_encode($json, JSON_UNESCAPED_UNICODE);
return;