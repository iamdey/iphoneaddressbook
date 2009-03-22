<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Abrecent filter form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAbrecentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'     => new sfWidgetFormFilterInput(),
      'value'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'     => new sfValidatorPass(array('required' => false)),
      'value'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abrecent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abrecent';
  }

  public function getFields()
  {
    return array(
      'date'     => 'Text',
      'name'     => 'Text',
      'property' => 'Text',
      'value'    => 'Text',
    );
  }
}
