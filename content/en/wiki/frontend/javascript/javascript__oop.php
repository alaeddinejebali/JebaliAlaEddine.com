<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			An Object based language
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<h2>Is JavaScript Object Oriented?</h2>
		<p>To be done...</p>
		<h2></h2>
		<p>- Variables assigned to objects don't hold the actual data, but
			rather a reference to the memory address where the data can be found.</p>
		<p>- When it comes to objects, it's a reference to the object and not
			the object itself that is stored in a variable. When you did the
			assignment, it didn't make a copy of the array object, it simply
			copied the reference.
		
		
		<li><?php include "code/javascript_code_21.txt"; ?></li>
		</p>
		<h2>Create JavaScript object</h2>
		<p>var myVariable = new ConstructorName(optional parameters);</p>
		<h2>String, Number, and Boolean objects</h2>
		<li><?php include "code/javascript_code_22.txt"; ?></li>

		<p class="caution">If you declare a primitive string (var str = "Hello
			world";) and then treat it as an object (str.length), such as by
			trying to access one of its methods or properties, JavaScript will
			know that the operation you're trying to do won't work. The operation
			will only work with an object; for example, it would be valid with a
			String object. In this case, JavaScript converts the plain-text
			string into a temporary String object, just for that operation, and
			destroys the object when it's fi nished the operation. The same ideas
			expressed here are also true for number and Boolean primitives and
			their corresponding Number and Boolean objects.</p>
		<li><?php include "code/javascript_code_23.txt"; ?></li>
		<p class="caution">When you try to compare string objects with
			primitive string values, the actual values are compared, but with
			String objects, the object references are compared.</p>
		<h2>String object</h2>
		<h3>Finding a String Inside Another String</h3>
		<ul>
			<li><strong>string.indexOf(searchValue[, fromIndex])</strong>:
				returns the index within the calling String object of the first
				occurrence of the specified value, starts searching from the
				beginning of the string, or the position you specified in the second
				parameter, and works towards the end,. Returns -1 if the value is
				not found. It's case sensitive.</li>
			<li><strong>string.lastIndexOf(searchValue[, fromIndex])</strong>:
				The same but it starts at the end of the string, or the position you
				specified in the second parameter, and works towards the beginning
				of the string.</li>
			<li class="noStyle"><?php include "code/javascript_code_24.txt"; ?></li>

			</li>
		</ul>
		<h3>Cutting Strings</h3>
		<ul>
			<li><strong>string.substring(start</strong><i>[, end]</i><strong>)</strong></li>
			<li><strong>string.substr(start</strong><i>[, length]</i><strong>)</strong></li>
			<li>The difference between <i>substr()</i> and <i>substring()</i> is
				in the parameters they require.
			</li>
			<li class="noStyle"><?php include "code/javascript_code_25.txt"; ?></li>


			<li class="caution">In string.substring(start[, end]) the start index
				is included but the <i>end</i>index is not.
			</li>
		</ul>
		<h3>change the case of a string</h3>
		<ul>
			<li>string.toLowerCase()</li>
			<li>string.toUpperCase()</li>
		</ul>
		<h3>Selecting a Single Character from a String</h3>
		<ul>
			<li><strong>string.charAt(indexPosition)</strong>: returns the
				character in that position.</li>
			<li><strong>string.charCodeAt(indexPosition)</strong>: similar in use
				to the charAt() method, but instead of returning thecharacter
				itself, it returns a number that represents the decimal character
				code for that character in the Unicode character set (recall that
				computers only understand numbers)</li>
			<li>Character codes go in order, so, for example, the letter A has
				the code 65, B 66, and so on. Lowercase letters start at 97 (a is
				97, b is 98, and so on). Digits go from 48 (for the number 0) to 57
				(for the number 9).</li>
			<li class="noStyle"><?php include "code/javascript_code_26.txt"; ?></li>

		</ul>
		<h3>Converting Character Codes to a String</h3>
		<ul>
			<li><strong>fromCharCode(n1[, n2, ...[, nN]])</strong>: can be
				thought of as the opposite of <i>charCodeAt()</i>, in that you pass
				it a series of comma-separated numbers representing character codes,
				and it converts them to a single string.</li>
			<li>it's a static method (— )you don't need to have created a String
				object to use it with)</li>
			<li class="noStyle"><?php include "code/javascript_code_27.txt"; ?></li>

		</ul>

		<h2>Array Objects</h2>
		<h3>Number of elements in an Array</h3>
		<ol>
			<li>Use myArray<strong>.length</strong></li>
		</ol>
		<h3>Joining Arrays</h3>
		<ol>
			<li>myArray1<strong>.concat(</strong>myArray2<strong>)</strong></li>
			<li class="noStyle"><?php include "code/javascript_code_28.txt"; ?></li>
		</ol>
		<h3>Copying Part of an Array</h3>
		<ul>
			<li><strong>myArra.slice(</strong>start[, end]<strong>)</strong></li>
			<li class="noStyle"><?php include "code/javascript_code_29.txt"; ?></li>
			<li class="caution">Note that the <i>start</i> index is included but
				the <i>end</i> index is not
			</li>
		</ul>

		<h3>Convert an Array into a String</h3>
		<ul>
			<li><strong>myArra.join(</strong>optionalSeparator<strong>)</strong>
				method concatenates all the elements in an array and returns them as
				a string.</li>
			<li class="noStyle"><?php include "code/javascript_code_30.txt"; ?></li>


		</ul>

		<h3>Order elements in an Array</h3>
		<ul>
			<li>Usefull when you have same type data in an array</li>
			<li>Ascending sort: <strong>.sort()</strong> and Descending sort: <strong>.reverse()</strong></li>
			<li>Sorting is case sensitive</li>
			<li class="caution">Remember that JavaScript stores letters encoded
				in their equivalent Unicode number, and that sorting is done based
				on Unicode numbers rather than actual letters. It just happens that
				Unicode numbers match the order in the alphabet. However, lowercase
				letters are given a different sequence of numbers, which come after
				the uppercaseletters.</li>
			<li class="noStyle"><?php include "code/javascript_code_31.txt"; ?></li>

		</ul>

		<H3>New Array Methods</H3>
		<ul>
			<li>In 2005, Mozilla updated the JavaScript engine in Firefox. In
				doing so, they added 7 new methods to the Array object. These seven
				methods can be divided into two categories: location methods
				(indexOf(), lastIndexOf()) and iterative methods (every(), some(),
				filter(), forEach(), map()).</li>
			<li class="caution">The following seven methods do not work Internet
				Explorer. They do, however, work in Firefox, Safari, Opera, and
				Chrome.</li>
			<li>
				<ol>
					<li>Location methods
						<ul>
							<li>Finding Array Elements
							
							<li class="noStyle"><?php include "code/javascript_code_32.txt"; ?></li>
					
					</li>
		
		</ul>
		</li>
		<li>Iterative methods
			<ul>
				<li>These methods execute a function you define on every element
					while they iterate through the array.</li>
				<li>The function must accept three arguments like the following
					code.
				
				<li class="noStyle"><?php include "code/javascript_code_33.txt"; ?></li>
		
		</li>
		<li>every()
			<ul>
				<li>Tests whether <strong>all elements</strong> in the array pass
					the test in your function.
				</li>
				<li class="noStyle"><?php include "code/javascript_code_34.txt"; ?></li>


			</ul>
		</li>
		<li>some()
			<ul>
				<li>Tests whether <strong>some elements</strong> in the array pass
					the test in your function.
				</li>
				<li class="noStyle"><?php include "code/javascript_code_35.txt"; ?></li>


			</ul>
		</li>
		<li>filter()
			<ul>
				<li>Executes your function on every element in the array, and if
					your function returns true for a particular element, that element
					is added to another array the filter() method returns.</li>
				<li class="noStyle"><?php include "code/javascript_code_36.txt"; ?></li>


			</ul>
		</li>
		<li>Foreach()
			<ul>
				<li>Unlike the previous iterative methods, forEach() and map()
					methods do not test each element in the array with your function;
					instead, the function you write should perform some kind of
					operation that uses the element in some way.</li>
				<li class="noStyle"><?php include "code/javascript_code_37.txt"; ?></li>


				<li class="caution">Note how the function calculateDouble() cannot
					return any value; its only purpose is to perform an operation on
					every element in the array. While this is useful in some cases,
					it’s almost useless when you want the results of the operation.
					That’s where the map() method comes in.</li>
			</ul>
		</li>
		<li>Map()
			<ul>
				<li>the map() method is similar to that of forEach(), except that
					the results of every operation are stored in another array that the
					map() method returns.</li>
				<li class="noStyle"><?php include "code/javascript_code_38.txt"; ?></li>


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
			<li>abs(n)
				<ul>
					<li>returns the absolute value of n</li>
					<li class="noStyle"><?php include "code/javascript_code_39.txt"; ?></li>


				</ul>
			</li>
			<li>min() and max()
				<ul>
					<li class="noStyle"><?php include "code/javascript_code_40.txt"; ?></li>


				</ul>
			</li>
			<li>Rounding Numbers
				<ul>
					<li>ceil()
						<ul>
							<li>rounds a number up to the next largest whole number or
								integer.</li>
						</ul>
					</li>
					<li>floor()
						<ul>
							<li>rounds a number up to the next largest whole number or
								integer.</li>
						</ul>
					</li>
					<li>round()
						<ul>
							<li>rounds up if the decimal part is >= .5, and rounds down
								otherwise.</li>
						</ul>
					</li>
					<li class="noStyle"><?php include "code/javascript_code_41.txt"; ?></li>

					<li class="noStyle">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th></th>
									<th>ceil</th>
									<th>floor</th>
									<th>round</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>4</td>
									<td>4</td>
									<td>4</td>
									<td>4</td>
								</tr>
								<tr>
									<td>2.5</td>
									<td>3</td>
									<td>2</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2.7</td>
									<td>3</td>
									<td>2</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2.2</td>
									<td>3</td>
									<td>2</td>
									<td>2</td>
								</tr>
								<tr>
									<td>6.6</td>
									<td>7</td>
									<td>6</td>
									<td>7</td>
								</tr>
								<tr>
									<td>-4.3</td>
									<td>-4</td>
									<td>-5</td>
									<td>-4</td>
								</tr>
								<tr>
									<td>-4.5</td>
									<td>-4</td>
									<td>-5</td>
									<td>-4</td>
								</tr>
								<tr>
									<td>-4.8</td>
									<td>-4</td>
									<td>-5</td>
									<td>-5</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li>random()
						<ul>
							<li>returns a random fl oating-point number in the range between
								0 and 1 (1 is not included)</li>

							<li class="noStyle"><?php include "code/javascript_code_42.txt"; ?></li>

						</ul>
					</li>
					<li>pow(number, power)
						<ul>
							<li class="noStyle"><?php include "code/javascript_code_43.txt"; ?></li>


							<li>Example: Fix the number of decimal places in a number.</li>
							<li class="noStyle"><pre>
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
</code>
								</pre></li>
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
					<li class="noStyle"><pre>
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
									</code>
						</pre></li>
				</ul>
			</li>
		</ul>

		<h3>Date Object</h3>
		<ul>
			<li>Creating a Date Object
				<ul>
					<li><pre>
<code class="javascript">
//Get the current PC date and time
var dt = new Date();

//Set date and time based on timestamp
var dt = new Date(milliseconds);

//Set date and time based on a string representing a date, or a date and time
var dt = new Date("31 January 2010");
var dt = new Date("31 Jan 2010, Jan 31 2010");
var dt = new Date("31 Jan 2010, Jan 31 2010");

//Set date by passing the following parameters separated by commas:
//year, month, day, hours and/or minutes, seconds, and milliseconds
var theDate4 = new Date(2010, 0, 31, 15, 35, 20, 20);
var theDate4 = new Date(2010, 0, 31);
</code>
						</pre></li>
					<li class="caution">Be aware of is that in this instance January is
						month 0, not month 1, as you’d expect, and December is month 11.</li>
				</ul>
			</li>
			<li>Getting <i>and setting</i> Date Values
				<ul>
					<li>getDate() <i>and setDate()</i>: The day of the month
					</li>
					<li>getDay() <i>and setDay()</i>: The day of the week as an
						integer, with Sunday as 0, Monday as 1, and so on
					</li>
					<li>getMonth() <i>and getmonth()</i>: The month as an integer, with
						January as 0, February as 1, and so on
					</li>
					<li>getFullYear() <i>and setFullYear()</i>: The year as a
						four-digit number
					</li>
					<li>toDateString(): Returns the full date based on the current time
						zone as a human-readable string. For example, “Wed 31 Dec 2003”.</li>
					<li class="caution">setMonth(): If you set it to a value greater
						than 11, the date automatically rolls over to the next year. So if
						you use setMonth(12), that will set the date to January of the
						next year, and similarly setMonth(13) is February of the next
						year.</li>
				</ul>
			</li>
			<li>Calculations and Dates
				<ul>
					<li>Add nDays to a date: dateObject.setDate(nDays)</li>
					<li class="noStyle"><pre>
<code class="javascript">
var nowDate = new Date();
var currentDay = nowDate.getDate();
nowDate.setDate(currentDay + 28);
</code>
						</pre></li>
				</ul>
			</li>
			<li>Getting <i>and setting</i> Time Values
				<ul>
					<li>getHours()</li>
					<li>getMinutes()</li>
					<li>getSeconds()</li>
					<li>getMilliseconds()</li>
					<li>toTimeString()</li>
				</ul>
			</li>
		</ul>

		<h2>Creating New Types of Objects (Reference Types)</h2>
		<ul>
			<li>The key to define your own objects is the JavaScript’s support
				for the definition of <strong>reference types</strong>. Reference
				types are essentially templates for an object
			</li>
			<li class="caution">Before you start, an important distinction must
				be made. Many developers refer to reference types as classes and use
				the two terms interchangeably. While this is correct for many
				object-oriented languages such as Java, C#, and C++, it is not
				correct for JavaScript. JavaScript has no formal class construct,
				even though the logical equivalent, reference types, are fully
				supported by the language.</li>
			<li class="caution">It’s also important to point out that the
				built-in objects discussed thus far in this chapter are also
				reference types. String, Array, Number, Date, and even Object are
				all reference types, and the objects you created are instances of
				these types.</li>
			<li>A reference type consists of three things:
				<ul>
					<li>A constructor</li>
					<li>Method definitions</li>
					<li>Properties</li>
				</ul>
			</li>
			<li>Defining a Reference Type
				<ul>
					<li class="noStyle"><pre>
							<code class="javascript">
function Client(id, name, age){
	this.id = id;
	this.name = name;
	this.age = age;
}

var client = new Client();
</code>
						</pre></li>
					<li>Typically, a reference type is defi ned with an uppercase
						letter. Doing so makes it easy to differentiate a function from a
						reference type easily and quickly.</li>
					<li>You might wonder where you defi ned this customerName property.
						The answer is that you didn’t; simply by assigning a property a
						value, JavaScript creates it for you.</li>
					<li class="caution">JavaScript won’t tell you if you accidentally
						misspell a property name; it’ll just create a new property with
						the misspelled name, something that can make it diffi cult to
						track bugs. One way around this problem is to create getters and
						setters methods.</li>
					<li>Whenever you want to create a method for your type, you simply
						write the following: <pre>
							<code class="javascript">
typeName.prototype.methodName = function(methodParametersList){
    (...)
}
</code>
						</pre>
					</li>
				</ul>
			</li>
			<li>Creating and Using Reference Type Instances
				<ul>
					<li class="noStyle"><pre>
							<code class="javascript">
typeName.prototype.methodName = function(methodParametersList){
    (...)
}
</code>
						</pre></li>
					<li>The use of the new keyword is very important when creating an
						object with a constructor. The browser does not throw an error if
						you do not use the new keyword, but your script will not work
						correctly. Instead of creating a new object, you actually add
						properties to the global window object. The problems caused by not
						using the new keyword can be hard to diagnose, so make sure you
						specify the new keyword when creating objects with a constructor.
					</li>
					<li class="noStyle"><pre>
							<code class="javascript">
/**
 Define Client type
*/
function Client(id, name, age){
	this.id = id;
	this.name = name;
	this.age = age;
}

Client.prototype.getId = function(){
	return this.id;
}
Client.prototype.setId = function(id){
	this.id = id;
}

Client.prototype.getName = function(){
	return this.name;
}
Client.prototype.setName = function(name){
	this.name = name;
}

Client.prototype.getAge = function(){
	return this.age;
}
Client.prototype.setAge = function(age){
	this.age = age;
}

var client1 = new Client();
client1.setId(108);
client1.setName("Ala Eddine");
client1.setAge(29);
console.log(client1.getId() + ": " + client1.getName() + " (" + client1.getAge() + " years old)");

var client2 = new Client(74, "John Doe", 35);
console.log(client2.getId() + ": " + client2.getName() + " (" + client2.getAge() + " years old)");

var client3 = new Client(14, 9);
console.log(client3.getId() + ": " + client3.getName() + " (" + client3.getAge() + " years old)");
//outputs: 14: 9 (undefined years old)
</code>
						</pre></li>
					<li>An Array of Items
						<ul>
							<li>Define a Store type which has an address and a list of
								clients</li>
							<li class="noStyle"><pre>
<code class="javascript">
/**
 Define Client type
*/
function Client(id, name, age){
	this.id = id;
	this.name = name;
	this.age = age;
}

Client.prototype.getId = function(){
	return this.id;
}
Client.prototype.setId = function(id){
	this.id = id;
}

Client.prototype.getName = function(){
	return this.name;
}
Client.prototype.setName = function(name){
	this.name = name;
}

Client.prototype.getAge = function(){
	return this.age;
}
Client.prototype.setAge = function(age){
	this.age = age;
}

Client.prototype.displayInfo = function(){
	console.log(this.getId() + ": " + this.getName() + " ( " + this.getAge() + " years old)");
}

/**
 Define Store type
*/
function Store(client){
	this.clients = new Array();
}

Store.prototype.getAddress = function(){
	return this.address;
}
Store.prototype.setAddress = function(address){
	this.address = address;
}

Store.prototype.getClients = function(){
	return this.clients;
}
Store.prototype.setClients = function(clients){
	this.clients = clients;
}

Store.prototype.addClient = function(client){
	this.clients[client.getId()] = client;
}

/**
 Create and display store informations
*/
var client1 = new Client(108, "Ala Eddine", 29);
var client2 = new Client(74, "John Doe", 35);
var client3 = new Client(14, "David Doe", 31);

var store = new Store();
store.setAddress("11 Flowers street");
store.addClient(client1);
store.addClient(client2);
store.addClient(client3);

var storeClients = store.getClients();
console.log("Store address: " + store.getAddress());
console.log("List of clients:");
for(storeClient in storeClients){
	var oneClient = storeClients[storeClient];
	oneClient.displayInfo();
}

</code>
								</pre></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>

	</div>
</section>