<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#tipsandtrics">Tips and Trics</a>
		</h4>
	</div>
	<div id="tipsandtrics" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Angular-1 vs Angular-2</h2>
					<ul>
						<li>See <a href="/frontend/angularjs2#angular1vs2">This section</a>.</li>
					</ul>
				</li>
				<li>
					<h2>Working with CSS</h2>
					<ul>
						<li>The ng-model directive adds/removes the following classes,
							according to the status of the form field:
							<ul>
								<li>ng-empty</li>
								<li>ng-not-empty</li>
								<li>ng-touched</li>
								<li>ng-untouched</li>
								<li>ng-valid</li>
								<li>ng-invalid</li>
								<li>ng-dirty</li>
								<li>ng-pending</li>
								<li>ng-pristine</li>
							</ul>
						</li>
						<li>Example: change background color of a text to green when it's
							not empty:
							<ul>
								<li class="noStyle">
	        						<?php include 'code/angular_25.txt'; ?>
	        					</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Including a portion of HTML in HTML</h2>
					<ul>
						<li>Not (yet) supported by HTML</li>
						<li>With AngularJS, you can include HTML content using the <b>ng-include</b>
							directive:
							<ul>
								<li class="noStyle">
									<?php include 'code/angular_12.txt'; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Using Bootstrap</h2>
					<ul>
						<li>Layout
							<ul>
								<li class="noStyle">
									<?php include 'code/angular_11.txt'; ?>
								</li>
							</ul>
						</li>
						<li>Script
							<ul>
								<li class="noStyle">
									<?php include 'code/angular_12.txt'; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>