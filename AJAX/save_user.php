<?php
// File: public/api/save-user.php

// 1) Require POST only
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    jsonResponse('error', 'Only POST method is allowed.');
}

// 2) Content-type for JSON responses
header('Content-Type: application/json; charset=UTF-8');

// 3) Optional: CSRF check (if you have a token system)
// $csrfHeader = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';
// if (!hash_equals($_SESSION['csrf_token'] ?? '', $csrfHeader)) {
//     http_response_code(419);
//     jsonResponse('error', 'CSRF validation failed.');
// }

// 4) Collect and sanitize inputs
$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');

// 5) Validate
$errors = [];
if ($name === '' || mb_strlen($name) < 2) {
    $errors['name'] = 'নাম কমপক্ষে ২ অক্ষরের হতে হবে।';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'ইমেইল সঠিক নয়।';
}

if (!empty($errors)) {
    http_response_code(422);
    jsonResponse('error', 'ফর্ম যাচাইয়ে ভুল হয়েছে।', ['errors' => $errors]);
}

// 6) Simulate persistence (DB or file)
// In production, use parameterized queries (PDO) and proper error handling.
try {
    // Example: pretend we saved and got an ID
    $savedId = random_int(1000, 9999);

    http_response_code(200);
    jsonResponse('success', 'তথ্য সফলভাবে সংরক্ষণ করা হয়েছে।', [
        'id' => $savedId,
        'name' => $name,
        'email' => $email
    ]);
} catch (Throwable $e) {
    error_log('save-user error: ' . $e->getMessage());
    http_response_code(500);
    jsonResponse('error', 'সার্ভারে ত্রুটি হয়েছে, কিছুক্ষণ পর চেষ্টা করুন।');
}

// 7) Unified JSON response helper
function jsonResponse(string $status, string $message, array $data = []): void
{
    echo json_encode([
        'status'  => $status,
        'message' => $message,
        'data'    => $data
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}
