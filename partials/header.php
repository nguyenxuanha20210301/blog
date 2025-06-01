<?php
require 'config/database.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Multipage Blog Website</title>
    <!--CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="./css/style.css" />
    <!--ICONSCOUNT CDN-->
    <link
        rel="stylesheet"
        href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
    <!--GOOLE FONT (MONTSERRAT)-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>" class="nav_logo">EGATOR</a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Service</a></li>
                <li><a href="<?= ROOT_URL ?>contract.php">Contract</a></li>
                <li><a href="<?= ROOT_URL ?>signin.php">Signin</a></li>
                <!-- <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" />
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>/admin/index.php">Darhboard</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                    </ul>
                </li> -->
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--===================END OF NAV=====================-->