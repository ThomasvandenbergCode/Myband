
<header>
    <h1 class="title">News page</h1>
</header>

<h3 class="numberofpages">Number of pages : {$number_of_pages}</h3>
<h4 class="currentpage">Current page: <span id="pot" style="color:green">{$current_page}</span></h4>

<br><br><br><br><br><br><br>
<div class="main">
<tr>
    <td>
{if $current_page gt 1}
    <a class="left" href="index.php?page=blog&pageno={$current_page -1}">&laquo;vorige</a>
{/if}
    </td>
    <td>
        {if $current_page lt $number_of_pages}
            <a class="right" href="index.php?page=blog&pageno={$current_page +1}">volgende&raquo;</a>
        {/if}

    </td>
    <a class="home" href="index.php?page=home">Home</a>




    <td>
        {if $current_page eq $number_of_pages  }
            <a href="index.php?page=blog&pageno=1"> naar de eerste pagina</a>
        {/if}

    </td>
    <td>
        {if $current_page = 1}
            <a href="index.php?page=blog&pageno={$number_of_pages}">naar de laatste pagina</a>
        {/if}

    </td>
</tr>


<p>

    {foreach from=$articles item=article}
    <div class="content">
        <h3> {$article[0]}</h3>
    <p> {$article[1]}</p>
    <p>{$article[2]}</p>
    <p><b>slot:</b> <br>{$article[3]}</p>
    <p><b>auteur:</b> {$article[4]}</p>
        <p>{$article[5]}</p>  <img  src="{$article[6]}" alt="foobar" />
</div>
    <div class="line"></div>
{/foreach}

</p>

