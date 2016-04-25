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
								It attempts to cause a victim to un knowingly send arbitrary HTTP requests, usually to URLs requiring privileged access and using the existing session of the victim to determine access.
							</li>
							<li>
								The HTTP request then causes the victim to execute a particular action based on his or her level of privilege, such as making a purchase or modifying or removing information.
							</li>
							<li>
								Whereas an XSS attack exploits the user's trust in an application, a forged request exploits an application's trust in a user.
							</li>
							<li>
								While proper escaping of output will prevent your application from being used as the vehicle for a CSRF attack, it will not prevent your application from receiving forged requests.
							</li>
						</ul>
					</li>
				</ul>
			</li>
        </ul>
    </div>
</section>