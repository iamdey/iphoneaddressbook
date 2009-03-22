<?php

/**
 * Abpersonchanges form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbpersonchangesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'record'             => new sfWidgetFormInputHidden(),
      'type'               => new sfWidgetFormInputHidden(),
      'image'              => new sfWidgetFormInputHidden(),
      'externalidentifier' => new sfWidgetFormInput(),
      'storeid'            => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'record'             => new sfValidatorPropelChoice(array('model' => 'Abpersonchanges', 'column' => 'record', 'required' => false)),
      'type'               => new sfValidatorPropelChoice(array('model' => 'Abpersonchanges', 'column' => 'type', 'required' => false)),
      'image'              => new sfValidatorPropelChoice(array('model' => 'Abpersonchanges', 'column' => 'image', 'required' => false)),
      'externalidentifier' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'storeid'            => new sfValidatorPropelChoice(array('model' => 'Abpersonchanges', 'column' => 'storeid', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abpersonchanges[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abpersonchanges';
  }


}
