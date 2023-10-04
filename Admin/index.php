<?php 
    include_once 'top.php';
    include_once 'menu.php';
?>

<div>
    <div class="container-fluit px-4">
        <!-- <h1>Selamat datang di halaman admin</h1> -->
        

        <?php 
        error_reporting(0);
        // yang mempunyai extension .php 
        // membuat logika sederhana untuk mengarahkan url ke file

        $url = $_GET['url'];
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        }else if(!empty($url)){
            include_once '' .$url. '.php';
        } else {
            include_once 'dashboard.php';
        }

        include_once 'about.php';
        include_once 'contact.php';
        ?>

    </div>
</div>

<?php 
 include_once 'bottom.php';
?>