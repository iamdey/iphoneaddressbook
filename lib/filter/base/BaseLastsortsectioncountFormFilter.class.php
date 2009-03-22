<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Lastsortsectioncount filter form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseLastsortsectioncountFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'languageindex' => new sfWidgetFormFilterInput(),
      'section'       => new sfWidgetFormFilterInput(),
      'storeid'       => new sfWidgetFormFilterInput(),
      'number'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'languageindex' => new sfValidatorPass(array('required' => false)),
      'section'       => new sfValidatorPass(array('required' => false)),
      'storeid'       => new sfValidatorPass(array('required' => false)),
      'number'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lastsortsectioncount_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lastsortsectioncount';
  }

  public function getFields()
  {
    return array(
      'languageindex' => 'Text',
      'section'       => 'Text',
      'storeid'       => 'Text',
      'number'        => 'Text',
      'id'            => 'Number',
    );
  }
}
