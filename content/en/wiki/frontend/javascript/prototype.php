<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">Prototype<h1>
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>dunder-proto</h2>
				<ul>
					<li>
						The <strong><i>__proto__</i></strong> is called <i>dunder-proto</i>.
					</li>
				</ul>
			</li>
			<li>
				<h2>Introduction to prototype</h2>
				<ul>
					<li>
						When you create a function <i>foo</i>, JS engine creates 2 objects:
						<ol>
							<li>
								The <i>foo</i> function object (accessible using <i>foo()</i>).
							</li>
							<li>
								The property object accessible using the property <i>foo.prototype</i>.
								<?php include 'code/javascript_code_115.txt'; ?>
								<i>obj</i> is an empty object <u>but</u> it have a property "<strong><i>__proto__</i></strong> created by JS.
							</li>
						</ol>
					</li>
					<li>
						When you execute a function using "<i>new</i>" keyword, JS creates a new object having "<i>__proto__</i>" property which points to the prototype of the original function.
						<?php include 'code/javascript_code_116.txt'; ?>
					</li>
				</ul>
			</li>
			<li>
				<h2>How to create objects in javaScript?</h2>
				<ol>
					<li>
						<strong>Inline</strong>
						<ul>
							<li class="noStyle">
								<?php include "code/javascript_code_94.txt"; ?>
							</li>
						</ul>
					</li>
					<li>
						<strong>Using Functions</strong>
						<ul>
							<li class="noStyle">
								<?php include "code/javascript_code_96.txt"; ?>
							</li>
						</ul>
					</li>
					<li>
						<strong>Using Constructor</strong>
						<ul>
							<li>
								When you use "<i>new</i>" keyword, you tell to JavaScript that you're calling the constructor.
							</li>
							<li>
								Unlike Java, the name of the constructor in JS is not necessary to be the same as <i>"the class"</i>.
							</li>
							<li>
								<?php include "code/javascript_code_97.txt"; ?>
							</li>
							<li>
								When you call a function in a constructor mode (using <i>"new"</i>), JS adds -internally- 2 lines:
								<ol>
									<li>
										decalare a <i>this</i> object (L-2)
									</li>
									<li>
										return <i>this</i> object (L-6)
									</li>
								</ol>
							</li>
							<li>
								It's just a convention to name the constructor as "<i>the class</i>".
								<?php include "code/javascript_code_98.txt"; ?>
							</li>
							<li>
								Using the regular function in constructor mode still work but the stuff added by JS is never used (L-8)
								<?php include "code/javascript_code_99.txt"; ?>
							</li>
							<li>
								Using function in a constructor mode (without <i>new</i> keyword) doesn't work because no <i>new</i> object created (no this).
								<?php include "code/javascript_code_100.txt"; ?>
							</li>
						</ul>
					</li>
				</ol>
			</li>
			<li>
				<h2>Why use prototype?</h2>
				<ul>
					<li>
						Objectif: Add shared behaviour at runtime.
					</li>
					<li>
						Example
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_102.txt'; ?>
								Now imagine that we want to add more properties.
							</li>
							<li class="noStyle">
								<ol>
									<li>
										Solution 1: Add them to the constructor
										<ul>
											<li>
												The problem is that we'll change all objects declaration (empl1, ...empln)
											</li>
										</ul>
									</li>
									<li>
										Solution 2: Use prototype
										<ul>
											<li>
												<?php include 'code/javascript_code_103.txt'; ?>
											</li>
											<li>
												Use for already created objects
												<ul>
													<li class="noStyle">
														<?php include 'code/javascript_code_104.txt'; ?>
													</li>
												</ul>
											</li>
											<li>
												Use for new objects
												<ul>
													<li class="noStyle">
														<?php include 'code/javascript_code_105.txt'; ?>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ol>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Classes vs Prototype</h2>
				<ul>
					<li>
						With classes you have to define all properties <strong>before the execution</strong>.
					</li>
					<li>
						With prototype you can add more properties <strong>at runtime</strong>.
					</li>
				</ul>
			</li>
			<li>
				<h2>Linked prototype Diagram</h2>
				<ul>
					<li style="noStyle">
						<img src="/content/en/wiki/frontend/javascript/images/js_01.png" alt="Linked prototype Diagram" />
					</li>
					<li>
						When you request <i>empl1.aPropertyName</i>, this how JavaScript internally works:
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_109.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			<li>
				<h2>.constructor</h2>
				<ul>
					<li>
						Returns a reference to the Object constructor function that created the instance object.
					</li>
					<li>
						Note that the value of this property is a reference to the function itself, not a string containing the function's name.
					</li>
					<li>
						Example 1: get and change the constructor of an object
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_106.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						Example 2: prove that 2 objects points to the same object
						<ul>
							<li class="noStyle">
								<?php include 'code/javascript_code_107.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						All objects will have a constructor property.
					</li>
					<li>
						Objects created without the explicit use of a constructor function (i.e. the object and array literals) will have a constructor property that points to the Fundamenal Object constructor type for that object.
						<?php include 'code/javascript_code_110.txt'; ?>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>