<?php



function homepage_action($smarty) {
    // MODEL

    $columns = get_some_columns();
    $smarty->assign('columns',$columns);
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
    $smarty->display('contactheader.tpl');
    $smarty->display('contact.tpl');
    $smarty->display('footer.tpl');

}

    function blog_action() {
    global $smarty, $page, $pageno, $searchterm;

     //MODEL
     $articles = get_articles_sorted("asc");
     $articles = get_some_articles();
     $number_of_pages = get_number_of_pages();
     $smarty->assign('current_page', $pageno);
     $smarty->assign('number_of_pages', $number_of_pages);
     $smarty->assign('articles',$articles);

     // VIEWS
     $smarty->display('blogheader.tpl');
     $smarty->display('blog.tpl');
     $smarty->display('blogfooter.tpl');
}

function voegtoe_action() {
    execute_input_action();
}

function voegtoe_column_action() {
    execute_column_action();
}


function login_action($smarty) {


    //MODEL



    // VIEWS
    $smarty->display('headerLogin.tpl');
    $smarty->display('login.tpl');
    $smarty->display('footer.tpl');
}

function CMSpage_action($smarty) {
    global $columns;
    global $articles;



    // VIEWS
    $smarty->display('CMSheader.tpl');
    $smarty->assign('smarty', $smarty);
//    $articles = get_articles_sorted("asc");
     $articles = get_articles_admin();
     $columns = get_columns_admin();
    $smarty->assign('articles',$articles);
    $smarty->assign('columns',$columns);
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
    $smarty->assign('smarty', $smarty);
    $smarty->display('CMSpage.tpl');
    $smarty->display('footer.tpl');
}

function edit_action($article_id, $title, $inleiding, $middenstuk, $slot, $auteur, $imagelink) {
    global $smarty;

    $smarty->display('CMSheader.tpl');
    $edit = edit($article_id);
    $smarty->assign('edit', $edit);
    $smarty->assign('smarty', $smarty);
    $smarty->display('edit.tpl');
    $smarty->display('footer.tpl');
}

function delete_action($article_id) {
    global $smarty;

    $smarty->display('CMSheader.tpl');
    $delete = delete($article_id);
    $smarty->assign('delete', $delete);
    $smarty->assign('smarty', $smarty);
}

function column_edit_action($column_id, $column_title, $column_p, $image_link) {
    global $smarty;

    $smarty->display('CMSheader.tpl');
    $column_edit = column_edit($column_id);
    $smarty->assign('column_edit', $column_edit);
    $smarty->assign('smarty', $smarty);
    $smarty->display('column_edit.tpl');
    $smarty->display('footer.tpl');
}

function column_delete_action($column_id) {
    global $smarty;

    $smarty->display('CMSheader.tpl');
    $column_delete = column_delete($column_id);
    $smarty->assign('column_delete', $column_delete);
    $smarty->assign('smarty', $smarty);
}


function verwerk_edit_action() {
    global $smarty;
    global $articles;
    $smarty->display('CMSheader.tpl');
    $verwerk_edit_now = verwerk_edit_now();
    $articles = get_articles_admin();
    $smarty->assign('verwerk_edit_now', $verwerk_edit_now);
    $smarty->assign('articles',$articles);

    $smarty->assign('smarty', $smarty);
    $smarty->display('verwerk_edit.tpl');
    $smarty->display('footer.tpl');
}

function verwerk_column_edit_action() {
    global $smarty;
    global $columns;
    $smarty->display('CMSheader.tpl');
    $verwerk_column_edit_now = verwerk_column_edit_now();
    $columns = get_columns_admin();
    $smarty->assign('verwerk_column_edit_now', $verwerk_column_edit_now);
    $smarty->assign('columns',$columns);

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




