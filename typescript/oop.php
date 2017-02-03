<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#oop">Object Oriented Programming features</a>
		</h4>
	</div>
	<div id="oop" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Classes</h2>
					<ul>
						<li>
							Example
							<?php include 'code/23.txt'; ?>
						</li>
						<li>
							By default a class attributes are "public". To simulate getters and setters:
							<?php include 'code/24.txt'; ?>
						</li>
						<li>
							Classes in Typescript act just as a container that encapsulate a code. For example, the generated JS code of above class will be
							<?php include 'code/26.txt'; ?>
						</li>
						<li>
							Class properties (getters and setters) act as filters.
						</li>
						<li>
							Remark that in the TS class above, we name the attribute "_name" (recommended) not "name" because TS will generate a property "name" for getters and setters. Otherwise it'll not know which "name" you're talking about (the attribute or the getter/setter)!
						</li>
						<li>
							When you define a method name "get" or "set" followed by &lt;aVariable&gt;, TS will consider it as a getter/setter of the attribute used inside those 2 methods.
							<ul>
								<li>
									This only works with TS5 or higher.								
								</li>
								<li>
									If you target ES3, you have 2 options:
									<ul>
										<li>
											Make the class attributes public (this not good since it doesn't respect OOP encapsulation).
										</li>
										<li>
											Simulate getters and setters
											<?php include 'code/27.txt'; ?>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Static attributes</h2>
					<ul>
						<li>
							Can be accessed without instanciation (using class not object).
							<?php include 'code/11.txt'; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Enumeration</h2>
					<ul>
						<li>
							<?php include 'code/12.txt'; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Inheritance</h2>
					<ul>
						<li>
							<?php include 'code/13.txt'; ?>
						</li>
					</ul>
				</li>			
				<li>
					<h2>Interfaces</h2>
					<ul>
						<li>
							Interfaces define a contract that other objects must respect (implement).
						</li>
						<li>
							Example: In a factory that produces engines, each engine need to be able to "start" and "stop".
							<?php include 'code/28.txt'; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Namespaces</h2>
					<ul>
						<li>
							aa
						</li>
					</ul>
				</li>
				<li>
					<h2>Modules</h2>
					<ul>
						<li>
							Way to group code.
						</li>
						<li>
							The file is the container (code in that file will not be exposed to other outside files).
						</li>
						<li>
							Other files have to be imported
						</li>
						<li>
							No reference path needed.
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>