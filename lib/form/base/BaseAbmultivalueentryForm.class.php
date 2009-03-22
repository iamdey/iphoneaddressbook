<?php

/**
 * Abmultivalueentry form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbmultivalueentryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'parent_id' => new sfWidgetFormInputHidden(),
      'key'       => new sfWidgetFormInputHidden(),
      'value'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'parent_id' => new sfValidatorPropelChoice(array('model' => 'Abmultivalueentry', 'column' => 'parent_id', 'required' => false)),
      'key'       => new sfValidatorPropelChoice(array('model' => 'Abmultivalueentry', 'column' => 'key', 'required' => false)),
      'value'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abmultivalueentry[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abmultivalueentry';
  }


}
