<?php 
// Template Name: My plugins


get_header();
$current_user = wp_get_current_user();
$user_ID = $current_user->ID;

$url = 'api:3000/api/licenses';





$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url. '/'.  $user_ID);

$res = curl_exec($ch);
$res = json_decode($res);
curl_close($ch);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .pluginSector {
            margin: 0 auto;
            width: 800px;
            height: 50px;
            border: 1px solid;
           overflow: hidden;
            border-radius: 25px;
            
            margin-bottom: 40px
        }   
        .pluginSector ul {
            margin: 0 auto;
            width: 100%;
            padding: 5px 25px;
            height: 50px;
           display: flex;
            
        }

        .pluginSector li:last-child {
            display: none; 
               
        }
        .pluginSector li {
            list-style-type: none;
            font-size: 20px;
            color: black;
           

        }
        .pluginName {
            width: 80%;
        }
        .counts {

        }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My plugins</title>
</head>
<body>
<div class="container-myplugins" >
<?php 
foreach($res as $item) {
    $pluginName = ($item->name);
    $unused = ($item->unused);
    $total = ($item->total);
  ?>
    <div class='pluginSector'>
        <ul >
            <li class='pluginName'><?php echo $pluginName; ?></li>
            <li ><?php echo $unused; ?></li>
            <li> / </li>
            <li ><?php echo $total; ?><li>
        </ul>
    </div>
    
 <?php 
} 


?>


</div>
<?php get_footer(); ?>
</body>
</html>
