<?php session_start() ?>
<head></head>
<html>
<body>
<?php

$_SESSION['language'] = '';
$_SESSION['logged_user'] = '';

if($_POST['send']) {
    $users = [
        ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
        ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat'],
    ];

    foreach ($users as $data_key => $data_value) {
        foreach ($data_value as $key => $value) {
            if ($value == $_POST['name']) {
                foreach($data_value as $key => $value){
                    if ($value == $_POST['password']) {
                        $_SESSION['logged_user'] = $_POST['name'];
                    }
                }
            }
        }
    }

    if ($_SESSION['logged_user'] == '') {
        echo    '<div align="center">
                    Вам нужно заполнить строки, что бы зайди на этот сайт.
                </div>';
        session_destroy();
        echo
        '<form action="index.php" method="post">
            <div align="center">
                <tr>
                    <td><input type = "submit" name="send" value="Return" </td>
                </tr>
            </div>
        </form>';

    }else{
        foreach ($users as $data_key => $data_value) {
            if ($_SESSION['logged_user'] == $data_value['login']) {
                if ($data_value['lang'] == 'ru') {
                    $_SESSION['language'] = "Добрый день.";
                    break;
                } elseif ($data_value['lang'] == 'en') {
                    $_SESSION['language'] = "Good afternoon.";
                    break;
                } elseif ($data_value['lang'] == 'ua') {
                    $_SESSION['language'] = "Добрий день.";
                    break;
                } elseif ($data_value['lang'] == 'it') {
                    $_SESSION['language'] = "Ciao.";
                    break;
                } else {
                    $_SESSION['language'] = "";
                }
            }
        }

        echo '<form action="index.php" method="post">
                    <fieldset>
                        <legend align="center"> Account </legend>
                        <div align="center">
                            <tr>
                                <td><input type="submit" name="" value="Sign out"></td>
                            </tr>
                        </div>
                    </fieldset>
                </form>';
        echo '<form action="index3.php" method="post">
                <div align="center">
                      <tr>
                           <td><input type="submit" name="send" value="Поприветсвовать"></td>
                      </tr>
                </div>';
        }
    }
?>
</body>
</html>

