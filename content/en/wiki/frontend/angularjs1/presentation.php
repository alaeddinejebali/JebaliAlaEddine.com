<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Presentation<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
			<li>
				It's better to load AngularJS library in the head because If you place it at the end of the  body, you may have {{variable}} displayed because calls to angular.module can only be compiled after the library has been loaded				
			</li>
			<li>
				Data binding
				<ul>
					<li>It synchronizes AngularJS expressions with AngularJS data.</li>
					<li>AngularJS binds data to HTML using "expressions" and "ng-bind".</li>
					<li>AngularJS expressions are written inside double braces: {{ expression }}</li>
				</ul>
			</li>
			<li>
				ng-app
				<ul>
					<li>
						 Initializes an AngularJS application (it tells AngularJS that the html element is the "owner" of the AngularJS application).
					</li>
					<li>
						 Defines the root element of an AngularJS application.
					</li>
					<li>
						Auto-bootstrap (automatically initialize) the application when a web page is loaded.
					</li>
					<li>
						When ng-app has a value (like ng-app="myModule") it connects code modules.
					</li>
				</ul>
			</li>
			<li>
				ng-init
				<ul>
					<li>
						Initializes application data.
					</li>
					<li>
						Normally, you will not use ng-init. You will use a controller or module instead.
					</li>
				</ul>
			</li>
			<li>
				ng-model
				<ul>
					<li>
						Binds the value of HTML controls (input, select, textarea) to application data.
					</li>
					<li>
						can also:
						<ul>
							<li>Provide type validation for application data (number, email, required).</li>
							<li>Provide status for application data (invalid, dirty, touched, error).</li>
							<li>Provide CSS classes for HTML elements.</li>
							<li>Bind HTML elements to HTML forms.</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				Controller
				<ul>
					<li>
						A controller can also have methods (variables as functions):
					</li>
				</ul>
			</li>
			<li>
				AngularJS AJAX (using $http)
				<ul>
					<li>
						$http is an XMLHttpRequest object for requesting external data.
					</li>
					<li>
						Example: suppose that the page http://www.website.com/page.php returns
						<?php include 'code/angular_01.txt'; ?>
						Html file:
						<?php include 'code/angular_02.txt'; ?>
					</li>
				</ul>
			</li>
			<li>
				<b>$index</b>, <b>$even</b> and <b>$odd</b> elements:
				<ul>
					<li class="noStyle">
						<?php include 'code/angular_02.txt'; ?>
					</li>
				</ul>
			</li>
			<li>
				DOM
				<ul>
					<li>
						The <b>ng-disabled</b> directive binds AngularJS application data to the disabled attribute of HTML elements.
						<ul>
							<li class"noStyle">
								<?php include 'code/angular_04.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						<b>ng-show</b> and <b>ng-hide</b> directives shows or hides an HTML element.
					</li>
					<li>
						You can use any expression that evaluates to true or false the value of ng-show.
						<?php include 'code/angular_05.txt' ?>
					</li>
					<li>
						<b>ng-click</b> directive defines an AngularJS click event. 
						<ul>
							<li>
								example:
								<?php include 'code/angular_06.txt'; ?>
								Another example:
								<?php include 'code/angular_07.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						AngularJS Input Validation
						<ul>
							<li>Error messages are displayed only when user or email is $dirty and $invalid.</li>
							<li>$dirty: The user has interacted with the field.</li>
							<li>$valid: The field content is valid.</li>
							<li>$invalid: The field content is invalid.</li>
							<li>$pristine: User has not interacted with the field yet.</li>
							<li>
								Example:
								<?php include 'code/angular_09.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				AngularJS Global API
				<ul>
					<li>
						it's a set of global JavaScript functions for performing common tasks like:
						<ul>
							<li>Comparing objects</li>
							<li>Iterating objects</li>
							<li>Converting data</li>
						</ul>
					</li>
					<li>
						Some common API functions:
						<ul>
							<li>angular.lowercase()</li>
							<li>angular.uppercase()</li>
							<li>angular.isString()</li>
							<li>angular.isNumber()</li>
							<li>angular.isNumber()</li>
							<li>
								Example
								<?php include 'code/angular_10.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				Including a portion of HTML in HTML
				<ul>
					<li>Not (yet) supported by HTML</li>
					<li>
						With AngularJS, you can include HTML content using the <b>ng-include</b> directive:
						<?php include 'code/angular_12.txt'; ?>
					</li>
				</ul>
			</li>
			<li>
				Example with Bootstrap
				<ul>
					<li>
						Layout
						<?php include 'code/angular_11.txt'; ?>
					</li>
					<li>
						Script
						<?php include 'code/angular_12.txt'; ?>
					</li>
				</ul>
			</li>
        </ul>
    </div>
</section>