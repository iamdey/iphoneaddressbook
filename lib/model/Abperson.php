<?php

class Abperson extends BaseAbperson
{
	public function getNumbers()
	{
		$c = new Criteria;
		$c->add(AbmultivaluePeer::RECORD_ID, $this->rowid);
		$c->add(AbmultivaluePeer::PROPERTY, AbmultivaluePeer::PROPERTY_NUMBER);
		return AbmultivaluePeer::doSelect($c);
	}
	
	public function getPhoneIndexed()
	{
		$phones = array();
		
		foreach ($this->getNumbers() as $phone)
		{
			$phones[$phone->getLabel()] = $phone->getValue();
		}
		
		return $phones;
	}
	
	public function getPhoneNumber()
	{
		$numbers = $this->getPhoneIndexed();
		if(isset($numbers['Home']))
		{
			return $numbers['Home'];
		}
		
		return '';
	}
	
	public function getWorkNumber()
	{
		$numbers = $this->getPhoneIndexed();
		if(isset($numbers['Work']))
		{
			return $numbers['Work'];
		}
		
		return '';
	}
	
	public function getMobileNumber()
	{
		$numbers = $this->getPhoneIndexed();
		if(isset($numbers['Mobile']))
		{
			return $numbers['Mobile'];
		}
		
		return '';
	}
	
	public function getOtherNumber()
	{
		$numbers = $this->getPhoneIndexed();
		if(isset($numbers['Other']))
		{
			return $numbers['Other'];
		}
		
		return '';
	}
	
	public function getEmails()
	{
		$c = new Criteria;
		$c->add(AbmultivaluePeer::RECORD_ID, $this->rowid);
		$c->add(AbmultivaluePeer::PROPERTY, AbmultivaluePeer::PROPERTY_EMAIL);
		return AbmultivaluePeer::doSelect($c);
	}
	
	
	/**
	 * Return an indexed array of emails
	 * 
	 * @author 		esion
	 * @since 		15 mars 2009 - esion
	 * @version 	1.0 - 15 mars 2009 - esion
	 * 
	 * @return array
	 */
	public function getEmailIndexed()
	{
		$emails = array();
		
		foreach ($this->getEmails() as $email)
		{
			$emails[$email->getLabel()] = $email->getValue();
		}
		
		return $emails;
	}
	
	public function configureEmails()
	{
		$emails = $this->getEmailIndexed();
		
		$this->email 			= (isset($emails['Home']))? $emails['Home'] : '';
		$this->emailAlternate1 	= (isset($emails['Work']))? $emails['Work'] : '';
		$this->emailAlternate2 	= (isset($emails['Other']))? $emails['Other'] : '';
	}
	
	public function getEmail()
	{
		if(!isset($this->email))
		{
			$this->configureEmails();
		}
		
		return $this->email;
	}
	
	
	public function getEmailAlternate1()
	{
		if(!isset($this->emailAlternate1))
		{
			$this->configureEmails();
		}
		
		return $this->emailAlternate1;
	}
	
	public function getEmailAlternate2()
	{
		if(!isset($this->emailAlternate2))
		{
			$this->configureEmails();
		}
		
		return $this->emailAlternate2;
	}
	
	public function getHomepages()
	{
		$c = new Criteria;
		$c->add(AbmultivaluePeer::RECORD_ID, $this->rowid);
		$c->add(AbmultivaluePeer::PROPERTY, AbmultivaluePeer::PROPERTY_HOMEPAGE);
		return AbmultivaluePeer::doSelect($c);
	}
	
	public function getHomepagesIndexed()
	{
		$websites = array();
		
		foreach($this->getHomepages() as $homepage)
		{
			$websites[$homepage->getLabel()] = $homepage->getValue();
		}
		
		return $websites;
	}
	
	public function getWebsitePersonnal()
	{
		$websites = $this->getHomepagesIndexed();
		if(isset($websites['Homepage']))
		{
			return $websites['Homepage'];
		}
		
		return '';
	}
	
	public function getWebsiteBusiness()
	{
		$websites = $this->getHomepagesIndexed();
		if(isset($websites['Work']))
		{
			return $websites['Work'];
		}
		
		return '';
	}
	
	public function getBirthday()
	{
		if($this->birthday)
		{
			$date =  mktime(1,0,0,1,1, 2001) + $this->birthday;
			return date('m/d/Y', $date);
		}
		return null;
	}
	
	public function getCustom1()
	{
		return null;
	}
	
	public function getCustom2()
	{
		return null;
	}
	
	public function getCustom3()
	{
		return null;
	}
	
	public function getCustom4()
	{
		return null;
	}
	
	public function getComment()
	{
		return null;
	}
}
