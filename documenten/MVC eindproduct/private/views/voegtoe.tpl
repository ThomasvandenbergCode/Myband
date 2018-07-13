<p>

    {foreach from=$articles item=article}
<h3><b>titel:</b> {$article[0]}</h3>
<p><b>inleiding:</b><br> {$article[1]}</p>
<p><b>middenstuk:</b> <br>{$article[2]}</p>
<p><b>slot:</b> <br>{$article[3]}</p>
<p><b>auteur:</b> {$article[4]}</p>
<img  src="{$article[5]}" alt="{$article[5]}" />
<div class="line"></div>
{/foreach}

<h1>test</h1>
</p>

