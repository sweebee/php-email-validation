<?php

    require('validation.php');
    use wiebenieuwenhuis\validation\EmailValidator;

    $validation = new EmailValidator();

    if($validation->validate('abcde@gmail.com')){
        echo 'valid email address';
    } else {
        echo 'invalid email address';
    }

    echo '<br>';

    if($validation->validate('abcde@gmaill.com')){
        echo 'valid email address';
    } else {
        echo 'invalid email address';
    }