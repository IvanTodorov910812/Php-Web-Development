<?php
session_start();
spl_autoload_register();
$template = new \Core\Template();
$dbInfo = parse_ini_file('Config/db.ini');
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']);
$db = new \Database\PDODatabase($pdo);
$contactRepository = new \App\Repository\ContactRepository($db);
$contactService = new \App\Service\ContactService($contactRepository);
$contactHttpHandler = new \App\Http\ContactHttpHandler($template);
$contactHttpHandler->register($contactService, $_POST);