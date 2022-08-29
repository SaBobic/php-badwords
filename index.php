<!--
    
Creiamo una variabile con un paragrafo di testo a scelta.
Stampiamo a schermo il paragrafo e la sua lunghezza.
Passiamo sulla barra del browser in query string una parola che vogliamo censurare
Recuperiamo la parola da censurare via PHP e  sostituiamo tutte le sue occorrenze nel paragrafo con 3 asterischi.
Stampiamo di nuovo il paragrafo e la sua nuova lunghezza.

-->

<?php
$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit Lorem esse cillum dolore Lorem eu fugiat nulla pariatur. Excepteur sint occaecat Lorem cupidatat non proident, sunt in culpa qui officia deserunt Lorem mollit anim id est laborum.';

$paragraph_length = strlen($paragraph);

$badword = $_GET['badword'];

echo $paragraph;

echo '<br>';
echo '<br>';

echo 'Il paragrafo originale è lungo ' . $paragraph_length . ' caratteri.';

echo '<br>';
echo '<br>';

echo 'La parola da censurare è: ' . $badword;

echo '<br>';
echo '<br>';

$new_paragraph = str_replace($badword, '***', $paragraph);
$new_paragraph_length = strlen($new_paragraph);

echo $new_paragraph;

echo '<br>';
echo '<br>';

echo 'Il paragrafo censurato è lungo ' . $new_paragraph_length . ' caratteri.';
?>