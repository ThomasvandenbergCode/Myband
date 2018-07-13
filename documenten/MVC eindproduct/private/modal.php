<?php

function make_connection() {
    $mysqli = new mysqli('localhost','myband_gebruiker', 'mybandpassword','myband_gebruiker');
    if ($mysqli->connect_errno) {
        die('Connection error: ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function get_some_columns() {
    $mysqli = make_connection();
    $query = "SELECT column_id, column_title, column_p, image_link FROM columns ORDER BY column_id";
    $stmt = $mysqli->prepare($query) or die ('Error preparing hoi.');
    $stmt->bind_result($column_id, $column_title, $column_p, $image_link) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $column = array();
        $column[] = $column_id;
        $column[] = $column_title;
        $column[] = $column_p;
        $column[] = $image_link;
        $results[] = $column;
    }
    return $results;
}

function get_articles() {
    $mysqli = make_connection();
    $query = "SELECT title FROM articles";
    $stmt = $mysqli->prepare($query) or die ('Error preparing 1.');
    $stmt->bind_result( $title) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($result = $stmt->fetch()) {
        $results[] = $title;
    }
    return $results;
}

function get_some_articles() {
    global $page;
    global $searchterm;
    global $pageno;
    $mysqli = make_connection();
    $firstrow = ($pageno -1) * ARTICLES_PER_PAGE;
    $per_page = ARTICLES_PER_PAGE;

    $query  =    "SELECT article_id, title, inleiding, middenstuk, slot, auteur, imagelink ";
    $query .=    "FROM articles ";
    $query .=    "WHERE title LIKE ? OR ";
    $query .=    "inleiding LIKE ?  ";
    $query .=    "ORDER BY article_id ";
    $query .=    "DESC LIMIT $firstrow,$per_page";

    $stmt   = $mysqli->prepare($query) or die ('Error preparing hoi.');
    $stmt->bind_param('ss', $searchterm, $searchterm) or die ('Error binding searchterm');
    $stmt->bind_result($article_id, $title, $inleiding, $middenstuk, $slot, $auteur, $imagelink) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $article = array();
        $article[] = $article_id;
        $article[] = $title;
        $article[] = $inleiding;
        $article[] = $middenstuk;
        $article[] = $slot;
        $article[] = $auteur;
        $article[] = $imagelink;
        $results[] = $article;
    }
    return $results;
}

function get_articles_admin() {
    global $pageno;
    $mysqli = make_connection();
    $query = "SELECT article_id, title, inleiding, middenstuk, slot, auteur, imagelink FROM articles ORDER BY article_id DESC";
    $stmt = $mysqli->prepare($query) or die ('Error preparing hoi.');
    $stmt->bind_result($article_id, $title, $inleiding, $middenstuk, $slot, $auteur, $imagelink) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $article = array();
        $article[] = $article_id;
        $article[] = $title;
        $article[] = $inleiding;
        $article[] = $middenstuk;
        $article[] = $slot;
        $article[] = $auteur;
        $article[] = $imagelink;
        $results[] = $article;
    }
    return $results;
}

function get_columns_admin() {
    global $pageno;
    $mysqli = make_connection();
    $query = "SELECT column_id, column_title, column_p, image_link FROM columns ORDER BY column_id DESC";
    $stmt = $mysqli->prepare($query) or die ('Error preparing hoi.');
    $stmt->bind_result($column_id, $column_title, $column_p, $image_link) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $column = array();
        $column[] = $column_id;
        $column[] = $column_title;
        $column[] = $column_p;
        $column[] = $image_link;
        $results[] = $column;
    }
    return $results;
}

function calculate_pages() {
    $mysqli = make_connection();
    $query = "SELECT * FROM articles";
    $result = $mysqli->query($query) or die ('Error querying 2.');
    $rows = $result->num_rows;
    $number_of_pages = ceil($rows / ARTICLES_PER_PAGE);
    return $number_of_pages;
}

function get_number_of_pages() {
    $number_of_pages = calculate_pages() or die ('Error calculating');
    return $number_of_pages;
}


function get_articles_sorted($sort) {
    global $pageno;
    $mysqli = make_connection();
    $firstrow = ($pageno -1) * ARTICLES_PER_PAGE;
    $per_page = ARTICLES_PER_PAGE;
    $query = "SELECT title, inleiding, middenstuk, slot, auteur, imagelink FROM articles ORDER BY article_id " . $sort .  "  LIMIT $firstrow, $per_page";

    $stmt = $mysqli->prepare($query) or die ('Error preparing 1.');
    $stmt->bind_result($title, $inleiding, $middenstuk, $slot, $auteur, $imagelink) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $article = array();
        $article[] = $title;
        $article[] = $inleiding;
        $article[] = $middenstuk;
        $article[] = $slot;
        $article[] = $auteur;
        $article[] = $imagelink;
        $results[] = $article;
    }
    return $results;
}

function verify_login() {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['loggedin'] = 'loggedin';
        header('Location: index.php?page=CMSpage');
    }
}

function execute_logout() {
    global $smarty;
    $_SESSION = array();

    header ('Location: index.php?page=home');

}




function execute_input_action()
{
    if(isset($_POST['submit_add'])) {


        $mysqli = make_connection();
        $titel = $_POST['titel'];
        $inleiding = $_POST['inleiding'];
        $middenstuk = $_POST['middenstuk'];
        $slot = $_POST['slot'];
        $auteur = $_POST['auteur'];
        $imagelink = $_POST['imagelink'];


        $query = "INSERT INTO articles VALUES (0, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query) or die ('Error preparing');
        $stmt->bind_param('ssssss', $titel, $inleiding, $middenstuk, $slot, $auteur, $imagelink) or die ('Error binding params');
        $stmt->execute() or die ('Error insting image in database');
        $stmt->close();
        header('Location: index.php?page=CMSpage');

        if ($stmt) {

            echo '<strong>' . 'De volgende gegevens zijn toegevoegd aan de database:' . '</strong>' . '<br>';
            echo '<strong>' . 'titel:' . '</strong>' . $titel . '<br>';
            echo '<strong>' . 'inleiding) ' . '</strong>' . $inleiding . '<br>';
            echo '<strong>' . 'middenstuk: ' . '</strong>' . $middenstuk . '<br>';
            echo '<strong>' . 'slot: ' . '</strong>' . $slot . '<br>';
            echo '<strong>' . 'auteur: ' . '</strong>' . $auteur . '<br>';
            echo '<strong>' . 'imagelink: ' . '</strong>' . $imagelink . '<br>';
        } else {

            header('Location: index.php?page=CMSpage&upload=notsucces');
        }
        return $mysqli;
    }
}

function execute_column_action()
{
    if(isset($_POST['submit_column'])) {


        $mysqli = make_connection();
        $column_title = $_POST['column_title'];
        $column_p = $_POST['column_p'];
        $image_link = $_POST['image_link'];



        $query = "INSERT INTO columns VALUES (0, ?, ?, ?)";
        $stmt = $mysqli->prepare($query) or die ('Error preparing');
        $stmt->bind_param('sss', $column_title, $column_p, $image_link) or die ('Error binding params');
        $stmt->execute() or die ('Error insting image in database');
        $stmt->close();
        header('Location: index.php?page=CMSpage');

        if ($stmt) {

            echo '<strong>' . 'De volgende gegevens zijn toegevoegd aan de database:' . '</strong>' . '<br>';
            echo '<strong>' . 'columntitel:' . '</strong>' . $column_title . '<br>';
            echo '<strong>' . 'inleiding) ' . '</strong>' . $column_p . '<br>';
            echo '<strong>' . 'middenstuk: ' . '</strong>' . $image_link . '<br>';
        } else {

            header('Location: index.php?page=CMSpage&upload=notsucces');
        }
        return $mysqli;
    }
}

// BEVESTINGEN DAT DATA IN DATABASE STAAT


function verwerk_edit_now() {


    $mysqli = make_connection();

    $article_id = $_POST['article_id'];
    $title = $_POST['title'];
    $inleiding = $_POST['inleiding'];
    $middenstuk = $_POST['middenstuk'];
    $slot = $_POST['slot'];
    $auteur = $_POST['auteur'];
    $imagelink = $_POST['imagelink'];



// DATABASEN VAN DE IMAGE


    $query = "UPDATE  articles ";
    $query .= "SET  title = '$title', inleiding = '$inleiding', middenstuk = '$middenstuk', slot = '$slot', auteur = '$auteur', imagelink = '$imagelink' ";
    $query .= "WHERE article_id = '$article_id'";
    $result = mysqli_query($mysqli,$query) or die ('Error updating');
    header( "Location: index.php?page=CMSpage");


    return $mysqli;
}

function verwerk_column_edit_now() {


    $mysqli = make_connection();

    $column_id = $_POST['column_id'];
    $column_title = $_POST['column_title'];
    $column_p = $_POST['column_p'];
    $image_link = $_POST['image_link'];



// DATABASEN VAN DE IMAGE


    $query = "UPDATE  columns ";
    $query .= "SET  column_title = '$column_title', column_p = '$column_p', image_link = '$image_link'";
    $query .= "WHERE column_id = '$column_id'";
    $result = mysqli_query($mysqli,$query) or die ('Error updating');
    header( "Location: index.php?page=CMSpage");


    return $mysqli;
}


function edit($article_id){

    $mysqli = make_connection();
    $stmt = $mysqli->prepare("SELECT title, inleiding, middenstuk, slot, auteur, imagelink FROM articles WHERE article_id = ?");
    $stmt->bind_param('i', $article_id);
    $stmt->execute();

    $stmt->bind_result($title, $inleiding, $middenstuk, $slot, $auteur, $imagelink);
    $stmt->store_result();
    $stmt->fetch();



    $data2 = array();
    $data2[] = $article_id;
    $data2[] = $title;
    $data2[] = $inleiding;
    $data2[] = $middenstuk;
    $data2[] = $slot;
    $data2[] = $auteur;
    $date2[] = $imagelink;


    return $data2;
}


function delete ($article_id) {
    $mysqli = make_connection();

    $query = "DELETE FROM articles WHERE article_id=" . $article_id;
    $result = mysqli_query($mysqli,$query) or die ('Error querying');
    header( "Location: index.php?page=CMSpage");


}


function column_edit($column_id){

    $mysqli = make_connection();
    $stmt = $mysqli->prepare("SELECT column_title, column_p, image_link FROM columns WHERE column_id = ?");
    $stmt->bind_param('i', $column_id);
    $stmt->execute();

    $stmt->bind_result($column_title, $column_p, $image_link);
    $stmt->store_result();
    $stmt->fetch();

    $data = array();
    $data[] = $column_id;
    $data[] = $column_title;
    $data[] = $column_p;
    $data[] = $image_link;



    return $data;
}


function column_delete ($column_id) {
    $mysqli = make_connection();

    $query = "DELETE FROM columns WHERE column_id=" . $column_id;
    $result = mysqli_query($mysqli,$query) or die ('yes');
    header( "Location: index.php?page=CMSpage");


}