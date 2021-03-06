<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
// 			'page'=>array(
// 				'class'=>'CViewAction',
// 			),
		);
	}
	
 	protected function beforeAction($action)
 	{ 		
		switch ($action->id) {
			case 'index':
				$this->currentRoute = 'site/index';
				break;
			case 'list':
				$this->getSelectedCategory();
				break;
			case 'item':
				$this->getSelectedItem();
				break;
			case 'routing':
			case 'error':
				$this->getSelectedMenu();
				break;
			default:
			//	echo $action->id;
		}
		return true;
 	}
 	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
//		echo "<pre>";
//		var_dump($this->categories);
		$this->render('index', array('model'=>$this->categories));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$error=Yii::app()->errorHandler->error;
	    if($error)
	    {
	    	$this->setError(NOT_FOUND);
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}


	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Search action for search form
	 */
	public function actionSearch()
	{
		$model=new SearchForm('search');

	    // uncomment the following code to enable ajax-based validation
	    /*
	    if(isset($_POST['ajax']) && $_POST['ajax']==='search-form-search-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    */

	    if(isset($_POST['SearchForm']))
	    {
	        $model->attributes=$_POST['SearchForm'];
	        if($model->validate())
	        {
	            // form inputs are valid, do something here
	            return;
	        }
	    }
	    $this->render('search',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	/**
	 * Fills the JS tree on an AJAX request.
	 * Should receive parent node ID in $_GET['root'],
	 *  with 'source' when there is no parent.
	 */
	public function actionAjaxFillTree()
	{
		// accept only AJAX request (comment this when debugging)
		if (!Yii::app()->request->isAjaxRequest) {
			exit();
		}
		// parse the user input
		$parentId = "NULL";
		if (isset($_GET['root']) && $_GET['root'] !== 'source') {
			$parentId = (int) $_GET['root'];
		}
		// read the data (this could be in a model)
		$children = Yii::app()->db->createCommand(
				"SELECT m1.id, m1.name AS text, m2.id IS NOT NULL AS hasChildren "
				. "FROM tree AS m1 LEFT JOIN tree AS m2 ON m1.id=m2.parent_id "
				. "WHERE m1.parent_id <=> $parentId "
				. "GROUP BY m1.id ORDER BY m1.name ASC"
		)->queryAll();
				echo str_replace(
				'"hasChildren":"0"',
				'"hasChildren":false',
				CTreeView::saveDataAsJson($children)
				);
	}

}