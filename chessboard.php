<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <?php require __DIR__ . '/vars_functions.php'; ?>
    <title>Chess for success</title>
</head>

<body>
    <div class="all-container">
        <div class="numbers left">
            <?php printNumbers($numbers); ?>
        </div>
        <div class="container">
            <div class="pieces white">
                <?php printWhite($whitePieces); ?>
            </div>
            <div class="container letters"><?php printLetters($letters); ?></div>
            <div class="board">
                <?php
                printSquares($squares); ?>
            </div>
            <div class="container letters"><?php printLetters($letters); ?></div>
            <div class="pieces black">
                <?php printBlack($blackPieces); ?>
            </div>
        </div>
        <div class="numbers right">
            <?php printNumbers($numbers); ?>
        </div>
    </div>

</body>

</html>