<?php
function construct() {}

function indexAction() {
    unset($_SESSION["auth"]);
    header('Location: ?role=client');
}