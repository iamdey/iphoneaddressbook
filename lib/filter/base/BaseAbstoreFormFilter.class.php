<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Abstore filter form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAbstoreFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                    => new sfWidgetFormFilterInput(),
      'externalidentifier'      => new sfWidgetFormFilterInput(),
      'constraintspath'         => new sfWidgetFormFilterInput(),
      'externalmodificationtag' => new sfWidgetFormFilterInput(),
      'storeinternalidentifier' => new sfWidgetFormFilterInput(),
      'accountidentifier'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'                    => new sfValidatorPass(array('required' => false)),
      'externalidentifier'      => new sfValidatorPass(array('required' => false)),
      'constraintspath'         => new sfValidatorPass(array('required' => false)),
      'externalmodificationtag' => new sfValidatorPass(array('required' => false)),
      'storeinternalidentifier' => new sfValidatorPass(array('required' => false)),
      'accountidentifier'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abstore_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abstore';
  }

  public function getFields()
  {
    return array(
      'rowid'                   => 'Text',
      'name'                    => 'Text',
      'externalidentifier'      => 'Text',
      'type'                    => 'Text',
      'constraintspath'         => 'Text',
      'externalmodificationtag' => 'Text',
      'storeinternalidentifier' => 'Text',
      'accountidentifier'       => 'Text',
    );
  }
}
