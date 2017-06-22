<div class="contentpanel" id="wiki">
	<div class="row-fluid">
		<div class="span12">
			<h1 class="wiki-title page-header">
				<span id="btnShowHideAllArticles" data-article-visibility="off"
					class="iconfa-plus-sign"></span> Linux
			</h1>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Install
						JAVA</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>update the package index</li>
						<li class="noStyle">
                            <?php include "code/linux_code_01.txt"; ?>
                        </li>
						<li>check if Java is not already installed:</li>
						<li class="noStyle">
                            <?php include "code/linux_code_02.txt"; ?>
                        </li>
						<li>If it returns "The program java can be found in the following
							packages", Java hasn't been installed yet, so execute the
							following command:</li>
						<li class="noStyle">
                            <?php include "code/linux_code_03.txt"; ?>
                        </li>
						<li>Check again</li>
						<li class="noStyle">
                            <?php include "code/linux_code_04.txt"; ?>
                        </li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Install
						Apache and PHP</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>
                            <?php include "code/linux_code_15.txt"; ?>
                        </li>
						<li>
                            To change the dafault folder from "www/public_html" to "www", replace "/var/www/html" par
                            "/var/www/html"
                            <?php include "code/linux_code_16.txt"; ?>
                        </li>
						<li>
                            Install PHP
                            <?php include "code/linux_code_17.txt"; ?>
                        </li>
						<li>
                            Change www persmissions
                            <?php include "code/linux_code_18.txt"; ?>
                        </li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Enable
						.htaccess</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>
                            <?php include "code/linux_code_05.txt"; ?>
                        </li>
						<li>remove comment sign (#) if you find it before this line:
							"AccessFileName .htaccess"</li>
						<li>
                            Then find the line where there is "AllowOverride None" and replace it with "AllowOverride
                            All"
                            <?php include "code/linux_code_06.txt"; ?>
                        </li>
						<li>
                            Activate the Apache module mod_rewrite, then check it
                            <?php include "code/linux_code_07.txt"; ?>
                        </li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Create
						a virtual host</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>The goal is to access <a href="#" target="_blank">http://localhost/jebalialaeddine.com</a>
							by going to <a href="#" target="_blank">http://jebalialaeddine.dev</a>
							<ol>
								<li>
		                            Set Up Local Hosts File by adding this line to /etc/hosts
		                            <?php include "code/linux_code_11.txt"; ?>
		                        </li>
								<li>
                            		Create a new virtual host file
		                            <?php include "code/linux_code_21.txt"; ?>
                            	</li>
								<li>
		                            Enable the New Virtual Host Files
		                            <?php include "code/linux_code_09.txt"; ?>
		                        </li>
								<li>
		                            Restart Apache
		                            <?php include "code/linux_code_10.txt"; ?>
		                            You will most likely receive a message saying "ould not reliably determine the server's
		                            fully qualified domain" don't carry about it.
		                        </li>
							</ol>
						</li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Install
						Filezilla</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li><?php include "code/linux_code_12.txt"; ?></li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Install
						PHPStorm IDE</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>
                            Extract the PhpStorm distribution archive that you downloaded to "/Download"
                            <?php include "code/linux_code_13.txt"; ?>
                        </li>
						<li>
                            Add the "{installation home}/bin" to your PATH environmental variable so that you may start
                            PhpStorm from any directory
                            <?php include "code/linux_code_14.txt"; ?>
                        </li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Install
						Phpmyadmin</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>
				Install MySql and PhpMyadmin
				<?php include "code/linux_code_19.txt"; ?>
			</li>
						<li>For the server selection, choose apache2.</li>
						<li>Select yes when asked whether to use dbconfig-common to set up
							the database</li>
						<li>Don't leave the database password empty. Write a password</li>
						<li>
				Install MySql and PhpMyadmin
				<?php include "code/linux_code_19.txt"; ?>
			</li>
						<li>Go to <a href="http://127.0.0.1/phpmyadmin" target="_blank"></a>
						</li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">To
						be prepared</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>....</li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">To
						be prepared</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>....</li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Setup a VM</h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>Download Oracle VirtualBox</li>
						<li>
							After installation, select a VM -> configuration --> Make the video memory to max -> select Activate 3D acceleration
							<img src="images/linux_01.txt" alt="VM" />
						</li>
						<li>
							Activate copy paste and drag &and drop from Windows to the VM
							Go to Genearl -> Advanced -> select "bidirectional" -> in the 2 dropdown boxes.
						</li>
						<li>
							Launch your VM -> "perepherics" (when mouseover the bottom of the page) -> Insert image CD additional
							<img src="images/linux_02.txt" alt="VM" />
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>
