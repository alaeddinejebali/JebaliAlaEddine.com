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
					<h2>Introduction</h2>
					<ul>
						<li>aaaaa</li>
						<li>
							https://angular.io/docs/
						</li>
					</ul>
				</li>
				<li>
					<h2>Data binding</h2>
					<ul>
						<li>
							There are 4 types of data binding:
							<ol>
								<li>
									Interpolation: from component to DOM (expl when you are displaying data in a DIV you can't change/edit it)
									<ul>
										<li>
											Angular1
											<?php include "code/01.txt"; ?>
										</li>
										<li>
											Angular2 (no context)
											<?php include "code/02.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									One way binding: from component to DOM
									<ul>
										<li>
											Angular1
											<?php include "code/03.txt"; ?>
										</li>
										<li>
											Angular2
											<?php include "code/04.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Event binding: from DOM to component
									<ul>
										<li>
											Angular1
											<?php include "code/05.txt"; ?>
										</li>
										<li>
											Angular2
											<?php include "code/06.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Two way binding: from component to DOM and from DOM to component
									<ul>
										<li>
											Angular1
											<?php include "code/07.txt"; ?>
										</li>
										<li>
											Angular2
											<?php include "code/08.txt"; ?>
										</li>
										<li>
											Example:
											<?php include "code/09.txt"; ?>
										</li>
									</ul>
								</li>
							</ol>
						</li>
					</ul>
				</li>
				<li>
					<h2>Angular-2 vs Angular-1</h2>
					<ul>
						<li>
							Less built-in directives
							<ul>
								<li>
									Angular1
									<ul>
										<li class="noStyle">
											<?php include "code/10.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Angular2
									<ul>
										<li class="noStyle">
											<?php include "code/11.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Example 1
									<ul>
										<li class="noStyle">
											<?php include "code/12.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Example 2
									<ul>
										<li class="noStyle">
											<?php include "code/13.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Example 3
									<ul>
										<li class="noStyle">
											<?php include "code/14.txt"; ?>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							Components
							<ul>
								<li>
									Angular1
									component is a Template + Controller. Then we say to the template what is its controller.
								</li>
								<li>
									Angular2:
									Component identifies its template.
								</li>
							</ul>
						</li>
						<li>
							Services
							<ul>
								<li>
									Angular1: you can use:
									<ul>
										<li>
											Factories
										</li>
										<li>
											Services
										</li>
										<li>
											Providers
										</li>
										<li>
											Constants
										</li>
										<li>
											Values
										</li>
									</ul>
								</li>
								<li>
									Angular2: you need
									<ul>
										<li>
											Just a Class
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							Dependency Injection
							<ul>
								<li>
									Angular1
									<?php include "code/16.txt"; ?>
								</li>
								<li>
									Angular2
									<?php include "code/17.txt"; ?>
								</li>
								<li>
									Example:
									<ul>
										<li class="noSyle">
											<?php include "code/15.txt"; ?>
										</li>
									</ul>
								</li>
							</ul> 
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>