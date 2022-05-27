<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "Ahmad");
define("DB_PASSWORD", "1234");
define("DB_NAME", "test");

# connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
