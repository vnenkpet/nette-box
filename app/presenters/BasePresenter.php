<?php

use \Nette\Utils\Finder;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	/**
	* Creates a CSS loader component.
	*/
	public function createComponentCss()
	{
	    // prepare files list
	    // FileCollection constructor accepts default resources directory
	    $files = new \WebLoader\FileCollection(WWW_DIR . '/css');
	    $files->addFiles(array(
	    	'screen.css',
	        'bootstrap-3.0.0/less/bootstrap.less', // compiles bootstrap.css
	        'bootstrap-3.0.0/less/variables.less', // checks if variables.less has changed (it wouldnt recompile bootstrap.less if it didnt know)
	        'slider/less/slider.less' // bootstrap sliders
	    ));

	    // pass the files collection to the compiler and set output path
	    $compiler = \WebLoader\Compiler::createCssCompiler($files, WWW_DIR . '/webtemp');

	    // add LESS filter to the compiler
	    $compiler->addFileFilter(new \Webloader\Filter\LessFilter());

	    // add CSSMin filter to the compiler
	    $compiler->addFilter(function ($code) {
        	return cssmin::minify($code);
    	});

	    // nette komponenta pro výpis <link>ů přijímá kompilátor a cestu k adresáři na webu
	    return new \WebLoader\Nette\CssLoader($compiler, $this->template->basePath . '/webtemp');
	}

}
	