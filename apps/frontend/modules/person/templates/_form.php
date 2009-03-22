<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('person/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?rowid='.$form->getObject()->getRowid().'&kind='.$form->getObject()->getKind().'&creationdate='.$form->getObject()->getCreationdate().'&modificationdate='.$form->getObject()->getModificationdate().'&storeid='.$form->getObject()->getStoreid().'&firstsortlanguageindex='.$form->getObject()->getFirstsortlanguageindex().'&lastsortlanguageindex='.$form->getObject()->getLastsortlanguageindex() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('person/index') ?>">Cancel</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'person/delete?rowid='.$form->getObject()->getRowid().'&kind='.$form->getObject()->getKind().'&creationdate='.$form->getObject()->getCreationdate().'&modificationdate='.$form->getObject()->getModificationdate().'&storeid='.$form->getObject()->getStoreid().'&firstsortlanguageindex='.$form->getObject()->getFirstsortlanguageindex().'&lastsortlanguageindex='.$form->getObject()->getLastsortlanguageindex(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['first']->renderLabel() ?></th>
        <td>
          <?php echo $form['first']->renderError() ?>
          <?php echo $form['first'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['last']->renderLabel() ?></th>
        <td>
          <?php echo $form['last']->renderError() ?>
          <?php echo $form['last'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['middle']->renderLabel() ?></th>
        <td>
          <?php echo $form['middle']->renderError() ?>
          <?php echo $form['middle'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['firstphonetic']->renderLabel() ?></th>
        <td>
          <?php echo $form['firstphonetic']->renderError() ?>
          <?php echo $form['firstphonetic'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['middlephonetic']->renderLabel() ?></th>
        <td>
          <?php echo $form['middlephonetic']->renderError() ?>
          <?php echo $form['middlephonetic'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['lastphonetic']->renderLabel() ?></th>
        <td>
          <?php echo $form['lastphonetic']->renderError() ?>
          <?php echo $form['lastphonetic'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['organization']->renderLabel() ?></th>
        <td>
          <?php echo $form['organization']->renderError() ?>
          <?php echo $form['organization'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['department']->renderLabel() ?></th>
        <td>
          <?php echo $form['department']->renderError() ?>
          <?php echo $form['department'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['note']->renderLabel() ?></th>
        <td>
          <?php echo $form['note']->renderError() ?>
          <?php echo $form['note'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['birthday']->renderLabel() ?></th>
        <td>
          <?php echo $form['birthday']->renderError() ?>
          <?php echo $form['birthday'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['jobtitle']->renderLabel() ?></th>
        <td>
          <?php echo $form['jobtitle']->renderError() ?>
          <?php echo $form['jobtitle'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nickname']->renderLabel() ?></th>
        <td>
          <?php echo $form['nickname']->renderError() ?>
          <?php echo $form['nickname'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['prefix']->renderLabel() ?></th>
        <td>
          <?php echo $form['prefix']->renderError() ?>
          <?php echo $form['prefix'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['suffix']->renderLabel() ?></th>
        <td>
          <?php echo $form['suffix']->renderError() ?>
          <?php echo $form['suffix'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['firstsort']->renderLabel() ?></th>
        <td>
          <?php echo $form['firstsort']->renderError() ?>
          <?php echo $form['firstsort'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['lastsort']->renderLabel() ?></th>
        <td>
          <?php echo $form['lastsort']->renderError() ?>
          <?php echo $form['lastsort'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['compositenamefallback']->renderLabel() ?></th>
        <td>
          <?php echo $form['compositenamefallback']->renderError() ?>
          <?php echo $form['compositenamefallback'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['externalidentifier']->renderLabel() ?></th>
        <td>
          <?php echo $form['externalidentifier']->renderError() ?>
          <?php echo $form['externalidentifier'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['displayname']->renderLabel() ?></th>
        <td>
          <?php echo $form['displayname']->renderError() ?>
          <?php echo $form['displayname'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['firstsortsection']->renderLabel() ?></th>
        <td>
          <?php echo $form['firstsortsection']->renderError() ?>
          <?php echo $form['firstsortsection'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['lastsortsection']->renderLabel() ?></th>
        <td>
          <?php echo $form['lastsortsection']->renderError() ?>
          <?php echo $form['lastsortsection'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
