<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#generics">Generics</a>
		</h4>
	</div>
	<div id="generics" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Presentation</h2>
					<ul>
						<li>
							Type T is not known when creating the class.
						</li>
						<li>
							T is known when instanciating the class.
							<?php include 'code/15.txt'; ?>
							When T is Creating a string collection object, it'll create a new class in the background
							<?php include 'code/16.txt'; ?>
						</li>
						<li>
							An example of used generic object is Array<T>
							<?php include 'code/17.txt'; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Constraints</h2>
					<ul>
						<li>
							<?php include 'code/14.txt'; ?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>