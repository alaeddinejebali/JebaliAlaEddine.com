<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#usefullcommands">Usefull commands</a>
		</h4>
	</div>
	<div id="usefullcommands" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		<ul>
			<li>
				<h2>Routes</h2>
				<ul>
					<li>Print all configured routes in your application
						<ul>
							<li>$> debug:router</li>
						</ul>
					</li>
					<li>Print information about a specific route
						<ul>
							<li>$> debug:router article_show</li>
						</ul>
					</li>
					<li>Test if a url matches a given route. it'll print which route
						the url matches
						<ul>
							<li>$> router:match /blog/my-latest-post</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Linking assets</h2>
				<ul>
					<li>Moves (or symlinks) files into the correct location (/web
						folder)
						<ul>
							<li>$> php app/console assets:install web --symlink</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Syntax checking</h2>
				<ul>
					<li>Check by filename:
						<ul>
							<li>$> php app/console twig:lint
								app/Resources/views/article/recent_list.html.twig</li>
						</ul>
					</li>
					<li>Check by directory:
						<ul>
							<li>$> php app/console twig:lint app/Resources/views</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Database</h2>
				<ul>
					<li>Create database
						<ul>
							<li>$> php app/console doctrine:database:create</li>
						</ul>
					</li>
					<li>Create Entity (using an interactive mode)
						<ul>
							<li>$> php app/console doctrine:generate:entity</li>
						</ul>
					</li>
					<li>Generate Getters/Setters of Entity
						<ul>
							<li>$> php app/console doctrine:generate:entities
								AppBundle/Entity/Product</li>
						</ul>
					</li>
					<li>Create all the database tables needed for every known entity:
						<ul>
							<li>$> php app/console doctrine:schema:update --force</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>	
		</div>
	</div>								
</div>