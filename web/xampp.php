<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#xampp">XAMPP</a>
		</h4>
	</div>
	<div id="xampp" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Create a virtual host on Xampp</h2>
					<ul>
						<li>
							The goal is to acceed <a href="#">http://localhost:8081/jebalialaeddine.com</a> using <a href="#">http://jebalialaeddine.dev:8081</a>
						</li>
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
			<ul>
				<li>
					<h2>How to change default Xampp port?</h2>
					<ul>
						<li>Open file "\xampp\apache\conf\httpd.conf"</li>
						<li>Search following line "Listen 80".</li>
						<li>Change the port 80 to another (like 8081).</li>
						<li>Restart Apache.</li>
						<li>Go to <a href="http://127.0.0.1:8081" target="_blank">http://127.0.0.1:8081</a>.</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>