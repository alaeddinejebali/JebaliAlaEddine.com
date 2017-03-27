<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#presentation">Introduction</a>
		</h4>
	</div>
	<div id="presentation" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		<ul>
			<li>
				<h2>aaa</h2>
				<ul>
					<li>
						What is a fron-end development?
						<ul>
							<li>
								Anything related to a browser (HTML, JS, CSS, images)
							</li>
							<li>
								It's not related to how a server work.
							</li>
						</ul>
					</li>
					<li>
						Technologies
						<ul>
							<li>
								<a href="" target="_blank"></a>
							</li>
							<li>
								<a href="" target="_blank"></a>
							</li>
							<li>
								<a href="" target="_blank"></a>
							</li>
						</ul>
					</li>
					<li>
						MDN (Microsoft Developer Network)
					</li>
					<li>
						Online test HTML/JS code
						<ul>
							<li>
								<a href="http://jsfiddle.net" target="_blank">http://jsfiddle.net</a>
								<ul>
									<li>
										Advantages:
										<ul>
											<li>
												Format JS code
											</li>
											<li>
												Save different versions each time you save.
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="http://jsbin.com" target="_blank">http://jsbin.com</a>
								<ul>
									<li>
										Advantages:
										<ul>
											<li>
												Live output of a result.
											</li>
											<li>
												Separate console area.
											</li>
											<li>
												Export the code to by directly creating a github project.
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="http://codepen.io" target="_blank">http://codepen.io</a>
							</li>
							<li>
								<a href="http://plnker.co" target="_blank">http://plnkr.co</a>
								<ul>
									<li>
										Advantages:
										<ul>
											<li>
												Create and edit separate files.
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						HTML5 elements
						<ul>
							<li>
								Audio
							</li>
							<li>
								Video
							</li>
							<li>
								Local storage
							</li>
							<li>
								Session storage
							</li>
							<li>
								Canvas
							</li>
							<li>
								Offline
								<ul>
									&lt;html manifest="app.appcache" &gt;
								</ul>
							</li>
							<li>
								History
							</li>
							<li>
								Geolocation
							</li>
						</ul>
					</li>
					<li>
						CSS preprocessors
						<ul>
							<li>
								Processor language => compile => CSS
							</li>
							<li>
								Features
								<ul>
									<li>
										Variables
									</li>
									<li>
										Math
										<ul>
											<li class="noStyle">
												<?php include 'code/frontend_01.txt'; ?>
											</li>
										</ul>
									</li>
									<li>
										Mixins
										<ul>
											<li class="noStyle">
												<?php include 'code/frontend_02.txt'; ?>
											</li>
										</ul>
									</li>
									<li>
										Nested rules
										<ul>
											<li class="noStyle">
												<?php include 'code/frontend_03.txt'; ?>
											</li>
										</ul>
									</li>
									<li>
										Logic
									</li>
								</ul>
							</li>
							<li>
								See
								<ul>
									<li>
										<a href="">LESS</a>
									</li>
									<li>
										<a href="">SASS</a>
										<ul>
											<li>
												<a href="">SASS</a>
											</li>
											<li>
												<a href="">SCSS</a>
											</li>
											<li>
												<a href="">Compass</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="">Stylus</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Techniques of Responsive design
						<ul>
							<li>
								Media queries
							</li>
						</ul>
					</li>
					<li>
						Use icon fonts
						<ul>
							<li>
								Advantages
								<ul>
									<li>
										You cand do on <strong>the fly</strong>:
										<ul>
											<li>
												Resize an icon
											</li>
											<li>
												Add color
											</li>
											<li>
												Add CSS effects
											</li>
											<li>
												...etc
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								Disadvantages
								<ul>
									<li>
										You can use only 1 color for the icon (you can't have an icon multi-colored)
									</li>
								</ul>
							</li>
							<li>
								Examples
								<ul>
									<li>
										<?php include 'code/frontend_04.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						HTTP
						<ul>
							<li>
								HTTP request methods: GET / PUT / POST / DELETE
							</li>
							<li>
								using REST: READ / CREATE / UPDATE / DELETE
							</li>
							<li>
								XHR: @todo: write an example of AJAX using JS and an other using jQuery
							</li>
						</ul>
					</li>
					<li>
						Javascript object decoration vs JSON
						<ul>
							<li>
								In JSON we define data, in JavaScript object decoration we define variables.
							</li>
							<li>
								In JSON keys must be string
								<?php include 'code/frontend_05.txt'; ?>
							</li>
							<li>
								In JavaScript, we don't need the ""
								<?php include 'code/frontend_06.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						JSON vs XML
					</li>
					<li>
						Browsers
						<ul>
							<li>
								Evergreen: auto-updating
							</li>
							<li>
								Supports: 
								<ul>
									<li>
										<a href="http://caniuse.com">http://caniuse.com</a>
									</li>
								</ul>
							</li>
							<li>
								Fallback
								<ul>
									<li>
										Provide another way when browser doesn't support a feature (example: link to a downloade video if no HTML5 player)
									</li>
								</ul>
							</li>
							<li>
								polyfill
								<ul>
									<li>
										???
									</li>
								</ul>
							</li>
							<li>
								Progressive enhancement
								<ul>
									<li>
										???
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Chrome Developer Tools
					</li>
					
					<li>
						CDN
						<ul>
							<li>
								Content Delivery Network
							</li>
							<li>
								Adavantages:
								<ul>
									<li>
										Content can be pre-cached.
									</li>
									<li>
										Distributed regional server.
									</li>
									<li>
										High capacity infrastucture
									</li>
									<li>
										Reduced load and bandwidth.
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Minification
						<ul>
							<li class="caution">
								Transeferring 4 files sized each 2ko to a server <strong>takes longer time</strong> than transferring 1 file sized 4ko.
							</li>
							<li>
								For a browser, having 4 files or 1 file does not matter.
							</li>
							<li>
								Objective: reduce size of files.
								<ul>
									<li>
										Rename variables to short chars (a, b, c...etc)
									</li>
									<li>
										Remove unecessary space
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Testing</h2>
				<ul>
					<li>
						Karma
					</li>
				</ul>
			</li>
			<li>
				<h2>Module system options</h2>
				<ul>
					<li>
						CommonJS
					</li>
					<li>
						ES6 module
					</li>
					<li>
						AMPD
					</li>
				</ul>
			</li>
			<li>
				Underscore.js
			</li>
			<li>
				Lo-Dash
			</li>
			<li>
				Modernizr
				<ul>
					<li>
						Detect CSS and HTML5 support to take action.
						<?php include 'code/frontend_07.txt'; ?>
					</li>
					<li>
						Example2:
						<?php include 'code/frontend_08.txt'; ?>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>