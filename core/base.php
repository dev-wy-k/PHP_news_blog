<?php


function con()
{
    $createUserTable = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,
        role ENUM('0', '1', '2') DEFAULT '2',
        photo VARCHAR(255) NOT NULL DEFAULT 'default.png',
        money BIGINT default '0',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ";

    $createADS = "
    CREATE TABLE IF NOT EXISTS ads (
        id INT AUTO_INCREMENT PRIMARY KEY,
        owner_name VARCHAR(50) NOT NULL,
        photo TEXT NOT NULL,
        link TEXT NOT NULL,
        start DATE,
        end DATE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ";

    $createCategory = "
    CREATE TABLE IF NOT EXISTS categories (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        user_id INT NOT NULL,
        ordering INT DEFAULT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ";

    $createPost = "
    CREATE TABLE IF NOT EXISTS posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description LONGTEXT NOT NULL,
        user_id INT NOT NULL,
        category_id INT NOT NULL,
        is_publish ENUM('0', '1') DEFAULT '0',
        ordering INT DEFAULT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ";

    $createTransition = "
    CREATE TABLE IF NOT EXISTS transition (
        id INT AUTO_INCREMENT PRIMARY KEY,
        from_user INT NOT NULL,
        to_user INT NOT NULL,
        amount DOUBLE NOT NULL,
        description VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ";

    $createViewers = "
    CREATE TABLE IF NOT EXISTS viewers (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        post_id INT NOT NULL,
        device VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ";

    $con =  mysqli_connect("localhost", "root", "", "blog_1");
    mysqli_query($con, $createUserTable);
    mysqli_query($con, $createADS);
    mysqli_query($con, $createCategory);
    mysqli_query($con, $createPost);
    mysqli_query($con, $createTransition);
    mysqli_query($con, $createViewers);

    return $con;
};

$info = array(
    "name" => "Sample Blog",
    "short" => "SB",
    "description" => "Sample Project",
);

$role = ["Admin", "Editor", "User"];

$url = "http://{$_SERVER['HTTP_HOST']}";


date_default_timezone_set("Asia/Yangon");

// KK(;nnWu;}rd