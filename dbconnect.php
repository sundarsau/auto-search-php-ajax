<?php
$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error){
    die("Database connection failed");
}
