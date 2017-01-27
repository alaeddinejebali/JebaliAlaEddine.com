<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#singleton">Singleton</a>
		</h4>
	</div>
	<div id="singleton" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Singleton pattern</h2>
					<ul>
						<li>Its goal is to provide access to a single resource that is
							never duplicated, but that is made available to any portion of an
							application that requests it without the need to keep track of its
							existence</li>
						<li>The most typical example of this pattern is a database
							connection, which normally only needs to be created once at the
							beginning of a script and then used throughout its code.</li>
						<li>Example:
							<ul>
								<li class="noStyle">
									<?php include 'code/designpatterns_01.txt'; ?>
								</li>
								<li>getInstance() will never attempt to create a new instance of
									DB , and instead always return the initialized $_connection ,
									thus ensuring that a database connection is not created more
									than once.</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>