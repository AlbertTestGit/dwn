<?php  
// Template Name: manual-activation

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
    die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
}


curl_close($curl);

$jwtForAction = json_decode($json_response, true);

$jwtForAction = $jwtForAction['access_token'];


if(isset($_GET['sendButton'])) {
    $token = $_GET['token'];
    $url = 'api:3000/api/licenses/manual-activation';
    $authorization = "Authorization: Bearer " . $jwtForAction;
 


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $jwtForAction));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'api:3000/api/licenses/manual-activation?token=' . $token);


    $otvetServer = curl_exec($ch);
    $otvetServer = json_decode($otvetServer);
    curl_close($ch);
    


    

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual activation</title>
    <style>
        .container-manual-activation {
            margin: 20px;
            display: flex;
            justify-content: center;
        }
        .container-manual-activation input {
            margin: 5px;
        }

        .licensePole {
            width: 305px;
            margin: 10px;
        }
        .copyBtn {
            line-height: 20px;
            height: 50px;
            margin: 10px;
        }
        .show {
            display: none;
        }
    </style>
</head>
<body>
<div class="container-manualActive" >
    <form >
        <p><?php print_r($otvetServer->message); ?></p>
    </form>
    <form class='container-manual-activation'>
        <input type="text" name="token">
        <input class="sendToken" type="submit" name="sendButton" value="Send Token" >


    </form>
    <div id="showLicense" class='show container-manual-activation'>
        <input id="licensePole" class="licensePole" type="text" value="<?php print($otvetServer->data); ?>">
        <button onclick="copyCode()" class="copyBtn">copy</button>
    </div >
</div>
    <script>
        if (document.getElementById("licensePole").value != "") {
            showElement()
        }


        function showElement() {
            let element = document.getElementById("showLicense");
            element.classList.remove('show')
        }


        function copyCode() {
            var copyText = document.getElementById("licensePole");
            copyText.select();
            document.execCommand("copy");
        } 
    </script>

</body>
</html>
<?php get_footer(); ?>
