<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Singleton
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
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
</section>