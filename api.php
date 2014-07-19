<?php 
//THIS IS YOUR PASSWORD
$PASSWORD = '1234';//<--'1234' is the default password

//DO NO EDIT CODE BELOW
switch($_GET['f']){
    case 'logon':
        if($_GET['password'] == $PASSWORD){
            echo json_encode(array('err'=>false));
        } else {
            echo json_encode(array('err'=>true));
        }
    break;
    case 'getBooks':
        $filenameArray = [];
        $booksRoot = dirname(realpath(__FILE__)).'/books/';
        $handler = opendir($booksRoot);
        while($file = readdir($handler)){
        	if($file !=='.' && $file !== '..')
        		array_push($filenameArray, $file);
        }
        echo json_encode($filenameArray);
    break;
}
?>

