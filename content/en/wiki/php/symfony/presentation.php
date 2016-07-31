<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Presentation
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>What is Symfony?</h2>
				<ul>
					<li>Symfony is a collection of over twenty independent libraries
						that can be used inside any PHP project. These libraries, called
						the Symfony Components, contain something useful for almost any
						situation, regardless of how your project is developed. To name a
						few:
						<ul>
							<li><strong><i>HttpFoundation</i></strong>: Contains the Request
								and Response classes, as well as other classes for handling
								sessions and file uploads.</li>
							<li><strong><i>Routing</i></strong>: Powerful and fast routing
								system that allows you to map a specific URI (e.g. /contact) to
								some information about how that request should be handled (e.g.
								execute the contactAction() method).</li>
							<li><strong><i>Form</i></strong>: A full-featured and flexible
								framework for creating forms and handling form submissions.</li>
							<li><a href="https://github.com/symfony/Validator"
								target="_blank"><strong><i>Validator</a></i></strong>: A system
								for creating rules about data and then validating whether or not
								user-submitted data follows those rules.</li>
							<li><strong><i>Templating</i></strong>: A toolkit for rendering
								templates, handling template inheritance (i.e. a template is
								decorated with a layout) and performing other common template
								tasks.</li>
							<li><strong><i>Security</i></strong>: powerful library for
								handling all types of security inside an application.</li>
							<li><strong><i>Translation</i></strong>: A framework for
								translating strings in your application.</li>
						</ul>
					</li>
					<li>Each one of these components is decoupled and can be used in
						any PHP project, regardless of whether or not you use the Symfony
						Framework.</li>
				</ul>
				<h2>What is the Symfony framework?</h2>
				<ul>
					<li>The Symfony Framework is a PHP library that accomplishes two
						distinct tasks:
						<ul>
							<li>Provides a selection of components (i.e. the Symfony
								Components) and third-party libraries (e.g. Swift Mailer15 for
								sending emails);</li>
							<li>Provides sensible configuration and a "glue" library that
								ties all of these pieces together.</li>
						</ul>
					</li>
					<li>The goal of the framework is to integrate many independent
						tools in order to provide a consistent experience for the
						developer.</li>
					<li>Even the framework itself is a Symfony bundle (i.e. a plugin)
						that can be configured or replaced entirely.</li>
				</ul>
			</li>
			<li>
				<h2>Requests and Responses</h2>
				<ul>
					<li>
                        When client make a request, server reponses like that:
                        <ul>
                        	<li class="noStyle">
                        		<?php include "code/symfony_code_01.txt"; ?>
                        	</li>
                        </ul>
                    </li>
					<li>Symfony provides an alternative to the raw PHP approach via two
						classes that allow you to interact with the HTTP request and
						response in an easier way.</li>
					<li><a
						href="http://api.symfony.com/2.7/Symfony/Component/HttpFoundation/Request.html"
						target="_blank">Request</a> class in Symfony:
                        <ul>
                        	<li class="noStyle">
                        		<?php include "code/symfony_code_02.txt"; ?>
                        	</li>
                        </ul>
                    </li>
					<li><a
						href="http://api.symfony.com/2.7/Symfony/Component/HttpFoundation/Response.html"
						target="_blank">Response</a> class in Symfony:
						<ul>
                        	<li class="noStyle">
                        		<?php include "code/symfony_code_03.txt"; ?>
                        	</li>
                        </ul>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Symfony application flow</h2>
				<ul>
					<li>Front controller: a single PHP file ("app_dev.php" or
						"app.php") that handles every request coming into your
						application. Its only job is to initialize Symfony's engine
						(Kernel) and pass it a Request object to handle. Symfony's core,
						then, uses the routing map to determine which controller to call.
						<img src="../../content/en/wiki/php/symfony/images/symfony_01.png"
						alt="Symfony application flow" />
						<ol>
							<li>a client make a request (ex: /contact)</li>
							<li>The request is handled by the Symfony front controller
								(app.php, or app_dev.php).</li>
							<li>The Symfony core (the Kernel) asks the router to inspect the
								request (find a route for /contact).</li>
							<li>The router matches the incoming URL to a specific route and
								returns information about the route, including the controller
								that should be executed.</li>
							<li>The Symfony Kernel executes the controller, which ultimately
								returns a Response object.</li>
						</ol>
					</li>
				</ul>
			</li>
			<li>
				<h2>Tree of a Symfony application</h2>
				<ul>
					<li>
					
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>