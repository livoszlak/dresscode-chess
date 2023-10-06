<?php

/* ARRAYS */
$squares = [
    'black' => '<div class="blackSquare"></div>',
    'white' => '<div class="whiteSquare"></div>'
];

$whitePieces = [
    'rook' => '&#x2656;',
    'knight' => '&#x2658;',
    'bishop' => '&#x2657;',
    'king' => '&#x2654;',
    'queen' => '&#x2655;',
    'bishop2' => '&#x2657;',
    'knight2' => '&#x2658;',
    'rook2' => '&#x2656;',
    'pawn' => '&#x2659;'
];

$blackPieces = [
    'rook' => '&#x265C;',
    'knight' => '&#x265E;',
    'bishop' => '&#x265D;',
    'king' => '&#x265A;',
    'queen' => '&#x265B;',
    'bishop2' => '&#x265D;',
    'knight2' => '&#x265E;',
    'rook2' => '&#x265C;',
    'pawn' => '&#x265F;'
];

$letters = ['h', 'g', 'f', 'e', 'd', 'c', 'b', 'a'];

$numbers = [1, 2, 3, 4, 5, 6, 7, 8];

/* FUNCTIONS */
function printSquares($squares)
{
    for ($i = 1; $i < 9; $i++) {
        for ($n = 1; $n < 5; $n++) { {
                if ($i % 2 === 0) {
                    foreach ($squares as $square) {
                        echo $square;
                    }
                } else {
                    foreach (array_reverse($squares) as $square) {
                        echo $square;
                    }
                }
            }
        }
    }
}

function printLetters($letters)
{
    foreach ($letters as $letter) {
        echo $letter;
    }
}

function printWhite($whitePieces)
{
    foreach ($whitePieces as $piece) {
        if ($piece !== '&#x2659;') {
            echo $piece;
        } else {
            echo "\n";
            break;
        }
    }
    for ($i = 0; $i < 8; $i++) :
        echo $whitePieces['pawn'];
    endfor;
    echo "\n";
}

function printBlack($blackPieces)
{
    for ($i = 0; $i < 8; $i++) :
        echo $blackPieces['pawn'];
    endfor;
    echo "\n";

    foreach ($blackPieces as $piece) {
        if ($piece !== '&#x265F;') {
            echo $piece;
        } else {
            break;
        }
    }
}

function printNumbers($numbers)
{
    foreach ($numbers as $number) :
        echo $number; ?><br>
<?php endforeach;
}

/* FUNKAR!

function printSquares($squares)
{
    for ($i = 1; $i < 9; $i++) {
        for ($n = 1; $n < 5; $n++) { {
                if ($i % 2 === 0) {
                    echo $squares['black'];
                    echo $squares['white'];
                } else {
                    echo $squares['white'];
                    echo $squares['black'];
                }
            }
        }
    }
}
*/
