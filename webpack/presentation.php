<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#webpack">Presentation</a>
		</h4>
	</div>
	<div id="webpack" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Problem of Front-end projects</h2>
					<ul>
						<li class="noStyle">
							<h3>Combining files</h3>
							<ul>
								<li>
									With each request made by a Browser to a server, HTML may include many images, scripts, css files. Which results a latency.
								</li>
								<li>
									So we need to reduce the number of "<i>assets</i>" to call in HTML:
									<ul>
										<li>
										<li>
											Developers works on a separate files then use a Build to generate singe file.
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>Minification: Reduce code size</h3>
							<ul>
								<li>
									Developer works an f1.js and then webpack generates f1.min.js
								</li>
								<li>
									Developer works an f1.css and then webpack generates f1.min.css
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>File order dependencies</h3>
							<ul>
								<li>
									Mainting file order dependencies.
								</li>
								<li>
									For example, we need info from 1<sup>st</sup> js file to be used in the 2<sup>nd</sup> js file.
									<?php include 'code/01.txt'; ?>
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>Transpilation</h3>
							<ul>
								<li>
									Developer write using new JS syntax (ES6 for example) and Webpack transpile it to be supported by older browsers.
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>Linting</h3>
							<ul>
								<li>
									Prevent bugs on prod (detect missed parameters...etc)
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Solutions</h2>
					<ul>
						<li class="noStyle">
							<h3>Server-side tools</h3>
							<ul>
								<li>
									
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>Use Task-runners</h3>
							<ul>
								<li>
									
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
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>