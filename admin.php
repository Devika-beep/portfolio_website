<?php
include "database/db.php";
$result = $conn->query("SELECT * FROM contacts ORDER BY id DESC") or die("Database query failed: ".$conn->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel - Messages</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
<h2 class="mb-4 text-center">Contact Messages</h2>
<?php if ($result->num_rows > 0): ?>
<div class="table-responsive">
<table class="table table-striped table-bordered align-middle">
<thead class="table-dark">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= htmlspecialchars($row['name']) ?></td>
<td><?= htmlspecialchars($row['email']) ?></td>
<td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
<td>
<a href="delete_msg.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this message?')">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>
<?php else: ?>
<p class="text-center mt-3">No messages found.</p>
<?php endif; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>