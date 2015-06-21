<div class="contentpanel" id="wiki">
	<div class="row-fluid">
		<div class="span12">
			<h1 class="wiki-title page-header"><span id="btnShowHideAllArticles" data-article-visibility="off" class="iconfa-plus-sign"></span> Tips and trics Web</h1>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">How to create a virtual host on Xampp?<h1>
				</div>
				<div class="wiki-article-body invisible">
					<p>The goal is to acceed <a href="#">http://localhost:8081/jebalialaeddine.com</a> using <a href="#">http://jebalialaeddine.dev:8081</a></p>
					<h2>Update httpd-vhosts.conf</h2>
					<p>
						<ol>
							<li>
								Go to "C:\xampp\apache\conf\extra\httpd-vhosts.conf", arround Line-19, add (or uncomment) this line
								NameVirtualHost *:8081
							</li>
							<li>
								At the bottom of the file add
								<pre>
									<code class="xml">
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
									</code>
								</pre>
							</li>
							<li>
						</ol>
					</p>
					<h2>Update hosts file</h2>
					<p>
						<ol>
							<li>Open Notepad++ as Administrator</li>
							<li>Open "C:\Windows\System32\drivers\etc\hosts"</li>
							<li>
								Go to the bottom of the file and add:
								<pre>
									<code class="xml">		
										127.0.0.1       localhost
										127.0.0.1       jebalialaeddine.dev
									</code>
								</pre>
							</li>
							<li>Restart Apache</li>
						</ol>
					</p>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">How to change default Xampp port?<h1>
				</div>
				<div class="wiki-article-body invisible">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget orci eget erat convallis pellentesque. Nullam tortor mi, molestie quis auctor eu, sodales posuere nulla. Nam vestibulum fringilla urna. Nullam quam urna, sodales sed sem malesuada, iaculis lobortis neque. Phasellus et mi in velit fermentum varius et in sem. Morbi vel quam tempus felis bibendum posuere ut sit amet sem. Phasellus accumsan diam a cursus ultricies. Etiam vehicula lorem enim, vel imperdiet leo accumsan et. Integer iaculis risus lacus. Quisque vel ipsum non lorem varius efficitur vel at ante. Donec ultrices lorem odio. Donec vel tellus ac purus tempus feugiat non ac nulla. Mauris varius dolor eget mattis sollicitudin
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">How to install Chrome on Ubuntu?<h1>
				</div>
				<div class="wiki-article-body invisible">
					<h2>Check if you have 32 or 64 machine</h2>
					<ul>
						<li>
							$> arch
							<ul>
								<li>If you get "i386" => 32 bits</li>
								<li>If you get "amd64" => 64 bits</li>
							</ul>
						</li>
						<li>Download Chrome</li>
						<li>$> cd ~/Downloads</li>
						<li>$> wget https://dl-ssl.google.com/linux/direct/google-chrome-stable_current_i386.deb (for 32 bits)</li>
						<li>$> wget https://dl-ssl.google.com/linux/direct/google-chrome-stable_current_amd64.deb (for 64bits)</li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">How to install PHP and Apache on Ubuntu?<h1>
				</div>
				<div class="wiki-article-body invisible">
					<h2>Install Apache2</h2>
					<ul>
						<li>$> sudo apt-get install apache2</li>
						<li>To check if Apache is installed go to http://127.0.1.1/ (you should get the message "It works!")</li>
					</ul>
					<h2>Restart Apache</h2>
					<ul>
						<li>$> sudo /etc/init.d/apache2 restart</li>
					</ul>
					<h2>Install PHP5</h2>
					<ul>
						<li>$> sudo apt-get install php5 libapache2-mod-php5</li>
						<li>$> sudo chmod -R 777 /var/www</li>
						<li>$> sudo chown -R **yourusername** /var/www</li>
					</ul>
				</div>
			</section>

	
	

	



			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Title<h1>
				</div>
				<div class="wiki-article-body invisible">
					<h2>Sub title</h2>
					<ul>
						<li>
							
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>




