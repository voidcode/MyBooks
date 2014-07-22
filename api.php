<?php 
//THIS IS YOUR PASSWORD
$PASSWORD = '1234';//<--'1234' is the default password

//DO NO EDIT CODE BELOW
$booksRoot = dirname(realpath(__FILE__)).'/books/';


//API-parts-below
//GET-calls
switch($_GET['f']){
    case 'logon':
        if($_GET['password'] == $PASSWORD){
            echo json_encode(array('err'=>false));
        } else {
            echo json_encode(array('err'=>true));
        }
    break;
    case 'getBooks':
        $booksArray = [];
        $handler = opendir($booksRoot);
        while($filename = readdir($handler)){
            if($filename !=='.' && $filename !== '..' && $filename !== null)
            	array_push($booksArray, $filename);
        }
        echo json_encode($booksArray);
    break;
}
//POST-calls
switch($_POST['f']){
    case 'uploadFile':
        //$allowed = array('pdf', 'odt', 'txt', 'epub');
        if(!empty($_FILES)){
            $target_path = "books/";
            $target_path = $target_path . basename( $_FILES['upfiledata']['name']); 
            
            if(move_uploaded_file($_FILES['upfiledata']['tmp_name'], $target_path)) {
                echo json_encode(array('err'=>false));
            } else {
                echo json_encode(array('err'=>true));
            }
        }
    break;
}
?>

