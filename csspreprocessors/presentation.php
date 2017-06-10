<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#presentation">Presentation</a>
		</h4>
	</div>
	<div id="presentation" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>CSS painful</h2>
					<ul>
						<li>
							Colors problem
							<ul>
								<li>
									When you need to change a color by another, you need to make the change in all rules using this color.
								</li>
							</ul>
						</li>
						<li>
							Duplication problem
							<ul>
								<li>
									Duplication of content
									<ul>
										//Paste sample here of code redendance backround; font-size:.....
									</ul>
								</li>
								<li>
									Duplication of rules
									<ul>
										See how many "nav" in this example:
										<?php include "code/19.txt"; ?>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							The cascadibg problem
							<ul>
								<li>
									When you change the id or the the class name of an element in the HTML, you need to go back to your style rules and make changes there too.
								</li>
							</ul>
						</li>
						<li>
							Calculation problem
							<ul>
								<li>
									You can give only fixed value to css properties (font-size...etc). You can make the value variable and calculated.
								</li>
							</ul>
						</li>
						<li>
							Importing problem
							<ul>
								<li>
									You can import a css file into another using <span class="simpleCode">@import "path/to/another/css/file.css"</span>
								</li>
								<li>
									The prblem with this is that browser will always make a call to file.css (it'll never be used from cache).
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>
