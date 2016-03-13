<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Web programming<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
        		<h2>Form and URLs</h2>
        		<ul>
        			<li>
        				You can create arrays by using array notation:
        				<?php include 'code/php_code_77.txt'; ?>
        			</li>
        			<li>
        				urlencode($data)
        				<ul>
        					<li class="noStyle">
        						<?php include 'code/php_code_78.txt'; ?>
        					</li>
        				</ul>
        			</li>
        			<li>
        				Verify submit button is clicked
        				<ul>
        					<li class="noStyle">
        						<?php include 'code/php_code_79.txt'; ?>
        					</li>
        				</ul>
        			</li>
        			<li>
        				$_REQUEST: is used when you don't know how data is sent (using $GET or $POST)
        			</li>
        			<li>
        				Managing File Uploads
        				<ul>
        					<li class="noStyle">
        						<?php include 'code/php_code_80.txt'; ?>
        					</li>
        					<li>
        						As MAX_FILE_SIZE is defined in client side, you can limit the amount of data uploaded by a POST operation by modifying a number of configuration directives, such as <b>post_max_size</b>, <b>max_input_time</b> and <b>upload_max_filesize</b> in php.ini.
        					</li>
        					<li>
        						Once a file is uploaded to the server, PHP stores it in a temporary location and makes it available to the script that was called by the POST transaction.
        					</li>
        					<li>
        						The temporary copy is automatically destroyed when the script ends.
        					</li>
        					<li>
        						Inside your script, uploaded files will appear in the $_FILES superglobal array.
        					</li>
        					<li class="noStyle">
        						<?php include 'code/php_code_81.txt'; ?>
        					</li>
        					<li>
        						is_uploaded_file(file)
        						<ul>
        							<li>
        								Checks whether the specified file is uploaded via HTTP POST.
        								<?php include 'code/php_code_82.txt'; ?>
        							</li>
        						</ul>
        					</li>
        				</ul>
        			</li>
        		</ul>
        	</li>
        	<li>
        		<h2>Sessions</h2>
        		<ul>
        			<li>
        				HTTP is a stateless protocol; this means that the webserver does not know whether two requests comes from the same user.
        			</li>
        		</ul>
        	</li>
        </ul>
    </div>
</section>