<?php
// Keep PHP sessions inside the project so the app does not depend on XAMPP's
// global temp folder being writable.
$sessionPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'runtime' . DIRECTORY_SEPARATOR . 'sessions';

if (!is_dir($sessionPath)) {
    mkdir($sessionPath, 0777, true);
}

if (is_dir($sessionPath) && is_writable($sessionPath)) {
    session_save_path($sessionPath);
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
