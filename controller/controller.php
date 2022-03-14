<?php
session_start();
include MODEL;
if(empty($_GET['view'])){
    $view = "index";
}else{
    $view = $_GET['view'];
}
$head = head();
$brand = brand();
$category = category();
$slider = slider();
$mini_slider = mini_slider();
$cab = cab($id);



/*$new = ne_w();
$hits = hits();
$sale = sale();*/

      



    switch($view){
        case "index":
            $id = $_GET['id'];
            $head = head();
            $feature_item = feature_item();
            $feature_item_brand = feature_item_brand();         
            break;
        case "footer":
       
            break;
        case "header":
            if(isset($_POST['login'])){
                $id = $_SESSION['id'];
                $c = cab($id);
                header("location:?view=usershop");  
            }else{
               echo("no id");
            }
            break;
        case "sidebar":

            break;
        case "slider":

            break;
        case "details":
            $id = $_GET['id'];
            $detail = feature_items($id);
            $slider_details = slider_details();
            $tab_content_detail = tab_content_detail();
            $tab_pane_detail = tab_pane_detail();
            $tab_tag_detail = tab_tag_detail();
            $slider_detail_item = slider_detail_item();
            $details_details = details_details();
            if(isset($_POST['submit'])){
                $comment = comment();
                header("location:?view=details&id=$id");
            }
            $comments = comments();
            break;
            case "login":
                if(isset($_POST['button'])){
                        $register = register();  
                }
                break;
            case "signup":
                if(isset($_POST['login'])){
                    login();
                    header("location:?view=usercabin");
                    }
                break;
                // magazin tovarov kto komu prenedlejit//
                case "magazin";
                $magazin_user = magazin_user();

                break;
            case "usercabin":
                $row = getusershop($id); 
                $row = product(); 
                $product_delet = product_delet($id);
                break;
            case "usershop":
                if(isset($_POST['zakaz'])){
                    $id = $_SESSION['id'];
                    usershops();
                    header("location:?view=usercabin");
                }
                break;
            case "blog":
                $blog_posts = blog_posts();
                break;
            case "blog_single":
                $id = $_GET['id'];
                $blog_single = blog_single($id);
                break;
            // for ajax file here //
            case "ajax":
                $id = $_GET['id'];
                $detail = feature_items($id);
                cart($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
                exit;
                break;
            case "del":
                $id = $_GET['id'];
                dellcart($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
                exit;
                break;
            case "plus_cart":
                $id = $_GET['id'];
                plus_cart($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
                exit;
                break;
            case "minus_cart":
                $id = $_GET['id'];
                minus_cart($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
                exit;
                break;
            case "dell_all":
                $id = $_GET['id'];
                dell_all($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
                exit;
                break;
            // for wishlist user id //
            case "wishlist_ajax":
                $id = $_GET['id'];
                wishlist_ajax($id);
                $detail = feature_items($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/wishlist_ajax.php";
                exit;
                break;
            case "plus":
                $id = $_GET['id'];
                plus($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/wishlist_ajax.php";
                exit;
                break;
            case "minus":
                $id = $_GET['id'];
                minus($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/wishlist_ajax.php";
                exit;
                break;
            case "dell_wishlist_all":
                $id = $_GET['id'];
                dell_wishlist_all($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/wishlist_ajax.php";
                exit;
                break;
            case "dell_wishlist":
                $id = $_GET['id'];
                dell_wishlist($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/wishlist_ajax.php";
                exit;
                break;
            case "regajax":
                register(); 
                exit;
                break; 
                case "signin":
                break; 
                // this category is name only it uses for ajax change category for id each product // 
            case "category":
                $id = $_GET['id'];
                $catprod  = catprod($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/catprod.php";
                exit;
                break;
            case "brandcategory":
                $id = $_GET['id'];
                $probrand = probrand($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/brandcategory.php";
                exit;
                break;
            case "search":
            $searchs = searche();
            include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/search.php";
            exit;
            break;
            
            
    }
    

include $_SERVER['DOCUMENT_ROOT']."/views/theme/index.php";

?>