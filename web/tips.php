<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#tipsandtrics">Tips and trics</a>
		</h4>
	</div>
	<div id="tipsandtrics" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		<ul>
			<li class="accordion">
				<h2>How to install Chrome on Ubuntu?</h2>
				<ul>
					<li>
						Check if you have 32 or 64 machine
						<ul>
							<li>$> arch</li>
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
			</li>
			<li class="accordion">
				<h2>How to install PHP and Apache on Ubuntu?</h2>
				<ul>
					<li>
						Install Apache2
						<ul>
							<li>$> sudo apt-get install apache2</li>
							<li>To check if Apache is installed go to http://127.0.1.1/ (you
								should get the message "It works!")</li>
						</ul>
					</li>
					<li>
						Restart Apache
						<ul>
							<li>$> sudo /etc/init.d/apache2 restart</li>
						</ul>
					</li>
					<li>
						Install PHP5
						<ul>
							<li>$> sudo apt-get install php5 libapache2-mod-php5</li>
							<li>$> sudo chmod -R 777 /var/www</li>
							<li>$> sudo chown -R **yourusername** /var/www</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="accordion">
				<h2>How to install Python on Ubuntu?</h2>
				<ul>
					<li>
						Install some dependencies
						<ul>
							<li>$> sudo apt-get install build-essential checkinstall</li>
							<li>$> sudo apt-get install libreadline-gplv2-dev libncursesw5-dev
								libssl-dev libsqlite3-dev tk-dev libgdbm-dev libc6-dev libbz2-dev</li>
							<li>$></li>
						</ul>
					</li>
					<li>
						Download Python
						<ul>
							<li>$> cd ~/Downloads/</li>
							<li>$> wget http://python.org/ftp/python/2.7.5/Python-2.7.5.tgz</li>
						</ul>
					</li>
					<li>
						Extract and go to the dirctory
						<ul>
							<li>$> tar -xvf Python-2.7.5.tgz</li>
							<li>$> cd Python-2.7.5</li>
						</ul>
					</li>
					<li>
						Install
						<ul>
							<li>$> ./configure</li>
							<li>$> make</li>
							<li>$> sudo checkinstall</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="accordion">
				<h2></h2>
				<ul>
					<li>
						Base URL in HTML
						<ul>
							<li class="noStyle">
								<?php include "code/04.txt"; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>		
		</ul>
		</div>
	</div>								
</div>