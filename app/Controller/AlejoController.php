<?php
/**
* 
*/
class AlejoController extends AppController
{
	
	function index()
	{
		$this->set('content', array('alejo'));
		$this->render('/empty', 'ajax');
	}
}


?>