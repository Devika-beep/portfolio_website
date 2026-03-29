<?php
include "database/db.php";

header('Content-Type: application/json');
$response = ['status' => '', 'message' => ''];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required';
        echo json_encode($response);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid email format';
        echo json_encode($response);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    if (!$stmt) {
        $response['status'] = 'error';
        $response['message'] = 'Database error: ' . $conn->error;
        echo json_encode($response);
        exit;
    }

    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $response['status'] = 'success';
        $response['message'] = 'Message sent successfully!';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error: ' . $stmt->error;
    }

    $stmt->close();
    echo json_encode($response);
    exit;
}
?>