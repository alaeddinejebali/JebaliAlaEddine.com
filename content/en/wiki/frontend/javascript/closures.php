
<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off" id="closures">
			Closures
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Presentation</h2>
				<ul>
					<li>
						Closures (or enclosures) are similar to nested functions in JAVA.
					</li>
					<li>
						It's a function inside another function.
					</li>
					<li>
						A closure has access to:
						<ul>
							<li>
								its own variables.
							</li>
							<li>
								outer functions variables and parameters.
							</li>
							<li>
								global variables.
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Definition</h2>
				<ul>
					<li>
						A closure is the capabilitie for a <strong>function</strong> to remember and access it's <strong>lexical scope</strong> even when that function is executed <strong>ouside</strong> that lexical scope.
					</li>
				</ul>
			</li>
			<li>
				<h2>Notes</h2>
				<ul>
					<li>
						A closure is not a copy (or snapshot) of the lexical scope, it's a <strong>reference</strong> to the lexical scope.
					</li>
					<li>
						A closure is only applicable for function. So we can't talk about closure with objects for example.
					</li>
					<li>
						A closure stay arround as long as there is <strong>at least one reference</strong> to that scope. When there is no reference, the scope will be destroyed (using garbage collector).
					</li>
				</ul>
			</li>
			<li>
				<h2>Examples of scope</h2>
				<ul>
					<li>
						Example 1
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_85.txt'; ?>
							</li>
							<li>
								The function <i>baz</i> in L-9 can accesss <i>bar</i> variable even it's executed outside <i>foo</i> function (the lexical scope where really <i>bar</i> is defined).
							</li>
						</ul>
					</li>
					<li>
						Example 2
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_86.txt'; ?>
							</li>
							<li>
								On L-9, it's like we have:
								<ul>
									<li class="noStyle">
										var g = foo(); g();
									</li>
									<li>
										<i>g</i> still remember the lexical scope <i>bar</i>.
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Example 3: Shared scope
						<ul>
							<li>
								This example proves that a closure make a reference to the lexical scope, not just a copy.
							</li>
							<li class="noStyle">
								<?php include 'code/javascript_code_87.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						Example 4: Nested scope
						<ul>
							<li>
								This example also proves that a closure make a reference to the lexical scope, not just a copy.
							</li>
							<li class="noStyle">
								<?php include 'code/javascript_code_88.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						Example 5
						<ul>
							<li>
								This example illustrates how closure works
							</li>
							<li class="noStyle">
								<?php include 'code/javascript_code_89.txt'; ?>
							</li>
							<li>
								Result/problem:
								<ul>
									<li class="noStyle">
										outputs: "i: 6" and after 1s outputs "i: 6" 5 times.
									</li>
								</ul>
							</li>
							<li>
								Explanation:
								<ul>
									<li class="noStyle">
										When 1<sup>st</sup> log (in L-3) is executed, loops are finished and <i>i</i> has the value "6".
									</li>
								</ul>
							</li>
							<li>
								Why we don't have 5 different "i"?
								<ul>
									<li class="noStyle">
										Because the 5 loops have the <strong>exact same global scope</strong>.
									</li>
								</ul>
							</li>
							<li>
								What is the solution?
								<ul>
									<li>
										Each loop should have its own iteration scope.
									</li>
									<li>
										Solution 1: Use IIFE (Immediately-Invoked Function Expression)
										<ul>
											<li class="noStyle">
												<?php include 'code/javascript_code_90.txt'; ?>
											</li>
										</ul>
									</li>
									<li>
										Solution 2: Use the <a href="#letKeyword"><strong>let</strong></a> keyword
										<ul>
											<li>
												See the next "Block scope" example below.
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Example 6: Block scope
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_91.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						Example 7: This is not a closure!
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_92.txt'; ?>
							</li>
							<li>
								This is not a closure because <i>foo.myObject</i> can remember and access it's lexical scope <i>bar</i> but <i>foo.myObject</i> is an object <i>not a function</i>.
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>