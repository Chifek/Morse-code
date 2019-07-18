<?php
$morseText = trim($_REQUEST['morse']);

$text = trim($_REQUEST['text']);
$text = strtoupper($text);
$chars = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);

$fromMorse = preg_split("/\s+/", $morseText);
//$fromText = preg_split("/\s+/", $text);

for ($i = 0; $i < count($fromMorse); $i++) {
    switch ($fromMorse[$i]) {
        case '.-':
            $character = "A";
            break;
        case '-...':
            $character = "B";
            break;
        case '-.-.':
            $character = "C";
            break;
        case '-..':
            $character = "D";
            break;
        case '.':
            $character = "E";
            break;
        case '..-.':
            $character = "F";
            break;
        case '--.':
            $character = "G";
            break;
        case '....':
            $character = "H";
            break;
        case '..':
            $character = "I";
            break;
        case '.---':
            $character = "J";
            break;
        case '-.-':
            $character = "K";
            break;
        case '.-..':
            $character = "L";
            break;
        case '--':
            $character = "M";
            break;
        case '-.':
            $character = "N";
            break;
        case '---':
            $character = "O";
            break;
        case '.--.':
            $character = "P";
            break;
        case '--.-':
            $character = "Q";
            break;
        case '.-.':
            $character = "R";
            break;
        case '...':
            $character = "S";
            break;
        case '-':
            $character = "T";
            break;
        case '..-':
            $character = "U";
            break;
        case '...-':
            $character = "V";
            break;
        case '.--':
            $character = "W";
            break;
        case '-..-':
            $character = "X";
            break;
        case '-.--':
            $character = "Y";
            break;
        case '--..':
            $character = "Z";
            break;
    }
    $resultMorse .= $character;
}

for ($j = 0; $j < count($chars); $j++) {
    switch ($chars[$j]) {
        case 'A':
            $character2 = '.-';
            break;
        case 'B':
            $character2 = "-...";
            break;
        case 'C':
            $character2 = "-.-.";
            break;
        case 'D':
            $character2 = "-..";
            break;
        case 'E':
            $character2 = ".";
            break;
        case 'F':
            $character2 = "..-.";
            break;
        case 'G':
            $character2 = "--.";
            break;
        case 'H':
            $character2 = "....";
            break;
        case 'I':
            $character2 = "..";
            break;
        case 'J':
            $character2 = ".---";
            break;
        case 'K':
            $character2 = "-.-";
            break;
        case 'L':
            $character2 = ".-..";
            break;
        case 'M':
            $character2 = "--";
            break;
        case 'N':
            $character2 = "-.";
            break;
        case 'O':
            $character2 = "---";
            break;
        case 'P':
            $character2 = ".--.";
            break;
        case 'Q':
            $character2 = "--.-";
            break;
        case 'R':
            $character2 = ".-.";
            break;
        case 'S':
            $character2 = "...";
            break;
        case 'T':
            $character2 = "-";
            break;
        case 'U':
            $character2 = "..-";
            break;
        case 'V':
            $character2 = "...-";
            break;
        case 'W':
            $character2 = ".--";
            break;
        case 'X':
            $character2 = "-..-";
            break;
        case 'Y':
            $character2 = "-.--";
            break;
        case 'Z':
            $character2 = "--..";
            break;
    }
    $resultFromText .= ' ' . $character2;
}

echo '<h2>From Morse: ' . $resultMorse . '</h2>';
echo '<h2>From text: ' . $resultFromText . '</h2>';
echo '<a href="/">На главную</a>';
exit();