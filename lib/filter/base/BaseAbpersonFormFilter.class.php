<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Abperson filter form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAbpersonFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'first'                  => new sfWidgetFormFilterInput(),
      'last'                   => new sfWidgetFormFilterInput(),
      'middle'                 => new sfWidgetFormFilterInput(),
      'firstphonetic'          => new sfWidgetFormFilterInput(),
      'middlephonetic'         => new sfWidgetFormFilterInput(),
      'lastphonetic'           => new sfWidgetFormFilterInput(),
      'organization'           => new sfWidgetFormFilterInput(),
      'department'             => new sfWidgetFormFilterInput(),
      'note'                   => new sfWidgetFormFilterInput(),
      'birthday'               => new sfWidgetFormFilterInput(),
      'jobtitle'               => new sfWidgetFormFilterInput(),
      'nickname'               => new sfWidgetFormFilterInput(),
      'prefix'                 => new sfWidgetFormFilterInput(),
      'suffix'                 => new sfWidgetFormFilterInput(),
      'firstsort'              => new sfWidgetFormFilterInput(),
      'lastsort'               => new sfWidgetFormFilterInput(),
      'compositenamefallback'  => new sfWidgetFormFilterInput(),
      'externalidentifier'     => new sfWidgetFormFilterInput(),
      'displayname'            => new sfWidgetFormFilterInput(),
      'firstsortsection'       => new sfWidgetFormFilterInput(),
      'lastsortsection'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'first'                  => new sfValidatorPass(array('required' => false)),
      'last'                   => new sfValidatorPass(array('required' => false)),
      'middle'                 => new sfValidatorPass(array('required' => false)),
      'firstphonetic'          => new sfValidatorPass(array('required' => false)),
      'middlephonetic'         => new sfValidatorPass(array('required' => false)),
      'lastphonetic'           => new sfValidatorPass(array('required' => false)),
      'organization'           => new sfValidatorPass(array('required' => false)),
      'department'             => new sfValidatorPass(array('required' => false)),
      'note'                   => new sfValidatorPass(array('required' => false)),
      'birthday'               => new sfValidatorPass(array('required' => false)),
      'jobtitle'               => new sfValidatorPass(array('required' => false)),
      'nickname'               => new sfValidatorPass(array('required' => false)),
      'prefix'                 => new sfValidatorPass(array('required' => false)),
      'suffix'                 => new sfValidatorPass(array('required' => false)),
      'firstsort'              => new sfValidatorPass(array('required' => false)),
      'lastsort'               => new sfValidatorPass(array('required' => false)),
      'compositenamefallback'  => new sfValidatorPass(array('required' => false)),
      'externalidentifier'     => new sfValidatorPass(array('required' => false)),
      'displayname'            => new sfValidatorPass(array('required' => false)),
      'firstsortsection'       => new sfValidatorPass(array('required' => false)),
      'lastsortsection'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abperson_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abperson';
  }

  public function getFields()
  {
    return array(
      'rowid'                  => 'Text',
      'first'                  => 'Text',
      'last'                   => 'Text',
      'middle'                 => 'Text',
      'firstphonetic'          => 'Text',
      'middlephonetic'         => 'Text',
      'lastphonetic'           => 'Text',
      'organization'           => 'Text',
      'department'             => 'Text',
      'note'                   => 'Text',
      'kind'                   => 'Text',
      'birthday'               => 'Text',
      'jobtitle'               => 'Text',
      'nickname'               => 'Text',
      'prefix'                 => 'Text',
      'suffix'                 => 'Text',
      'firstsort'              => 'Text',
      'lastsort'               => 'Text',
      'creationdate'           => 'Text',
      'modificationdate'       => 'Text',
      'compositenamefallback'  => 'Text',
      'externalidentifier'     => 'Text',
      'storeid'                => 'Text',
      'displayname'            => 'Text',
      'firstsortsection'       => 'Text',
      'lastsortsection'        => 'Text',
      'firstsortlanguageindex' => 'Text',
      'lastsortlanguageindex'  => 'Text',
    );
  }
}
