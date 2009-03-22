<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Abmultivalue filter form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAbmultivalueFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'value'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'value'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abmultivalue_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abmultivalue';
  }

  public function getFields()
  {
    return array(
      'uid'        => 'Text',
      'record_id'  => 'Text',
      'property'   => 'Text',
      'identifier' => 'Text',
      'label'      => 'Text',
      'value'      => 'Text',
    );
  }
}
