<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">Data type<h1>
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Javacript variables</h2>
				<ul>
					<li>JavaScript variables are case-sensitive.</li>
					<li>You can't use <i>reserved</i> words (like <i>"var"</i>, <i>"with"</i>)</li>
					<li>You are allowed to use numbers in your variable names, but the names must not begin with numbers.</li>
					<li>
						Check if a variable has been assigned a value. <i><u>undefined</u> is an actual primitive value in JavaScript</i>
						<?php include "code/javascript_code_02.txt"; ?>
					</li>
					<li>Whenever JavaScript detects that the contents of a variable are no longer usable, such as when you allocate a new value, it performs the garbage collection process and makes the memory available.</li>
				</ul>
			</li>
			<li>
				<h2>Basic String Operations</h2>
				<ul>
					<li>
						When you concatenate string and numbers, Javascript treat the number as string
						<?php include "code/javascript_code_03.txt"; ?>
					</li>
					<li>
						Type Conversion
						<ul>
							<li>
								Convert Strings to Numbers
								<ul>
									<li>
										parseInt(string): It actually goes through (that is, parses) each character of the string you ask it to convert and sees if it's a valid number. If it is valid, parseInt() uses it to build up the number; if it is not valid, the command simply stops converting and returns the number it has converted so far.
									</li>
									<li>
										parseFloat(string): Returns fl oating-point numbers
									</li>
								</ul>
							</li>
							<li>
								Convert Numbers to Strings
								<ul>
									<li class="caution">
										<?php include "code/javascript_code_04.txt"; ?>
									</li>
									<li class="caution">
										<?php include "code/javascript_code_13.txt"; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>JavaScript Arrays</h2>
				<ul>
					<li>
						If you declare an array with a known elements number and then update the index of greater one, JavaScript would not complain and would happily assume that you had changed your mind and wanted an array that had (at least) 131 elements in it.
					</li>
					<li>
						<?php include "code/javascript_code_14.txt"; ?>
					</li>
					<li>
						<?php include "code/javascript_code_15.txt"; ?>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>