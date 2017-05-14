<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#geolocation">Geolocation</a>
		</h4>
	</div>
	<div id="geolocation" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>What is geolocation?</h2>
					<ul>
						<li>
							It's the ability to a browser to communicate with outside world and find it out where in the world this device is located.
						</li>
						<li>
							Browsers will request for user permission to do that.
						</li>
						<li>
							Each browser handles it in different way: some may request it each time you refresh the page, others will request it only one time.
						</li>
					</ul>
				</li>
				<li>
					<h2>How technically know the location</h2>
					<ul>
						<li>
							IP address
							<ul>
								<li>
									Advantage: Available everywhere.
								</li>
								<li>
									Disadvantage: High processing.
								</li>
							</ul>
						</li>
						<li>
							Coordonate Triangulation using GPS, WiFi, Cellphone
						</li>
						<li>
							Defined by used
						</li>
					</ul>
				</li>
				<li>
					<h2>Borowsers support</h2>
					<ul>
						<li>
							IE8+
						</li>
					</ul>
				</li>
				<li>
					<h2>Location options</h2>
					<ul>
						<li>
							Passing options
							<ul>
								<li class="noStyle">
									<?php include "code/04.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							High accuracy
							<ul>
								<li>
									Boolean (default: false)
								</li>
								<li>
									Atempt to gather more accurate location coordinates.
								</li>
								<li>
									May cause request to take longer.
								</li>
							</ul>
						</li>
						<li>
							Timeout
							<ul>
								<li>
									The max time allowed to calculate location.
								</li>
								<li>
									Default: no limit
								</li>
							</ul>
						</li>
						<li>
							Maximum age
							<ul>
								<li>
									How old locaion value may be before an attempt to refresh coordinates.
								</li>
								<li>
									Default: 0
								</li>
							</ul>
						</li>
						<li>
							Example
							<ul>
								<li class="noStyle">
									<?php include "code/01.txt"; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Watch/Detect each time the location is changed</h2>
					<ul>
						<li class="noStyle">
							<?php include "code/02.txt"; ?>
						</li>
						<li>
							Stop watching
							<?php include "code/03.txt"; ?>
						</li>
					</ul>
				</li>			
				<li>
					<h2>Watch/Detect each time the location is changed</h2>
					<ul>
						<li class="noStyle">
							<?php include "code/02.txt"; ?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
