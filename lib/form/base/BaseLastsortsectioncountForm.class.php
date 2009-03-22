<?php

/**
 * Lastsortsectioncount form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseLastsortsectioncountForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'languageindex' => new sfWidgetFormInput(),
      'section'       => new sfWidgetFormInput(),
      'storeid'       => new sfWidgetFormInput(),
      'number'        => new sfWidgetFormInput(),
      'id'            => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'languageindex' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'section'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'storeid'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'number'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'            => new sfValidatorPropelChoice(array('model' => 'Lastsortsectioncount', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lastsortsectioncount[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lastsortsectioncount';
  }


}
