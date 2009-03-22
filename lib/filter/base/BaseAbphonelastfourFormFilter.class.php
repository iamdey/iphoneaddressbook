<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Abphonelastfour filter form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAbphonelastfourFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'value'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'value'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abphonelastfour_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abphonelastfour';
  }

  public function getFields()
  {
    return array(
      'multivalue_id' => 'Text',
      'value'         => 'Text',
    );
  }
}
