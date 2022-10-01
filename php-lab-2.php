<?php
// Task 1
echo "Task 1 <br><br>";
echo nl2br("writes a newline in UNIX \n and \r\n writes a newline in WINDOWS on the browser window.");
echo "<br> Use  echo nl2br( `\N` in lowercase for new line in UNIX AND `\R\N` in lowercase for a new line in windows ";

// Task 2
echo "<br><br><hr>Task 2 <br><br>";
$str1="Hello";
$str2="World";

$strResult = $str1 . " " . $str2;
echo ("$strResult <br>");
echo strlen($strResult);
echo"<br>";
echo str_word_count("Hello world!");

// Task 3
echo "<br><br><hr>Task 3 <br><br>";
$arr = array(12, 45, 10, 25);
$arrSum = array_sum($arr);
$arrAvg = $arrSum / count($arr);
rsort($arr);
echo "sum= $arrSum and Avg=  $arrAvg";
echo "<br> Sorted Array <br>";
foreach( $arr as $value ) {
    echo "$value &nbsp;";
}

// Task 4
echo "<br><br><hr>Task 4 <br><br>";
$students = array("Sara" => 31,"John" => 41,"Walaa" => 39,"Ramy" => 40);

function printArray($x){
    foreach($x as $key => $value) {
        echo("$key - $value");
        echo ", &nbsp;";
    }
}
// ascending order sort by value
echo "ascending order sort by value: ";
asort($students);
printArray($students);
// ascending order sort by Key
echo "<br>ascending order sort by key: ";
ksort($students);
printArray($students);
// descending order sorting by Value
echo "<br>descending order sorting by Value: ";
arsort($students);
printArray($students);
// descending order sorting by Key
echo "<br>descending order sorting by Key: ";
krsort($students);
printArray($students);


// Task 5
echo "<br><br><hr>Task 5 <br><br>";

$students2 = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];
$thead="<tr><th>name &nbsp;&nbsp;</th>
            <th>email &nbsp;&nbsp;</th>
            <th>status&nbsp;&nbsp;</th>
        </tr>";

$len =  count($students2);
$tbody = "";

for($i = 0 ; $i <$len;$i++) {
    if($students2[$i]["status"] == 'PHP') {
    $tbody .=  "<tr>
                    <td>".$students2[$i]["name"]."</td>
                    <td>".$students2[$i]["email"]."</td>
                    <td style = 'color :red'>".$students2[$i]["status"]."</td>
                </tr>";
    }else {
    $tbody .= "<tr>
                    <td>".$students2[$i]["name"]."</td>
                    <td>".$students2[$i]["email"]."</td>
                    <td>".$students2[$i]["status"]."</td>
                </tr>";
    }
};

$table = "<table>$thead $tbody</table>";
echo $table;

?>
