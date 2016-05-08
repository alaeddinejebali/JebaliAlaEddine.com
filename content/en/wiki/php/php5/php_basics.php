<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			PHP basics
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Introduction</h2>
				<ul>
					<li>PHP's syntax is derived from many languages -predominantly the
						C language, but Perl has also had a lot of influence on its
						syntax. With the latest object-oriented additions, more Java-like
						syntax is creeping in as well.</li>
					<li>PHP tags:
						<ul>
							<li>Standard tags: &lt;?php .... ?&gt;</li>
							<li>Short tags: &lt;? //Using this tag may cause a conflict with
								xml headers ?&gt;</li>
							<li>Script tags: &lt;script language="php"&gt; ....
								&lt;/script&gt;</li>
							<li>ASP tags: &lt;% .... %&gt;</li>
							<li class="caution">Short tags, script tags and ASP tags are all
								considered deprecated and their use is strongly discouraged.</li>
						</ul>
					</li>
					<li>Echo vs print:
						<ul>
							<li>Both are used to output data to the screen.</li>
							<li>echo can take multiple parameters (in this case parentheses
								must not be used). print takes only one parameter.</li>
							<li>echo is a constructor and print is a function (print() has a return value , whereas echo()
                                    has a void return type)
                                    <?php include "code/php_code_01.txt"; ?>
                            </li>
							<li class="caution">print statement can only output one string,
								and always returns 1. That's why the echo statement considered
								marginally faster than the print statement since it doesn't
								return any value.</li>
						</ul>
					</li>
					<li>It is important to remember that every character outside of PHP
						tags is copied as-is by the interpreter to the script's output
						-and this includes newline characters. Newlines are, normally,
						ignored by browsers, as they are non-semantic characters in HTML.
						However, they are also used as separators between the header
						portion of a web server's HTTP response and the actual data;
						therefore, outputting a newline character before all of the
						headers have been written to the output can cause some rather
						unpleasant (and unintended) consequences. To mitigate this
						problem, the first newline directly after a closing tag (?> only)
						is stripped by the parser. Doing so also solves a problem
						introduced by the fact that a number of popular text editors will
						automatically prepend a newline to the end of your file, thus
						interfering with include files which are not supposed to output
						any text.</li>
					<li>An easy way to prevent spurious output from an include file is
						to omit the closing tag at the end, which the parser considers
						this perfectly legal.</li>
					<li>Comments:
						<?php include "code/php_code_02.txt"; ?>
                    </li>
					<li>Because the closing tag "?>" will end a comment, code like "//
						Do not show this ?> or this" will output " or this", which is not
						the intended behaviour.</li>
					<li>die() is a construct. die() is also an alias of exit()</li>
					<li>The difference between them is their origin: exit() is from <i>exit()</i>
						in <i>C</i> and <i>die()</i> is from die in <i>Perl</i>.
					</li>
				</ul>
			</li>
			<li>
				<h2>Data types</h2>
				<ol>
					<li>Scalar (contains only one value at time): boolean, int,
						string...</li>
					<li>Composite (compound data types): Array and objects.
                        <?php include "code/php_code_03.txt"; ?>
                    </li>
				</ol>
				<ul>
					<li>Most importantly, you need to be aware that the float data type is not always capable of
                        representing numbers in the way you expect it to. Consider, for example this very simple statement:
                        <?php include "code/php_code_04.txt"; ?>
                        You would expect that the expression ((0.1 + 0.7) * 10) would evaluate to 8 (and, in fact, if you print
                        it out without the integer conversion, it does). However, the statement above outputs 7 instead. This
                        happens because the result of this simple arithmetic expression is stored internally as 7.999999 instead
                        of 8; when the value is converted to int, PHP simply truncates away the fractional part, resulting in a
                        rather significant error (12.5%, to be exact).
                    </li>
					<li>Whenever the precision of your calculation is a relevant factor
						to the proper functioning of your application, you should consider
						using the arbitrary precision functions provided by the <a
						href="http://www.sitepoint.com/fixed-point-math-php-bcmath-precision-loss-cases/"
						target="_blank">BCMath extension</a>
					</li>
					<li>Booleans conversion
						<ul>
							<li>A number (either integer or floating-point) converted into a Boolean becomes false if the
                                original value is zero, and true otherwise.
                                <?php include "code/php_code_05.txt"; ?></li>
							<li>A string is converted to false only if it is empty or if it contains the single character 0.
                                If it contains any other data -even multiple zeros- it is converted to true.
                                <?php include "code/php_code_06.txt"; ?></li>
							<li>When converted to a number or a string, a Boolean becomes 1 if it is true, and 0 otherwise.
                                <?php include "code/php_code_07.txt"; ?></li>
						</ul>
					</li>
					<li>A variable is considered to be NULL if it has been assigned the
						special value NULL, or if it has not yet been assigned a value at
						all.
						<ul>
							<li>isset($v) returns true when:
								<ul>
									<li>$v is set</li>
									<li>$v != null</li>
								</ul>
							</li>
							<li>is_null($v) returns true only when:
								<ul>
									<li>$v == null</li>
								</ul>
							</li>
							<li>empty($v) returns true only when
								<ul>
									<li>$v == ''</li>
									<li>$v == 0</li>
									<li>$v == '0'</li>
									<li>$v == array() // an empty array</li>
									<li>$v == false</li>
									<li>$v == null</li>
									<li>$v doesn't exist</li>
								</ul>
							</li>
							<li>isset vs empty
								<ul>
									<li>isset will determine if a variable is set and is not NULL.</li>
									<li>empty works in the opposite way of isset.</li>
									<li>Empty checks to see if a variable is empty. Empty is
										interpreted as: '' (an empty string), 0 (0 as an integer), '0'
										(0 as a string), NULL, FALSE, array() (an empty array), and
										"$var;" (a variable declared, but without a value).</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>Other data types
						<ul>
							<li>The resource data type is used to indicate external resources
								that are not used natively by PHP, but that have meaning in the
								context of a special operation such as, for example, handling
								files or manipulating images.</li>
							<li>You cannot convert any value to a resource.</li>
							<li>You can, however, convert a resource to a numeric or string
								data type, in which case PHP will return the numeric ID of the
								resource, or the string Resource id # fullowed by the resource
								ID.</li>
						</ul>
					</li>
					<li>Variables
						<ul>
							<li>PHP is loosely (not strongly) typed, meaning that it will
								implicitly change the type of a variable as needed, depending on
								the operation being performed on its value.</li>
							<li>Variables must be named using only letters (a-z, A-Z),
								numbers and the underscore character</li>
							<li>Their namesmust start with either a letter or an underscore.</li>
							<li>They are case sensitive.</li>
						</ul>
					</li>
					<li>Variable variables
						<ul>
							<li>Avariable whose name is contained in another variable.
                                <?php include "code/php_code_08.txt"; ?>
                            </li>
							<li>It is indeed possible to create variables whose names do not fullow the constraints listed
                                above. This is also possible by defining the name between braces:
                                <?php include "code/php_code_09.txt"; ?>
                            </li>
							<li>A technique similar to variable variables can also be used to huld function names inside a
                                variable:
                                <?php include "code/php_code_10.txt"; ?>
                            </li>
						</ul>
					</li>
					<li>Constants
						<ul>
							<li>Constant names, like variables, are case-sensitive; they also
								fullow the same naming requirements, with the exception of the
								leading $.
							
							<li>It is considered best practice to define constants using only upper-case names.
                                <?php include "code/php_code_11.txt"; ?>
                            </li>
						</ul>
					</li>
					<li>operators
						<ul>
							<li>With very few exceptions, PHP's operations are binary:
								meaning that they require two operands.
							
							<li>The position of the operator determines whether the
								adjustment it performs takes place prior to, or after returning
								the value:
								<ul>
									<li>If the operator is placed after its operand, the
										interpreter will first return the value of the latter
										(unchanged), and then either increment or decrement it by one.
									</li>
									<li>If the operator is placed before the operand, the
										interpreter will first increment or decrement the value of the
										latter, and then return the newly-calculated value.</li>
									<li>Exemple:
                                        <?php include "code/php_code_12.txt"; ?>
                                    </li>
								</ul>
							
							<li>The variable being incremented or decremented will be converted to the appropriate numeric data
                                type, thus, the fullowing code will return 1, because the string Test is first converted to the
                                integer number 0, and then incremented:
                                <?php include "code/php_code_13.txt"; ?>
                            </li>
							<li>String conatenation operator (the "." operator)
								<ul>
									<li>It is important to remember that this is not just the
										proper way to concatenate two strings using an operation, it
										is the only way.</li>
									<li>Using the addition operator will result in the two strings
										being first converted to numeric values, and then added
										together (thus also yielding a numeric value).</li>
								</ul>
							</li>
							<li>Bitwise operators
								<ul>
									<li>Bitwise XOR (exclusive OR): A XOR B = 1 if A OR B equal to
										1, not both of them.</li>
								</ul>
							</li>
							<li>Shift bits left or right
                                <?php include "code/php_code_14.txt"; ?>
                            </li>
						</ul>
					</li>
					<li>Referencing variables
						<ul>
							<li>All data types (except objects) are passed by value: when you
								assign a variable to another, any subsequent change to the
								left-hand operator is not reflected in the right-hand one.</li>
							<li>Objects are passed by reference.</li>
							<li>To work with variables as references:
                                <?php include "code/php_code_15.txt"; ?>
                            </li>
							<li>unlike what happens in many other languages, by reference
								activity is often slower than its by-value counterpart, because
								PHP uses a clever "deferred-copy" mechanism that actually
								optimizes by-value assignments.</li>
						</ul>
					</li>
					<li>$A == $B returns true when A and B have the same value</li>
					<li>$A === $B returns true when A and B have the same value and are
						of the same data type</li>
					<li>It's important to understand that all logical operators only
						work with Boulean values; therefore, PHP will first convert any
						other value to a Boulean and then perform the operation.</li>
					<li>Example:
						<ul>
							<li>
                                <?php include "code/php_code_16.txt"; ?>
                                <?php include "code/php_code_17.txt"; ?>
                            </li>
						</ul>
					</li>
					<li>switch vs if: The tested value (between if and elseif) must be
						evaluated every time an if condition is encountered. using switch,
						it'll be evaluated only once.</li>
					<li>The built-in PHP_EOL constant represents the "end of line" marker for your current operating system.
                        <?php include "code/php_code_18.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>break and continue</h2>
				<ul>
					<li>Example:
                        <?php include "code/php_code_19.txt"; ?>
                    </li>
					<li>Break operations
						<ul>
							<li>Remember to always terminate a break statement with a
								semiculon if it does not have any parameters. If you do not do
								so and it is fullowed by an expression that returns an integer
								number, you may end up causing the interpreter to randomly exit
								from more than one loop causing all sorts of
								difficult-to-troubleshoot situations.</li>
							<li>There are cases in which, rather than terminating a loop, you simply want to skip over the
                                remainder of an iteration and immediately skip over to the next. This is done with the continue
                                statement.
                                <?php include "code/php_code_20.txt"; ?>
                            </li>
							<li>break vs continue
								<ul>
									<li>
										Example:
										<?php include "code/php_code_195.txt"; ?>
									</li>
									<li>continue: goes to P1</li>
									<li>continue: goes to P2</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Types of errors</h2>
				<ol>
					<li>Parse Error (E_STRICT): Compile-time errors Errors
						<ul>
							<li>Detected by the parser while it is compiling a script.</li>
							<li>Cannot be trapped from within the script itself.</li>
							<li>Example: When we make mistake in PHP code like missing
								semicolon or any unexpected symbol in code.</li>
						</ul>
					</li>
					<li>Fatal errors
						<ul>
							<li>Errors that halt the execution of a script.</li>
							<li>Cannot be trapped.</li>
							<li>Example: instantiating an object of a non-existent class, or
								calling a non-existent function.</li>
						</ul>
					</li>
					<li>Warnings
						<ul>
							<li>Recoverable errors that indicate a run-time fault.</li>
							<li>Do not halt the execution of the script.</li>
							<li>By default, these errors are displayed to the user.</li>
							<li>Example: attempting to include() a file which does not exist.
							</li>
						</ul>
					</li>
					<li>Notices
						<ul>
							<li>Indicate that an error condition occurred (when running the
								script), but is not necessarily significant.</li>
							<li>Do not halt the execution of the script.</li>
							<li>Example: accessing a variable that has not yet been defined.
							</li>
						</ul>
					</li>
				</ol>
			</li>
			<li>
				<h2>Error reporting</h2>
				<ul>
					<li>Several configuration directives in the php.ini file allow you
						to finetune how and which errors are reported. The most important
						ones are:
						<ol>
							<li>error_reporting
								<ul>
									<li><?php include "code/php_code_22.txt"; ?></li>
									<li>Error reporting can also be changed dynamically from within
										a script by calling the error_reporting(report_level)
										function.</li>
									<li>Optional. Specifies the error report level for the current
										script. Value number and constant name are accepted, however,
										constant names are recommended for compatibility for future
										PHP versions.</li>
									<li>The error_reporting() funtion returns the old error_reporting level.
                                        <?php include "code/php_code_23.txt"; ?>
                                    </li>
								</ul>
							</li>
							<li>display_errors
								<ul>
									<li>This determines whether errors should be printed to the
										screen as part of the output or if they should be hidden from
										the user.</li>
									<li>default value = 1
                                        <?php include "code/php_code_24.txt"; ?>
                                    </li>
								</ul>
							</li>
							<li>log_errors
								<ul>
									<li>Tells whether script error messages should be logged to the
										server's error log.</li>
									<li>default value = 0</li>
								</ul>
							</li>
						</ol>
					</li>
				</ul>
			</li>
			<li>
				<h2>PHP Global Variables - Superglobals</h2>
				<ul>
					<li>$GLOBALS
						<ul>
							<li>Used to access declared global variables from anywhere in the PHP script (also from within
                                functions or methods).
                                <?php include "code/php_code_25.txt"; ?>
                            </li>
						</ul>
					</li>
					<li>$_SERVER
						<ul>
							<li>Hulds information about headers, paths, and script locations.
                                <?php include "code/php_code_26.txt"; ?>
                            </li>
						</ul>
					</li>
					<li>$_REQUEST: used to cullect data after submitting an HTML form.</li>
					<li>$_POST</li>
					<li>$_GET</li>
					<li>$_FILES: an associative array of items uploaded to the current
						script via the HTTP POST method.</li>
					<li>$_ENV</li>
					<li>$_COOKIE</li>
					<li>$_SESSION</li>
				</ul>
			</li>
		</ul>
	</div>
</section>