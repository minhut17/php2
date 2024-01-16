<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function __construct()
    {

        include "App/Views/componest/header.php";
        //  Main Sidebar Container
        include_once "App/Views/componest/sidebar.php";



        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'home':
                    include_once "App/Views/layouts/pageHome1.php";
                    break;
                
                case 'task':
                    include_once "App/Views/layouts/pageTask.php";
                    break;
                case 'cTask':
                    include_once "App/Views/layouts/pageAddTask.php";
                    break;
                case 'caterori':
                    include_once "App/Views/layouts/pageCaterori.php";
                    break;
                case 'addCaterori':
                    include_once "App/Views/layouts/pageAddCaterori.php";
                    break;
                case 'user':
                    include_once "App/Views/pageUser.php";
                    break;
                default:
                    include_once "App/Views/layouts/page404.php";
                    break;
            }
        } else {
            include_once "App/Views/layouts/pageHome1.php";
        }

        include_once "App/Views/componest/footer.php";
        // wrapper
        include_once "App/Views/componest/script.php";


    }
}