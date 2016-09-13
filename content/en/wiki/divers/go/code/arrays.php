<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Arrays and slices</h1>
	</div>
	<div class="wiki-article-body invisible">

		<h2>Declaration</h2>
		<ul>
			<li class="noStyle">
    			<?php include 'git_code_11.txt'; ?>
    		</li>
			<li>
    			Another way to declare arrays:
    			<?php include 'git_code_14.txt'; ?>
    		</li>
		</ul>

		<h2>Looping</h2>
		<ul>
			<li>
    			Exemple 1:
    			<?php include 'git_code_12.txt'; ?>
    		</li>
			<li>
    			Exemple 2:
    			<?php include 'git_code_13.txt'; ?>
    		</li>
		</ul>

		<h2>Slices</h2>
		<ul>
			<li>A slice is a segment of an array.</li>
			<li>Unlike arrays this length is allowed to change.</li>
			<li>
				A length of a slice cannot be longer than the array
				<?php include 'git_code_15.txt'; ?>
			</li>
			<li>
				Another way to create slices is to use the [low : high] expression:
				<?php include 'git_code_16.txt'; ?>
			</li>
			<li>Slice functions
				<ul>
					<li>
						Append:
						<?php include 'git_code_17.txt'; ?>
					</li>
					<li>
						Copy:
						<?php include 'git_code_18.txt'; ?>
					</li>
					<li>
						Maps:
						<?php include 'git_code_19.txt'; ?>
						Get the value from the map, then if it's successful we run the code inside of the block:
						<?php include 'git_code_20.txt'; ?>
					</li>
				</ul>
			</li>
		</ul>

	</div>
</section>