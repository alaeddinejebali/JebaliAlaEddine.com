<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#presentation">Presentation</a>
		</h4>
	</div>
	<div id="presentation" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Presentation</h2>
					<ul>
						<li>
							aaaaa
						</li>
					</ul>
				</li>
				<li>
					<h2>Functions</h2>
					<ul>
						<li>
							Functions in JavaScript have other capabilities than functions in other OOP languages don't have.
						</li>
						<li>
							There are 2 default arguments to every function
							<ol>
								<li>arguments</li>
								<li>
									this
									<ul>
										<li class="noStyle">
											<?php include "code/javascript_code_101.txt"; ?>
										</li>
									</ul>
								</li>
							</ol>
						</li>
						<li>
							Closures
							<ul>
								<li>
									See <a href="#closures">this section</a>.
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li id="hoisting">
					<h2>Hoisting</h2>
					<ul>
						<li>
							When you execute your JavaScript code, the interpreter goes through the code twice:
							<ol>
								<li>
									It does a safety check and small optimizations of your code.
									Safety checks such as making sure that the syntax is right, if there are any calls to <i>eval</i> or <i>with</i>, etc...
									Then, it optimizes the code as best as it can to ensure better performance when it is executed.
									This is also where <strong>hoisting</strong> occurs.
								</li>
								<li>
									It actually executes your code by going through it line by line, doing the assignments, calling the functions, and so on.
								</li>
							</ol>
						</li>
						<li>
							<i>Hoisting</i> is when the JavaScript interpreter moves all variable and function declarations to the top of the current scope.
							<ul>
								<li>
									It's important to keep in mind that only the actual declarations are hoisted, and that assignments are left where they are.
								</li>
								<li>
									So, it's not correct to say that variables and functions declarations are physically moved to the top of your coding.
								</li>
								<li>
									What does happen is that <strong>variables and functions <u>declarations</u></strong> are put <strong>into memory during the compile phase</strong>, but stays exactly where you typed it in your coding.
								</li>
								<li>
									Example:
									<ul>
										<li>
											The code below will outputs: Hello undefined
											<?php include "code/javascript_code_130.txt"; ?>
										</li>
										<li>
											This is because <strong>only declaration</strong> of variables and functions are put into memory during the compilation phase like this:
											<?php include "code/javascript_code_131.txt"; ?>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							One of the advantages you get from JavaScript putting function declarations into the memory before it executes any code segment, is this allows you to use a function before you declare it in your code.
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>