<?php 

$text = "lorem - test ipsum,testest/value|test, ups. test lorem..sfsd, ipsum";
echo'<b>Text:</b> '.$text.'<br>';
echo '<br> В тексте присутствует слово в количестве: '.getCountWordsByNumber($text,2);

function getCountWordsByNumber($text, $num) {
    $results = preg_split('/[\s,\/|.-]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    $counter;
    echo 'Слово: '.$results[$num-1];
    foreach ($results as &$result) {
        if (strcasecmp($result, $results[$num-1]) == 0) {
            $counter++;
        }
    }
    return $counter;
}
?>