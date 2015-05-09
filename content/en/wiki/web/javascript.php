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
					<p>The alternative compiled language is one in which the program code is converted to machine code before it's actually run, and this conversion has to be done only once.</p>
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
					<p>The message box displayed by the alert() function is "<strong>modal</strong>": It simply means that the message box won't go away until the user closes it by clicking the OK button. In fact, parsing of the page stops at the line where the alert() function is used and doesn't restart until the user closes the message box.</p>
					
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Data Types and Variables<h1>
				</div>
				<div class="wiki-article-body invisible">
					<p>JavaScript, on the other hand, is a weakly typed language and a lot more forgiving about how you use different types of data.</p>
					<p>JavaScript treats integer and floating-points numbers as floatingpoint numbers. It kindly hides the detail from you so you generally don't need to worry about it. One exception is when you want an integer but you have a fl oating-point number, in which case you'll round the number to make it an integer.</p>
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
						<li>parseInt(string): It actually goes through (that is, parses) each character of the string you ask it to convert and sees if it's a valid number. If it is valid, parseInt() uses it to build up the number; if it is not valid, the command simply stops converting and returns the number it has converted so far.</li>
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
//Note that you can't use this method to declare an array containing just one piece of numerical data,
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
						<li>- Javascript goes through each letter in turn on the LHS (Left-Hand Side) and checks it with the letter in the same position on the RHS (Right-Hand Side) to see if it's actually the same. If at any point it finds a difference, it stops, and the result is false.</li>
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
						- The while loop is more useful when you don't know how many times you'll need to loop.
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
						Before executing any code, the browser's JavaScript engine goes through all the code and checks for syntax errors, or code that breaches JavaScript's rules. If the engine fi nds a syntax error, the browser deals with it as usual.
					</p>
					<p>
<pre>
<code class="javascript">
try{
	console.log('This is code inside the try clause');
	console.log('This code won'''t work');
}catch(exception){
	console.log('exception: ' + exception.message);
}
//outputs: Unexpected identifier
</code>
</pre>
					<h3>Trowing errors</h3>
					<p class="caution">
						Throwing errors can be very useful for indicating problems such as invalid user input. Rather than using lots of <i>if...else</i> statements, you can check the validity of user input, then use throw to stop code execution in its tracks and cause the error-catching code in the catch block of code to take over. In the catch clause, you can determine whether the error is based on user input, in which case you can notify the user what went wrong and how to correct it. Alternatively, if it's an unexpected error, you can handle it more gracefully than with lots of JavaScript errors.
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
		//exception thrown by your code, this instance you've thrown only primitive strings
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
<pre>
<code class="javascript">
function firstCall(){
	secondCall();
}
function secondCall(){
	thirdCall();
}
function thirdCall(){
	//
}
function button1_onclick(){
	debugger
	firstCall();
}
</code>
</pre>
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

			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">An Object based language<h1>
				</div>
				<div class="wiki-article-body invisible">
					<h2>Is JavaScript Object Oriented?</h2>
					<p>To be done...</p>
					<h2></h2>
					<p>- Variables assigned to objects don't hold the actual data, but rather a reference to the memory address where the data can be found.</p>
					<p>
						- When it comes to objects, it's a reference to the object and not the object itself that is stored in a variable. When you did the assignment, it didn't make a copy of the array object, it simply copied the reference.
<pre>
<code class="javascript">
var myArray1 = new Array('a', 'b', 'c');
var myArray2 = myArray1;
myArray2[2] = 'Yes';
console.log(myArray1);
//outputs: ['a', 'b', 'Yes']
</code>
</pre>
					</p>
					<h2>Create JavaScript object</h2>
					<p>var myVariable = new ConstructorName(optional parameters);</p>
					<h2>String, Number, and Boolean objects</h2>
<pre>
<code class="javascript">
var str = new String("Hello world");
console.log("str.length = " + str.length);
var nbr = new Number(19);
console.log("toExponential(" + nbr + ") = " + nbr.toExponential());
var test = new Boolean();
</code>
</pre>
					<p class="caution">If you declare a primitive string (var str = "Hello world";) and then treat it as an object (str.length), such as by trying to access one of its methods or properties, JavaScript will know that the operation you're trying to do won't work. The operation will only work with an object; for example, it would be valid with a String object. In this case, JavaScript converts the plain-text string into a temporary String object, just for that operation, and destroys the object when it's fi nished the operation. The same ideas expressed here are also true for number and Boolean primitives and their corresponding Number and Boolean objects.</p>
<p>
<pre>
<code class="javascript">
var str1 = new String("Hello world");
var str2 = new String("Hello world");
var str3 = str1;
if(str1 == str2){
	console.log("str1 == str2");
}else{
	console.log("str1 is different from str2");
}
//outputs: str1 is different from str2

if(str3 == str1){
	console.log("str3 == str1");
}else{
	console.log("str3 is different from str1");
}
//outputs: str3 == str1
</code>
</pre>
</p>
					<p class="caution">When you try to compare string objects with primitive string values, the actual values are compared, but with String objects, the object references are compared.</p>
					<h2>String object</h2>
					<h3>Finding a String Inside Another String</h3>
					<ul>
						<li><strong>string.indexOf(searchValue[, fromIndex])</strong>: returns the index within the calling String object of the first occurrence of the specified value, starts searching from the beginning of the string, or the position you specified in the second parameter, and works towards the end,. Returns -1 if the value is not found. It's case sensitive.</li>
						<li><strong>string.lastIndexOf(searchValue[, fromIndex])</strong>: The same but it starts at the end of the string, or the position you specified in the second parameter, and works towards the beginning of the string.</li>
						<li class="noStyle">
<pre>
<code class="javascript">
var message = "Hello James, how are you tody? Please James call me.";
var pos1 = message.indexOf("James");
var pos2 = message.lastIndexOf("James");
console.log("pos1 = " + pos1); //outputs: 6
console.log("pos2 = " + pos2); //outputs: 38

var pos3 = message.indexOf("James", 3);
var pos4 = message.lastIndexOf("James", 3);
console.log("pos3 = " + pos3); //outputs: 6
console.log("pos4 = " + pos4);
//outputs: -1
//because it will search for 'James' in 'Hell'

var pos5 = message.lastIndexOf("James", 14);
console.log("pos5 = " + pos5);
//outputs: 6
//because it will search for 'James' in 'Hello James, ho'
</code>
</javascrip>
						</li>
					</ul>
					<h3>Cutting Strings</h3>
					<ul>
						<li><strong>string.substring(start</strong><i>[, end]</i><strong>)</strong></li>
						<li><strong>string.substr(start</strong><i>[, length]</i><strong>)</strong></li>
						<li>The difference between <i>substr()</i> and <i>substring()</i> is in the parameters they require.</li>
						<li class="noStyle">
<pre>
<code class="javascript">
var message = "Hello James, how are you tody? Please James call me.";
var part1 = message.substring(6, 11);
console.log("part1 = " + part1); //outputs: James

var part2 = message.substring(6);
console.log("part2 = " + part2);
//outputs: James, how are you tody? Please James call me.

var part3 = message.substr(6, 5);
console.log("part3 = " + part3);//outputs: James

var part4 = message.substr(6);
console.log("part4 = " + part4);
//outputs: James, how are you tody? Please James call me.
</code>
</pre>
						</li>
						<li class="caution">In string.substring(start[, end]) the start index is included but the <i>end</i>index is not.</li>
					</ul>
					<h3>change the case of a string</h3>
					<ul>
						<li>string.toLowerCase()</li>
						<li>string.toUpperCase()</li>
					</ul>
					<h3>Selecting a Single Character from a String</h3>
					<ul>
						<li><strong>string.charAt(indexPosition)</strong>: returns the character in that position.</li>
						<li><strong>string.charCodeAt(indexPosition)</strong>: similar in use to the charAt() method, but instead of returning thecharacter itself, it returns a number that represents the decimal character code for that character in the Unicode character set (recall that computers only understand numbers)</li>
						<li>Character codes go in order, so, for example, the letter A has the code 65, B 66, and so on. Lowercase letters start at 97 (a is 97, b is 98, and so on). Digits go from 48 (for the number 0) to 57 (for the number 9).</li>
						<li class="noStyle">
<pre>
<code class="javascript">
var message = "Hello James, how are you tody? Please James call me";

var lastCharacter = message.charAt( message.length-1 );
console.log("lastCharacter = " + lastCharacter); //outputs: e

var lastCharacterCharCode = message.charCodeAt( message.length-1 );
console.log("lastCharacterCharCode = " + lastCharacterCharCode); //outputs: 101
</code>
</pre>
						</li>
					</ul>
					<h3>Converting Character Codes to a String</h3>
					<ul>
						<li><strong>fromCharCode(n1[, n2, ...[, nN]])</strong>: can be thought of as the opposite of <i>charCodeAt()</i>, in that you pass it a series of comma-separated numbers representing character codes, and it converts them to a single string.</li>
						<li>it's a static method (— )you don't need to have created a String object to use it with)</li>
						<li class="noStyle">
<pre>
<code class="javascript">
var myString;
myString = String.fromCharCode(65, 66, 67);
console.log(myString);
//outputs: ABC

var result = "";
for(var i=65 ; i<=90 ; i++){
	result += String.fromCharCode(i);
}
console.log(result);
//outputs: ABCDEFGHIJKLMNOPQRSTUVWXYZ;
</code>
</pre>
						</li>
					</ul>

					<h2>Array Objects</h2>
					<h3>Number of elements in an Array</h3>
					<ol>
						<li>Use myArray<strong>.length</strong></li>
					</ol>
					<h3>Joining Arrays</h3>
					<ol>
						<li>myArray1<strong>.concat(</strong>myArray2<strong>)</strong></li>
						<li class="noStyle">
<pre>
<code class="javascript">
var myArray1 = new Array('a', 'b', 'c');
var myArray2 = new  Array(1, 2, 3);
myArray1 = myArray1.concat(myArray2);
console.log(myArray1);
//ouputs: ['a', 'b', 'c', 1, 2, 3]
</code>
</pre>
						</li>
					</ol>
					<h3>Copying Part of an Array</h3>
					<ul>
						<li><strong>myArra.slice(</strong>start[, end]<strong>)</strong></li>
						<li class="noStyle">
<pre>
<code class="javascript">
var myArray1 = new Array('a', 'b', 'c', 'd', 'e', 'f');
var myArray2 = myArray1.slice(2, 4);
console.log(myArray2);
//ouputs: ['c', 'd']

var myArray3 = myArray1.slice(2);
console.log(myArray3);
//ouputs: ['c', 'd', 'e', 'f']
</code>
</pre>
						</li>
						<li class="caution">Note that the <i>start</i> index is included but the <i>end</i> index is not</li>
					</ul>

					<h3>Convert an Array into a String</h3>
					<ul>
						<li><strong>myArra.join(</strong>optionalSeparator<strong>)</strong> method concatenates all the elements in an array and returns them as a string.</li>
						<li class="noStyle">
<pre>
<code class="javascript">
var myArray1 = new Array('a', 'b', 'c', 'd');
var myArray2 = myArray1.join();
console.log(myArray2);
//ouputs: abcd

var myArray3 = myArray1.join('*-*');
console.log(myArray3);
//ouputs: a*-*b*-*c*-*d*-*
</code>
</pre>
						</li>
					</ul>

					<h3>Order elements in an Array</h3>
					<ul>
						<li>Usefull when you have same type data in an array</li>
						<li>Ascending sort: <strong>.sort()</strong> and Descending sort: <strong>.reverse()</strong></li>
						<li>Sorting is case sensitive</li>
						<li class="caution">Remember that JavaScript stores letters encoded in their equivalent Unicode number, and that sorting is done based on Unicode numbers rather than actual letters. It just happens that Unicode numbers match the order in the alphabet. However, lowercase letters are given a different sequence of numbers, which come after the uppercaseletters.</li>
						<li class="noStyle">
<pre>
<code class="javascript">
var myArray1 = new Array('a', 'b', 'c', 'A', 'd', 'Z');
var myArray2 = myArray1.sort();
console.log(myArray2);
//ouputs: ['A', 'Z', 'a', 'b', 'c']

var myArray3 = myArray1.reverse();
console.log(myArray3);
//ouputs: ['c', 'b', 'a', 'Z', 'A']
</code>
</pre>
						</li>
					</ul>

					<H3>New Array Methods</H3>
					<ul>
						<li>In 2005, Mozilla updated the JavaScript engine in Firefox. In doing so, they added 7 new methods to the Array object. These seven methods can be divided into two categories: location methods (indexOf(), lastIndexOf()) and iterative methods (every(), some(), filter(), forEach(), map()).</li>
						<li class="caution">The following seven methods do not work Internet Explorer. They do, however, work in Firefox, Safari, Opera, and Chrome.</li>
						<li>
							<ol>
								<li>
									Location methods
									<ul>
										<li>
											Finding Array Elements
<pre>
<code class="javascript">
var myArray = new Array('a', 'b', 'c', 'a', 'b', 'c');
var indexOfB = myArray.indexOf('b');
console.log(indexOfB); //ouputs: 1

var indexOfB = myArray.lastIndexOf('b');
console.log(indexOfB); //ouputs: 4

var indexOfX = myArray.lastIndexOf('x');
console.log(indexOfX); //ouputs: -1
</code>
</pre>
										</li>
									</ul>
								</li>
								<li>Iterative methods
									<ul>
										<li>These methods execute a function you define on every element while they iterate through the array.</li>
										<li>
											The function must accept three arguments like the following code.
<pre>
<code class="javascript">
function functionName(value, index, array) {
	(...)
}
</code>
</pre>
										</li>
										<li>
											every()
											<ul>
												<li>Tests whether <strong>all elements</strong> in the array pass the test in your function.</li>
												<li>
<pre>
<code class="javascript">
var scores = new Array(1, 4, 4.2, 3, 0, 4.8, 5, 2.6);

function checkGoodscores(value, index, array){
	var isGoodScore = false;
	if (value >= 4){
		isGoodScore = true;
	}
	return isGoodScore;
}

var testAllScores = scores.every(checkGoodscores);
if(testAllScores){
	console.log( "All scores are Good!" );
}else{
	console.log( "Not all scores are Good!" );
}
//outputs: Not all scores are Good!
</code>
</pre>
												</li>
											</ul>
										</li>
										<li>
											some()
											<ul>
												<li>Tests whether <strong>some elements</strong> in the array pass the test in your function.</li>
												<li>
<pre>
<code class="javascript">
var scores = new Array(1, 4, 4.2, 3, 0, 4.8, 5, 2.6);

function checkGoodscores(value, index, array){
	var isGoodScore = false;
	if (value >= 4){
		isGoodScore = true;
	}
	return isGoodScore;
}

var testAllScores = scores.some(checkGoodscores);
if(testAllScores){
	console.log( "Some elements have a Good score." );
}else{
	console.log( "No element has a Good score!" );
}
//outputs: Not all scores are Good!
</code>
</pre>
												</li>
											</ul>
										</li>
										<li>
											filter()
											<ul>
												<li>Executes your function on every element in the array, and if your function returns true for a particular element, that element is added to another array the filter() method returns.</li>
												<li>
<pre>
<code class="javascript">
var scores = new Array(1, 4, 4.2, 3, 0, 4.8, 5, 2.6);

function checkGoodscores(value, index, array){
	var isGoodScore = false;
	if (value >= 4){
		isGoodScore = true;
	}
	return isGoodScore;
}

if( scores.some(checkGoodscores) ){
	var filteredGoodScores = scores.filter(checkGoodscores);
	console.log( "Elements which have a Good score are: " + filteredGoodScores );
}else{
		console.log( "No element has a Good score!" );
	}
//outputs: Elements which have a Good score are: 4,4.2,4.8,5
</code>
</pre>
												</li>
											</ul>
										</li>
										<li>
											Foreach()
											<ul>
												<li>Unlike the previous iterative methods, forEach() and map() methods do not test each element in the array with your function; instead, the function you write should perform some kind of operation that uses the element in some way.</li>
												<li>
<pre>
<code class="javascript">
var scores = new Array(1, 4, 4.2, 3, 0, 4.8, 5, 2.6);

function calculateDouble(value, index, array){
	var result = value * 2;
	console.log(result);
}

scores.forEach( calculateDouble );
</code></pre>
												</li>
												<li class="caution">Note how the function calculateDouble() cannot return any value; its only purpose is to perform an operation on every element in the array. While this is useful in some cases, it’s almost useless when you want the results of the operation. That’s where the map() method comes in.</li>
											</ul>
										</li>
										<li>
											Map()
											<ul>
												<li>the map() method is similar to that of forEach(), except that the results of every operation are stored in another array that the map() method returns.</li>
												<li class="noStyle">
<pre>
<code class="javascript">
var scores = new Array(1, 4, 4.2, 3, 0, 4.8, 5, 2.6);

function calculateDouble(value, index, array){
	var result = value * 2;
	return result;
}

var doubledScores = scores.map( calculateDouble );
console.log(doubledScores);
</code></pre>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ol>
						</li>
					</ul>

					<h3>Math Object</h3>
					<ul>
						<li>Please check <a href="http://www.w3schools.com/jsref/default.asp">http://www.w3schools.com/jsref/default.asp</a></li>
						<li>
							abs(n)
							<ul>
								<li>returns the absolute value of n</li>
								<li class="noStyle">
<pre>
<code class="javascript">
var absValue = Math.abs(-9);
console.log(9); //ouputs: 9

var absValue = Math.abs(4);
console.log(4); //ouputs: 4
</code></pre>
								</li>
							</ul>
						</li>
						<li>
							min() and max()
							<ul>
								<li>
<pre>
<code class="javascript">
var minValue = Math.min(15, 6, -7, 66, 3);
console.log(minValue); //outputs: -7

var minValue = Math.max(15, 6, -7, 66, 3);
console.log(minValue); //outputs: 66
</code></pre>
								</li>
							</ul>
						</li>
						<li>
							Rounding Numbers
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
										<li>rounds up if the decimal part is >= .5, and rounds down otherwise.</li>
									</ul>
								</li>
								<li class="noStyle">
<pre>
<code class="javascript">
var myArray = new Array(4, 2.5, 2.7, 2.2, 6.6, -4.3, -4.5, -4.8);

function ceilFlourRound(value, index,  array){
	var resultCeil = Math.ceil(value);
	var resultFloor = Math.floor(value);
	var resultRound = Math.round(value);
	console.log( "ceil(" + value + ") = " + resultCeil );
	console.log( "floor(" + value + ") = " + resultFloor );
	console.log( "round(" + value + ") = " + resultRound );
}

myArray.forEach( ceilFlourRound );
</code></pre>
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
										<li>
											returns a random fl oating-point number in the range between 0 and 1 (1 is not included)</li>
											<li class="noStyle">
<pre>
<code class="javascript">
//Get a random number between 1 and 15
var i = 10;
while(i>0){
	i--;
	var randomNumber = Math.floor( Math.random() * 15 ) + 1;
	console.log(randomNumber);
}
</code></pre>
											</li>
										</ul>
								</li>
								<li>
									pow(number, power)
									<ul>
											<li class="noStyle">
<pre>
<code class="javascript">
var result = Math.pow(3, 5);
console.log(result);
//outputs: 3*3*3*3*3 = 243
</code></pre>
											</li>
											<li>Example: Fix the number of decimal places in a number.</li>
											<li class="noStyle">
<pre>
<code class="javascript">
function fix(fixNumber, decimalPlaces){
	var div = Math.pow(10, decimalPlaces);
	fixNumber = Math.round(fixNumber * div) / div;
	return fixNumber;
}

console.log( fix(78.123456, 2) );
//outputs: 78.12

console.log( fix(78.123456, 5) );
//outputs: 78.12345
</code></pre>
											</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>

					<h3>Number Object</h3>
					<ul>
						<li>toFixed()</li>
						<li>
							<ul>
								<li>Cuts a number off after a certain point.</li>
								<li>Rounds up or down the result.</li>
								<li class="noStyle">
									<pre>
									<code class="javascript">
                                    var number = 78.123456
									console.log( number.toFixed(2) );
									//outputs: 78.12

									var number = 78.125456
									console.log( number.toFixed(2) );
									//outputs: 78.13

									var number = 78.127456
									console.log( number.toFixed(2) );
									//outputs: 78.13
									</code></pre>
								</li>
							</ul>
						</li>
					</ul>

				</div>
			</section>










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