<?php
echo '---Bai 2---</br>';
$randomArray = range(1,10);
shuffle($randomArray);
foreach ($randomArray as $key => $value) {
    $message_1 = match ($value) {
        1 => 'một',
        2 => 'hai',
        3 => 'ba',
        4 => 'bốn',
        5 => 'năm',
        6 => 'sáu',
        7 => 'bảy',
        8 => 'tám',
        9 => 'chín',
        10 => 'mười'
    };
    echo $message_1.'</br>';
}
echo '</br>--------- Another way ---------</br></br>';
foreach ($randomArray as $key => $value) {
    switch ($value) {
        case 1: echo 'một</br>';
            break;
        case 2: echo 'hai</br>';
            break;
        case 3: echo 'ba</br>';
            break;
        case 4: echo 'bốn</br>';
            break;
        case 5: echo 'năm</br>';
            break;
        case 6: echo 'sáu</br>';
            break;
        case 7: echo 'bảy</br>';
            break;
        case 8: echo 'tám</br>';
            break;
        case 9: echo 'chín</br>';
            break;
        case 10: echo 'mười</br>';
    }
}
