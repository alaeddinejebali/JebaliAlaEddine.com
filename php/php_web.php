<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#webprogramming">Web progréamming</a>
		</h4>
	</div>
	<div id="webprogramming" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		<ul>
			<li>
				<h2>Form and URLs</h2>
				<ul>
					<li>
        				You can create arrays by using array notation:
        				<?php include 'code/php_code_77.txt'; ?>
        			</li>
					<li>urlencode($data)
						<ul>
							<li class="noStyle">
        						<?php include 'code/php_code_78.txt'; ?>
        					</li>
						</ul>
					</li>
					<li>Verify submit button is clicked
						<ul>
							<li class="noStyle">
        						<?php include 'code/php_code_79.txt'; ?>
        					</li>
						</ul>
					</li>
					<li>$_REQUEST: is used when you don't know how data is sent (using
						$GET or $POST)</li>
					<li>Managing File Uploads
						<ul>
							<li class="noStyle">
        						<?php include 'code/php_code_80.txt'; ?>
        					</li>
							<li>As MAX_FILE_SIZE is defined in client side, you can limit the
								amount of data uploaded by a POST operation by modifying a
								number of configuration directives, such as <b>post_max_size</b>,
								<b>max_input_time</b> and <b>upload_max_filesize</b> in php.ini.
							</li>
							<li>Once a file is uploaded to the server, PHP stores it in a
								temporary location and makes it available to the script that was
								called by the POST transaction.</li>
							<li>The temporary copy is automatically destroyed when the script
								ends.</li>
							<li>Inside your script, uploaded files will appear in the $_FILES
								superglobal array.</li>
							<li class="noStyle">
        						<?php include 'code/php_code_81.txt'; ?>
        					</li>
							<li>is_uploaded_file(file)
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
				<h2>Cookies</h2>
				<ul>
					<li>How cookies works:
						<ol>
							<li>You request www.ala.com</li>
							<li>Server hosting www.ala.com sets the cookie on the client (in
								its HTTP <b>response header</b>) and save it on your PC under
								the domain www.ala.com.
							</li>
							<li>When you refresh the page (or request another page under
								www.ala.com), server receives the cookie (browser sends it in
								its HTTP <b>request header</b>).
							</li>
							<li>Server send it back to you again.</li>
						</ol>
					</li>
					<li>PHP interpreter takes care of automatically separating the
						individual cookies from the header and places them in the $_COOKIE
						superglobal array.</li>
					<li>setcookie($cookieName, $optionalValue, $optionalExpires=0,
						$optionalPath, $optionalDomain, $optionalSecure=false,
						$optionalHttpOnly=false);
						<ul>
							<li>$optionalExpires: in seconds (1day = 24h * 60m * 60s =
								86400). If $optionalExpires == 0, cookie expires when session
								ends.</li>
							<li>$optionalPath: the browser will only send a cookie to pages
								within this path. If set to "/", the cookie will be available
								within the entire domain. If set to "/php/", the cookie will
								only be available within the php directory and all
								sub-directories of php.</li>
							<li>$optionalDomain: you cannot set this value to a domain other
								than the one of the page setting the cookie (the host
								www.ala.com can set a cookie for blog.ala.com , but not for
								www.microsoft.com).</li>
							<li>$optionalSecure: TRUE indicates that the cookie will only be
								set if a secure (HTTPS) connection exists.</li>
							<li>$optionalHttpOnly: If set to true the cookie will be
								accessible only through the HTTP protocol (the cookie will not
								be accessible by scripting languages).</li>
							<li class="noStyle">
								<?php include "code/php_code_84.txt"; ?>
							</li>
							<li>
									There is no way to delete a cookie—primarily because you really have no control over how cookies are stored and managed on the client side. So just reset it:
									<?php include 'code/php_code_85.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Sessions</h2>
				<ul>
					<li>HTTP is a stateless protocol; this means that the webserver
						does not know whether two requests comes from the same user.</li>
					<li>Sessions are maintained by passing a unique session identifier
						between requests.</li>
					<li>Sessions data are saved in two ways:
						<ol>
							<li>Using cookies (by default).</li>
							<li>Using the constant SID (when a user does not allow to store
								cookies on their machine or when <b>session.use_trans_sid=on</b>
								in php.ini).
							</li>
						</ol>
					</li>
					<li>When you save data into the Session, the session will store
						that data in a file on the server. The unique identifier is also
						stored as a cookie on the user's computer.</li>
					<li>When user visits a new page, the session id from the cookie is
						used to find the session data from the file storage. If the data
						is found it will load it into the Session global $_SESSION.</li>
					<li id="php_howSessionWorks">How PHP session works?
						<ul>
							<li>session_id (a random string of 32 hexadecimal numbers like <i>3c7foj34c3jj973hjkop2fc937e3443</i>)
								is sent to the user when his session is created.
							</li>
							<li>session_id is stored in a cookie called by default <b>PHPSESSID</b>
								(it's possible to change the cookie name in php.ini or by using
								the <i>session_name()</i> function).
							</li>
							<li>That cookie is sent by the browser to the server with each
								request.</li>
							<li>The PHP server uses that cookie, containing the session_id,
								to know which file corresponds to that user. So it identify the
								user.</li>
						</ul>
					</li>
					<li>The location of sessions data (of course in server) is
						determined in php.ini using <b>session.save_path</b> (default
						"/tmp" folder on Linux).
					</li>
					<li>The best way to make your application sessions data secure is
						to store them in a database, rather than in file storage. If you
						need to expand your application to multiple servers, by storing
						Session data in a central server that can be accessed by any of
						the other Servers.</li>
					<li>When a user does not allow to store cookies on their machine
						(or when <b>session.use_trans_sid=on</b> in php.ini), you can use
						the constant SID which is defined if the session started.
					</li>
					<li class="noStyle">
						<?php include 'code/php_code_83.txt'; ?>
					</li>
					<li>Sessions are started in 2 ways:
						<ol>
							<li>Automatically <i>whenever a request is received</i> when
								setting <b>session.auto_start=1</b> (default=0) in php.ini
							</li>
							<li>Using <b>session_start()</b> at the beginning of each script.
								<ul>
									<li class="caution">session_start() must be called before any
										output is sent to the browser, because it will try to set a
										cookie by sending a response header.</li>
								</ul>
							</li>
						</ol>
					</li>
					<li>"Session Fixation" attack: When authenticating a user, it
						doesn't assign a new session ID, making it possible to use an
						existent session ID.</li>
					<li class="caution">In the interest of security, it is a good idea
						to follow your call to session_start() with a call to
						session_regenerate_id() whenever you change a user's privileges to
						prevent "session fixation" attacks.</li>
				</ul>
			</li>
		</ul>
	</div>
	</div>								
</div>