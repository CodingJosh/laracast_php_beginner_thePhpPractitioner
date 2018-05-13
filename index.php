<?php

require 'functions.php';

if(ageConfirmation($_GET['age'])){
    echo 'You are old enough.';
}
else {
    echo 'You are not old enough.';
}

die();

require 'index.view.php';
