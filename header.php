<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Portfolio</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light text-dark">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
<div class="container">
<a class="navbar-brand" href="index.php">My Portfolio</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active';} ?>" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='projects.php'){echo 'active';} ?>" href="projects.php">Projects</a>
</li>
<li class="nav-item">
<a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='contact.php'){echo 'active';} ?>" href="contact.php">Contact</a>
</li>
</ul>
</div>
</div>
</nav>