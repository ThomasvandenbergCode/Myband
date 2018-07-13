
<a class="logoutbtn" href="index.php?page=logout">LOGOUT</a>




   <table>

        <tr class="trhome">
            <th class="thhome">column_id</th>
            <th class="thhome">column titel</th>
            <th class="thhome">column paragraaf</th>
            <th class="thhome">imagelink</th>
            <th class="thhome">verwijder</th>
            <th class="thhome">wijzig</th>
            </tr>







    {foreach from=$columns item=column}
        <tr class="trhome">

        <td class="tdhome">{$column[0]}</td><td class="tdhome">{$column[1]}</td><td class="tdhome">{$column[2]}</td><td class="tdhome">{$column[3]}</td>
            <td class="tdhome">
            <a href="index.php?page=column_delete&column_id={$column[0]}">DELETE</a>
            </td>
            <td class="tdhome">
            <a  href="index.php?page=column_edit&column_id={$column[0]}">EDIT</a>

            </td>
       </tr>

    {/foreach}
   </table>

<form method="post" action="index.php?page=voegtoe_column" enctype="multipart/form-data">
    <div class="row">
        <div class="column">
            <input  placeholder="titel..." type="text" name="column_title"/>
        </div>
        <div class="column">
            <textarea placeholder="type hier de inhoud..." name="column_p" rows="4" cols="50"></textarea>
        </div>
        <div class="column">
            <input class="styleinput" placeholder="type hier de imagelink..." type="text" name="image_link"/>
        </div>
    </div>



    <input type="submit"  name="submit_column" />


</form>

























<table>



    <tr class="trblog">
        <th>artikel ID</th>
        <th>titel</th>
        <th>inleiding</th>
        <th>middenstuk</th>
        <th>slot</th>
        <th>auteur</th>
        <th>afbeelding</th>
        <th>verwijderen</th>
        <th>veranderen</th>
    </tr>







    {foreach from=$articles item=article}
        <tr class="trblog">

            <td>{$article[0]}</td><td>{$article[1]}</td><td>{$article[2]}</td><td>{$article[3]}</td><td>{$article[4]}</td><td>{$article[5]}</td><td>{$article[6]}</td>
            <td>
                <a href="index.php?page=delete&article_id={$article[0]}">DELETE</a>
            </td>
            <td>
                <a  href="index.php?page=edit&article_id={$article[0]}">EDIT</a>

            </td>
        </tr>

    {/foreach}
</table>

<form method="post" action="index.php?page=voegtoe" enctype="multipart/form-data">
<div class="row">
    <div class="column">
    <textarea placeholder="type hier de inleiding..." name="inleiding" rows="4" cols="50"></textarea><br>
</div>
    <div class="column">
    <textarea placeholder="type hier het middenstuk..." name="middenstuk" rows="4" cols="50"></textarea><br>
    </div>
    <div class="column">
    <textarea placeholder="type hier het slot..." name="slot" rows="4" cols="50"></textarea><br>
    </div>
</div>
    <div class="secondrow">
    <input class="styleinput" placeholder="titel..." type="text" name="titel"/><br>
    <input class="styleinput" placeholder="auteur..." name="auteur" /><br>
    <input class="styleinput" placeholder="imagelink..." type="text" name="imagelink"/><br>
    </div>


    <input type="submit"  name="submit_add" />


</form>