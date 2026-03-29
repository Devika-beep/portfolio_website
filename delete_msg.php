<?php
include "database/db.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $stmt->close();
        header("Location: admin.php?msg=deleted");
        exit;
    } else {
        $stmt->close();
        header("Location: admin.php?msg=error");
        exit;
    }
} else {
    header("Location: admin.php?msg=invalid");
    exit;
}
$conn->close();
?>