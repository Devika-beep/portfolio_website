<?php include "header.php"; ?>

<!-- HERO -->
<section id="hero" class="bg-primary text-light text-center py-5">
<div class="container">
<h1 class="display-4 animate__animated animate__fadeInDown">Hi, I'm Devika</h1>
<p class="lead animate__animated animate__fadeInUp">I build interactive websites & web apps using PHP, JS, Bootstrap</p>
<a href="#projects" class="btn btn-light btn-lg mt-3 animate__animated animate__fadeInUp">See My Projects</a>
<button onclick="toggleDark()" class="btn btn-secondary btn-lg mt-3 animate__animated animate__fadeInUp">Toggle Dark Mode</button>
</div>
</section>

<!-- SKILLS -->
<section id="skills" class="container my-5">
<h2 class="text-center mb-4">My Skills</h2>
<div class="row g-4 justify-content-center">
<div class="col-md-3 col-sm-6 col-12 text-center">
<i class="bi bi-file-code-fill fs-1 mb-2"></i>
<h5>HTML/CSS</h5>
<div class="progress">
<div class="progress-bar bg-primary" role="progressbar" style="width:90%">90%</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-12 text-center">
<i class="bi bi-bootstrap-fill fs-1 mb-2"></i>
<h5>Bootstrap</h5>
<div class="progress">
<div class="progress-bar bg-primary" role="progressbar" style="width:85%">85%</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-12 text-center">
<i class="bi bi-code-slash fs-1 mb-2"></i>
<h5>PHP & JS</h5>
<div class="progress">
<div class="progress-bar bg-primary" role="progressbar" style="width:80%">80%</div>
</div>
</div>
</div>
</section>

<!-- PROJECTS -->
<section id="projects" class="container my-5">
<h2 class="text-center mb-4">My Projects</h2>
<div class="row g-4">
<?php
$projects = [
['title'=>'Portfolio Website','desc'=>'Interactive personal portfolio built with PHP, JS & Bootstrap.','link'=>'https://github.com/yourusername/portfolio'],
['title'=>'File Management System','desc'=>'Web-based file manager with upload, download & delete functionality.','link'=>'https://github.com/yourusername/file-management'],
['title'=>'E-Commerce Website','desc'=>'Fully functional online shop built with PHP, JS & Bootstrap.','link'=>'https://github.com/yourusername/e-commerce'],
];
foreach($projects as $proj): ?>
<div class="col-md-4 col-sm-6 col-12">
<div class="card h-100 shadow-sm animate__animated animate__fadeIn">
<img src="https://via.placeholder.com/400x200.png?text=<?= urlencode($proj['title']) ?>" class="card-img-top" alt="<?= $proj['title'] ?>">
<div class="card-body">
<h5 class="card-title"><?= $proj['title'] ?></h5>
<p class="card-text"><?= $proj['desc'] ?></p>
<a href="<?= $proj['link'] ?>" target="_blank" class="btn btn-primary w-100">View Project</a>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</section>

<!-- CONTACT -->
<section id="contact" class="container my-5">
<h2 class="text-center mb-4">Contact Me</h2>
<?php include "contact.php"; ?>
</section>

<?php include "footer.php"; ?>