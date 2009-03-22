<?php

/**
 * Abgroupchanges form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbgroupchangesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'record'             => new sfWidgetFormInputHidden(),
      'type'               => new sfWidgetFormInputHidden(),
      'externalidentifier' => new sfWidgetFormInput(),
      'storeid'            => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'record'             => new sfValidatorPropelChoice(array('model' => 'Abgroupchanges', 'column' => 'record', 'required' => false)),
      'type'               => new sfValidatorPropelChoice(array('model' => 'Abgroupchanges', 'column' => 'type', 'required' => false)),
      'externalidentifier' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'storeid'            => new sfValidatorPropelChoice(array('model' => 'Abgroupchanges', 'column' => 'storeid', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abgroupchanges[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abgroupchanges';
  }


}
