<?php
//include ()
//include ("app\Http\Controllers\Auth\RegisterAdminController.php");

//$controller = new RegisterAdminController();

$data = [
            'name' => 'Samuel Chan',
            'email' => 'samuelchanmd@gmail.com',
            'password' => 'Bta3lp?!'
        ];

//$controller->create($data);


/**
 * We just want to hash our password using the current DEFAULT algorithm.
 * This is presently BCRYPT, and will produce a 60 character result.
 *
 * Beware that DEFAULT may change over time, so you would want to prepare
 * By allowing your storage to expand past 60 characters (255 would be good)
 */
$options = [ 'cost' => 10];
$yoyo = password_hash("Bta3lp?!", PASSWORD_BCRYPT, $options);

$file = fopen('temp.txt', 'w');
fwrite($file, $yoyo);
fclose($file);
?>