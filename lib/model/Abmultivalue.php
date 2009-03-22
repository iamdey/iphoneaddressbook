<?php

class Abmultivalue extends BaseAbmultivalue
{
	public function getLabel()
	{
		$id_label 	= parent::getLabel();
		$a_labels 	= sfConfig::get('app_multivaluelabels');
		return $a_labels[$id_label - 1];
	}
}
