<?
function man_age($year, $month, $day, $b_year, $b_month, $b_day){
    if($b_month < $month)
        $age = $year - $b_year;
    else if($b_month == $month){
        if($b_day <= $day)
            $age = $year - $b_year;
        else
            $age = $year - $b_year - 1;
    }
    else
        $age = $year - $b_year - 1;
    return $age;
}

$now_year = 2023;
$now_month = 11;
$now_day = 2;

$birth_year = 2002;
$birth_month = 3;
$birth_day = 21;

$your_age = man_age($now_year, $now_month, $now_day, $birth_year, $birth_month, $birth_day);
echo"당신의 만 나이는 : {$your_age}세";
?>