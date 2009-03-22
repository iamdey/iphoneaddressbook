<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Abpersonchanges filter form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAbpersonchangesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'externalidentifier' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'externalidentifier' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abpersonchanges_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abpersonchanges';
  }

  public function getFields()
  {
    return array(
      'record'             => 'Text',
      'type'               => 'Text',
      'image'              => 'Text',
      'externalidentifier' => 'Text',
      'storeid'            => 'Text',
    );
  }
}
