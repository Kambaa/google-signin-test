<?php
require_once 'header.php';


// eğer google girişinden code get parametresi dönerse access token olarak dönüştürülür. ve i2.php ye yönlendirilir.


if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $at = $_SESSION['access_token'] = $client->getAccessToken();
    header('Location: ' . filter_var($redirect_uri2, FILTER_SANITIZE_URL));
}

