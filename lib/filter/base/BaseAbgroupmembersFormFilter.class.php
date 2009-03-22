<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Abgroupmembers filter form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAbgroupmembersFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('abgroupmembers_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abgroupmembers';
  }

  public function getFields()
  {
    return array(
      'uid'         => 'Text',
      'group_id'    => 'Text',
      'member_type' => 'Text',
      'member_id'   => 'Text',
    );
  }
}
