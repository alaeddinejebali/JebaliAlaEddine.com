<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off" id="oop">Object Oriented Programming<h1>
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>To be organized</h2>
				<ul>
					<li>
						Variables assigned to objects don't hold the actual data, but rather a reference to the memory address where the data can be found.
					</li>
				</ul>
			</li>
			<li>
				<h2>Inheritance</h2>
				<ul>
					<li>
						Example: a manager inherits (is an) employee
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_111.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						Problem: We can't access manager.getName()
					</li>
					<li>
						Solution 1: Add it to <i>Object's</i> prototype
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_112.txt'; ?>
							</li>
							<li>
								The problem with this solution that the property "<i>getName</i>" will be available for all objects (since the all objects in JS inherits from it).
							</li>
						</ul>
					</li>
					<li>
						Solution 2: Use inheritance
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_113.txt'; ?>
							</li>
							<li>
								You can then add more properties:
								<?php include 'code/javascript_code_114.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>