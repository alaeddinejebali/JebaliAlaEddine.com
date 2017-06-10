<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#sass">SASS</a>
		</h4>
	</div>
	<div id="sass" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Presentation</h2>
					<ul>
						<li>
							SASS (Syntactically Awsome StyleSheets) is a dynamic style sheet languages.
						</li>
						<li>
							SASS has 2 syntaxes: SASS and SCSS.
							<ul>
								<li>
									SASS syntaxe is based on intentation
									<?php include "code/25.txt"; ?>
								</li>
								<li>
									SCSS syntaxe is based similar to CSS syntaxe
									<?php include "code/26.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Any CSS code is compatible SASS code.
						</li>
					</ul>
				</li>
				<li>
					<h2>SAAS on the server</h2>
					<ul>
						<li>
							Example using Node.js
							<?php include "code/24.txt"; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Variables</h2>
					<ul>
						<li>
							Accepted values
							<?php include "code/27.txt"; ?>
						</li>
						<li>
							Operations
							<?php include "code/28.txt"; ?>
						</li>
						<li>
							Color functions
							<?php include "code/29.txt"; ?>
						</li>
						<li>
							Operations
							<?php include "code/30.txt"; ?>
						</li>
						<li>
							String interpolation
							<?php include "code/31.txt"; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Rules</h2>
					<ul>
						<li>
							Same thing as nested rules in LESS
							<?php include "code/32.txt"; ?>
						</li>
						<li>
							SASS has Nested properties
							<?php include "code/33.txt"; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Directives</h2>
					<ul>
						<li>
							@import
							<ul>
								<li>
									import CSS file
									<?php include "code/34.txt"; ?>
								</li>
								<li>
									import SCSS file
									<?php include "code/35.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							@extend
							<ul>
								<li>
									Inherits styles from another: (Extend rules from other rules)
									<?php include "code/36.txt"; ?>
								</li>
								<li>
									Multiple inheritance
									<?php include "code/37.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							@mixin
							<ul>
								<li>
									Creates repeatable sections
									<?php include "code/38.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							@function
							<ul>
								<li>
									Mixins are used more to include a block of code and functions are used for returning values.
									<?php include "code/39.txt"; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Control directives</h2>
					<ul>
						<li>
							@if
							<ul>
								<li class="noStyle">
									<?php include "code/40.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							@for
							<ul>
								<li class="noStyle">
									<?php include "code/41.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							@each
							<ul>
								<li class="noStyle">
									<?php include "code/42.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							@while
							<ul>
								<li class="noStyle">
									<?php include "code/43.txt"; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>
