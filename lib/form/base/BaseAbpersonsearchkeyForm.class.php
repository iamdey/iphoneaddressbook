<?php

/**
 * Abpersonsearchkey form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbpersonsearchkeyForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'person_id' => new sfWidgetFormInputHidden(),
      'value'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'person_id' => new sfValidatorPropelChoice(array('model' => 'Abpersonsearchkey', 'column' => 'person_id', 'required' => false)),
      'value'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abpersonsearchkey[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abpersonsearchkey';
  }


}
