<?php

/**
 * person actions.
 *
 * @package    iphoneAddressBook
 * @subpackage person
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class personActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->redirect('@personlist?sf_format=html');
		
	}
	
	public function executeTest(sfWebRequest $request)
	{
//		$birthday 	= -547783200.000000;  //laetitia
		$birthday	= 226533600;		//chantal
		$birthday 	= 238197600.000000; //céline
		$birthday 	= -568358090.000000; //ksd
		$birthday	=  	235864800.000000; //daniel
		$birthday	= -2618972684.000000; //antoinette
		
		$date =  mktime(1,0,0,1,1, 2001) + $birthday;
		$this->date = date('d/M/Y', $date);
		
	}

	public function executeList(sfWebRequest $request)
	{
		$c = new Criteria;
		$this->abperson_list 	= AbpersonPeer::doSelect($c);
		$this->nb_contacts 		= AbpersonPeer::doCount($c);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AbpersonForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod('post'));

		$this->form = new AbpersonForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($abperson = AbpersonPeer::retrieveByPk($request->getParameter('rowid'),
		$request->getParameter('kind'),
		$request->getParameter('creationdate'),
		$request->getParameter('modificationdate'),
		$request->getParameter('storeid'),
		$request->getParameter('firstsortlanguageindex'),
		$request->getParameter('lastsortlanguageindex')), sprintf('Object abperson does not exist (%s).', $request->getParameter('rowid'),
		$request->getParameter('kind'),
		$request->getParameter('creationdate'),
		$request->getParameter('modificationdate'),
		$request->getParameter('storeid'),
		$request->getParameter('firstsortlanguageindex'),
		$request->getParameter('lastsortlanguageindex')));
		$this->form = new AbpersonForm($abperson);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
		$this->forward404Unless($abperson = AbpersonPeer::retrieveByPk($request->getParameter('rowid'),
		$request->getParameter('kind'),
		$request->getParameter('creationdate'),
		$request->getParameter('modificationdate'),
		$request->getParameter('storeid'),
		$request->getParameter('firstsortlanguageindex'),
		$request->getParameter('lastsortlanguageindex')), sprintf('Object abperson does not exist (%s).', $request->getParameter('rowid'),
		$request->getParameter('kind'),
		$request->getParameter('creationdate'),
		$request->getParameter('modificationdate'),
		$request->getParameter('storeid'),
		$request->getParameter('firstsortlanguageindex'),
		$request->getParameter('lastsortlanguageindex')));
		$this->form = new AbpersonForm($abperson);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($abperson = AbpersonPeer::retrieveByPk($request->getParameter('rowid'),
		$request->getParameter('kind'),
		$request->getParameter('creationdate'),
		$request->getParameter('modificationdate'),
		$request->getParameter('storeid'),
		$request->getParameter('firstsortlanguageindex'),
		$request->getParameter('lastsortlanguageindex')), sprintf('Object abperson does not exist (%s).', $request->getParameter('rowid'),
		$request->getParameter('kind'),
		$request->getParameter('creationdate'),
		$request->getParameter('modificationdate'),
		$request->getParameter('storeid'),
		$request->getParameter('firstsortlanguageindex'),
		$request->getParameter('lastsortlanguageindex')));
		$abperson->delete();

		$this->redirect('person/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$abperson = $form->save();

			$this->redirect('person/edit?rowid='.$abperson->getRowid().'&kind='.$abperson->getKind().'&creationdate='.$abperson->getCreationdate().'&modificationdate='.$abperson->getModificationdate().'&storeid='.$abperson->getStoreid().'&firstsortlanguageindex='.$abperson->getFirstsortlanguageindex().'&lastsortlanguageindex='.$abperson->getLastsortlanguageindex());
		}
	}
}
