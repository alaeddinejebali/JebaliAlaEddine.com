<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Installation on Linux<h1>
    </div>
    <div class="wiki-article-body invisible">
		<h2>Verify if node is installed</h2>
        	<ul>
            	<li>
                	Check Node version
                	<?php include "code/nodejs_code_02.txt"; ?>
                </li>
			</ul>
    	<h2>Method 1: Automatic installation</h2>
    	<ul>
    		<li>
    			Run:
				<?php include "code/nodejs_code_18.txt"; ?>
    		</li>
    	</ul>
    	<h2>Method 2: Manual installation</h2>
    	<ul>
			<li>
            	Go to <a href="https://nodejs.org/en/" target="_blank">https://nodejs.org/en/</a> and download the archive file (node-v4.2.2-linux-x64.tar.gz)
				<?php include "code/nodejs_code_01.txt"; ?>
			</li>
    	</ul>
		<h2>Run a Hello world example</h2>
		<ul>
			<li>
				<?php include "code/nodejs_code_03.txt"; ?>			
			</li>
			<li class="caution">
				If you encounter this problem "/usr/bin/env: node: No such file or directory",
				You solve it using this command:
				<?php include "code/nodejs_code_17.txt"; ?>
			</li>
		</ul>
		
		
		////////////////////////////////////////////
		How to read passed parameters
		We need to say hello to all users passed in parameters
		<?php include "code/nodejs_code_19.txt"; ?>
		Code:
		<?php include "code/nodejs_code_20.txt"; ?>
		<li class="caution">The first element will be 'node', the second element will be the name of the JavaScript file. The next elements will be any additional command line arguments.</li>
		////////////////////////////////////////////
		
		
    </div>
</section>
