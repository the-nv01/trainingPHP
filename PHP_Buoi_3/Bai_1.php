<?php
echo '---Bai 1---</br>';
const milestones = [
    50 => 3500,
    100 => 4000,
    200 => 5000,
];
const maxCost = 6000;
function calcBill(int $electricityIndex) :int
{
    $sumBill = 0;
    $previousMilestone = 0;
    foreach (milestones as $milestone => $cost) {
        if ($electricityIndex > $milestone) {
            $sumBill += ($milestone - $previousMilestone) * $cost;
            $previousMilestone = $milestone;
        }
        else {
            return $sumBill + ($electricityIndex - $previousMilestone) * $cost;
        }
    }
    return $sumBill + ($electricityIndex - $previousMilestone) * maxCost;
}

print_r(calcBill(65).'</br>'); //235000
print_r(calcBill(135).'</br>'); //550000
print_r(calcBill(230).'</br>'); //1055000
