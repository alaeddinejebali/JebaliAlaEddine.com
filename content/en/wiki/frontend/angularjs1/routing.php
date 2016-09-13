<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">Routing<h1>
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Introduction</h2>
				<ul>
					<li>
						Routing depends on another module <strong><i>angular-route.js.</i></strong>
					</li>
					<li>
						Then you must add the <strong><i>ngRoute</i></strong> as a dependency in the application module.
					</li>
					<li>
						Rules should be configured into <strong><i>$routeProvider</i></strong>.
					</li>
					<li>
						The <strong><i>ngRoute</i></strong> module routes your application to different pages without reloading the entire application.
					</li>
					<li>
						<strong><i>ng-view</i></strong> directive is the container where to put the content provided by the routing.
					</li>
					<li>
						Your application can only have one ng-view directive, and this will be the placeholder for all views provided by the route.
					</li>
				</ul>
			</li>
			<li>
				<h2>Example</h2>
				<ul>
					<li class="noStyle">
						<?php include 'code/angular_34.txt'; ?>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>