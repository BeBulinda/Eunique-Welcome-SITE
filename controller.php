<?php

require WPATH . "core/include.php";
$currentPage = "";
//
//if ( is_menu_set('logout') != "" ) 
//    App::logOut();

 if ( is_menu_set('home') != ""){
    $currentPage = WPATH . "modules/home.php";
    set_title("Eunique || Home");
}

else if ( is_menu_set('about') != ""){
    $currentPage = WPATH . "modules/about.php";
    set_title("Eunique || About Us ");
}

else if ( is_menu_set('faq') != ""){
    $currentPage = WPATH . "modules/faq.php";
    set_title("Eunique || FAQ's");
}

else if ( is_menu_set('service-1') != ""){
    $currentPage = WPATH . "modules/service-1.php";
    set_title("Eunique || Eunique Personal Savings Account");
}

else if ( is_menu_set('service-2') != ""){
    $currentPage = WPATH . "modules/service-2.php";
    set_title("Eunique || Elimu Savings Account");
}

else if ( is_menu_set('service-3') != ""){
    $currentPage = WPATH . "modules/service-3.php";
    set_title("Eunique || Eunique Business Savings Account");
}

else if ( is_menu_set('service-4') != ""){
    $currentPage = WPATH . "modules/service-4.php";
    set_title("Eunique || Chama Savings Account");
}

else if ( is_menu_set('service-5') != ""){
    $currentPage = WPATH . "modules/service-5.php";
    set_title("Eunique || Withdrawals");
}

else if ( is_menu_set('service-6') != ""){
    $currentPage = WPATH . "modules/service-6.php";
    set_title("Eunique || Emergency Loans");
}
else if ( is_menu_set('service-7') != ""){
    $currentPage = WPATH . "modules/service-7.php";
    set_title("Eunique || Emergency Loans");
}

else if ( is_menu_set('project-2') != ""){
    $currentPage = WPATH . "modules/project-2.php";
    set_title("Eunique || Business Loans");
}

else if ( is_menu_set('become-mem') != ""){
    $currentPage = WPATH . "modules/become-mem.php";
    set_title("Eunique || Becoming a member");
}
else if ( is_menu_set('downloads') != ""){
    $currentPage = WPATH . "modules/downloads.php";
    set_title("Eunique || Downloads");
}
else if ( is_menu_set('application') != ""){
    $currentPage = WPATH . "modules/application.php";
    set_title("Eunique || Application");
}
else if ( is_menu_set('account') != ""){
    $currentPage = WPATH . "modules/account.php";
    set_title("Eunique || My Account");
}
else if ( is_menu_set('contact') != ""){
    $currentPage = WPATH . "modules/contact.php";
    set_title("Eunique || Contact Us");
}
else if (!empty($_GET)) {
    App::redirectTo("?");
}

else{
    $currentPage = WPATH . "modules/home.php";
    if ( App::isLoggedIn() ) {
		set_title("Eunique || Home");                
	}        
}

if (App::isAjaxRequest())
    include $currentPage;
else {
    require WPATH . "core/template/layout.php";
}
?>
