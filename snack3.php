<!-- Snack 3
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<h1>Post Display</h1>

<?php

$postDates = array_keys($posts);

// Itero le date dei post
for ($i = 0; $i < count($postDates); $i++) {
    $currentDate = $postDates[$i];
    echo ('<h2>' . $currentDate . '</h2>');
    $currentPost = $posts[$currentDate];

    // Itero i post all'interno della data
    for ($postIndex = 0; $postIndex < count($currentPost); $postIndex++) {
        $post = $currentPost[$postIndex];
?>

        <div>
            <h3> <?= $post['title'] ?> </h3>
            <p> <?= $post['author'] ?> </p>
            <p> <?= $post['text'] ?> </p>
        </div>

<?php
    }
}

?>