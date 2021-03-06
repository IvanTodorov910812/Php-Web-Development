<?php
// front layer
require_once 'common.php';

$EmailRepository = new \App\Repository\EmailRepository($db);
$EmailService = new \App\Service\EmailService($EmailRepository);
$EmailHttpHandler = new \App\Http\EmailHttpHandler($template, $binder);
$EmailHttpHandler->removeMail($EmailService, $_POST);
