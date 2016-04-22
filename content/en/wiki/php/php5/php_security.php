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
										You can use an array specifically designed to store output. You can then use the latter’s contents without having to worry about whether the output has been escaped. If you encounter a variable in your script that is being outputted and is not part of this array, then it should be regarded suspiciously.
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
								
							</li>
						</ul>
					</li>
				</ul>
			</li>
        </ul>
    </div>
</section>