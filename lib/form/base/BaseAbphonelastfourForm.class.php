<?php

/**
 * Abphonelastfour form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbphonelastfourForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'multivalue_id' => new sfWidgetFormInputHidden(),
      'value'         => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'multivalue_id' => new sfValidatorPropelChoice(array('model' => 'Abphonelastfour', 'column' => 'multivalue_id', 'required' => false)),
      'value'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abphonelastfour[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abphonelastfour';
  }


}
