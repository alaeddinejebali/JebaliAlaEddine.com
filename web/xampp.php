<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#phpenvironment">PHP environment</a>
		</h4>
	</div>
	<div id="phpenvironment" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Installation</h2>
					<ul>
						<li class="noStyle">
							<h3>Windows</h3>
							<ul>
								<li>
									You can just use <a href="https://www.apachefriends.org" target="_blank">https://www.apachefriends.org</a>.
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>Ubuntu</h3>
							<ul>
								<li>
									Install Apache
									<ul>
										<li class="noStyle">
											<?php include "code/10.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Install MySQL
									<ul>
										<li class="noStyle">
											<?php include "code/11.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Install PHP
									<ul>
										<li class="noStyle">
											<?php include "code/12.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Install phpMyAdmin 
									<ul>
										<li class="noStyle">
											<?php include "code/13.txt"; ?>
										</li>
										<li>
											When you will be prompted to select a web server to configure, hit the "space bar" to select "Apache2".
										</li>
										<li>
											On the next screen, select YES" to configure a database for phpMyAdmin with dbconfig-common.
										</li>
										<li>
											You can visit it: <a href="http://localhost/phpmyadmin" target="_blank">http://localhost/phpmyadmin</a>.
										</li>
										<li class="caution">
											If you haven't been asked the 2 above questions during the installation, 
											you can use you username and password used when insttaling MySQL to connect to phpmyadmin.
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Create a virtual host on Xampp</h2>
					<ul>
						<li>
							The goal is to acceed <a href="#">http://localhost:8081/jebalialaeddine.com</a> using <a href="#">http://jebalialaeddine.dev:8081</a>
						</li>
						<li class="noStyle">
							<h3>Ubuntu</h3>
							<ul>
								<li>
									Step 1: Set up local host File
									<ul>
										<li class="noStyle">
											<?php include "code/06.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Step 2: Create a new virtual host file
									<ul>
										<li class="noStyle">
											<?php include "code/07.txt"; ?>
											Put the following content inside it:
											<?php include "code/08.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Step 3: Enable the new virtual host file
									<ul>
										<li class="noStyle">
											<?php include "code/09.txt"; ?>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>Windows</h3>
							<ul>	
								<li>
									Update httpd-vhosts.conf
									<ul>
										<li>
											Go to "C:\xampp\apache\conf\extra\httpd-vhosts.conf", arround Line-19, add (or uncomment) this line <?php include 'code/02.txt'; ?>
										</li>
										<li>
											At the bottom of the file add <?php include 'code/01.txt'; ?>
										</li>
									</ul>
								</li>
								<li>
									Update hosts file
									<ul>
										<li>
											Open Notepad++ as Administrator
										</li>
										<li>
											Open "C:\Windows\System32\drivers\etc\hosts"
										</li>
										<li>
											Go to the bottom of the file and add: <?php include 'code/03.txt'; ?>
										</li>
										<li>
											Restart Apache
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>How to change default Xampp port?</h2>
					<ul>
						<li>
							Linux
							<ul>
								<li class="noStyle">
									<?php include "code/17.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Windows
							<ul>
								<li>Open file "\xampp\apache\conf\httpd.conf"</li>
								<li>Search following line "Listen 80".</li>
								<li>Change the port 80 to another (like 8081).</li>
								<li>Restart Apache.</li>
								<li>Go to <a href="http://127.0.0.1:8081" target="_blank">http://127.0.0.1:8081</a>.</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
