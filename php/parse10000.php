<!DOCTYPE html>
<html>
<head>

<title>10000</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/lexi_styles.css"> 
</head> 
    
<body>

<?php
    
//GET TEN WORDS
$tenThousandWordArray = array();
$tenWordArray = array();
  
//PARSE TEXT FILE
$tenWords = file_get_contents('lib/google10000.txt');
$rows = explode("\n" , $tenWords);
foreach($rows as $row => $data)
{
    //GET ROW DATA
    $row_data = explode('^', $data);
    $info[$row]['id']           = $row_data[0];
    $word = $info[$row]['id'];
    //DISPLAY WORD DATA
    if (strlen($word) > 3) {
    array_push($tenThousandWordArray, $word);
    }
}

//PUSH RANDOM INDEX TO 
array_push($tenWordArray,
$random10One = $tenThousandWordArray[array_rand($tenThousandWordArray)],
$random10Two = $tenThousandWordArray[array_rand($tenThousandWordArray)],
$random10Three = $tenThousandWordArray[array_rand($tenThousandWordArray)],
$random10Four = $tenThousandWordArray[array_rand($tenThousandWordArray)],
$random10Five = $tenThousandWordArray[array_rand($tenThousandWordArray)],
$random10Six = $tenThousandWordArray[array_rand($tenThousandWordArray)],
$random10Seven = $tenThousandWordArray[array_rand($tenThousandWordArray)],
$random10Eight = $tenThousandWordArray[array_rand($tenThousandWordArray)],
$random10Nine = $tenThousandWordArray[array_rand($tenThousandWordArray)],
$random10Ten = $tenThousandWordArray[array_rand($tenThousandWordArray)]);

//    foreach ($tenWordArray as $ten) {
//    echo $ten;
//    echo "<br>";
//
//}

?>
 
</body>
    
</html>