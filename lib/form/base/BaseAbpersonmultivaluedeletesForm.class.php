<?php

/**
 * Abpersonmultivaluedeletes form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbpersonmultivaluedeletesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'record_id'   => new sfWidgetFormInputHidden(),
      'property_id' => new sfWidgetFormInputHidden(),
      'identifier'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'record_id'   => new sfValidatorPropelChoice(array('model' => 'Abpersonmultivaluedeletes', 'column' => 'record_id', 'required' => false)),
      'property_id' => new sfValidatorPropelChoice(array('model' => 'Abpersonmultivaluedeletes', 'column' => 'property_id', 'required' => false)),
      'identifier'  => new sfValidatorPropelChoice(array('model' => 'Abpersonmultivaluedeletes', 'column' => 'identifier', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abpersonmultivaluedeletes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abpersonmultivaluedeletes';
  }


}
