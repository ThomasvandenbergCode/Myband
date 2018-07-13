<header>
    <div class="navbar">
        <a href="index.php?page=home"><i class="fas fa-home"></i>HOME</a>
        <a href="index.php?page=blog"><i class="fab fa-blogger"></i>BLOG</a>
        <a href="index.php?page=contact"><i class="fas fa-address-card"></i>CONTACT</a>
    </div>

    <div class="admin-login"><a href="index.php?page=login"><i class="fas fa-lock"></i>ADMIN CENTER</a></div>


</header>



<div class="info">
<h3 class="numberofpages">Number of pages : {$number_of_pages}</h3>
<h3 class="currentpage">Current page: {$current_page}</span></h3>
</div>

<div class="main">

<tr class="tab">
    <td>
{if $current_page gt 1}
    <a class="vorige" href="index.php?page=blog&pageno={$current_page -1}">&laquo;vorige</a><br>
{/if}
    </td>
    <td>
        {if $current_page lt $number_of_pages}
            <a class="volgende" href="index.php?page=blog&pageno={$current_page +1}">volgende&raquo;</a><br>
        {/if}

    </td>

    <td>
        {if $current_page eq $number_of_pages  }
            <a class="eerste" href="index.php?page=blog&pageno=1"> naar de eerste pagina</a><br>
        {/if}

    </td>
    <td>
        {if $current_page = 1}
            <a class="laatste" href="index.php?page=blog&pageno={$number_of_pages}">naar de laatste pagina</a><br>
        {/if}

    </td>
</tr>
<div class="zoekbar">
        <form method="get" action="index.php">
            <input type="hidden" name="page" value="blog">
            <input class="zoekveld" name="searchterm">
            <button class="zoeken" type="submit" name="submit" value="zoek"><i class="fas fa-search"></i></button>
        </form>
</div>


<div>

    {foreach from=$articles item=article}
    <div class="omhulsel">
        <img class="artikelafbeelding"   src="{$article[6]}" alt="foobar" />
        <h1 class="titelartikel">{$article[1]}</h1><br>
         <p class="tekst">{$article[2]}
            {$article[3]}
            {$article[4]}
            {$article[4]} </p>
            

</div>
    <div class="line"></div>
{/foreach}

</div>

