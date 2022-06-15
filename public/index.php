<?php
echo 'Version PHP courante : ' . phpversion();
// define('ROOT', dirname(__DIR__));


// require '../app/Autoload.php';

// App\Autoload::register();

// if (isset($_GET['p'])) {
//     $p = $_GET['p'];
// }else {
//     // Par défault homepage
//     $p = 'home';
// }

// // Initialisation des objets
// //$db = new \App\Database\MysqlDatabase('ecoweb');

// ob_start();
// if ($p === 'home') {
//     require '../views/home/index.php';
// } elseif ($p === 'tutorials'){
//     require '../views/home/index.php';
// }elseif ($p === 'trainings'){
//     require '../views/trainings/subscription.php';
// }elseif ($p === 'forum'){
//     require '../views/home/index.php';
// }elseif ($p === 'contact'){
//     require '../views/auth/subscription.php';
// }elseif ($p === 'subscribe'){
    
//     $controller = new \App\Controller\AuthController();
//     $controller->index();
// }

// $content = ob_get_clean();
// require '../views/layout/default.php';






// $router = new Router(dirname(__DIR__) . '/views');
// $router
//     ->get('/', 'home/index', 'accueil')
//     ->get('/formations', 'formations/index', 'formations')
//     ->get('/inscription', 'auth/inscription', 'inscription')
//     ->run();

