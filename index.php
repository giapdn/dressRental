<?php
include "client/Views/header.php";
require_once "./client/Controllers/lienHeController.php";
require_once "./client/Controllers/ProductController.php";
require_once "./client/Controllers/CommentController.php";
require_once "./client/Controllers/AuthController.php";
$lienheCtrll = new lienHeController();
$productCtrll = new ProductController();
$commentCtrll = new CommentController();
$authCtrll = new AuthController();
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        $productCtrll->ListFiltered();
        break;
        //Case áo cưới
    case 'all-aocuoi':
        $productCtrll->ListProduct();
        break;
    case 'aodaicuoi':
        $productCtrll->ListProduct();
        break;
    case 'aocuoidiban':
        $productCtrll->ListProduct();
        break;
    case 'aocuoilamle':
        $productCtrll->ListProduct();
        break;
    case 'productdetail':
        $productCtrll->ProductDetails();
        break;
        //Case áo cưới

    case 'page':
        include "client/Views/Pages/page.php";
        break;
    case 'onepage':
        include "client/Views/Pages/onepage.php";
        break;
    case 'contactus':
        $lienheCtrll->insertLienHe();
        break;
    case 'aboutus':
        include "client/Views/About/aboutus.php";
        break;
    case 'productpage':
        include "client/Views/Product/productpage.php";
        break;
    case 'checkout':
        include "client/Views/CheckOut/checkout.php";
        break;
    case 'cart':
        include "client/Views/Cart/cart.php";
        break;

        //Case bình luận
    case 'comment-sended':
        $commentCtrll->Sended();
        break;

        //case đăng nhập, đăng ký
    case 'login':
        $authCtrll->LogIn();
        break;
    case 'register':
        $authCtrll->Register();
        break;
    case 'logOut':
        $authCtrll->LogOut();
        break;
    default:
        $productCtrll->ListFiltered();
        break;
}
include "client/Views/footer.php";
