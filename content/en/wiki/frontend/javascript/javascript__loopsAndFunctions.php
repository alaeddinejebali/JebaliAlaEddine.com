<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Decisions, Loops, and Functions
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<h2>The if Statement</h2>
		<li class="noStyle"><?php include "code/javascript_code_44.txt"; ?></li>

		<h2>Comparing Strings</h2>
		<ul>
			<li>- Javascript goes through each letter in turn on the LHS
				(Left-Hand Side) and checks it with the letter in the same position
				on the RHS (Right-Hand Side) to see if it's actually the same. If at
				any point it finds a difference, it stops, and the result is false.</li>
			<li>- String comparison in JavaScript is case sensitive.</li>
			<li>- the code numbers (in the ASCII and Unicode character sets) for
				uppercase letters are lower than the code numbers for lowercase
				letters.</li>
			<li class="noStyle"><?php include "code/javascript_code_45.txt"; ?></li>


		</ul>
		<h2>The switch Statement</h2>
		<li class="noStyle"><?php include "code/javascript_code_46.txt"; ?></li>


		<p>- Executing the same code for different cases
		
		
		<li class="noStyle"><?php include "code/javascript_code_47.txt"; ?></li>


		<h2>Looping</h2>
		<h3>For</h3>
		<li class="noStyle"><?php include "code/javascript_code_48.txt"; ?></li>


		<h3>For...in</h3>
		<p>- This loop works primarily with arrays and objects. It enables you
			to loop through each element in the array without having to know how
			many elements the array actually contains.
		
		
		<li class="noStyle"><?php include "code/javascript_code_49.txt"; ?></li>


		<h3>While</h3>
		<p>- The while loop is more useful when you don't know how many times
			you'll need to loop.
		
		
		<li class="noStyle"><?php include "code/javascript_code_50.txt"; ?></li>

		</p>
		<h3>do while</h3>
		<p>- The code in the while loop executes at least once.
		
		
		<li class="noStyle"><?php include "code/javascript_code_51.txt"; ?></li>

		</p>
		<h3>The break statement</h3>
		<p>- the break statement can also be used as part of the for and while
			loops when you want to exit the loop prematurely.
		
		
		<li class="noStyle"><?php include "code/javascript_code_52.txt"; ?></li>

		</p>
		<h3>The continue statement</h3>
		<p>
		
		
		<li class="noStyle"><?php include "code/javascript_code_53.txt"; ?></li>

		</p>
		<h3>Variables Scope</h3>
		<ul>
			<li>- Any variables declared in a web page outside of a function will
				be available to all script on the page (whether that script is
				inside a function or otherwise). We term this a <i>global</i> or <i>page-level
					scope</i>.
			
			<li class="noStyle"><?php include "code/javascript_code_54.txt"; ?></li>

			</li>
			<li>- Variables declared inside a function and function parameters
				are visible only inside that function.</li>
			<li>- Any variable declared without <i>var</i> has a global scope
			
			<li class="noStyle"><?php include "code/javascript_code_55.txt"; ?></li>

			</li>
			<li>- Variables lifetime: when the function fi nishes executing, the
				variables in that function die and their values are los</li>
		</ul>
	</div>
</section>