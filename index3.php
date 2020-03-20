<?php session_start() ?>
<head></head>
<body>
<?php
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

if(empty($_SESSION['language'])){ $_SESSION['language'] = $_POST['language']; }

if($_SESSION['language'] != ''){
    if       ($_SESSION['language'] == 'ru'){
        $_SESSION['language'] = "Добрый день.";
    } elseif ($_SESSION['language'] == 'en'){
        $_SESSION['language'] = "Good afternoon.";
    } elseif ($_SESSION['language'] == 'ua'){
        $_SESSION['language'] = "Добрий день.";
    } elseif ($_SESSION['language'] == 'it') {
        $_SESSION['language'] = "Ciao.";
    }
    echo $_SESSION['language'];
}

if($_SESSION['language'] ==  ""){
    echo '<form  method="post">
        <input type=submit name="language" value="ru"> Русский <h1></h1>
        <input type=submit name="language" value="en"> Английский <h1></h1>
        <input type=submit name="language" value="ua"> Украинский <h1></h1>
        <input type=submit name="language" value="it"> Итальянский <h1></h1>
    </form>';
}


?>
</body>
