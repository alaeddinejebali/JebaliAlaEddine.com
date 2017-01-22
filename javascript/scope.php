<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Scope
			<h1>
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Variables scopes</h2>
				<ul>
					<li>
						In JS, a variable can be either <strong>local</strong> or <strong>global</strong>.
					</li>
					<li>
						Local variable scope
						<ul>
							<li>
								It can only be created in a function.
								<?php include "code/javascript_code_73.txt"; ?>
							</li>
							<li class="caution">
								There is no block-level scope.
								<ul>
									<li>
										Any variable created in any other block of code (cose surrounded by curly brackets) will be considered global.
										<?php include "code/javascript_code_72.txt"; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Global variable scope
						<ul>
							<li>
								When you declared a variable in higher scoe
								<?php include "code/javascript_code_75.txt"; ?>
							</li>
							<li>
								When you declared a variable without using <strong>var</strong> kayword; it's considered global.
								<?php include "code/javascript_code_74.txt"; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2><i>"this"</i> keyword</h2>
		<ul>
			<li class="noStyle">
				<h3>Presentation</h3>
				<ul>
					<li>
						Every function, while executing, has a reference to its current execution context, called <strong>this</strong>.
					</li>
				</ul>
			</li>
			<li class="noStyle">
				<h3>Implicit binding</h3>
				<ul>
					<li class="noStyle"><?php include "code/javascript_code_70.txt"; ?></li>
				</ul>
			</li>
			<li class="noStyle">
				<h3>Default binding</h3>
				<ul>
					<li class="noStyle"><?php include "code/javascript_code_71.txt"; ?></li>
					<li class="caution">
						Confusing binding
						<ul>
							<li class="noStyle">
								The code bello will output: bar2
								<?php include "code/javascript_code_76.txt"; ?>
							</li>
							<li>
								because it can be see like that
								<?php include "code/javascript_code_77.txt"; ?>
							</li>
							<li>
								or even like that
								<?php include "code/javascript_code_78.txt"; ?>
							</li>
						</ul>					
					</li>
				</ul>
			</li>
			<li class="noStyle">
				<h3>Explicit binding</h3>
				<ul>
					<li>
						.call(vThis, arg1, arg2, ..., argn)
						<ul>
							<li>
								aaa
								<?php include "code/javascript_code_79.txt"; ?>
							</li>
						</ul>
					</li>
					<li>
						.apply(vthis, argsArray)
						<ul>
							<li>
								aaa
								<?php include "code/javascript_code_80.txt"; ?>
							</li>
						</ul>
					</li>
					<li>
						.call() vs .apply()
						<ul>
							<li>
								
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="noStyle">
				<h3>Hard binding</h3>
				<ul>
					<li>
						The objectif of hard binding is to "hard" link a the reference to "this" object.
					</li>
					<li>
						Advantage
						<ul>
							<li>
								It's useful when you want to protect particular objects from being lost.
							</li>
						</ul>
					</li>
					<li>
						Disadvantage
						<ul>
							<li>
								You loose the flexibility of JS binding.
							</li>
						</ul>
					</li>
					<li>
						The mecanism is to "override" the <i>foo</i> function.
					</li>
					<li>
						In the example below, whenever <i>foo</i> function is called (using foo(), foo.call() or foo.apply()), use the overrided function created.
						<?php include "code/javascript_code_81.txt"; ?>
						So, whatever object you pass to <i>foo</i>, it'll always use <i>obj</i>: it's hard binded.
					</li>
					<li>
						Another implementation of <i>hard binding</i> is:
						<?php include "code/javascript_code_82.txt"; ?>
					</li>
					<li>
						.bind(vThis, arg1, arg2, ...,argn)
						<ul>
							<li>
								Appeared in ES5
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
			</li>
			<li>
				<h2><i>"new"</i> keyword</h2>
				<ul>
					<li>
						In other OOP languages, <i>new</i> is used to instantiate classes.
					</li>
					<li>
						JavaScript has no "classes" loke in other OOP languages.
					</li>
					<li>
						In JavaScript, when you use <i>new</i> keyword, it'll turn the function call to "constructor" call.
						<?php include "code/javascript_code_83.txt"; ?>
					</li>						
				</ul>
			</li>
		</ul>
	</div>
</section>
