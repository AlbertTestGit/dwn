<?php 

// Template Name: Manager

get_header();

// получение данных об активном пользователе 
$current_user = wp_get_current_user();
$user_login = $current_user->user_login;
$user_pass = $current_user->user_pass ;

$jwtData = [
    "username" => $user_login,
    "passHash" => $user_pass,
];
$JWT_URL = 'api:3000/api/wordpress/jwt';

$jwtData = json_encode($jwtData);
$curl = curl_init($JWT_URL);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
        array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jwtData);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ( $status != 201 ) {
    die("Error: call to URL $curl failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
}


curl_close($curl);

$jwtForAction = json_decode($json_response, true);

$jwtForAction = $jwtForAction['access_token'];

// аргументы для получение данных о таваре 
$args = array(
    'order' => 'DESC',
    'status' => 'publish'

);
$query = new WC_Product_Query($args);

// получение товаров 
$plugins = $query->get_products(); 

foreach($plugins as $plugin) {
    $productKey = $plugin->attributes['productkey']['data']['options'][0];
   
}




$pluginOptions = [];

foreach($plugins as $plugin) {
    $Options = [
        'SWID' => '',
        'pluginname' => '',
    ];
    $Options['SWID'] = $plugin->attributes['productkey']['data']['options'];
 
    $Options['pluginname'] = $plugin->name;
    $pluginOptions[] = $Options;
}












?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php



$users = get_users( array( 'fields' => array( 'user_login' ) ) );






$data = [
    'userId'   => 0,
    'swid' => '',
    'amount'    => 0,
    
];



if(isset($_POST['sendT'])) {
    $selectUser = $_POST['selectUser'];
    $takeIdUser = get_users([
        'login' => $selectUser,
    ]);
   
    $userid = $takeIdUser[0]->ID;
 

    $selectPlugin =$_POST['selectPlugin'];

    $selectAmount =$_POST['amount'];

    $url = 'api:3000/api/licenses';
  

    $data['swid'] =  $selectPlugin;
    $data['userId'] = intval( $userid);
    $data['amount'] =   intval($selectAmount);



    

    
    $Data = json_encode($data);
    $authorization = "Authorization: Bearer " . $jwtForAction;


    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json" , $authorization));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $Data);

    $json_response = curl_exec($curl);

    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if ( $status != 201 ) {
        die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
    }


    curl_close($curl);

    $response = json_decode($json_response, true);
    echo $response;
}

?>

<div class='container-manager' >
<form action="" method="post">
    <select name="selectUser" id="">

  <?php  
  $users = get_users( array( 'fields' => array( 'user_login' ) ) );
foreach($users as $user){
    $takeUser = $user->user_login;
    echo  '  <option value="' . $takeUser .  '">' . $takeUser . '</option> ' ;}
    ?>
    </select>   
    <select name="selectPlugin" id="">
        <?php    
    foreach ($pluginOptions as $PGO ) {
        print_r($PGO);
     
        echo  '  <option value="' . $PGO['SWID'][0].  '">' . $PGO['pluginname'] . '</option> ' ;  
    }
    
        ?>
    </select>  
    <div class="amount-sendBTN" > 
    <input type="number" name="amount" value='1'>
    <input class="sendReqBtn" type='submit' name="sendT" value="send"/>
    </div>
</form>
</div>
</body>
</html>

<?php get_footer(); ?>
