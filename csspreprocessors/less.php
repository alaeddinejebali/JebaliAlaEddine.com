<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#less">LESS</a>
		</h4>
	</div>
	<div id="less" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Presentation</h2>
					<ul>
						<li>
							LESS is a dynamic style sheet language.
						</li>
						<li>
							It compiles to CSS
						</li>
						<li>
							Looks and feels like CSS (ie: all CSS is valid LESS).
						</li>
						<li>
							Comments in less may be in 2 ways:
							<?php include "code/03.txt"; ?>
						</li>
						<li class="caution">
							When you have a problem with styles when running the application. You can sse it by visiting your less files <a href="http://localhost/path/to/app.less" target="_blank"></a>.
						</li>
					</ul>
				</li>
				<li>
					<h2>Process LESS on the client</h2>
					<ul>
						<li>
							Start by downloading the less file from <a href="http://lesscss.org" target="_blank">http://lesscss.org</a>.
						</li>
						<li>
							When the <span="simpleCode">less.js</span> is processed ine the HTML file, it'll look at all <span="simpleCode">&lt;link rel="stylesheet/less"...&gt;</span> and process them.
						</li>
						<li>
							Note that the tag used for LESS file is different from CSS files in <span class="simpleCode">rel="stylesheet/<strong>less</strong>"</span>
						</li>
						<li class="caution">
							It's important to include "<i>less.js</i>" file after all your "<i>.less</i>" files otherwise the .less file will not processed if found later.
						</li>
						<li>
							Example:
							<?php include "code/01.txt"; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Process LESS on the server</h2>
					<ul>
						<li>
							Example with Node.js:
							<?php include "code/02.txt"; ?>
						</li>
						<li>
							The "<i>.less</i>" file will be processed on a CSS file????
						</li>
					</ul>
				</li>
				<li>
					<h2>Import a LESS file into another</h2>
					<ul>
						<li>
							The ".less" extension is optional
						</li>
						<li>
							Example:
							<?php include "code/04.txt"; ?>
							All the content of "myLessFile.less" will be included into "app.less".
						</li>
					</ul>
				</li>
				<li>
					<h2>Variables</h2>
					<ul>
						<li>
							Décalaration
							<ul>
								<li class="noStyle">
									<?php include "code/05.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							variables are constents
							<ul>
								<li class="noStyle">
									<?php include "code/06.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Accepted values
							<ul>
								<li class="noStyle">
									<?php include "code/07.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Operations
							<ul>
								<li class="noStyle">
									<?php include "code/08.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Color functions
							<ul>
								<li>
									Note that those functions will only work with an hexa color (like: #e236fa)! So with values like red, green, black...etc. those function don't work.
									<?php include "code/09.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							More functions
							<ul>
								<li class="noStyle">
									<?php include "code/10.txt"; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Mixins</h2>
					<ul>
						<li>
							They are repeatable sections.
						</li>
						<li>
							Feel like functions.
						</li>
						<li>
							Can accept parameters and defaults
							<ul>
								<li class="noStyle">
									<?php include "code/11.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Can accept overloads
							<ul>
								<li class="noStyle">
									<?php include "code/12.txt"; ?>
								</li>
								<li>
									And using guards
									<?php include "code/13.txt"; ?>
								</li>
								<li>
									And using type guards
									<?php include "code/14.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							
						</li>
					</ul>
				</li>
				<li>
					<h2>Nested rules</h2>
					<ul>
						<li>
							It solves the problem of Duplication of content in CSS.
						</li>
						<li>
							It allow you to structure rules in a logical way.
						</li>
						<li>
							Example1
							<ul>
								<li>
									Suppose you have this CSS code:
									<?php include "code/15.txt"; ?>
								</li>
								<li>
									With LESS you can make it more logical and maintenable:
									<?php include "code/16.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Example2: use combinator "&" to mix with parent
							<ul>
								<li>
									In LESS:
									<?php include "code/17.txt"; ?>
								</li>
								<li>
									CSS result:
									<?php include "code/18.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
					</ul>
				</li>
				<li>
					<h2>Other features</h2>
					<ul>
						<li>
							Namespaces
							<ul>
								<li class="noStyle">
									<?php include "code/20.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Scoping
							<ul>
								<li>
									Variables and Mixins are scoped
									<?php include "code/21.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							String interpolation
							<ul>
								<li>
									The idea is to have a string defined in a variable.
									<?php include "code/22.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Using JavaScript
							<ul>
								<li>
									Every code that is between back-quotes (``), it'll be executed by javascript engine.
									<?php include "code/23.txt"; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2></h2>
					<ul>
						<li>
							
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
					</ul>
				</li>
				<li>
					<h2></h2>
					<ul>
						<li>
							
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>
