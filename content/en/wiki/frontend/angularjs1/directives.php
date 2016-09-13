<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Directives
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>AngularJS Directives</h2>
				<ul>
					<li>AngularJS directives are extended HTML attributes with the
						prefix <strong><i>ng-</i></strong>
					</li>
					<li>AngularJS also lets you <a href="#defineDirectives">define your
							own directives</a>.
					</li>
					<li>
						Directives are intermediary between Model and View. So Model and view work together using directives.
					</li>
					<li>AngularJS has a set of built-in directives which offers
						functionality to your applications:
						<ul>
							<li><strong><i>ng-app</i></strong> directive:
								<ul>
									<li>initializes (auto-bootstrap) the application when a web
										page is loaded.</li>
									<li>Defines the root element of an AngularJS application.</li>
								</ul></li>
							<li><strong><i>ng-init</i></strong> directive:
								<ul>
									<li>initializes application data.</li>
								</ul></li>
							<li><strong><i>ng-model</i></strong> directive:
								<ul>
									<li>binds the value of HTML controls (input, select, textarea)
										to application data.</li>
									<li>
											The binding goes both ways: if the user changes the value inside the input field, the AngularJS property will also change its value.
											<?php include 'code/angular_24.txt'; ?>
										</li>
								</ul></li>
							<li><strong><i>ng-repeat</i></strong> directive:
								<ul>
									<li>
										 Used on an array of objects to clone HTML elements once for each item in a collection.
										 <?php include 'code/angular_17.txt'; ?>
									</li>
								</ul></li>
						</ul>
					</li>
				</ul>
			</li>
			<li id="defineDirectives">
				<h2>Create your own directives</h2>
				<ul>
					<li>To invoke the new directive, make an HTML element with the same
						tag name as the new directive.</li>
					<li>When naming a directive, you must use a camel case name, <i>alaEddine55Jebali</i>
					</li>
					<li>when invoking it, you must use "-" separated name, <i>ala-eddine55-jebali</i>
					</li>
					<li>Example:
						<ul>
							<li>
								Display a message:
								<?php include 'code/angular_18.txt'; ?>
							</li>
							<li class="noStyle">
								<h3>Invocation</h3>
								<ul>
									<li>You can invoke a directive by using:
										<ol>
											<li>
												Element name
												<?php include 'code/angular_19.txt'; ?>
											</li>
											<li>
												Attribute
												<?php include 'code/angular_20.txt'; ?>
											</li>
											<li>
												Class
												<?php include 'code/angular_21.txt'; ?>
											</li>
											<li>
												Comment
												<?php include 'code/angular_22.txt'; ?>
											</li>
										</ol>
									</li>
								</ul>
							</li>
							<li class="noStyle">
								<h3>Restriction</h3>
								<ul>
									<li>You can restrict your directives to only be invoked by some
										of the methods.
										<ul>
											<li><strong>E</strong>: for Element name</li>
											<li><strong>A</strong>: for Attribute</li>
											<li><strong>C</strong>: for Class</li>
											<li><strong>M</strong>: for Comment</li>
										</ul>
									</li>
									<li class="caution">By default the value is <strong>EA</strong>,
										meaning that both Element names and attribute names can invoke
										the directive.
									</li>
									<li>
										Example
										<?php include 'code/angular_23.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>