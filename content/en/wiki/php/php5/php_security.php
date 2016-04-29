<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Security<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
        	<li>
        		<h2>Concepts</h2>
        		<ul>
					<li>
						Tainted data: if data cannot be trusted: if it originates from a foreign source (user form input, the query string, or even an RSS feed).
					</li>
					<li>
						All input are tainted and cannot be trusted.
					</li>
					<li>
						server-side filtering is important for security, while client-side validation is important for usability.
					</li>
					<li>
						Before processing tainted data, it is important to filter it.
					</li>
					<li>
						Filter data: there are 2 approaches:
						<ol>
							<li>
								Blacklist approach
								<ul>
									<li>
										It's the less restrictive.
									</li>
									<li>
										It assumes the programmer knows everything that should not be allowed to pass through.
									</li>
									<li>
										The problem is that it's necessary to add new words to the list from time to time (blacklists must be modified continually, and expanded as new attack vectors become apparent.).
									</li>
								</ul>
							</li>
							<li>
								Whitelist approach
								<ul>
									<li>
										It's much more restrictive.
									</li>
									<li>
										It affords the programmer the ability to accept only the input he expects to receive.
									</li>
									<li>
										It places the control firmly in your hands and ensures that your application will not receive bad data.
									</li>
									<li>
										Since you control the data that you accept, attackers are unable to pass any data other than what your whitelist allows.
									</li>
									<li class="caution">
										Whitelists afford stronger protection against attacks than blacklists.
									</li>
									<li>
										Example:
										<?php include 'code/php_code_160.txt'; ?>
									</li>
								</ul>
							</li>
						</ol>
					</li>
					<li>
						Escape data
						<ul>
							<li>
								Whereas filtering input protects your application from bad or harmful data, escaping output protects the client and user from potentially damaging commands.
							</li>
							<li>
								Filtering ensures the validity of data coming into the application; escaping protects you and your users from potentially harmful attacks.
							</li>
							<li>
								Escape output intended for a Web browser
								<ul>
									<li>
										<b>htmlentities()</b> is most exhaustive and recommended than <b>htmlspecialchars()</b>.
									</li>
									<li>
										You can use an array specifically designed to store output. You can then use the latter's contents without having to worry about whether the output has been escaped. If you encounter a variable in your script that is being outputted and is not part of this array, then it should be regarded suspiciously.
										<?php include 'code/php_code_161.txt'; ?>
									</li>
								</ul>
							</li>
							<li>
								Escape output intended for a database server
								<ul>
									<li>
										The use of prepared statements allows you to specify placeholders in an SQL statement. This statement can then be used multiple times throughout an application, substituting new values for the placeholders, each time.
										<?php include 'code/php_code_162.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Register Globals
						<ul>
							<li>
								A common security problem with PHP is the <b>register_globals</b> setting in PHP's configuration file (php.ini).
							</li>
							<li>
								It tells whether or not to register the contents of the EGPCS (Environment, GET, POST, Cookie, Server) variables as global variables.
							</li>
							<li>
								For example, if register_globals is on, the url <a href="#">http://www.example.com/test.php?id=3</a> will declare <i>$id</i> as a global variable with no code required.
							</li>
							<li>
								When <i>register_globals=on</i>, the <i>register_globals</i> configuration directive automatically injects variables into scripts.
								<u>
									<li>
										$authorized can be set via request: <i>register_globals</i> will inject your scripts with all sorts of variables.
										<?php include 'code/php_code_163.txt'; ?>
									</li>
								</u>
							</li>
							<li>
								When <i>register_globals=off</i>, $authorized can't be set via request.
							</li>
							<li>
								To avoid this risk, you should:
								<ol>
									<li>Ensure that <i>register_globals</i> is <b>Off</b>. It's by default as of PHP 4.2.</li>
									<li>
										Always initialize your variables (so your code would work with <i>register_globals</i> on or off).
										<?php include 'code/php_code_164.txt'; ?>
									</li>
								</ol>
							</li>
							
							
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Website Security</h2>
				<ul>
					<li>
						Spoofed Forms submission
						<ul>
							<li>
								It makes it possible for an attacker to remove all client-side restrictions imposed upon the form in order to submit any and all manner of data to your application.
							</li>
							<li>
								There are various ways to spoof forms.
							</li>
							<li>
								The easiest of which is to simply copy a target form and execute it from a different location.
								<ul>
									<li>Attacker copy your form to a local file.</li>
									<li>Then he removes all javascript validations. If your form contains a list of options, he can add his owns.</li>
									<li>Then he replaces the action with an absolute URL to your script</li>
									<li class="caution">
										You may think to check the REFERER header within the $_SERVER superglobal array but since the Referer header is sent by the client, it is easy to manipulate.
									</li>
								</ul>
							</li>
							<li>
								The good solution is to filter your inputs: It ensures that all data must conform to a list of acceptable values, and even spoofed forms will not be able to get around your server-side filtering rules.
							</li>
						</ul>
					</li>
					<li>
						XSS: Cross-Site Scripting
						<ul>
							<li>
								It attack exploits the user's trust in the application and is usually an effort to steal user information, such as cookies and other personally identifiable data.
							</li>
							<li>
								Example:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_165.txt'; ?>
									</li>
									<li>
										Imagine that a malicious user submits a comment that contains the following content:
										<?php include 'code/php_code_166.txt'; ?>
									</li>
									<li>
										Now, everyone visiting this user's profile will be redirected to the given URL and their cookies will be appended to the query string.
									</li>
									<li>To prevent this you should first escape output.</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						CSRF: Cross-Site Request Forgeries
						<ul>
							<li>
								It attempts to cause a victim to unknowingly send arbitrary HTTP requests, usually to URLs requiring privileged access and using the existing session of the victim to determine access.
							</li>
							<li>
								The HTTP request then causes the victim to execute a particular action based on his or her level of privilege, such as making a purchase or modifying or removing information.
							</li>
							<li>
								Whereas an XSS attack exploits the user's trust in an application, CSRF exploits an application's trust in a user.
							</li>
							<li>
								While proper escaping of output will prevent your application from being used as the vehicle for a CSRF attack, it will not prevent your application from receiving forged requests (CSRF attack).
							</li>
							<li>
								How a CSRF attack occurs?
								<ul>
									<li>
										Suppose you have a Web site in which users register for an account and then browse a catalogue of books for purchase.
									</li>
									<li>
										Suppose that a malicious user signs up for an account and proceeds through the process of purchasing a book from the site.
									</li>
									<li>
										After selecting a book for purchase, he clicks the buy button, which redirects him through checkout.php.
									</li>
									<li>
										He sees that the action to checkout.php is a POST action but wonders whether passing parameters to checkout.php through the query string (GET) will work.
									</li>
									<li>
										When passing the same form values through the query string (i.e. checkout.php?isbn=0312863551&qty=1 ), she notices that he has, in fact, successfully purchased a book.
									</li>
									<li>
										With this knowledge, the malicious user can cause others to make purchases at your site without their knowledge:
										<ul>
											<li>
												You can use an image tag to embed an image in some arbitrary Web site other than your own website using:
												&lt;img src="http://example.org/checkout.php?isbn=0312863551&qty=1" /&gt;
											</li>
											<li>
												For most people, the request will fail because users must be logged in to make a purchase.
											</li>
											<li>
												But, for those users who do happen to be logged into the site, this attack exploits the <b>web site's trust in that user</b> and causes them to make a purchase.
											</li>
										</ul>
									</li>
									<li>
										This attack works because checkout.php uses the $_REQUEST superglobal array to access <i>isbn</i> and <i>qty</i>.
									</li>
								</ul>
							</li>
							<li>
								Solutions
								<ol>
									<li>
										Use $_POST instead of $_REQUEST or $_GET.
										<ul>
											<li>
												Using $_POST will mitigate the risk of this kind of attack, but it won't protect against all forged requests.
											</li>
										</ul>
									</li>
									<li>
										Use a token method
										<ul>
											<li>
												It can block these attempts and force users to use your forms.
											</li>
											<li>
												The principle is to use a randomly generated token that is stored in the user's session (when the user accesses the form page) and is also placed in a hidden field on the form.
											</li>
											<li>
												checkout.php should check that the token value from the posted form is equal to the value in the user's session.
												<?php include 'code/php_code_167.txt'; ?>
											</li>
										</ul>
									</li>
								</ol>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Database Security</h2>
				<ul>
					<li>
						SQL injection attack
						<ul>
							<li>
								Example:
								<?php include 'code/php_code_168.txt'; ?>
							</li>
							<li>
								If you fill the username filed form with this value:  username' OR 1 = 1 --
							</li>
							<li>
								With this username and a blank password, the SQL statement is now:
								<?php include 'code/php_code_169.txt'; ?>
							</li>
							<li>
								Since 1 = 1 is always true and - begins an SQL comment, the SQL query ignores everything after the - and successfully returns all user records.
							</li>
						</ul>
						
					</li>
					<li>
						How to avoid SQL injection attack?
						<ol>
							<li>
								Filter input.
							</li>
							<li>
								Escape output:
								<?php include 'code/php_code_170.txt'; ?>
							</li>
						</ol>
					</li>
				</ul>
			</li>
			<li>
				<h2>Session Security</h2>
				<ul>
					<li>
						Sessions attacks cannot be prevented by filtering input and escaping output.
					</li>
					<li>
						There are 2 popular forms of session attacks:
						<ol>
							<li>
								<b>Session fixation</b>
								<ul>
									<li>
										It occurs when an attacker sets the session identifier manually (because the attacker fixes the session).
										<?php include 'code/php_code_171.txt'; ?>
									</li>
									<li>
										It's sometimes referred to as "<b>session riding</b>" since the purpose of the attack is to gain a higher level of privilege.
									</li>
									<li>
										See <a href="#php_howSessionWorks">Sessions/How session works?</a>
									</li>
									<li>
										How to avoid it?
										<ul>
											<li>
												Every time a user's access level changes, it is necessary to regenerate the session identifier.
												<?php include 'code/php_code_172.txt'; ?>
											</li>
											<li>
												This will protect users from having their session fixed.
											</li>
											<li>
												This is not enough because it won't help much against another common session attack known as session hijacking.
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<b>Session hijacking</b>
								<ul>
									<li>
										It occurs when an attacker gains a user's valid session identifier (rather than providing one of his own).
									</li>
									<li>
										Suppose that a user logs in. If the session identifier is regenerated, they have a new session ID. What if an attacker discovers this new ID and attempts to use it to gain access through that user's session.
									</li>
									<li>
										How to avoid it?
										<ul>
											<li>
												You need to use other means to identify the user.
											</li>
											<li>
												One request header that is particularly helpful and does not change between requests is the <i>User-Agent</i> header.
												<?php include 'code/php_code_173.txt'; ?>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ol>
					</li>
				</ul>
			</li>
			<li>
				<h2>Filesystem Security</h2>
				<ul>
					<li>
						PHP has the ability to directly access the filesystem and even execute shell commands.
					</li>
					<li>
						Remote Code Injection
						<ul>
							<li>
								It occurs when an attacker is able to cause your application to execute PHP code of their choosing.
							</li>
							<li>
								Example: suppose that when calling <a href="">http://yourSite.com/?section=s</a>, it'll include <i>s/data/inc.php</i> file.
								<?php include 'code/php_code_175.txt'; ?>
							</li>
							<li>
								How to prevent it?
								<ul>
									<li>
										Filter all inputs.
										<?php include 'code/php_code_174.txt'; ?>
									</li>
									<li class="caution">
										In php.ini, you can set <i><b>allow_url_fopen</b>=off</i> (by default it's on) will prevent your applications from including or opening remote URLs as files.
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Command Injection
						<ul>
							<li>
								When possible, avoid the use of shell commands.
							</li>
							<li>
								PHP provides <b>escapeshellcmd()</b> and <b>escapeshellarg()</b> to properly escape shell output before this data is passed to the exec() or system() functions.
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_176.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Shared hosting</h2>
				<ul>
					<li>
						When using shared hosting, there are 3 importants directives in <i>php.ini</i>
						<ol>
							<li>
								<i>open_basedir</i>
								<ul>
									<li>
										Limit files that can be accessed by PHP to the specified directory-tree, including the file itself.
										<ul>
											<li>
												When PHP tries to open a file with, for example, with <i>fopen()</i> or <i>include</i>, it checks the the location of the file. If it exists within the directory tree specified by <i>open_basedir</i>, then it will succeed; otherwise, it will fail to open the file.
											</li>
											<li>
												You may set the <i>open_basedir</i> directive in <i>php.ini</i> or on a per <i>virtual-host</i> basis in <i>httpd.conf</i>. 
												<?php include 'code/php_code_178.txt'; ?>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<i>disable_functions</i>
								<ul>
									<li>
										Disable certain native PHP functions for security reasons.
									</li>
									<li>
										You may only set it in <i>php.ini</i>.
									</li>
								</ul>
							</li>
							<li>
								<i>disable_classes</i>
								<ul>
									<li>
										Disable certain native PHP classes for security reasons.
									</li>
									<li>
										You may only set it in <i>php.ini</i>.
									</li>
								</ul>
							</li>
							<?php include 'code/php_code_177.txt'; ?>
						</ol>
					</li>
					<li>
						
					</li>
				</ul>
			</li>
        </ul>
    </div>
</section>