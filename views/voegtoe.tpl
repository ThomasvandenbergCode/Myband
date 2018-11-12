<p>
    {foreach from=$articles item=article}
<h3><b>titel:</b> {$article[0]}</h3>
<p><b>inleiding:</b><br> {$article[1]}</p>
<p><b>middenstuk:</b> <br>{$article[2]}</p>
<p><b>slot:</b> <br>{$article[3]}</p>
<p><b>auteur:</b> {$article[4]}</p>
<p>{$article[5]}</p>  <img  src="{$article[6]}" alt="foobar" />

<div class="line"></div>
{/foreach}

</p>