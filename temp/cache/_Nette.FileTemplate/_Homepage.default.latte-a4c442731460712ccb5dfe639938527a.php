<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.99746100 1381135473";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"C:\xampp\htdocs\nette\app\templates\Homepage\default.latte";i:2;i:1381135469;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: C:\xampp\htdocs\nette\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ww9titn7mh')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbf7f4a6c63d_content')) { function _lbf7f4a6c63d_content($_l, $_args) { extract($_args)
?>    <div class="container">

      <div class="starter-template">
        <h1>Nette &amp; Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br /> All you get is this text and a mostly barebones HTML document.</p>
      </div>

		<input type="text" id="foo" class="span2" value="" data-slider-min="-20" data-slider-max="20" data-slider-step="1" data-slider-value="-14" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide" />
		<hr />
		<input type="text" id="bar" />

    </div><!-- /.container -->


<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lba405fc0fe6_scripts')) { function _lba405fc0fe6_scripts($_l, $_args) { extract($_args)
?>    <script>
    $('#foo').slider()
	  .on('slide', function(ev){
	     $('#bar').val(ev.value);
	  });
    </script>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars()) ; 