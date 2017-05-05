<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#tipsandtrics">Tips and trics</a>
		</h4>
	</div>
	<div id="tipsandtrics" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		<ul>
			<li class="accordion" id="simulateModule">
				<h2>Simulate a JavaScript module</h2>
				<ul>
					<li>Let's create a module <i>createWorker
						<?php include "code/javascript_code_56.txt"; ?>
					</li>
					<li>
						You can then use the module like that:
						<?php include "code/javascript_code_57.txt"; ?>
					</li>
				</ul>
			</li>
			<li class="accordion">
				<h2>Function scope</h2>
				<ul>
					<li>
						<?php include "code/javascript_code_57.txt"; ?>
					</li>
				</ul>
			</li>			
			<li class="accordion">
				<h2>Encapsulation</h2>
				<ul>
					<li>Using <i>global variables</i> in JavaScript is dangerous since
						JavaScript is loosely typed so every one can change your variables
						if he can access them!
					</li>
					<li>So you need to encapsulate your variables.</li>
					<li>Let's use this example used in <a href="#simulateModule">Simulate
							a JavaScript module</a>
					</li>
					<li>Encapsulation1: Having 2 global variables: <i>createWorker</i>
						and <i>worker</i>
						<ul>
							<li class="noStyle">
								<?php include "code/javascript_code_59.txt"; ?>
							</li>
							<li>
								In this example, nbrWorker, task1 and task2 are only visible inside the function, so trying to acces it like that:
								<?php include "code/javascript_code_58.txt"; ?>
								will generate an error <i>task1 not found</i>
							</li>
						</ul>
					</li>
					<li>Encapsulation2: Having 1 global variable: <i>program</i>
						<ul>
							<li class="noStyle">
								<?php include "code/javascript_code_60.txt"; ?>
							</li>
						</ul>
					</li>
					<li>Encapsulation3: <strong>Immediately-Invoked Function Expression
							(IIFE)</strong>
						<ul>
							<li>IIFE is auto-executed functions.</li>
							<li>pronouced "iffi" ("i" like "i" in French accent).</li>
							<li>
								Having 0 global variable
								<?php include "code/javascript_code_61.txt"; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="accordion">
				<h2>Send form using AJAX</h2>
				<ul>
					<li>
						index.html
						<?php include "code/javascript_code_62.txt"; ?>
					</li>
					<li>
						app.js
						<?php include "code/javascript_code_63.txt"; ?>
					</li>
					<li>
						contact.php
						<?php include "code/javascript_code_64.txt"; ?>
					</li>
				</ul>
			</li>
			<li class="accordion" id="varvslet">
				<h2>var vs let</h2>
				<ul>
					<li>
						Javascript hoisting: It is JavaScript's default behavior of moving declarations to the top.
						<?php include "code/javascript_code_65.txt"; ?>
						The code above will output 'Hello' because JS will move the declaration of v to the beginning of the function and then continue.
					</li>
					<li>
						If you replace var by "let" in the above example, an error will be generated (ReferenceError: can't access lexical declaration `v' before initialization). 
					</li>
					<li>
						So you need to do:
						<?php include "code/javascript_code_66.txt"; ?>
					</li>
				</ul>
			</li>
			<li class="accordion" id="undefinedvsnull">
				<h2>undefined vs null</h2>
				<ul>
					<li>
						undefined
						<ul>
							<li>
								When you declare a variable without assigning any value to it, javascript will <i>tag</i> it as 'undefined' and your variable will be of type 'undefined'.
								<?php include "code/javascript_code_67.txt"; ?>
							</li>
						</ul>
					</li>
					<li>
						null
						<ul>
							<li>
								When you declare a variable and assign it the value 'null', this variable will be of type 'object'.
								<?php include "code/javascript_code_68.txt"; ?>
							</li>
							<li>
								It is a special purpose object that does not do anything.
							</li>
						</ul>
					</li>
					<li>
						So, <i>undefined</i> is a special type, whereas <i>null</i> is an object in JavaScript.
					</li>
				</ul>
			</li>
		</ul>
		</div>
	</div>								
</div>