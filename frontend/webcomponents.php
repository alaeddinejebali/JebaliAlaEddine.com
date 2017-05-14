<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#webcomponents">Web components</a>
		</h4>
	</div>
	<div id="webcomponents" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Pattern of component</h2>
					<ul>
						<li>
							A component is an HTML tag that we can intercat with it by:
							<ul>
								<li>
									Attributes
								</li>
								<li>
									Properties
								</li>
								<li>
									Methods
								</li>
								<li>
									Events
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Standards of web components</h2>
					<ul>
						<li>
							Custom elements
							<ul>
								<li>
									define your own HTML tag.
								</li>
							</ul>
						</li>
						<li>
							Shadow imports
							<ul>
								<li>
									To encapsulate subtree and style in an element.
								</li>
								<li>
									Like when you insert a &lt;video&gt; tag you just see the result but you don't see how it's done. Also all it's CSS are protected.
								</li>
							</ul>
						</li>
						<li>
							HTML imports
							<ul>
								<li>
									To include HTML page into another.
								</li>
							</ul>
						</li>
						<li>
							Template
							<ul>
								<li>
									Have clonable document template.
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Why web components?</h2>
					<ul>
						<li>
							Because when you use a JS framework, you'll be very tied to it.
							<ul>
								<li>
									What if you developed an Angular app then they ask you to integrate it in another App built with React!
								</li>
								<li>
									How expensive is the migration from Angular1 to Angular2?!
								</li>
							</ul>
						</li>
						<li>
							The idea is to use web components and use frameworks just to do specific things.
							Example: use a custom HTML element for login and link it to Angular.
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
