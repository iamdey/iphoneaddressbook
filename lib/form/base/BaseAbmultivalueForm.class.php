<?php

/**
 * Abmultivalue form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbmultivalueForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'uid'        => new sfWidgetFormInputHidden(),
      'record_id'  => new sfWidgetFormInputHidden(),
      'property'   => new sfWidgetFormInputHidden(),
      'identifier' => new sfWidgetFormInputHidden(),
      'label'      => new sfWidgetFormInputHidden(),
      'value'      => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'uid'        => new sfValidatorPropelChoice(array('model' => 'Abmultivalue', 'column' => 'uid', 'required' => false)),
      'record_id'  => new sfValidatorPropelChoice(array('model' => 'Abmultivalue', 'column' => 'record_id', 'required' => false)),
      'property'   => new sfValidatorPropelChoice(array('model' => 'Abmultivalue', 'column' => 'property', 'required' => false)),
      'identifier' => new sfValidatorPropelChoice(array('model' => 'Abmultivalue', 'column' => 'identifier', 'required' => false)),
      'label'      => new sfValidatorPropelChoice(array('model' => 'Abmultivalue', 'column' => 'label', 'required' => false)),
      'value'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abmultivalue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abmultivalue';
  }


}
