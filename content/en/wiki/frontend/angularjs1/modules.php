<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Modules<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
			<li>
				An AngularJS module:
				<ul>
					<li>
						It Defines an application.
					</li>
					<li>
						It's a container for the different parts of an application.
					</li>
					<li>
						It's a container for the application controllers.
					</li>
					<li>
						Controllers always belong to a module.
					</li>
					<li>
						The [] parameter in the module definition can be used to define dependent modules.
					</li>
					<li>
						Namespace: global functions should be avoided in JavaScript. They can easily be overwritten or destroyed by other scripts. AngularJS modules reduces this problem, by keeping all functions local to the module.
					</li>
					<li>
						Example:
						<ul>
							<li class="noStyle">
								<?php include 'code/angular_08.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>