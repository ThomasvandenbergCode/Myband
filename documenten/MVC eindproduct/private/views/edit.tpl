<form method="post" action="index.php?page=verwerk_edit">
<input type="text" name="article_id" value="{$edit[0]}" readonly/>
<textarea rows="4" cols="50" name="title">{$edit[1]}</textarea>
<textarea rows="4" cols="50" name="inleiding">{$edit[2]}</textarea>
<textarea rows="4" cols="50" name="middenstuk">{$edit[3]}</textarea>
<textarea rows="4" cols="50" name="slot">{$edit[4]}</textarea>
<textarea rows="4" cols="50" name="auteur">{$edit[5]}</textarea>
<input type="text" name="imagelink" value="{$edit[6]}"/>
<input type="submit" name="submit_edit"/>
</form>