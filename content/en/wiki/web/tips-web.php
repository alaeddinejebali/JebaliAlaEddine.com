<div class="contentpanel" id="wiki">
	<div class="row-fluid">
		<div class="span12">
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1>Title 1<h1>
				</div>
				<div class="wiki-article-body">
					bbbbbb
				</div>
				<div class="wiki-article-title">
					<h1>Title 2<h1>
				</div>
				<div class="wiki-article-body">
					bbbbbb
				</div>
				<div class="wiki-article-title">
					<h1>Title 3<h1>
				</div>
				<div class="wiki-article-body">
					bbbbbb
				</div>
			</section>
		</div>
	</div>
</div>



<br/><br/><br/>
The goal is to acceed <a href="#">http://localhost:8081/jebalialaeddine.com</a> using <a href="#">http://jebalialaeddine.dev:8081</a>


Go to "C:\xampp\apache\conf\extra\httpd-vhosts.conf"
Arround Line-19, add (or uncomment) this line
NameVirtualHost *:8081
At the bottom of the file add
#Make "http://localhost:8081/jebalialaeddine.com" accessible via "http://jebalialaeddine.dev:8081"
<VirtualHost *:8081>
    ServerAdmin alaeddine.jebali@whitecapetech.com
    DocumentRoot "C:/xampp/htdocs/jebalialaeddine.com"
    ServerName jebalialaeddine.dev
    ServerAlias jebalialaeddine.dev
    <Directory "C:/xampp/htdocs/jebalialaeddine.com">
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>


Open Notepad++ as Administrator
Open "C:\Windows\System32\drivers\etc\hosts"
Go to the bottom of the file and add:
127.0.0.1       localhost
127.0.0.1       jebalialaeddine.dev

Restart Apache
