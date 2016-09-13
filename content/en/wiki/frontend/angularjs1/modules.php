<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Modules
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>AngularJS module:</h2>
				<ul>
					<li>It Defines an application.</li>
					<li>It's a container for the different parts of an application
						(example: application controllers).</li>
						<li>
							So the advantage using module is that you can encapsulate your data inside a module (they will not be visible outside the module).
						</li>
					<li>Controllers always belong to a module.</li>
					<li>The [] parameter in the module definition can be used to define
						dependent modules.</li>
					<li>Using the [] parameter, you are creating a new module.</li>
					<li>Without using the [] parameter you are retrieving an existing
						module.</li>
					<li>Namespace and variables scope
						<ul>
							<li>Global functions should be avoided in JavaScript.</li>
							<li>They can easily be overwritten or destroyed by other scripts.
							</li>
							<li>AngularJS modules reduces this problem, by keeping all
								functions local to the module.</li>
						</ul>
					</li>
					<li>Example:
						<ul>
							<li class="noStyle">
								<?php include 'code/angular_08.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Working with module</h2>
				<ul>
					<li>It is common in AngularJS applications to put the module and
						the controllers in JavaScript files.</li>
					<li>In the next example, "myApp.js" contains an application module
						definition, while "myCtrl.js" contains the controller.
					</li>
						<li>
							Steps:
							<ol>
								<li>
									Create a module with name.
								</li>
								<li>
									Create your controllers.
								</li>
								<li>
									Register your controllers in the module.
								</li>
								<li>
									Use your module by using <strong><i>ng-app</i></strong> in the view.
								</li>
							</ol>
						</li>
						<li>
						Example:
						<ul>
								<li>
									myApp.js
									<?php include 'code/angular_15.txt'; ?>
								</li>
								<li>
									myCtrl.js
									<?php include 'code/angular_16.txt'; ?>
								</li>
								<li>
									index.html
									<?php include 'code/angular_14.txt'; ?>
								</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Create module</h2>
				<ul>
					<li>
						index.html
						<?php include 'code/angular_28.txt'; ?>
					</li>
					<li>
						module.js
						<?php include 'code/angular_29.txt'; ?>
					</li>
					<li>
						script.js
						<?php include 'code/angular_30.txt'; ?>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>