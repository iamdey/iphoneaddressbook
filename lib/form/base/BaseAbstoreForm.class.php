<?php

/**
 * Abstore form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbstoreForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'rowid'                   => new sfWidgetFormInputHidden(),
      'name'                    => new sfWidgetFormInput(),
      'externalidentifier'      => new sfWidgetFormInput(),
      'type'                    => new sfWidgetFormInputHidden(),
      'constraintspath'         => new sfWidgetFormInput(),
      'externalmodificationtag' => new sfWidgetFormInput(),
      'storeinternalidentifier' => new sfWidgetFormInput(),
      'accountidentifier'       => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'rowid'                   => new sfValidatorPropelChoice(array('model' => 'Abstore', 'column' => 'rowid', 'required' => false)),
      'name'                    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'externalidentifier'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'                    => new sfValidatorPropelChoice(array('model' => 'Abstore', 'column' => 'type', 'required' => false)),
      'constraintspath'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'externalmodificationtag' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'storeinternalidentifier' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'accountidentifier'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abstore[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abstore';
  }


}
