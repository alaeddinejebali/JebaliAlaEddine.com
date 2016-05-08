<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Debugging, and Error Handling<h1>
				</div>
				<div class="wiki-article-body invisible">
					- Use parentheses at the end of the function name when you want to execute the function, and leave the parentheses off when passing the function to another function or property

					<li><?php include "code/javascript_code_16.txt"; ?></li>
					<h2>Error handling</h2>
					<h3>The try ... catch Statements</h3>
					<ul>
						<li>- <i>exception.name</i> property contains the name of the error type</li>
						<li>- <i>exception.message</i> property contains the error message the user would normally see</li>
					</ul>
					<p class="caution">
						Before executing any code, the browser's JavaScript engine goes through all the code and checks for syntax errors, or code that breaches JavaScript's rules. If the engine finds a syntax error, the browser deals with it as usual.
					</p>
					<p>
						<li><?php include "code/javascript_code_17.txt"; ?></li>

					<h3>Throwing errors</h3>
					<p class="caution">
						Throwing errors can be very useful for indicating problems such as invalid user input. Rather than using lots of <i>if...else</i> statements, you can check the validity of user input, then use throw to stop code execution in its tracks and cause the error-catching code in the catch block of code to take over. In the catch clause, you can determine whether the error is based on user input, in which case you can notify the user what went wrong and how to correct it. Alternatively, if it's an unexpected error, you can handle it more gracefully than with lots of JavaScript errors.
					</p>
					<p>
						<li><?php include "code/javascript_code_18.txt"; ?></li>

					</p>
					<h3>Finally Clauses</h3>
					<p>
						- It defines a block of code that will execute whether or not an exception was thrown.
<li><?php include "code/javascript_code_19.txt"; ?></li>

					</p>
					<h3>Debugging</h3>
					<ul>
						<li>- <strong>Breakpoints</strong>: tell the debugger it should break, or pause code execution, at a certain point.</li>
						<li>- <strong>Watches</strong>: allow you to specify variables that you want to inspect when your code pauses at a breakpoint.</li>
						<li>- The <strong>call stack</strong>: is a record of what functions and methods have been executed to the breakpoint.</li>
						<li>
							- <strong>Stepping</strong> is the most common procedure in debugging. It allows you to execute one line of code at a time. There are three ways to step through code:
							<ul>
								<li>- <strong>Step Into</strong>: executes the next line of code. If that line is a function call, the debugger executes the function and halts at the first line of the function.</li>
								<li>- <strong>Step Over</strong>: like Step Into, executes the next line of code. If that line is a function, Step Over executes the entire function and halts at the first line outside the function.</li>
								<li>- <strong>Step Out</strong>: returns to the calling function when you are inside a called function. Step Out resumes the execution of code until the function returns. It then breaks at the return point of the function.</li>
							</ul>
						</li>
						<li>- Using Firbug</li>
						<li><img src="/content/images/javascript/01.png" /></li>
						<li>
							- The <strong>debugger</strong> Keyword: The debugger keyword stops the execution of JavaScript, and calls (if available) the debugging function. This has the same function as setting a breakpoint in the debugger.
							<ul>
								<li><?php include "code/javascript_code_20.txt"; ?></li>
								<li>

								</li>
							</ul>
						</li>
					</ul>
					<h3>Debugging in Internet Explorer</h3>
					<p>- To activate it:</p>
					<ul>
						<li>1. Click Tools -> Internet Options.</li>
						<li>2. Under the Browsing section, click the Advanced tab, and uncheck the box next to "Disable script debugging (Internet)</li>
						<li>3. You can bring up the debugger by clicking Tools -> Developer Tools.</li>
					</ul>
					<h3>Debugging in Safari</h3>
					<p>- To activate it:</p>
					<ul>
						<li>1. Click Settings -> Preferences</li>
						<li>2. Click the Advanced tab and select the Show Develop Menu in Menu Bar option</li>
						<li>3. Click the Settings menu button and select the Show Menu Bar option. This will display the traditional menus at the top of the window.</li>
						<li>4. To open the debugger, select Develop ➪ Start Debugging JavaScript from the menu bar.</li>
					</ul>
					<h3>Debugging in Opera: <a href="http://www.opera.com/dragonfly/">Dragonfly</a></h3>
				</div>
</section>