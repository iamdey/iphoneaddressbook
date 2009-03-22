<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Abgroup filter form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAbgroupFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'               => new sfWidgetFormFilterInput(),
      'externalidentifier' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'               => new sfValidatorPass(array('required' => false)),
      'externalidentifier' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abgroup_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abgroup';
  }

  public function getFields()
  {
    return array(
      'rowid'              => 'Text',
      'name'               => 'Text',
      'externalidentifier' => 'Text',
      'storeid'            => 'Text',
    );
  }
}
