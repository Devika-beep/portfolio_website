<?php include "header.php"; ?>

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

<?php include "footer.php"; ?>