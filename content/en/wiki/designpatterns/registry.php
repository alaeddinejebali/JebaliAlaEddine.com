<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Registry
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Registry pattern</h2>
				<ul>
					<li>When you want to find an object you usually start with another
						object that has an association to it ( <i>$vClient.findById(22)</i>
						).
					</li>
					<li>However, in some cases you won't have an appropriate object to
						start with (<i>$vClient</i>). You may know the customer's ID
						number (<i>22</i>) but not have a reference.
					</li>
					<li>In this case you need some kind of lookup method: <u>a finder</u>.
					</li>
					<li>A Registry is essentially a global object, or at least it looks
						like one - even if it isn't as global as it may appear.
						<ul>
							<li class="noStyle">
								<?php include 'code/designpatterns_03.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>