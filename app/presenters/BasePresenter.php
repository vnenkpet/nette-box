<?php

use \Nette\Utils\Finder;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{


	public function createComponentCss()
	{
	    // připravíme seznam souborů
	    // FileCollection v konstruktoru může dostat výchozí adresář, pak není potřeba psát absolutní cesty
	    $files = new \WebLoader\FileCollection(WWW_DIR . '/css');
	    $files->addFiles(array(
	        'bootstrap-3.0.0/less/bootstrap.less', // compiles bootstrap.css
	        'bootstrap-3.0.0/less/variables.less', // check if we changed this

	    ));


	    // kompilátoru seznam předáme a určíme adresář, kam má kompilovat
	    $compiler = \WebLoader\Compiler::createCssCompiler($files, WWW_DIR . '/webtemp');

	    $compiler->addFileFilter(new \Webloader\Filter\LessFilter());
	    $compiler->addFilter(function ($code) {
        	return cssmin::minify($code);
    	});

	    // nette komponenta pro výpis <link>ů přijímá kompilátor a cestu k adresáři na webu
	    return new \WebLoader\Nette\CssLoader($compiler, $this->template->basePath . '/webtemp');
	}

}
	