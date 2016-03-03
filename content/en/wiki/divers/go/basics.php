<section class="wiki-article">
	<div class="wiki-article-title">
    	<h1 class="btnShowHideArticleBody" data-article-visibility="off">Basics</h1>
	</div>
    <div class="wiki-article-body invisible">
    
    	<h2>Show help</h2>
    	<ul>
    		<li class="noStyle">
    			<?php include 'code/go_code_03.txt'; ?>
    		</li>
    	</ul>
    
    	<h2>Hello world</h2>
    	<ul>
    		<li>
    			Every Go program must start with a package declaration.
    			<?php include 'code/go_code_02.txt'; ?>
    		</li>
    		<li>
    			The go run command takes the subsequent files(separated by spaces), compiles them into an executable saved in a temporary directory and then runs the program.
    		</li>
		</ul>
		
		<h2>Types</h2>
		<ul>
			<li>
				Integers
				<ul>
					<li>
						Unsigned integers (ie: positive numbers):
						<ul>
							<li>uint8 , uint16 , uint32 , uint64 , int8 , int16 , int32 and int64</li>
						</ul>
					</li>
					<li>
						Signed integers (positive and negatives):
						<ul>
							<li>int</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				Float
				<ul>
					<li>
						loat32 and float64: referred to as single precision and double precision (using float64 aguments the precision of an operation).
					</li>
				</ul>
			</li>
			<li>
				NaN
				<ul>
					<li>Like the operation 0/0</li>
				</ul>
			</li>
			<li>
				Strings
				<ul>
					<li>The difference between "" and '' is that double quoted strings cannot contain newlines and they allow special escape sequences.</li>
					<li>length: len(var);</li>
					<li>concatenation: s1 + s2</li>
				</ul>
			</li>
		</ul>
		
		<h2>Conditions</h2>
		<ul>
			<li>AND: &&</li>
			<li>OR: ||</li>
			<li>Not: !</li>
		</ul>
		
		<h2>Variables</h2>
		<ul>
			<li>
				Exemple:
				<?php include 'go_code_04.txt'; ?>
			</li>
			<li>
				Shorter form: without using a var declarion and without defining type:
				<?php include 'go_code_05.txt'; ?>
			</li>
			<li>
				Define Multiple Variables:
				<?php include 'go_code_08.txt'; ?>
			</li>
		</ul>
		
		<h2>Scope</h2>
		<ul>
			<li>
				Global variable:
				<?php include 'go_code_06.txt'; ?>
			</li>
			<li>
				Define constant::
				<?php include 'go_code_07.txt'; ?>
			</li>
		</ul>
		
		<h2>Ask for entry</h2>
		<ul>
			<li class="noStyle">
				<?php include 'go_code_08.txt'; ?>
			</li>
		</ul>
		
		<h2>Control structures</h2>
		<ul>
			<li class="noStyle">
				<?php include 'go_code_10.txt'; ?>
			</li>
		</ul>
		
	</div>
</section>