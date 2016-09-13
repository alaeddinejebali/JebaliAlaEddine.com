<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Elements of Object-oriented Design
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Most know design patterns</h2>
				<ul>
					<li><a href="/wiki/designpatterns">See this page</a>.</li>
				</ul>
			</li>
			<li>
				<h2>SPL: The Standard PHP Library</h2>
				<ul>
					<li>It is a collection of interfaces and classes that are meant to
						solve common problems.</li>
					<li>No external libraries are needed to build this extension and it
						is available and compiled by default in PHP 5.</li>
					<li>SPL provides a set of standard datastructure, a set of
						iterators to traverse over objects, a set of interfaces, a set of
						standard Exceptions, a number of classes to work with files and it
						provides a set of functions.
						<ul>
							<li>For example, use a foreach() construct to loop through an
								object as if it were an array, or even access its individual
								elements using the array operator [].</li>
						</ul>
					</li>
					<li>SPL works primarily by providing a number of interfaces that
						can be used to implement the functionality required to perform
						certain operations:
						<ol>
							<li>Array Access to objects</li>
							<li>Simple Iteration</li>
							<li>Seekable Iteration</li>
							<li>Recursive Iteration</li>
							<li>Filtered Iteration</li>
						</ol>
					</li>
					<li class="noStyle">
						<h3>Accessing Objects as Arrays</h3>
						<ul>
							<li>ArrayAccess interface
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_126.txt'; ?>
									</li>
								</ul>
							</li>
							<li>Example which emulates an array that only accepts elements
								with numeric keys:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_127.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Simple Iterator</h3>
						<ul>
							<li>Iterator interface
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_128.txt'; ?>
									</li>
								</ul>
							</li>
							<li>Example which will iterate over each of the four elements in
								the myData private property in the exact same way foreach()
								works on a standard Array:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_129.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Seekable Iterator</h3>
						<ul>
							<li>It extends the standard Iterator interface and adds a seek()
								method to enable the ability to retrieve a specific item from
								internal data store.</li>
							<li>Seekable interface
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_130.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Recursive Iterator</h3>
						<ul>
							<li>It allows looping over multi-dimensional tree-like data
								structures.</li>
							<li>SimpleXML, for example, uses recursive iteration to allow
								looping through complex XML document trees.</li>
							<li>RecursiveIteratorIterator class
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_131.txt'; ?>
									</li>
								</ul>
							</li>
							<li>Exemple to display a company details:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_132.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Filtering Iterator</h3>
						<ul>
							<li>It is used to filter the items returned by an iteration.</li>
							<li>Example:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_133.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>