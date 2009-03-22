<p>Go to  your <?php echo link_to('contact list', '@personlist?sf_format=html')?></p>
<h1>Iphone csv export V1.0</h1>

<p>Welcome to iphone Address book csv export application.</p>
<p>This application is made for export data from addressBook in csv to import contacts on yahoo address book, It can be modified to do what you want to do. Have fun</p>

<h2>Requires</h2>
<ul>
	<li>A jailbroken iPhone with ssh (firmware 2.2.1)</li>
	<li>A webserver to install this application with php5 and sqlite module</li> 
</ul>

<h2>Installation</h2>
<ol>
	<li>Install this application on a web server with PHP 5 (this has been test on LAMP)</li>
	<li>Get your iphone addressBook database (you can get it through ssh : /var/mobile/Library/AddressBook/AddressBook.sqlitedb on your jailbroken iPhone)</li>
	<li>Copy your addressBook database to /data/AddressBook.sqlitedb in this application</li>
</ol>

<h2>Usage</h2>
<ol>
	<li>Display this application on a web browser (generaly <a href="http://localhost/iphoneAddressBook/web/">http://localhost/iphoneAddressBook/web/</a>)</li>
	<li>List your contacts and check if your datas are correctly displayed</li>
	<li>Click Save as csv, that's all folk</li>
</ol>

<h2>Troubleshooting</h2>
<p>First make sure you have the right to launch the application then in your web folder try <code>sudo chown -R www-data\: iphoneAddressBook</code> on a linux environnement</p>
<p>The second tips is to clear cache of the application by dooing th following in the application folder <code>symfony cc</code></p>
<p>Then you can try to cry or get mad but I'm not sure that works</p>

<h2>Advanced</h2>
<p>There's a bit more configuration you want to do</p>

<h3>Labels of phone numbers or emails does not match correctly to your data</h3>
<p>Edit the file /apps/frontend/config/app.yml, take care <strong>to not add</strong> tabulations at start of each lines then modify or add the list of multivaluelabels section in the order you want</p>

<h3>The exported csv file does not match to your needs</h3>
<p>Edit the file /apps/frontend/modules/person/templates/listSuccess.csv.php and modify as you want (You need few skills in php language)</p>

<h2>About</h2>
<p>My name is David Epely aka esion. You can contact me by email : esion99[at]gmail[dot]com and check my blog <a href="http://esion99.info">http://esion99.info</a></p>
<p>This is an open source application released on MIT License. Feel free.</p>