# Instllation

```
composer require
```

# Requirements

php7.1

# Usage

* edit test.yaml
* edit templates/form.html
* php form.php

It print below

```
<form{$form.attributes}>
{$form.hidden}
	<div>
        {if $form.name.error}エラー{/if}
        {$form.name.label}
        {$form.name.error}
        {$form.name.html}
    </div>
	<div>
        {if $form.furi.error}エラー{/if}
        {$form.furi.label}
        {$form.furi.error}
        {$form.furi.html}
    </div>
	<div>
		{if !$form.frozen}
			{$form.btn_submit.html}
		{else}
			{$form.btn_back.html}
			{$form.btn_submit.html}
		{/if}
	</div>
</form>
```
