<?php

namespace App;

use Nette,
	Model,
	Nette\Diagnostics\Debugger;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

	public function actionDoctrineExample()
	{
		$articles = $this->em->getDao(Article::getClassName());

		$article = new Article();
		$article->title = "The Fight Club";
		$articles->save($article);

		$article = $articles->find(1);
		$this->template->article = $article->title;

		Debugger::dump($article);
		$this->redirect('Homepage:default');
	}

}
