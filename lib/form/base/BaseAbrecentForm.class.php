<?php

/**
 * Abrecent form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbrecentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'date'     => new sfWidgetFormInputHidden(),
      'name'     => new sfWidgetFormInput(),
      'property' => new sfWidgetFormInputHidden(),
      'value'    => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'date'     => new sfValidatorPropelChoice(array('model' => 'Abrecent', 'column' => 'date', 'required' => false)),
      'name'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'property' => new sfValidatorPropelChoice(array('model' => 'Abrecent', 'column' => 'property', 'required' => false)),
      'value'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abrecent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abrecent';
  }


}
