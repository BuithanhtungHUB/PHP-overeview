<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Speak Number</title>
    <style>
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #CCCCCC;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Speak A Number</h2>
<form method="post">
    <input type="number" name="speak" placeholder="input number">
    <input type="submit" id="submit" value="Speak">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["speak"];
    $hundreds = floor($number / 100);
    $tens = floor(($number - ($hundreds * 100)) / 10);
    $ones = $number - $hundreds * 100 - $tens * 10;

    $onesArr = ['Zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
    $tensArr = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
    $arr10to19 = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];

    if ($number >= 0 && $number < 1000) {
        if ($hundreds == 0 && $tens == 0 && $ones < 10) {
            for ($i = 0; $i < count($onesArr); $i++) {
                switch ($ones) {
                    case $i:
                        echo $onesArr[$i];
                        break;
                    default:
                        break;
                }
            }
        }

        if ($hundreds == 0 && $tens >= 1 && $tens < 10 && $ones < 10) {
            if ($tens == 1) {
                for ($i = 0; $i < count($arr10to19); $i++) {
                    switch ($ones) {
                        case $i:
                            echo $arr10to19[$i];
                            break;
                        default:
                            break;
                    }
                }
            } else {
                if ($ones == 0) {
                    for ($i = 0; $i < count($tensArr); $i++) {
                        switch ($tens) {
                            case $i:
                                echo $tens[$i];
                                break;
                            default:
                                break;
                        }
                    }
                } else {
                    for ($i = 0; $i < count($tensArr); $i++) {
                        for ($j = 0; $j < count($onesArr); $j++) {
                            switch ($tens) {
                                case $i:
                                    switch ($ones) {
                                        case $j:
                                            echo $tensArr[i] . '-' . $ones[j];
                                            break;
                                        default:
                                            break;
                                    }
                                    break;
                                default:
                                    break;
                            }
                        }
                    }
                }
            }
        }
        if ($hundreds >= 1 && $hundreds < 10 && $tens < 10 && $ones < 10) {
            if ($tens == 0 && $ones == 0) {
                for ($i = 0; $i < count($onesArr); $i++) {
                    switch ($hundreds) {
                        case $i:
                            echo $onesArr[$i] . ' hundred';
                            break;
                        default:
                            break;
                    }
                }
            } else {
                if ($tens == 0) {
                    for ($i = 0; $i < count($onesArr); $i++) {
                        for ($j = 0; $j < count($onesArr); $j++) {
                            switch ($hundreds) {
                                case $i:
                                    switch ($ones) {
                                        case $j:
                                            echo $ones[$i] . ' hundred and ' . $onesArr[j];
                                            break;
                                        default:
                                            break;
                                    }
                                    break;
                                default:
                                    break;
                            }
                        }
                    }
                } else {
                    if ($tens == 1) {
                        for ($i = 0; $i < count($onesArr); $i++) {
                            for ($j = 0; $j < count($arr10to19); $j++) {
                                switch ($hundreds) {
                                    case $i:
                                        switch ($ones) {
                                            case $j:
                                                echo $onesArr[$i] . ' hundred and ' . $arr10to19[$j];
                                                break;
                                            default:
                                                break;
                                        }
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                    } else {
                        if ($ones == 0){
                            for ($i =0; $i <count($onesArr); $i++){
                                for ($j = 0; $j <count($tensArr); $j++){
                                    switch ($hundreds) {
                                        case $i:
                                            switch ($tens) {
                                                case $j:
                                                    echo $onesArr[$i].' hundred and '. $tensArr[$j];
                                                    break;
                                                default:
                                                    break;
                                            }
                                            break;
                                        default:
                                            break;
                                    }
                                }
                            }
                        } else {
                            for ($i = 0; $i <count($onesArr); $i++){
                                for ($j = 0; $j <count($tensArr); $j++){
                                    for ($k = 0; $k < count($onesArr); $k++){
                                        switch ($hundreds){
                                            case $i:
                                                switch ($tens){
                                                    case $j:
                                                        switch ($ones){
                                                            case $k:
                                                                echo $onesArr[$i].' hundred and '.$tensArr[$j].' '.$onesArr[$k];
                                                                break;
                                                            default:
                                                                break;
                                                        }
                                                        break;
                                                    default:
                                                        break;
                                                }
                                                break;
                                            default:
                                                break;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    } else {
        echo 'Out of ability';
    }
}
?>
</body>
</html>
<?php
