<?php

/**
 * Abmultivalueentrykey form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbmultivalueentrykeyForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'value' => new sfWidgetFormInput(),
      'id'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'value' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'    => new sfValidatorPropelChoice(array('model' => 'Abmultivalueentrykey', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abmultivalueentrykey[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abmultivalueentrykey';
  }


}
