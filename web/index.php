<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#web">Web</a>
		</h4>
	</div>
	<div id="web" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		
		
		
		
		


			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">
						How to install Chrome on Ubuntu?
						<h1>
				
				</div>
				<div class="wiki-article-body invisible">
					<h2>Check if you have 32 or 64 machine</h2>
					<ul>
						<li>$> arch
							<ul>
								<li>If you get "i386" => 32 bits</li>
								<li>If you get "amd64" => 64 bits</li>
							</ul>
						</li>
						<li>Download Chrome</li>
						<li>$> cd ~/Downloads</li>
						<li>$> wget
							https://dl-ssl.google.com/linux/direct/google-chrome-stable_current_i386.deb
							(for 32 bits)</li>
						<li>$> wget
							https://dl-ssl.google.com/linux/direct/google-chrome-stable_current_amd64.deb
							(for 64bits)</li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">
						How to install PHP and Apache on Ubuntu?
						<h1>
				
				</div>
				<div class="wiki-article-body invisible">
					<h2>Install Apache2</h2>
					<ul>
						<li>$> sudo apt-get install apache2</li>
						<li>To check if Apache is installed go to http://127.0.1.1/ (you
							should get the message "It works!")</li>
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
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">
						How to install Python on Ubuntu?
						<h1>
				
				</div>
				<div class="wiki-article-body invisible">
					<h2>Install some dependencies</h2>
					<ul>
						<li>$> sudo apt-get install build-essential checkinstall</li>
						<li>$> sudo apt-get install libreadline-gplv2-dev libncursesw5-dev
							libssl-dev libsqlite3-dev tk-dev libgdbm-dev libc6-dev libbz2-dev</li>
						<li>$></li>
					</ul>
					<h2>Download Python</h2>
					<ul>
						<li>$> cd ~/Downloads/</li>
						<li>$> wget http://python.org/ftp/python/2.7.5/Python-2.7.5.tgz</li>
					</ul>
					<h2>Extract and go to the dirctory</h2>
					<ul>
						<li>$> tar -xvf Python-2.7.5.tgz</li>
						<li>$> cd Python-2.7.5</li>
					</ul>
					<h2>Install</h2>
					<ul>
						<li>$> ./configure</li>
						<li>$> make</li>
						<li>$> sudo checkinstall</li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">
						Develop Firefox extensions
						<h1>
				
				</div>
				<div class="wiki-article-body invisible">
					<h2>Install</h2>
					<ul>
						<li>Install Python as described above</li>
						<li>Download the SDK from <a
							herf="https://ftp.mozilla.org/pub/mozilla.org/labs/jetpack/jetpack-sdk-latest.tar.gz"
							target="_blank">https://ftp.mozilla.org/pub/mozilla.org/labs/jetpack/jetpack-sdk-latest.tar.gz</a></li>
						<li>$> tar -xf addon-sdk.tar.gz</li>
						<li>$> cd addon-sdk</li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">
						Base URL in HTML
						<h1>
				
				</div>
				<div class="wiki-article-body invisible">
					<h2>Sub title</h2>
					<ul>
						<li style="">
							<?php include "code/04.txt"; ?>
						</li>
					</ul>
				</div>
			</section>






		
		
			
		</div>
	</div>
</div>





