<?php

/**
 * Abgroup form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbgroupForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'rowid'              => new sfWidgetFormInputHidden(),
      'name'               => new sfWidgetFormInput(),
      'externalidentifier' => new sfWidgetFormInput(),
      'storeid'            => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'rowid'              => new sfValidatorPropelChoice(array('model' => 'Abgroup', 'column' => 'rowid', 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'externalidentifier' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'storeid'            => new sfValidatorPropelChoice(array('model' => 'Abgroup', 'column' => 'storeid', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abgroup[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abgroup';
  }


}
