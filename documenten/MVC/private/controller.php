<?php



function homepage_action($smarty) {
    // MODEL

    $articles = get_articles($smarty);
    $smarty->assign('articles',$articles);
    // VIEWS
    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function page_not_found_action($smarty) {

    $smarty->display('notfound.tpl');
}

function contact_action($smarty) {

    // MODEL

    // VIEWS
    $smarty->display('header.tpl');
    $smarty->display('contact.tpl');
    $smarty->display('footer.tpl');

}

    function blog_action($smarty, $pageno, $page) {


     //MODEL
    $articles = get_articles_sorted("asc");
     // $articles = get_some_articles();
     $number_of_pages = get_number_of_pages();
     $smarty->assign('current_page', $pageno);
     $smarty->assign('number_of_pages', $number_of_pages);
     $smarty->assign('articles',$articles);

     // VIEWS
     $smarty->display('header.tpl');
     $smarty->display('blog.tpl');
     $smarty->display('footer.tpl');
}

function voegtoe_action() {
    execute_input_action();
}


function login_action($smarty) {


    //MODEL



    // VIEWS
    $smarty->display('headerLogin.tpl');
    $smarty->display('login.tpl');
    $smarty->display('footer.tpl');
}

function CMSpage_action($smarty) {


    // VIEWS
    $smarty->display('CMSheader.tpl');
    $beheer = beheertable();
    $smarty->assign('beheer_table', $beheer);
    $smarty->assign('smarty', $smarty);
    //MODEL

    $smarty->display('CMSpage.tpl');
    $smarty->display('footer.tpl');
}

function verify_login_action() {
            verify_login();
}

function admin_action($smarty) {

    $smarty->display('CMSheader.tpl');
//    $admin = execute_logout();
//    $smarty->assign('execute_logout', $admin);
    $beheertable = beheertable();
    $smarty->assign('beheertable', $beheertable);
    $smarty->assign('smarty', $smarty);
    $smarty->display('CMSpage.tpl');
    $smarty->display('footer.tpl');
}

function edit_action($article_id, $title, $inleiding, $middenstuk, $slot, $auteur, $imagelink) {
    global $smarty;

    $smarty->display('CMSheader.tpl');
    $edit = edit($article_id, $title, $inleiding, $middenstuk, $slot, $auteur, $imagelink);
    $smarty->assign('edit', $edit);
    $smarty->assign('smarty', $smarty);
    $smarty->display('edit.tpl');
    $smarty->display('footer.tpl');
}


function verwerk_edit_action() {
    global $smarty;

    $smarty->display('CMSheader.tpl');
    $verwerk_edit_now = verwerk_edit_now();
    $smarty->assign('verwerk_edit_now', $verwerk_edit_now);
    $smarty->assign('smarty', $smarty);
    $smarty->display('verwerk_edit.tpl');
    $smarty->display('footer.tpl');
}

function logout_action() {
    global $page;
    global $smarty;


//    $smarty->display('header.tpl');
    $execute_logout = execute_logout();
    $smarty->assign('execute_logout', $execute_logout);
    $smarty->assign('smarty', $smarty);
//    $smarty->display('home.tpl');
//    $smarty->display('footer.tpl');
}




