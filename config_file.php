<?php
// config.php - Configuration File

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'marine_voting_system');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Application Settings
define('VOTES_PER_DAY', 1); // จำกัดการโหวต 1 ครั้งต่อวัน
define('TIMEZONE', 'Asia/Bangkok');

// Set timezone
date_default_timezone_set(TIMEZONE);

// Error Reporting (ปิดในโปรดักชั่น)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// CORS Settings (ปรับตามต้องการ)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

?>