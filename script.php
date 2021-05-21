<?php
$a[] = "albina.zekaj1@student.uni-pr.edu";
$a[] = "ramizgeci@student.uni-pr.edu";
$a[] = "altinsadriu@student.uni-pr.edu";
$a[] = "albinazekaj@student.uni-pr.edu";
$a[] = "edon.gashi@student.uni-pr.edu";
$a[] = "tinaavdyli@student.uni-pr.edu";
$a[] = "artanb@student.uni-pr.edu";
$a[] = "donjeta.k@student.uni-pr.edu";
$a[] = "donjeta_berisha@student.uni-pr.edu";
$a[] = "nisisahiti@student.uni-pr.edu";
$a[] = "qendresabajrami@student.uni-pr.edu";
$a[] = "lindakrasniqi@student.uni-pr.edu";
$a[] = "teuterrusta@student.uni-pr.edu";
$a[] = "amandagashi@student.uni-pr.edu";
$a[] = "butrintshabani@student.uni-pr.edu";
$a[] = "leartgllareva@student.uni-pr.edu";
$a[] = "trimlushaj@student.uni-pr.edu";
$a[] = "taulantzekaj@student.uni-pr.edu";
$a[] = "lekedervishi@student.uni-pr.edu";
$a[] = "zgjimvuqiqi@student.uni-pr.edu";
$a[] = "jonibytyqi@student.uni-pr.edu";
$a[] = "elisagashi@student.uni-pr.edu";
$a[] = "jonirrustemi@student.uni-pr.edu";


$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $email) {
        if (stristr($q, substr($email, 0, $len))) {
            if ($hint === "") {
                $hint = $email;
            } else {
                $hint .= ", $email";
            }
        }
    }
}
echo '<h5 style="color:white;">';
echo $hint === "" ? "no suggestion" : $hint;
echo "</h5>";
?>
