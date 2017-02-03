<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#presentation">Presentation</a>
		</h4>
	</div>
	<div id="presentation" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Introduction</h2>
					<ul>
						<li>AngularJS expressions are written inside double braces: {{
							expression }}</li>
						<li>It's better to load AngularJS library in the head because If
							you place it at the end of the body, you may have {{variable}}
							displayed because calls to angular.module can only be compiled
							after the library has been loaded.</li>
					</ul>
				</li>
				<li>
					<h2>Basics</h2>
					<ul>
						<li>Data binding
							<ul>
								<li>It synchronizes AngularJS expressions with AngularJS data.</li>
								<li>AngularJS binds data to HTML using "expressions" and
									"ng-bind".</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Directives</h2>
					<ul>
						<li>ng-app
							<ul>
								<li>Initializes an AngularJS application (it tells AngularJS that
									the html element is the "owner" of the AngularJS application).</li>
								<li>Defines the root element of an AngularJS application.</li>
								<li>Auto-bootstrap (automatically initialize) the application
									when a web page is loaded.</li>
								<li>When ng-app has a value (like ng-app="myModule") it connects
									code modules.</li>
							</ul>
						</li>
						<li>ng-init
							<ul>
								<li>Initializes application data.</li>
								<li>Normally, you will not use ng-init. You will use a controller
									or module instead.</li>
							</ul>
						</li>
						<li>ng-model
							<ul>
								<li>Binds the value of HTML controls (input, select, textarea) to
									application data.</li>
								<li>can also:
									<ul>
										<li>Provide type validation for application data (number,
											email, required).</li>
										<li>Provide status for application data (invalid, dirty,
											touched, error).</li>
										<li>Provide CSS classes for HTML elements.</li>
										<li>Bind HTML elements to HTML forms.</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Controller</h2>
					<ul>
						<li>A controller is a JavaScript function that Angular invokes..</li>
						<li>It takes a <strong><i>$scope</i></strong> parameter.
						</li>
						<li class="caution">Unlike in jQuery, Angular controller never
							interact with HTML. It interacts with model.<br/>Model also never interact with HTML.<br/>This is kown as <strong><i>separation of concerns</i></strong></li>
						<li>Angular binding van be used to communicate HTML and model.</li>
						<li>It attaches <strong><i>model</i></strong> to $scope.
							<ul>
								<li>When Angular found {{myVariable}} it'll look to <i>myVariable</i> in the scope where this controller is defined.
									<?php include "code/angular_26.txt"; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>AngularJS Global API</h2>
					<ul>
						<li>it's a set of global JavaScript functions for performing common
							tasks like:
							<ul>
								<li>Comparing objects</li>
								<li>Iterating objects</li>
								<li>Converting data</li>
							</ul>
						</li>
						<li>Some common API functions:
							<ul>
								<li>angular.lowercase()</li>
								<li>angular.uppercase()</li>
								<li>angular.isString()</li>
								<li>angular.isNumber()</li>
								<li>Example
									<ul>
										<li class="noStyle">
											<?php include 'code/angular_10.txt'; ?>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>