<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ZunaWeb MVC">
    <meta name="author" content="ZunaWeb">

    <title><?php if(isset($title)) echo $title; else echo 'ZunaWeb'; ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>views/themes/accounttheme/css/style.css">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">ZunaWeb</a>
            </div>
            <ul class="nav navbar-nav">

                <li><a href="<?= URL ?>">Home</a></li>
                <li><a href="<?= URL ?>about">About Us</a></li>
                 <li><a href="<?= URL ?>contact">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= URL ?>signup/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></a></li>
                <li><a href="<?= URL ?>login/"><span class="glyphicon glyphicon-log-in"></span> Login</a></a></li>
            </ul>
        </div>
        </nav>