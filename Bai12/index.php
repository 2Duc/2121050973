<?php 
// Noi dung php dat o vi tri nay
echo "Hello world! <br>" ;

// khai bao bien
$hoten = "Duc Duong";
$tuoi = 23;
echo $hoten . " " . $tuoi . "<br>";

// strlen() do dai chuoi
echo strlen($hoten) . "<br>";

// dem so tu
echo str_word_count($hoten) . "<br>";

// tim kiem ki tu trong chuoi
echo strpos($hoten, "o")  . "<br>";

// thay the ki tu trong chuoi
echo str_replace("Alo" , "Duong" , $hoten)  . "<br>";  

//lam toan
$sothunhat = 10;
$sothuhai = 5;
echo $sothunhat + $sothuhai . "<br>";
echo $sothunhat - $sothuhai . "<br>";
echo $sothunhat * $sothuhai . "<br>";
echo $sothunhat / $sothuhai . "<br>";
echo $sothunhat % $sothuhai . "<br>";

// toán tử gán
$sothunhat += $sothuhai;
echo $sothunhat . "<br>";
$sothunhat -= $sothuhai;
echo $sothunhat . "<br>";
$sothunhat *= $sothuhai;
echo $sothunhat . "<br>";
$sothunhat /= $sothuhai;
echo $sothunhat . "<br>";
$sothunhat %= $sothuhai;
echo $sothunhat . "<br>";

//toán tử so sánh: == != > < >= <= ===
echo $sothunhat > $sothuhai . "<br>";

// câu điều kiện
// if("điều kiện"){
    // logic
//}
//elseif("điều kiện"){
    //logic
//} else{
    //logic
//}

$tong = $sothunhat + $sothuhai . "<br>";
if($tong < 15){
    echo "Tổng nhỏ hơn 15" . "<br>";
} elseif($tong == 15){
    echo "Tổng bằng  15" . "<br>";
} else{
   echo "Tổng lớn hơn 15" . "<br>";
}

//switch case
$color = 'red';
switch($color){
    case "red":
        echo "<br>";
        echo "IS RED";
        break;
    case "blue":
        echo "<br>";
        echo "IS BLUE";
        break;   
    default:
        echo "<br>";
        echo "no color";
        break;
}
//for
for($i = 0;$i <100;$i++){
    echo $i . "<br>";
}

// mảng
echo "<br>";
$mang = ["Anh", "Nhat Anh", "Vu Anh"];
 // đếm phần tử
 echo count ($mang) . "<br>";
 echo $mang[1] . "<br>";

 $mang[] = "Quang Anh";
 print_r($mang);

echo "<br>";
unset($mang[3]);
 print_r($mang);

?>