<?php

/**
 * SqliteSequence form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseSqliteSequenceForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name' => new sfWidgetFormInput(),
      'seq'  => new sfWidgetFormInput(),
      'id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'seq'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'   => new sfValidatorPropelChoice(array('model' => 'SqliteSequence', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sqlite_sequence[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SqliteSequence';
  }


}
