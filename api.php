<?php 
//THIS IS YOUR PASSWORD
$PASSWORD = '1234';//<--'1234' is the default password

//DO NO EDIT CODE BELOW
$booksRoot = dirname(realpath(__FILE__)).'/books/';
$coversRoot = dirname(realpath(__FILE__)).'/covers/';
$booksArray = [];

//local-functions
function convertAllBooksToCovers(){
    $handlers = opendir($booksArray);
    while($file = readdir($handlers)){
        if($file != '.' && $file != '..'){
            $doc = new Imagick($file);
            $data->getImageBlob();
            file_put_contents($coversRoot.$file.'.png', $data);
        }
    }
}
function dirToArray($dir){
    $booksArray = [];
    $handler = opendir($dir);
    while($filename = readdir($handler)){
        if($filename !=='.' && $filename !== '..')
        	array_push($booksArray, $filename);
    }
    return $booksArray;
}
//API-part
switch($_GET['f']){
    case 'logon':
        if($_GET['password'] == $PASSWORD){
            echo json_encode(array('err'=>false));
        } else {
            echo json_encode(array('err'=>true));
        }
    break;
    case 'getBooks':
        echo json_encode(dirToArray($booksRoot));
    break;
    case 'convertAllBooksToCovers':
        convertAllBooksToCovers();
    break;
}
?>

