<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Tips and trics
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li class="accordion" id="simulateModule">
				<h2>Simulate a JavaScript module</h2>
				<ul>
					<li>Let's create a module <i>createWorker</i>
						<?php include "code/javascript_code_56.txt"; ?>
					</li>
					<li>
						You can then use the module like that:
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
								<?php include "code/javascript_ceode_61.txt"; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>