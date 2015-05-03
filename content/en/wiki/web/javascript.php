<div class="contentpanel" id="wiki">
	<div class="row-fluid">
		<div class="span12">
			<h1 class="wiki-title page-header"><span id="btnShowHideAllArticles" data-article-visibility="off" class="iconfa-plus-sign"></span> JavaScript</h1>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Presentation<h1>
				</div>
				<div class="wiki-article-body invisible">
					<p>JavaScript language first became available in the web browser Netscape Navigator 2. Initially, it was called LiveScript. However, because Java was the hot technology of the time, Netscape decided that JavaScript sounded more exciting. When JavaScript really took off, Microsoft decided to add its own brand of JavaScript, called JScript, to Internet Explorer.</p>
					<p>ECMA (European Computer Manufacturers Association) is a private organization that develops standards in information and communication systems. One of the standards they control is for JavaScript, which they call ECMAScript.</p>
					<p>A website domain name (a friendly name) is converted to the actual IP address by computers called DNS (Domain Name Servers), which your Internet service provider will have set up for you.</p>
					<p>JavaScript is a scripting language that enables you to enhance static web applications by providing dynamic, personalized, and interactive content.</p>
					<p>JavaScript is an interpreted language rather than a compiled language: As the browser goes through the JavaScript, it passes it to a special program called an interpreter, which converts the JavaScript to the machine code your computer understands.</p>
					<p>The alternative compiled language is one in which the program code is converted to machine code before it’s actually run, and this conversion has to be done only once.</p>
					<p>Including the "<strong>type</strong>" attribute is good practice, but within a web page it can be left off. Browsers such as IE and Firefox use JavaScript as their default script language. This means that if the browser encounters a &lte;script&gt; tag with no type attribute set, it assumes that the script block is written in JavaScript. However, use of the <strong>type</strong> attribute is specifi ed as mandatory by W3C</p>
					<p>
<pre>
<code class="javascript">
	&lt;script type="text/javascript" src="myJavascriptFile.js"></script>
</code>
</pre>
					</p>
					<p class="caution">Be ware of linking to external fi les if they are controlled by other people. It would give those people the ability to control and change your web page, so you need to be very sure you trust them!</p>
					<p>When the browser loads in the web page, the browser goes through it, rendering it tag by tag from top to bottom of the page. This process is called <strong>parsing</strong>.</p>
					<p>The message box displayed by the alert() function is "<strong>modal</strong>": It simply means that the message box won’t go away until the user closes it by clicking the OK button. In fact, parsing of the page stops at the line where the alert() function is used and doesn’t restart until the user closes the message box.</p>
					
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Data Types and Variables<h1>
				</div>
				<div class="wiki-article-body invisible">
					<p>JavaScript, on the other hand, is a weakly typed language and a lot more forgiving about how you use different types of data.</p>
					<p>JavaScript treats integer and floating-points numbers as floatingpoint numbers. It kindly hides the detail from you so you generally don’t need to worry about it. One exception is when you want an integer but you have a fl oating-point number, in which case you’ll round the number to make it an integer.</p>
					<h2>Special characters</h2>
					<ul>
						<li>\b : Backspace</li>
						<li>\f : Form feed</li>
						<li>\n : New line</li>
						<li>\r : Carriage return</li>
						<li>\t : Tab</li>
						<li>\xNN : NN is a hexadecimal number that identifi es a character in the Latin-1character set.</li>
						<li>\uNNNN : Refer to characters using their Unicode escape sequence</li>
					</ul>
					<h2>JavaScript variables</h2>
					<ul>
						<li>Case sensitive.</li>
						<li>You can't use <i>reserved</i> words (like var, with,..etc)</li>
						<li>You are allowed to use numbers in your variable names, but the names must not begin with numbers.</li>
						<li>Certain characters are also forbidden in variable names (like the ampersand (&) and the percent sign (%)).</li>
					</ul>
					<p class="caution">A common method to name variiables is <i>Hungarian notation</i>: where the beginning of each variable name is a three-letter identifier indicating the data type. For example, you may start integer variable names with <i>int</i>; flating-point variable names with <i>flt</i>; string variable names with <i>str</i>, and so on.</p>
					<p>
						Check if a variable has been assigned a value. <i><u>undefined</u> is an actual primitive value in JavaScript</i>
<pre>
<code class="javascript">
function isSet(myVariable){
	if( typeof myVariable == 'undefined'){
		console.log("myVariable is declared but not set");
		return true;
	}else{
		console.log("The value of myVariable  is: " + myVariable);
		return false;
	}
}
</code>
</pre>
					</p>
					<p class="caution">Whenever JavaScript detects that the contents of a variable are no longer usable, such as when you allocate a new value, it performs the garbage collection process and makes the memory available.</p>
					<h2>Basic String Operations</h2>
					<p>When you concatenate string and numbers, Javascript treat the number as string</p>
<pre>
<code class="javascript">
function concatenate(str1, str2){
	return str1 + str2;
}
console.log( concatenate('Hello ', 'world') ); //outputs: Hello world
console.log( concatenate('My age is ', 29) ); //outputs: My age is 29
</code>
</pre>
					<h2>Data Type Conversion</h2>
					<h3>Convert Strings to Numbers</h3>
					<ul>
						<li>parseInt(string): It actually goes through (that is, parses) each character of the string you ask it to convert and sees if it’s a valid number. If it is valid, parseInt() uses it to build up the number; if it is not valid, the command simply stops converting and returns the number it has converted so far.</li>
						<li>parseFloat(string): Returns fl oating-point numbers</li>
					</ul>
					<h3>Convert Numbers to Strings</h3>

<pre>
<code class="javascript">
console.log( parseInt('123') ); //outputs: 123
console.log( parseInt('123abc') ); //outputs: 123
console.log( parseInt('123abc456') ); //outputs: 123

console.log( parseFloat('123') ); //outputs: 123
console.log( parseFloat('1.23abc') ); //outputs: 1.23
console.log( parseFloat('1,23abc456') ); //outputs: 1
</code>
</pre>
					<p class="caution">
						If you use parseInt() or parseFloat() with any string that is empty or does not start with at least one valid digit, you get NaN, meaning Not a Number.
					</p>
					<p>
<pre>
<code class="javascript">
console.log( parseInt('abc') ); //outputs: NAN
console.log( parseFloat('abc123') ); //outputs: NAN
console.log( parseFloat('') ); //outputs: NAN
</code>
</pre>
					- NaN is actually a special value in JavaScript. It has its own function, <strong>isNaN()</strong>, which checks whether something is NaN or not.
<pre>
<code class="javascript">
console.log( parseInt('abc') ); //outputs: NAN
console.log( parseFloat('abc123') ); //outputs: NAN
console.log( parseFloat('') ); //outputs: NAN
</code>
</pre>
					</p>
					<h2>JavaScript Arrays</h2>
					<p>
<pre>
<code class="javascript">
//Declare array with unlimited number of elements
var myArray = new Array();

//Declare array with 6 elements
var myArray = new Array(6);

//Declare array with elements
var myArray = new Array('a', 'hello', 345, '*', 12.06);
//Note that you can’t use this method to declare an array containing just one piece of numerical data,
//such as 345, var myArray = new Array(345);
//because JavaScript assumes that you are declaring an array that will hold 345 elements.

//Another wy to declare arrays
var myArray = new Array();
myArray[0] = 'a';
myArray[1] = 'hello';
myArray[2] = 345;
myArray[3] = '*';
myArray[4] = 12.06;
</code>
</pre>
					</p>
					<p>
						- If you declare an array with a known elements number and then update the index of greater one, JavaScript would not complain and would happily assume that you had changed your mind and wanted an array that had (at least) 131 elements in it.
<pre>
<code class="javascript">
var myArray = new Array(2);
myArray[0] = 'a';
myArray[1] = 'b';
myArray[2] = 'c';
myArray[131] = 'r';
console.log( myArray.length ); //outputs: 132
console.log( myArray ); //outputs: 
</code>
</pre>
					</p>
					<h2>Multi-Dimensional Array</h2>
					<p>
<pre>
<code class="javascript">
var myArray = new Array();

myArray[0] = new Array();
myArray[0][0] = 'a';
myArray[0][1] = 'b';

myArray[1] = new Array();
myArray[1][0] = 'x';
myArray[1][1] = 'y';

myArray[2] = 'hi';

console.log( myArray.length ); //outputs: 3
console.log( myArray ); //outputs: [ Array(2), Array(2), 'hi' ]
</code>
</pre>
					</p>
				</div>
			</section>

			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Decisions, Loops, and Functions<h1>
				</div>
				<div class="wiki-article-body invisible">
					<h2>The if Statement</h2>
<pre>
<code class="javascript">
if(condition1 && condition2 || condition3){
	(...)
}else if(condition4){
	(...)
}else{
	(...)
}
</code>
</pre>
					<h2>Comparing Strings</h2>
					<ul>
						<li>- Javascript goes through each letter in turn on the LHS (Left-Hand Side) and checks it with the letter in the same position on the RHS (Right-Hand Side) to see if it’s actually the same. If at any point it finds a difference, it stops, and the result is false.</li>
						<li>- String comparison in JavaScript is case sensitive.</li>
						<li>- the code numbers (in the ASCII and Unicode character sets) for uppercase letters are lower than the code numbers for lowercase letters.</li>
						<li>
<pre>
<code class="javascript">
("A" < "B") = true //because A comes before B in the alphabet.
("a" < "B") = false //because uppercase letters are treated as always coming before lowercase letters.
</code>
</pre>
						</li>
					</ul>
					<h2>The switch Statement</h2>
					<p>
<pre>
<code class="javascript">
switch(myVariable){
	case "abc":
		//some code here
		break;
	case "def":
		//some code here
		break;
	default:
		//default code
		//This code executes when none of the case statements match
		//The default statement is optional
		break;
}
</code>
</pre>
					</p>
					<p>
						- Executing the same code for different cases
<pre>
<code class="javascript">
var score = prompt("What is your score?", 0);
score = parseInt(score);
switch(score){
	case 0:
		console.log('You get a very bad score');
		break;
	case 1:
	case 2:
		console.log('You get a low score');
		break;
	case 3:
	case 4:
		console.log('You get a good score');
		break;
	case 5:
		console.log('You get a high score');
		break;
	default:
		console.log('Score must be between 1 and 5');
		break;
}
</code>
</pre>
					</p>
					<h2>Looping</h2>
					<h3>For</h3>
					<p>
<pre>
<code class="javascript">
var i;
for(i=0 ; i<5 ; i++){
	console.log("current iteration is: " + i);
}
</code>
</pre>
					</p>
					<h3>For...in</h3>
					<p>
						- This loop works primarily with arrays and objects. It enables you to loop through each element in the array without having to know how many elements the array actually contains.
<pre>
<code class="javascript">
var scores = new Array(10, 20, 30, 40, 50);
for(score in scores){
	console.log("current itertion is: " + score);
	console.log("current value is: " + scores[score]);
}
</code>
</pre>
					</p>
					<h3>While</h3>
					<p>
						- The while loop is more useful when you don’t know how many times you’ll need to loop.
<pre>
<code class="javascript">
while(condition){
	(...)
}
</code>
</pre>
					</p>
					<h3>do while</h3>
					<p>
						- The code in the while loop executes at least once.
<pre>
<code class="javascript">
do{
	(...)
}while(condition);
</code>
</pre>
					</p>
					<h3>The break statement</h3>
					<p>
						- the break statement can also be used as part of the for and while loops when you want to exit the loop prematurely.
<pre>
<code class="javascript">
var scores = new Array(10, 20, -1, 30, 40, 50);
for(score in scores){
	if( scores[score]==-1 ){
		alert("Score -1 reached, you will exit the loop");
		break;
	}
	console.log("scores[" + score + "] = " + scores[score]);
}
//outputs: 10, 20 then exit
</code>
</pre>
					</p>
					<h3>The continue statement</h3>
					<p>
<pre>
<code class="javascript">
var scores = new Array(10, 20, -1, 30, 40, 50);
for(score in scores){
	if( scores[score]==-1 ){
		alert("Score -1 reached, you will exit this iteration");
		continue;
	}
	console.log("scores[" + score + "] = " + scores[score]);
}
//outputs: 10, 20
//then display alert message
//the outputs: 30, 40, 50
</code>
</pre>
					</p>
					<h3>Variables Scope</h3>
					<ul>
						<li>
							- Any variables declared in a web page outside of a function will be available to all script on the page (whether that script is inside a function or otherwise). We term this a <i>global</i> or <i>page-level scope</i>.
<pre>
<code class="javascript">
var score = 0;
function updateScore(){
	console.log("updateScore().score = " + score); //outputs: 0
	score = 100;
}
updateScore();
console.log("global.score = " + score); //outputs: 100
</code>
</pre>
						</li>
						<li>- Variables declared inside a function and function parameters are visible only inside that function.</li>
						<li>
							- Any variable declared without <i>var</i> has a global scope
<pre>
<code class="javascript">
function updateScore(){
	var variable_with_var = 50;
	variable_without_var = 100;
}
updateScore();
console.log("global.variable_with_var = " + variable_with_var);
//outputs: variable_with_var is not defined
console.log("global.variable_without_var = " + variable_without_var); //outputs: 100
</code>
</pre>
						</li>
						<li>- Variables lifetime: when the function fi nishes executing, the variables in that function die and their values are
los</li>
					</ul>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Debugging, and Error Handling<h1>
				</div>
				<div class="wiki-article-body invisible">
					- Use parentheses at the end of the function name when you want to execute the function, and leave the parentheses off when passing the function to another function or property
<pre>
<code class="javascript">
var user = 'anonymous';

function sayHello(){
	console.log("Hello " + user);
}

//getUser function accepts one argument that is a function.
function getUser(greetUser){
	user = 'Ala Eddine JEBALI';
	greetUser();
}

//calls the getUser() function and passes a pointer of the sayHello() function
getUser( sayHello );
//outputs: Hello Ala Eddine JEBALI
</code>
</pre>
					<h2>Error handling</h2>
					<h3>The try ... catch Statements</h3>
					<ul>
						<li>- <i>exception.name</i> property contains the name of the error type</li>
						<li>- <i>exception.message</i> property contains the error message the user would normally see</li>
					</ul>
					<p class="caution">
						Before executing any code, the browser’s JavaScript engine goes through all the code and checks for syntax errors, or code that breaches JavaScript’s rules. If the engine fi nds a syntax error, the browser deals with it as usual.
					</p>
					<p>
<pre>
<code class="javascript">
try{
	console.log('This is code inside the try clause');
	console.log('This code won'’'t work');
}catch(exception){
	console.log('exception: ' + exception.message);
}
//outputs: Unexpected identifier
</code>
</pre>
					<h3>Trowing errors</h3>
					<p class="caution">
						Throwing errors can be very useful for indicating problems such as invalid user input. Rather than using lots of <i>if...else</i> statements, you can check the validity of user input, then use throw to stop code execution in its tracks and cause the error-catching code in the catch block of code to take over. In the catch clause, you can determine whether the error is based on user input, in which case you can notify the user what went wrong and how to correct it. Alternatively, if it’s an unexpected error, you can handle it more gracefully than with lots of JavaScript errors.
					</p>
					<p>
<pre>
<code class="javascript">
function calculateFactorial(number){
	var factorialResult = 1;
	for (factorialResult; number > 0; number-- ){
		factorialResult = factorialResult * number;
	}
	return factorialResult;
}

var nbr = prompt("Enter a number between 1 and 5");
nbr = parseInt(nbr);
try{
	if( isNaN(nbr) ){
		throw 'Please enter a number';
	}else if(nbr<0){
		throw 'Number should be positif';
	}else if(nbr==0){
		throw 'Number should not be zero';
	}else if(nbr>5){
		throw 'Number should not be greater than 5';
	}
	}else{
		console.log('calculateFactorial(' + nbr + ') = ' + calculateFactorial(nbr));
	}
}catch(exception){
	if( typeof(exception) == "string" ){
		//exception thrown by your code, this instance you’ve thrown only primitive strings
		console.log('A code exception encountered: ' + exception);
	}else{
		//it must be the browser that has generated this exception and that exception is an Exception object
		console.log('A browser exception encountered: : ' + exception.message);
	}
}
</code>
</pre>
					</p>
					<h3>Finally Clauses</h3>
					<p>
						- It defines a block of code that will execute whether or not an exception was thrown.
<pre>
<code class="javascript">
try{
	(...)
}catch(exception){
	(...)
}finally{
	console.log('This code is always executed.');
}
</code>
</pre>
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
								<li>











			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">To be prepared<h1>
				</div>
				<div class="wiki-article-body invisible">
					<ul>
						<li>- Look at available debugging tools</li>
						<li>- Look at what we can do with Console</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>