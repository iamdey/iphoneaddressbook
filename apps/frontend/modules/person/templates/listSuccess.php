<h1>Person List</h1>
<p>Nb contacts : <?php echo $nb_contacts ?></p>
<p><?php echo link_to('Save as csv', '@personlist?sf_format=csv')?>
<table>
	<thead>
		<tr>
			<th>Rowid</th>
			<th>First</th>
			<th>Last</th>
			<th>Nickname</th>
			<th>Displayname</th>
			<th>Phone Numbers</th>
			<th>Email</th>
			<th>HomePage</th>
			<th>Organization</th>
			<th>Birthday</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($abperson_list as $abperson): ?>
		<tr>
			<td><?php echo link_to($abperson->getRowid(), 'person/edit?rowid='.$abperson->getRowid()) ?></td>
			<td><?php echo $abperson->getFirst() ?></td>
			<td><?php echo $abperson->getLast() ?></td>
			<td><?php echo $abperson->getNickname() ?></td>
			<td><?php echo $abperson->getDisplayname() ?></td>
			<td>
				<?php $numbers = $abperson->getNumbers(); ?>
				<ul>
				<?php foreach($numbers as $number) :?>
					<li><?echo $number->getLabel() ?> : <?php echo $number->getValue() ?></li>
				<?php endforeach ?>
				</ul>
			</td>
			<td>
				<?php $emails = $abperson->getEmails(); ?>
				<ul>
				<?php foreach($emails as $email) :?>
					<li><?echo $email->getLabel() ?> : <?php echo $email->getValue() ?></li>
				<?php endforeach ?>
				</ul>
			</td>
			<td><?php $homepages = $abperson->getHomepages(); ?>
				<ul>
				<?php foreach($homepages as $homepage) :?>
					<li><?echo $homepage->getLabel() ?> : <?php echo $homepage->getValue() ?></li>
				<?php endforeach ?>
				</ul>
			</td>
			<td><?php echo $abperson->getOrganization()?></td>
			<td><?php echo $abperson->getBirthday()?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="<?php echo url_for('person/new') ?>">New</a>
