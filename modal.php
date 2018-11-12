<?php

function make_connection() {
    $mysqli = new mysqli('localhost','root', '','myband_db');
    if ($mysqli->connect_errno) {
        die('Connection error: ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
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
    global $pageno;
    $mysqli = make_connection();
    $firstrow = ($pageno -1) * ARTICLES_PER_PAGE;
    $per_page = ARTICLES_PER_PAGE;
    $query = "SELECT title, inleiding, middenstuk, slot, auteur, imagelink FROM articles ORDER BY article_id DESC LIMIT $firstrow,$per_page";
    $stmt = $mysqli->prepare($query) or die ('Error preparing hoi.');
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
        $results[] = $article;
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
    echo $query;
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
    if ($username == 'admin' && $password == 'youwontseeit') {
        $_SESSION['loggedin'] = 'loggedin';
    }
}

function execute_logout() {
    global $smarty;
    $_SESSION = array();

    header ('Location: index.php?page=home');

}




function execute_input_action()
{
    $mysqli = make_connection();
    $titel = $_POST['titel'];
    $inleiding = $_POST['inleiding'];
    $middenstuk = $_POST['middenstuk'];
    $slot = $_POST['slot'];
    $auteur = $_POST['auteur'];
    $imagelink = $_POST['imagelink'];




    // 2. OPDRACHT  (QUERY) SCHRIJVEN VOOR DE DATABASE
    $query = "INSERT INTO articles VALUES (0,'$titel','$inleiding','$middenstuk','$slot','$auteur','$imagelink')";
    // 3. QUERY UITVOEREN
    $result = mysqli_query($mysqli, $query) or die('ERROR quering.');
    // 4. VERBINDING VERBREKEN
    mysqli_close($mysqli);

    // BEVESTINGEN DAT DATA IN DATABASE STAAT
    if ($result) {

        echo '<strong>' . 'De volgende gegevens zijn toegevoegd aan de database:' . '</strong>' . '<br>';
        echo '<strong>' . 'titel:' . '</strong>' . $titel . '<br>';
        echo '<strong>' . 'inleiding) ' . '</strong>' . $inleiding . '<br>';
        echo '<strong>' . 'middenstuk: ' . '</strong>' . $middenstuk . '<br>';
        echo '<strong>' . 'slot: ' . '</strong>' . $slot . '<br>';
        echo '<strong>' . 'auteur: ' . '</strong>' . $auteur . '<br>';
        echo '<strong>' . 'imagelink: ' . '</strong>' . $imagelink . '<br>';
    } else {

        echo 'Sorry, er is iets misgegaan. Probeer het opnieuw';
    }
    return $mysqli;
}

function beheertable() {
    // 1. Connectie maken met de DB
    $mysqli = make_connection();


// 2. kijken in de database en alle mailadressen tevoorschijn halen
    $query = "SELECT * FROM articles";
    $result = mysqli_query($mysqli,$query) or die ('Error querying');

    echo '<table>' ;

    echo   '<tr>';
    echo   '<th>artikel ID</th>';
    echo   '<th>titel</th>';
    echo   '<th>inleiding</th>';
    echo   '<th>middenstuk</th>';
    echo   '<th>slot</th>';
    echo   '<th>auteur</th>';
    echo   '<th>afbeelding</th>';
    echo   '<th>verwijderen</th>';
    echo   '<th>veranderen</th>';
    echo   '</tr>';
// 3. Loop waarin  alle mailadressen in beeld worden gebracht
    while ($row = mysqli_fetch_array($result)) {


        $article_id = $row['article_id'];
        $title = $row['title'];
        $inleiding = $row['inleiding'];
        $middenstuk = $row['middenstuk'];
        $slot = $row['slot'];
        $auteur = $row['auteur'];
        $imagelink = $row['imagelink'];





        echo '<tr>';

        echo "<td>$article_id</td><td>$title</td><td>$inleiding</td><td>$middenstuk</td><td>$slot</td><td>$auteur</td><td>$imagelink</td>";
        echo '<td>';
        echo '<a href="delete.php?article_id=' . $article_id . '">DELETE</a>';
        echo '</td>';
        echo '<td>';
        echo '<a  href="index.php?page=edit&article_id=' . $article_id . '&title=' . $title . '&inleiding=' . $inleiding . '&middenstuk=' . $middenstuk . '&slot=' . $slot . '&auteur=' .  $auteur . '&imagelink=' . $imagelink . '">EDIT</a>';

        echo '</td>';
        echo '</tr>';

    }

    echo '</table>';
    return $mysqli;
}
//

function verwerk_edit_now() {


    $mysqli = make_connection();

    $article_id = $_POST['article_id'];
    $title = $_POST['title'];
    $inleiding = $_POST['inleiding'];
    $middenstuk = $_POST['middenstuk'];
    $slot = $_POST['slot'];
    $auteur = $_POST['auteur'];
    $imagelink = $_POST['imagelink'];




    $query = "UPDATE  articles ";
    $query .= "SET  title = '$title', inleiding = '$inleiding', middenstuk = '$middenstuk', slot = '$slot', auteur = '$auteur', imagelink = '$imagelink' ";
    $query .= "WHERE article_id = '$article_id'";
    $result = mysqli_query($mysqli,$query) or die ('Error updating');
    header( "Location: index.php?page=CMSpage");

    return $mysqli;
}



function edit($article_id, $title, $inleiding, $middenstuk, $slot, $auteur, $imagelink){

    $mysqli = make_connection();
    $query = "SELECT * FROM articles WHERE article_id=" . $article_id ;


    echo '<form method="post" action="index.php?page=verwerk_edit">';
    echo  '<input type="hidden" name="article_id" value=" ' . $article_id .' "/>';
    echo '<label>titel:<input type="text" name="title" value=" ' . $title .' "/></label>';
    echo '<label>inleiding:<input type="text" name="inleiding" value=" ' . $inleiding .' "/></label>';
    echo '<label>middenstuk:<input type="text" name="middenstuk" value=" ' . $middenstuk .' "/></label>';
    echo '<label>slot:<input type="text" name="slot" value=" ' . $slot .' "/></label>';
    echo '<label>auteur:<input type="text" name="auteur" value=" ' . $auteur .' "/></label>';
    echo '<label>imagelink:<input type="text" name="imagelink" value=" ' . $imagelink .' "/>';
    echo '<label><input type="submit" name="submit"/>';




    return $mysqli;
}
