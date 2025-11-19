<?php
// File: api/users.php

header('Content-Type: application/json; charset=UTF-8');

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Only POST method is allowed'
    ]);
    exit;
}

// Access form-encoded data via $_POST
$name = $_POST['name'] ?? null;
$role = $_POST['role'] ?? null;

// Basic validation
if (!$name || !$role) {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => 'Name and role are required'
    ]);
    exit;
}

// Simulate saving (replace with DB insert)
$userId = rand(1000, 9999);

// Success response
http_response_code(200);
echo json_encode([
    'status' => 'success',
    'message' => 'User saved successfully',
    'data' => [
        'id' => $userId,
        'name' => $name,
        'role' => $role
    ]
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
