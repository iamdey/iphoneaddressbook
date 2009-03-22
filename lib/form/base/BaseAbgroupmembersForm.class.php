<?php

/**
 * Abgroupmembers form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbgroupmembersForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'uid'         => new sfWidgetFormInputHidden(),
      'group_id'    => new sfWidgetFormInputHidden(),
      'member_type' => new sfWidgetFormInputHidden(),
      'member_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'uid'         => new sfValidatorPropelChoice(array('model' => 'Abgroupmembers', 'column' => 'uid', 'required' => false)),
      'group_id'    => new sfValidatorPropelChoice(array('model' => 'Abgroupmembers', 'column' => 'group_id', 'required' => false)),
      'member_type' => new sfValidatorPropelChoice(array('model' => 'Abgroupmembers', 'column' => 'member_type', 'required' => false)),
      'member_id'   => new sfValidatorPropelChoice(array('model' => 'Abgroupmembers', 'column' => 'member_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abgroupmembers[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abgroupmembers';
  }


}
