<?php

/**
 * Abperson form base class.
 *
 * @package    iphoneAddressBook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAbpersonForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'rowid'                  => new sfWidgetFormInputHidden(),
      'first'                  => new sfWidgetFormInput(),
      'last'                   => new sfWidgetFormInput(),
      'middle'                 => new sfWidgetFormInput(),
      'firstphonetic'          => new sfWidgetFormInput(),
      'middlephonetic'         => new sfWidgetFormInput(),
      'lastphonetic'           => new sfWidgetFormInput(),
      'organization'           => new sfWidgetFormInput(),
      'department'             => new sfWidgetFormInput(),
      'note'                   => new sfWidgetFormInput(),
      'kind'                   => new sfWidgetFormInputHidden(),
      'birthday'               => new sfWidgetFormInput(),
      'jobtitle'               => new sfWidgetFormInput(),
      'nickname'               => new sfWidgetFormInput(),
      'prefix'                 => new sfWidgetFormInput(),
      'suffix'                 => new sfWidgetFormInput(),
      'firstsort'              => new sfWidgetFormInput(),
      'lastsort'               => new sfWidgetFormInput(),
      'creationdate'           => new sfWidgetFormInputHidden(),
      'modificationdate'       => new sfWidgetFormInputHidden(),
      'compositenamefallback'  => new sfWidgetFormInput(),
      'externalidentifier'     => new sfWidgetFormInput(),
      'storeid'                => new sfWidgetFormInputHidden(),
      'displayname'            => new sfWidgetFormInput(),
      'firstsortsection'       => new sfWidgetFormInput(),
      'lastsortsection'        => new sfWidgetFormInput(),
      'firstsortlanguageindex' => new sfWidgetFormInputHidden(),
      'lastsortlanguageindex'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'rowid'                  => new sfValidatorPropelChoice(array('model' => 'Abperson', 'column' => 'rowid', 'required' => false)),
      'first'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'middle'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'firstphonetic'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'middlephonetic'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lastphonetic'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'organization'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'department'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'note'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'kind'                   => new sfValidatorPropelChoice(array('model' => 'Abperson', 'column' => 'kind', 'required' => false)),
      'birthday'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'jobtitle'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nickname'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'prefix'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'suffix'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'firstsort'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lastsort'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'creationdate'           => new sfValidatorPropelChoice(array('model' => 'Abperson', 'column' => 'creationdate', 'required' => false)),
      'modificationdate'       => new sfValidatorPropelChoice(array('model' => 'Abperson', 'column' => 'modificationdate', 'required' => false)),
      'compositenamefallback'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'externalidentifier'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'storeid'                => new sfValidatorPropelChoice(array('model' => 'Abperson', 'column' => 'storeid', 'required' => false)),
      'displayname'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'firstsortsection'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lastsortsection'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'firstsortlanguageindex' => new sfValidatorPropelChoice(array('model' => 'Abperson', 'column' => 'firstsortlanguageindex', 'required' => false)),
      'lastsortlanguageindex'  => new sfValidatorPropelChoice(array('model' => 'Abperson', 'column' => 'lastsortlanguageindex', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('abperson[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abperson';
  }


}
