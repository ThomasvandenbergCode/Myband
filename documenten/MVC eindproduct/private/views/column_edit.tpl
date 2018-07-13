<form method="post" action="index.php?page=verwerk_column_edit"><br>
<label>columnID<input type="text" value="{$column_edit[0]}" readonly/></label><br>
<label>titel<textarea rows="4" cols="50">{$column_edit[1]}</textarea></label><br>
<label>paragraaf<textarea rows="4" cols="50">{$column_edit[2]}</textarea></label><br>
<label>afbeeldinglink<input type="text" name="imagelink" value="{$column_edit[3]}"/></label><br>
    <input type="submit" name="submit_column_edit"/>
</form>

