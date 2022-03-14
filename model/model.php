<?
session_start();
    function head(){
        global $conn;
        $head = mysqli_query($conn,"SELECT * FROM `header`");
        $row = mysqli_fetch_assoc($head);
        $arr = [];
        while($row = mysqli_fetch_assoc($head)){
        $arr[] = $row;
        }
        return $arr;
    }
    function slider(){
        global $conn;
        $slider = mysqli_query($conn,"SELECT * FROM `slider`");
        $row = mysqli_fetch_assoc($slider);
        $arr = [];
        while($row = mysqli_fetch_assoc($slider)){
            $arr[] = $row;
        }
        return $arr;
    }
    function category(){
        global $conn;
        $category = mysqli_query($conn,"SELECT * FROM  category");
        $row = mysqli_fetch_assoc($category);
        $arr = [];
        while($row = mysqli_fetch_assoc($category)){
            $arr[] = $row;
        }
        return $arr;
    }
    function brand(){
        global $conn;
        $brand = mysqli_query($conn,"SELECT * FROM `brand`");
        $row = mysqli_fetch_assoc($brand);
        $arr = [];
        while($row = mysqli_fetch_assoc($brand)){
            $arr[] = $row;
        }
        return $arr;
    }
    function feature_item(){
        global $conn;
        $feature_item = mysqli_query($conn,"SELECT * FROM `feature_item`");
        $row = mysqli_fetch_assoc($feature_item);
        $arr = [];
        while($row = mysqli_fetch_assoc($feature_item)){
            $arr[] = $row;
        }
        return $arr;
    }
// here for ajax sidebar plus index connection   keyin mysqlda category va feature_item qismlar bir biri bilan boglanib kevoti cat_id boicham // 
    function catprod($id){
        global $conn;
        $feature_item = mysqli_query($conn,"SELECT * FROM `feature_item` WHERE cat_id = $id");
        $row = mysqli_fetch_assoc($feature_item);
        $arr = [];
        while($row = mysqli_fetch_assoc($feature_item)){
            $arr[] = $row;
        }
        return $arr;
    }
    function probrand($id){
        global $conn;
        $brand = mysqli_query($conn,"SELECT * FROM `feature_item` WHERE cat_id = $id");
        $row = mysqli_fetch_assoc($brand);
        $arr = [];
        while($row = mysqli_fetch_assoc($brand)){
            $arr[] = $row;
        }
        return $arr;
    }
    function  feature_items($id){
        global $conn;
        $feature_item = mysqli_query($conn,"SELECT * FROM `feature_item` WHERE `id`='$id'");
        $row = mysqli_fetch_assoc($feature_item);
      
        return $row;
      }
     

    function feature_item_brand(){
        global $conn;
        $feature_item = mysqli_query($conn,"SELECT * FROM `feature_item_brand`");
        $row = mysqli_fetch_assoc($feature_item);
        $arr = [];
        while($row = mysqli_fetch_assoc($feature_item)){
            $arr[] = $row;
        }
        return $arr;
    }
  
    function mini_slider(){
        global $conn;
        $mini_slider = mysqli_query($conn,"SELECT * FROM `mini_slider`");
        $row = mysqli_fetch_assoc($mini_slider);
        $arr = [];
        while($row = mysqli_fetch_assoc($mini_slider)){
            $arr[] = $row;
        }
        return $arr;
    }
    function slider_details(){
        global $conn;
        $mini_slider = mysqli_query($conn,"SELECT * FROM `slider_details`");
        $row = mysqli_fetch_assoc($mini_slider);
        $arr = [];
        while($row = mysqli_fetch_assoc($mini_slider)){
            $arr[] = $row;
        }
        return $arr;
    }
    function tab_content_detail(){
        global $conn;
        $mini_slider = mysqli_query($conn,"SELECT * FROM `tab_content_detail`");
        $row = mysqli_fetch_assoc($mini_slider);
        $arr = [];
        while($row = mysqli_fetch_assoc($mini_slider)){
            $arr[] = $row;
        }
        return $arr;
    }
    function tab_pane_detail(){
        global $conn;
        $mini_slider = mysqli_query($conn,"SELECT * FROM `tab_pane_detail`");
        $row = mysqli_fetch_assoc($mini_slider);
        $arr = [];
        while($row = mysqli_fetch_assoc($mini_slider)){
            $arr[] = $row;
        }
        return $arr;
    }
    function tab_tag_detail(){
        global $conn;
        $tab_tag_detail = mysqli_query($conn,"SELECT * FROM `tab_tag_detail`");
        $row = mysqli_fetch_assoc($tab_tag_detail);
        $arr = [];
        while($row = mysqli_fetch_assoc($tab_tag_detail)){
            $arr[] = $row;
        }
        return $arr;
    }
    function slider_detail_item(){
        global $conn;
        $slider_detail_item = mysqli_query($conn,"SELECT * FROM `slider_detail_item`");
        $row = mysqli_fetch_assoc($slider_detail_item);
        $arr = [];
        while($row = mysqli_fetch_assoc($slider_detail_item)){
            $arr[] = $row;
        }
        return $arr;
    }
    function details_details(){
        global $conn;
        $details_details = mysqli_query($conn,"SELECT * FROM `details_details`");
        $row = mysqli_fetch_assoc($details_details);
        $arr = [];
        while($row = mysqli_fetch_assoc($details_details)){
            $arr[] = $row;
        }
        return $arr;
    }
    // for search header file // 
    function searche(){
        global $conn;
          $result = $_GET['search'];
          $res = mysqli_query($conn,"SELECT * FROM  `feature_item` WHERE `name`  LIKE '%$result'");
          $row = mysqli_fetch_assoc($res);
          $arr = [];
          while($row = mysqli_fetch_assoc($res)){
          $arr[] = $row;
          }
          return $arr;
        }

    // comments for user //
    function comment(){
        global $conn;
        $post_id = $_POST['id'];
        $user_id = $_SESSION['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $textarea = $_POST['textarea'];
        $comment = mysqli_query($conn,"INSERT INTO `comment`(`post_id`,`user_id`, `name`, `email`, `textarea`) 
        VALUES ('$post_id','$user_id','$name','$email','$textarea')");
        }
    function comments(){
        global $conn;
        $query = mysqli_query($conn,"SELECT * FROM comment WHERE `user_id` = '$id'");
        $list = mysqli_fetch_assoc($query);
        $arr = array();
        while($list = mysqli_fetch_assoc($query)){
            $arr [] = $list;
        }
        return $arr;
    }
    // login here //
    function register(){
        global $conn;
        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = md5($_GET['password']);
        $password_2 = md5($_GET['password_2']);
        $img = $_GET['img']['name'];
	    move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$img);
        $register = mysqli_query($conn,"INSERT INTO `register` (`name`,`email`,`password`,`password_2`,`img`) 
        VALUES ('$name','$email','$password','$password_2','$img')");
    }
    function login(){
        global $conn;
        $name = $_POST['name'];
        $password = md5($_POST['password']);
        $login = mysqli_query($conn,"SELECT * FROM `register` WHERE `name` = '$name' AND `password` = '$password'");
        if(mysqli_num_rows($login) > 0){
            $user = mysqli_fetch_assoc($login);
            $_SESSION['id'] = $user['id'];
            header("location:?view=usercabin");
        }else{
            header("location:?view=login");
        }

    }
    function cab($id){	
        global $conn;
        $id = $_SESSION['id'];
        $res = mysqli_query($conn,"SELECT * FROM `register` WHERE `id` = '$id'");
        $row = mysqli_fetch_assoc($res);
        return $row;
    }
    //usershop // 
    function usershops(){
        global $conn;
        $id = $_SESSION['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $shop_id = $_POST['shop_id'];
        $img = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$img);
        $usercat = mysqli_query($conn,"INSERT INTO `usershop`(`user_id`,`title`, `price`,`img`,`shop_id`) 
        VALUES ($id,'$title',' $price','$img','$shop_id')");
    }
    // user have shop  est ili net // 
   function getusershop($id){
    global $conn;
    $id = $_SESSION['id'];
    $getusershops = mysqli_query($conn,"SELECT * FROM `usershop` WHERE `user_id` = '$id'");
    $row = mysqli_fetch_assoc($getusershops);
    return $row;
}  
    function product(){
        global $conn;
        $id = $_SESSION['id'];
        $product = mysqli_query($conn,"SELECT * FROM `usershop`");
        $row = mysqli_fetch_assoc($product);
        return $row;
    }
    function product_delet($id){
        global $conn;
        $id = $_GET['id'];
        $product = mysqli_query($conn,"DELETE FROM `usershop` WHERE `id` = '$id'" );
        return $row;
    }
  // magazin tovarov kto komu prenedlejit//
 function magazin_user(){
      global $conn;
      $magazin = mysqli_query($conn,"SELECT * FROM `usershop` WHERE cat_id = $id");
      $row = mysqli_fetch_assoc($magazin);
      $arr = [];
      while($row = mysqli_fetch_assoc($magazin)){
          $arr[] = $row;
      }
      return $arr;
  }
    // blog post //
    function blog_posts(){
        global $conn;
        $id = $_GET['id'];
        if($id == "" || $id == "1"){
            $id1 = 0;
        }else{
            $id1 = ($id*2)-2;
        }
        $blog_posts = mysqli_query($conn,"SELECT * FROM `blog_post` LIMIT $id1,3");
        $row = mysqli_fetch_array($blog_posts);
        $arr = array();
        while($row = mysqli_fetch_array($blog_posts)){
            $arr[] = $row;
        }
        return $arr;
    }
    // blog-single // 
    function   blog_single($id){
        global $conn;
        $blog_singles = mysqli_query($conn,"SELECT * FROM `blog_post` WHERE `id`='$id'");
        $row = mysqli_fetch_assoc($blog_singles);
      
        return $row;
      }

     // ajax modal title//
     function cart($id){
        if($_SESSION['cart'][$id]){
          $_SESSION['cart'][$id]++;
        }
        else{
          $_SESSION['cart'][$id] = 0;
        }
      }

      // total price //
     
      //for delet session tavar // 
      function dellcart($id){
        unset($_SESSION['cart'][$id]);
    }
    function dell_all($id){
        unset($_SESSION['cart']);
    }
    // for plus category session cart//
    function plus_cart($id){
        if($_SESSION['cart'][$id]){
            $_SESSION['cart'][$id]++;
        }else{
            $_SESSION['cart'][$id] = 1;
        }
        
    }
    function minus_cart($id){
        if($_SESSION['cart'][$id]){
            $_SESSION['cart'][$id]--;
        }else{
            $_SESSION['cart'][$id] = 1;
        }
    }
    // For wishlist //
    function wishlist_ajax($id){
        if($_SESSION['wishlist_ajax'][$id]){
          $_SESSION['wishlist_ajax'][$id]++;
        }
        else{
          $_SESSION['wishlist_ajax'][$id] = 0;
        }
      }

    function plus($id){
        if($_SESSION['wishlist_ajax'][$id]){
            $_SESSION['wishlist_ajax'][$id]++;
        }
        else{
            $_SESSION['wishlist_ajax'][$id] = 1;
        }
    }
    function minus($id){
        if($_SESSION['wishlist_ajax'][$id]){
            $_SESSION['wishlist_ajax'][$id]--;
        }else{
            $_SESSION['wishlist_ajax'][$id] = 1;
        }
    }
    function dell_wishlist($id){
        unset($_SESSION['wishlist_ajax'][$id]);
    }
    function dell_wishlist_all($id){
        unset($_SESSION['wishlist_ajax']);
    }
 
   
    
    