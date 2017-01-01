<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Installing and configuring Symfony
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>
					Install <a href="https://getcomposer.org" target="_blank">Composer</a>
				</h2>
				<ul>
					<li>Composer is a tool for dependency management in PHP.</li>
					<li>You declare the libraries your project depends on and composer
						will manage install them for you.</li>
					<li>If new those dependencies have been update, you can use
						composer to update them in your project too</li>
					<li>Go to <a href="https://getcomposer.org/doc/00-intro.md"
						target="_blank">https://getcomposer.org/doc/00-intro.md</a> for
						more information
					</li>
					<li>Installation
						<ul>
							<li class="noStyle">
								<?php include "code/symfony_code_73.txt"; ?>
							</li>
						</ul>
					</li>
					<li>Upgrade to latest composer version
						<ul>
							<li class="noStyle">
								<?php include "code/symfony_code_72.txt"; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Two ways to install Symfony</h2>
				<ol>
					<li>Using Composer
						<ul>
							<li class="noStyle">
								<?php include "code/symfony_code_74.txt"; ?>
							</li>
						</ul>
					</li>
					<li>Using Symfony installer
						<ul>
							<li>Install Symfony installer: a small PHP application that must
								be installed once in your computer and then it can create any
								number of Symfony applications.
								<ul>
									<li>$> cd c:\xampp\htdocs\mySymfonyProjects</li>
									<li>$> php -r "readfile('http://symfony.com/installer');" >
										symfony</li>
									<li>$> php symfony</li>
								</ul>
							</li>
							<li>Download Symfony and create a new project
								<ul>
									<li>$> php symfony myNewProjectName</li>
								</ul>
							</li>
						</ul>
					</li>
				</ol>
			</li>
			<li>
				<h2>Setting up Permissions</h2>
				<ul>
					<li>One common issue when installing Symfony is that the <i>app/cache</i>
						and <i>app/logs</i> directories must be writable both by the web
						server and the command line user.
						<ul>
							<li class="noStyle">
								<?php include "code/symfony_code_75.txt"; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Configure database</h2>
				<ul>
					<li>Go to app/config/parameters.yml and configure the database</li>
				</ul>
			</li>
			<li>
				<h2>Configure Timezone</h2>
				<ul>
					<li class="noStyle">
						<?php include "code/symfony_code_76.txt"; ?>
					</li>
				</ul>
			</li>
			<li>
				<h2>Install required components</h2>
				<ul>
					<li class="noStyle">
                    	<?php include "code/symfony_code_71.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Check environnement</h2>
				<ul>
					<li>Check if configuration is Ok: <a
						href="http://127.0.0.1/myProjectName/web/config.php"
						target="_blank">http://127.0.0.1/myProjectName/web/config.php</a></li>
					<li>visit the dev environment <a
						href="http://127.0.0.1/myProjectName/web/app_dev.php"
						target="_blank">http://127.0.0.1/myProjectName/web/app_dev.php</a></li>
					<li class="caution">To get nice and short urls you should point the
						document root of your webserver or virtualhost to the Symfony/web/
						directory. Through this is not required for development, it's
						recommended at the time your application goes into production.</li>
				</ul>
			</li>
			<li>
				<h2>Using Source Control</h2>
				<ul>
					<li>When using Composer to manage application's dependencies, it's
						recommended to ignore the entire vendor/ directory before
						committing its code to the repository.</li>
					<li>In order to make it work, install all the dependencies required
						by the application:
						<ul>
							<li class="noStyle">
                        		<?php include "code/symfony_code_71.txt"; ?>
                        	</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>