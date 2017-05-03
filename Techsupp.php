<html>
    <header>
        <title>PHP Benchmark</title>

    </header>

    <body>
        
 <?php
    $myMoney = 13;
    
    switch ($myMoney) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        echo 'I have between 0 and 6 €';
            break;

            case 7:            
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 16:
            case 17:
            case 18:
            echo 'I don'.'t want to talk about it';
    } 
    ?>

    <?php
            for ($bills=6; $bills<6; $bills++) {

            echo "<p>$bills</p>";
    }
    ?>
</body>
</html>