<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#presentation">Web workers</a>
		</h4>
	</div>
	<div id="presentation" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		<ul>
			<li>
				<h2>Before web workers</h2>
				<ul>
					<li>
						JavaScript code run in the same thread as the UI.
					</li>
					<li>
						JavaScript a single-threaded technology: only one thing can be done at time.
					</li>
				</ul>
			</li>
			<li>
				<h2>Web workers</h2>
				<ul>
					<li>
						Run in their own thread.
					</li>
					<li>
						Don't share state: No shared data.
					</li>
					<li>
						Communicate via asynchronous messages;
					</li>
				</ul>
			</li>
			<li>
				<h2>Advantage</h2>
				<ul>
					<li>
						Allow code to perform procesor-intensive calculations without blocking the UI thread.
					</li>
				</ul>
			</li>
			<li>
				<h2>Limiations of Web workers</h2>
				<ul>
					<li>
						Cannot access the DOM.
					</li>
					<li>
						Heigh setup and memory cost.
					</li>
					<li>
						Data may not contain functions or cycles.
					</li>
					<li>
						Debugging.
					</li>
				</ul>
			</li>
			<li>
				<h2>How a web worker works</h2>
				<ul>
					<li>
						Window space
						<ul>
							<li class="noStyle">
								<?php incude "code/worker_03.txt"; ?>
							</li>
						</ul>
					</li>
					<li>
						Worker space
						<ul>
							<li class="noStyle">
								<?php incude "code/worker_04.txt"; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Example</h2>
				<ul>
					<li>
						index.html
						<?php incude "code/worker_01.txt"; ?>
					</li>
					<li>
						worker.js
						<?php incude "code/worker_02.txt"; ?>
					</li>
				</ul>
			</li>
			<li>
				<h2>Specification</h2>
				<ul>
					<li>
						Because a web worker is running in a separate thread, other workers doesn't have access to:
						<ul>
							<li>
								window object
							</li>
							<li>
								document object
							</li>
							<li>
								parent object
							</li>
						</ul>
					</li>
					<li>
						But it has access to:
						<ul>
							<li>
								The navigator object (user agent, geolocation)
							</li>
							<li>
								The locaion object (read only):
								<ul>
									<li>
										hostname
									</li>
									<li>
										host
									</li>
									<li>
										href
									</li>
									<li>
										pathname
									</li>
								</ul>
							</li>
							<li>
								XMLHttpRequest
							</li>
							<li>
								setTimeout() and setInterval()
							</li>
							<li>
								Application cache
							</li>
							<li>
								Import other workers or other scripts
								<ul>
									<li class="noStyle">
										<?php incude "code/worker_05.txt"; ?>
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