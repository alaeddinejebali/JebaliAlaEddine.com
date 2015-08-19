<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">Data Types and Variables<h1>
	</div>
	<div class="wiki-article-body invisible">
			<p>JavaScript, on the other hand, is a weakly typed language and a lot more forgiving about how you use different types of data.</p>
			<p>JavaScript treats integer and floating-points numbers as floatingpoint numbers. It kindly hides the detail from you so you generally don't need to worry about it. One exception is when you want an integer but you have a fl oating-point number, in which case you'll round the number to make it an integer.</p>
			<h2>Special characters</h2>
			<ul>
				<li>\b : Backspace</li>
				<li>\f : Form feed</li>
				<li>\n : New line</li>
				<li>\r : Carriage return</li>
				<li>\t : Tab</li>
				<li>\xNN : NN is a hexadecimal number that identifi es a character in the Latin-1character set.</li>
				<li>\uNNNN : Refer to characters using their Unicode escape sequence</li>
			</ul>
			<h2>JavaScript variables</h2>
			<ul>
				<li>Case sensitive.</li>
				<li>You can't use <i>reserved</i> words (like var, with,..etc)</li>
				<li>You are allowed to use numbers in your variable names, but the names must not begin with numbers.</li>
				<li>Certain characters are also forbidden in variable names (like the ampersand (&) and the percent sign (%)).</li>
			</ul>
			<p class="caution">A common method to name variiables is <i>Hungarian notation</i>: where the beginning of each variable name is a three-letter identifier indicating the data type. For example, you may start integer variable names with <i>int</i>; flating-point variable names with <i>flt</i>; string variable names with <i>str</i>, and so on.</p>
			<p>
				Check if a variable has been assigned a value. <i><u>undefined</u> is an actual primitive value in JavaScript</i>
				<?php include "code/javascript_code_02.txt"; ?>
			</p>
			<p class="caution">Whenever JavaScript detects that the contents of a variable are no longer usable, such as when you allocate a new value, it performs the garbage collection process and makes the memory available.</p>
			<h2>Basic String Operations</h2>
			<p>When you concatenate string and numbers, Javascript treat the number as string</p>
			<?php include "code/javascript_code_03.txt"; ?>
			<h2>Data Type Conversion</h2>
			<h3>Convert Strings to Numbers</h3>
			<ul>
				<li>parseInt(string): It actually goes through (that is, parses) each character of the string you ask it to convert and sees if it's a valid number. If it is valid, parseInt() uses it to build up the number; if it is not valid, the command simply stops converting and returns the number it has converted so far.</li>
				<li>parseFloat(string): Returns fl oating-point numbers</li>
			</ul>
			<h3>Convert Numbers to Strings</h3>
			<?php include "code/javascript_code_04.txt"; ?>
			<p class="caution">
				If you use parseInt() or parseFloat() with any string that is empty or does not start with at least one valid digit, you get NaN, meaning Not a Number.
			</p>
			<li><?php include "code/javascript_code_13.txt"; ?></li>
			<h2>JavaScript Arrays</h2>
			<li><?php include "code/javascript_code_14.txt"; ?></li>
			<p>
				- If you declare an array with a known elements number and then update the index of greater one, JavaScript would not complain and would happily assume that you had changed your mind and wanted an array that had (at least) 131 elements in it.
			</p>
			<li><?php include "code/javascript_code_15.txt"; ?></li>
		</div>
	</section>