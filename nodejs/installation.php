<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#installation">Installation on Linux</a>
		</h4>
	</div>
	<div id="installation" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		<ul>
			<li>
				<h2>Verify if NodeJS is installed</h2>
				<ul>
					<li>
	                	Check Node version
	                	<?php include "code/nodejs_code_02.txt"; ?>
	                </li>
				</ul>
			</li>
			<li>
				<h2>Method 1: Automatic installation</h2>
				<ul>
					<li class="noStyle">
		        		<?php include "code/nodejs_code_18.txt"; ?>
		        	</li>
				</ul>
			</li>
			<li>
				<h2>Method 2: Manual installation</h2>
				<ul>
					<li>Go to <a href="https://nodejs.org/en/" target="_blank">https://nodejs.org/en/</a>
						and download the archive file (node-v4.2.2-linux-x64.tar.gz)
					</li>
					<li>Then:
						<ul>
							<li class="noStyle">
		                		<?php include "code/nodejs_code_01.txt"; ?>
		                	</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Upgrade current node version</h2>
				<ul>
					<li>
						Updgrade to a specific version
						<?php include "code/nodejs_code_25.txt"; ?>
					</li>

					<li>
						Updgrade to latest version
						<?php include "code/nodejs_code_26.txt"; ?>
					</li>					
				</ul>
			</li>
			<li>
				<h2>Run a Hello world example</h2>
				<ul>
					<li class="noStyle">
						<?php include "code/nodejs_code_03.txt"; ?>			
					</li>
					<li class="caution">
						If you encounter this problem "/usr/bin/env: node: No such file or directory",
						You solve it using this command:
						<?php include "code/nodejs_code_17.txt"; ?>
					</li>
				</ul>
			</li>
		</ul>
		</div>
	</div>								
</div>
