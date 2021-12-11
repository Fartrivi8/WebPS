<!-- Data Variabel -->
<?php
    /* Judul Website */
    $title = "PS ITB Official Website";
    /* icon */
    $icon = "images/logo-ps.ico";
    /* Section 1 */
    $judul_s1 = "Kegiatan Unit PS ITB";

    /* Array Data */
    $gallery = ["messi-kick.jpg","france-won.jpg","ronaldo.jpg","ucl-bg.jpg"];
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
</head>
<body>
    <div class="wrapper">
        <!-- Navbar -->
        <?php include "navbar.php" ?>
        <!-- Main Section -->
        <?php include "main-section.php" ?>
    </div>
    
    <!-- JS Plugin -->
    <?php include "js-plugin.php"?>
</body>
</html>