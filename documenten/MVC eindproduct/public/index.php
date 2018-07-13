
<?php

session_start();
require('../private/smarty/Smarty.class.php');
require ('../private/modal.php');
require ('../private/controller.php');


$smarty = new Smarty();
$smarty->setCompileDir('../private/temp');
$smarty->setTemplateDir('../private/views');



define ('ARTICLES_PER_PAGE',5);

// TERNARY OPERATOR
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : '1';
$article_id = isset($_GET['article_id']) ? $_GET['article_id'] : null;
$title = isset($_GET['title']) ? $_GET['title'] : null;
$inleiding = isset($_GET['inleiding']) ? $_GET['inleiding'] : null;
$middenstuk = isset($_GET['middenstuk']) ? $_GET['middenstuk'] : null;
$slot = isset($_GET['slot']) ? $_GET['slot'] : null;
$auteur = isset($_GET['auteur']) ? $_GET['auteur'] : null;
$imagelink = isset($_GET['imagelink']) ? $_GET['imagelink'] : null;
$logout = isset($_GET['logout']) ? $_GET['logout'] : null;
$column_id = isset($_GET['column_id']) ? $_GET['column_id'] : null;
$column_title = isset($_GET['column_title']) ? $_GET['column_title'] : null;
$column_p = isset($_GET['column_p']) ? $_GET['column_p'] : null;
$image_link = isset($_GET['image_link']) ? $_GET['image_link'] : null;
$searchterm = isset($_GET['searchterm']) ? '%' . $_GET['searchterm'] . '%': '%';


if (isset($_POST['submit_login'])) {
    verify_login_action();
}


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'loggedin') {
    switch ($page) {
        case 'logout': logout_action($smarty);
       case 'edit': edit_action( $article_id, $title, $inleiding, $middenstuk, $slot, $auteur, $imagelink); break;
        case 'delete': delete_action($article_id); break;
        case 'column_edit': column_edit_action($column_id, $column_title, $column_p, $image_link); break;
        case 'column_delete': column_delete_action($column_id); break;
        case 'verwerk_edit': verwerk_edit_action(); break;
        case 'verwerk_column_edit': verwerk_column_edit_action(); break;
        case 'beheren': beheren_action($smarty); break;
        case 'CMSpage': CMSpage_action($smarty, $page); break;
        case 'voegtoe': voegtoe_action($smarty, $page); break;
        case 'voegtoe_column': voegtoe_column_action($smarty); break;
        default: admin_action($smarty); break;

    }
    exit();
}


switch ($page) {
    case 'logout': logout_action(); break;
    case 'home': homepage_action($smarty ); break;
    case 'blog': blog_action($smarty, $pageno, $page); break;
    case 'contact': contact_action($smarty, $page); break;
    case 'login': login_action($smarty, $page); break;
    default: page_not_found_action($smarty, $page); break;

}
