<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#angular1services">Services</a>
		</h4>
	</div>
	<div id="angular1services" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>What are AngularJS services?</h2>
					<ul>
						<li>
							A service is a function, or object, that is available for your AngularJS application.
						</li>
						<li>
							While directives are intermediary between Model and View, services are intermediary between Model and controllers.
						</li>
						<li>
							So Model and controllers works together using services.
						</li>
					</ul>
				</li>
				<li>
					<h2>Most known AngularJS services</h2>
					<ul>
						<li>
							<strong>$http</strong> service
							<ul>
								<li>
									Makes a request to the server, and lets your application handle the response.
								</li>
								<li>
									See <a href="#ajax">Web services ($http service)</a>
								</li>
							</ul>
						</li>
						<li>
							<strong>$log</strong> service
							<ul>
								<li>
									Like console.log() function in JavaScript
									<?php include "code/angular_31.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							<strong>$timeout</strong> service
							<ul>
								<li>
									Like setTimeout(function(){}, n) in JavaScript
									<?php include "code/angular_32.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							<strong>$interval</strong> service
							<ul>
								<li>
									Like setInterval(function(){}, n) in JavaScript
									<?php include "code/angular_33.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							<strong>$location</strong> service
							<ul>
								<li>
									Like window.location in JavaScript
								</li>
							</ul>
						</li>
						<li>
							<strong>$browser</strong> service
						</li>
						<li>
							<strong>$animate</strong> service
						</li>
					</ul>
				</li>
				<li>
					<h2>Create a custom service</h2>
					<ul>
						<li>
							Suppose that we need a service to convert a number to hexadecimal
							<ul>
								<li class="noStyle">
									<?php include "code/angular_35.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Once you have created a service, and connected it to your application, you can use the service in any controller, directive, filter, or even inside other services.
							<ul>
								<li>
									Use the service inside a controller:
									<ul>
								<li class="noStyle">
									<?php include "code/angular_36.txt"; ?>
								</li>
							</ul>
								</li>
								<li>
									Use the service inside a filter:
									<ul>
								<li class="noStyle">
									<?php include "code/angular_37.txt"; ?>
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