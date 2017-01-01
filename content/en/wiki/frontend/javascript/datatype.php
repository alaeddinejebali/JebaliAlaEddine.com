<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">Data type<h1>
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Javacript variables</h2>
				<ul>
					<li>JavaScript variables are case-sensitive.</li>
					<li>You can't use <i>reserved</i> words (like <i>"var"</i>, <i>"with"</i>)</li>
					<li>You are allowed to use numbers in your variable names, but the names must not begin with numbers.</li>
					<li>
						Check if a variable has been assigned a value. <i>undefined</i> is an actual primitive value in JavaScript.
						<?php include "code/javascript_code_02.txt"; ?>
					</li>
					<li>Whenever JavaScript detects that the contents of a variable are no longer usable, such as when you allocate a new value, it performs the garbage collection process and makes the memory available.</li>
				</ul>
			</li>
			<li>
				<h2>Data types</h2>
				<ul>
					<li>
						JavaScript has one complex data type: the <a href="#oop">Object</a> data type.
					</li>
					<li>
						JavaScript has 5 primitive types (all other values are objects):
						<ol>
							<li>
								Number
							</li>
							<li>
								String
							</li>
							<li>
								Boolean
							</li>
							<li>
								Undefined
							</li>
							<li>
								Null
							</li>
						</ol>
					</li>
					<li class="caution">
						Primitive values are always passed by value. Objects are always (by default) passed by reference.
						<ul>
							<li>
								<?php include "code/javascript_code_93.txt"; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Basic String Operations</h2>
				<ul>
					<li>
						When you concatenate string and numbers, Javascript treat the number as string
						<?php include "code/javascript_code_03.txt"; ?>
					</li>
					<li class="noStyle">
						<h3>Type Conversion</h3>
						<ul>
							<li>
								Convert Strings to Numbers
								<ul>
									<li>
										parseInt(string): It actually goes through (that is, parses) each character of the string you ask it to convert and sees if it's a valid number. If it is valid, parseInt() uses it to build up the number; if it is not valid, the command simply stops converting and returns the number it has converted so far.
									</li>
									<li>
										parseFloat(string): Returns fl oating-point numbers
									</li>
								</ul>
							</li>
							<li>
								Convert Numbers to Strings
								<ul>
									<li class="caution">
										<?php include "code/javascript_code_04.txt"; ?>
									</li>
									<li class="caution">
										<?php include "code/javascript_code_13.txt"; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Searching</h3>
						<ul>
							<li>
								<strong>string.indexOf(searchValue[, fromIndex])</strong>
								<ul>
									<li>
										returns the index within the calling String object of the first occurrence of the specified value, starts searching from the beginning of the string, or the position you specified in the second parameter, and works towards the end,. Returns -1 if the value is not found. It's case sensitive.
									</li>
								</ul>
							</li>
							<li>
								<strong>string.lastIndexOf(searchValue[, fromIndex])</strong>
								<ul>
									<li>
										The same but it starts at the end of the string, or the position you specified in the second parameter, and works towards the beginning of the string.
										<?php include "code/javascript_code_24.txt"; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Cutting Strings</h3>
						<ul>
							<li>
								<strong>string.substring(start</strong><i>[, end]</i><strong>)</strong>
							</li>
							<li>
								<strong>string.substr(start</strong><i>[, length]</i><strong>)</strong>
							</li>
							<li>
								The difference between <i>substr()</i> and <i>substring()</i> is in the parameters they require.
								<?php include "code/javascript_code_25.txt"; ?>
								In string.substring(start[, end]) the start index is included but the <i>end</i>index is not.
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<ul>
							<h3>Selecting a Single Character from a String</h3>
							<li>
								<ul>
									<li>
										<strong>string.charAt(indexPosition)</strong>
										<ul>
											<li>returns the character in that position.</li>
										</ul>
									</li>
									<li>
										<strong>string.charCodeAt(indexPosition)</strong>
										<ul>
											<li>
												similar in use to the charAt() method, but instead of returning thecharacter itself, it returns a number that represents the decimal character code for that character in the Unicode character set (recall that computers only understand numbers)
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>JavaScript Arrays</h2>
				<ul>
					<li>
						If you declare an array with a known elements number and then update the index of greater one, JavaScript would not complain and would happily assume that you had changed your mind and wanted an array that had (at least) 131 elements in it.
					</li>
					<li>
						<?php include "code/javascript_code_14.txt"; ?>
					</li>
					<li>
						<?php include "code/javascript_code_15.txt"; ?>
					</li>
					<li class="noStyle">
						<h3>Copying Part of an Array</h3>
						<ul>
							<li>
								<strong>myArra.slice(</strong>start[, end]<strong>)</strong>
								<ul>
									<li class="noStyle">
										<?php include "code/javascript_code_29.txt"; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<h3>Convert an Array into a String</h3>
						<ul>
							<li>
								<strong>myArra.join(</strong>optionalSeparator<strong>)</strong>
								<ul>
									<li>
										Concatenates all the elements in an array and returns them as a string.
										<?php include "code/javascript_code_30.txt"; ?>
									</li>
								</ul>
							</li>	
						</ul>
					</li>
					<li>
						<h3>Order elements in an Array</h3>
						<ul>
							<li>
								Usefull when you have same type data in an array
							</li>
							<li>
								Ascending sort: <strong>.sort()</strong> and Descending sort: <strong>.reverse()</strong>
							</li>
						</ul>
					</li>
					<li>
						<h3>Finding Array Elements</h3>
						<ul>
							<li class="noStyle">
								<?php include "code/javascript_code_32.txt"; ?>
							</li>
						</ul>
					</li>
					<li>
						<h3>Iterative methods</h3>
						<ul>
							<li>
								<strong>every()</strong>
								<ul>
									<li>
										Tests whether <strong>all elements</strong> in the array pass the test in your function.
										<?php include "code/javascript_code_34.txt"; ?>
									</li>
								</ul>
							</li>
							<li>
								<strong>some()</strong>
								<ul>
									<li>
										Tests whether <i>some elements</i> in the array pass the test in your function.
										<?php include "code/javascript_code_34.txt"; ?>
									</li>
								</ul>
							</li>
							<li>
								<strong>filter()</strong> 
								<ul>
									<li>
										Executes your function on every element in the array, and if your function returns true for a particular element, that element is added to another array the filter() method returns.
										<?php include "code/javascript_code_36.txt"; ?>
									</li>
								</ul>
							</li>
							<li>
								<strong>Foreach()</strong> 
								<ul>
									<li>
										Unlike the previous iterative methods, forEach() and map() methods do not test each element in the array with your function; instead, the function you write should perform some kind of operation that uses the element in some way.
										<?php include "code/javascript_code_37.txt"; ?>
									</li>
									<li>
										Note how the function calculateDouble() cannot return any value; its only purpose is to perform an operation on every element in the array. While this is useful in some cases, it’s almost useless when you want the results of the operation. That’s where the map() method comes in.
									</li>
								</ul>
							</li>
							<li>
								<strong>Map()</strong> 
								<ul>
									<li>
										the map() method is similar to that of forEach(), except that the results of every operation are stored in another array that the map() method returns.
										<?php include "code/javascript_code_38.txt"; ?>	
									</li>
					
					
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Math Object</h2>
					<ul>
						<li>
							<strong>abs(n)</strong>
							<ul>
								<li>
									returns the absolute value of n
									<?php include "code/javascript_code_39.txt"; ?>
								</li>
			
			
							</ul>
						</li>
						<li>
							<strong>min()</strong> and <strong>max()</strong>
							<ul>
								<li class="noStyle"><?php include "code/javascript_code_40.txt"; ?></li>
							</ul>
						</li>
						<li>
							<strong>Rounding Numbers</strong>
							<ul>
								<li>
									ceil()
									<ul>
										<li>rounds a number up to the next largest whole number or integer.</li>
									</ul>
								</li>
								<li>
									floor()
									<ul>
										<li>rounds a number up to the next largest whole number or integer.</li>
									</ul>
								</li>
								<li>
									round()
									<ul>
										<li>
											rounds up if the decimal part is >= .5, and rounds down otherwise.
											<?php include "code/javascript_code_41.txt"; ?>
										</li>
									</ul>
								</li>
								<li class="noStyle">
									<table class="table table-striped table-bordered">
										<thead>
											<tr>
												<th></th><th>ceil</th><th>floor</th><th>round</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>4</td><td>4</td><td>4</td><td>4</td>
											</tr>
											<tr>
												<td>2.5</td><td>3</td><td>2</td><td>3</td>
											</tr>
											<tr>
												<td>2.7</td><td>3</td><td>2</td><td>3</td>
											</tr>
											<tr>
												<td>2.2</td><td>3</td><td>2</td><td>2</td>
											</tr>
											<tr>
												<td>6.6</td><td>7</td><td>6</td><td>7</td>
											</tr>
											<tr>
												<td>-4.3</td><td>-4</td><td>-5</td><td>-4</td>
											</tr>
											<tr>
												<td>-4.5</td><td>-4</td><td>-5</td><td>-4</td>
											</tr>
											<tr>
												<td>-4.8</td><td>-4</td><td>-5</td><td>-5</td>
											</tr>
										</tbody>
									</table>
								</li>
								<li>
									random()
									<ul>
										<li>returns a random fl oating-point number in the range between
											0 and 1 (1 is not included)</li>
			
										<li class="noStyle"><?php include "code/javascript_code_42.txt"; ?></li>
			
									</ul>
								</li>
							</ul>
						</li>
					</ul>
			</li>
		</ul>
	</div>
</section>