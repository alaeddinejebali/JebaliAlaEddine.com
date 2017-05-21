<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#components">Components</a>
		</h4>
	</div>
	<div id="components" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Presentation</h2>
					<ul>
						<li>
							A component contains application logic that controls a region of the user interface that we call a view.
						</li>
						<li>
							Components contains the logic and templates renders the page.
						</li>
						<li>
							A component is linked to a Template using <span class="smallcode">templateUrl</span>.
						</li>
						<li>
							The logic of a component
							<ul>
								<li class="noStyle">
									<?php include "code/20.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							What it'll be rendered
							<ul>
								<li class="noStyle">
									<?php include "code/23.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							by convention a component is bootstraped with a file named "main.ts".
							<ul>
								<li class="noStyle">
									<?php include "code/21.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Using a component
							<ul>
								<li class="noStyle">
									<?php include "code/22.txt"; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Example</h2>
					<ul>
						<li>
							See "13 A2: Component"
						</li>
					</ul>
				</li>
				<li>
					Nested components
					<ul>
						<li>
							See 14: A2 exaple
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>




<li>
	We use Metadata to tell Angular about objects we build.
</li>
<li>
	Metadata links the Template to the component.
</li>