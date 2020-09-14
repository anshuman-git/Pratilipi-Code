<?php 

$con= mysqli_connect('localhost', 'root', '', 'anshuman');

if(!isset($_COOKIE['page1'])) {
    setCookie('page1', 'yes', time()+(60*3));
    mysqli_query ($con, "update first_page_count set count = count+1");
}
?>