<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Elements of Object-oriented Design<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                <h2>Design Pattern Theory</h2>
                <ul>
                	<li>
                		Design Patterns are generally recognized as an excellent set of tried-and-true solutions to common problems that developers face every day.
                	</li>
                	<li>
                		They simply provide guidelines that developers can translate into code.
                	</li>
                </ul>
            <li>
            <li>
            	<h2>Design patterns</h2>
            	<ul>
		            <li class="noStyle">
		            	<h3>The Singleton Pattern</h3>
		            	<ul>
		            		<li>
		            			Its goal is to provide access to a single resource that is never duplicated, but that is made available to any portion of an application that requests it without the need to keep track of its existence
		            		</li>
		            		<li>
		            			The most typical example of this pattern is a database connection, which normally only needs to be created once at the beginning of a script and then used throughout its code.
		            		</li>
		            		<li>
		            			Example:
		            			<ul>
		            				<li class="noStyle">
		            					<?php include 'code/php_code_124.txt'; ?>
		            				</li>
		            			</ul>
		            			getInstance() will never attempt to create a new instance of DB , and instead always return the initialized $_connection , thus ensuring that a database connection is not created more than once.
		            		</li>
		            	</ul>
		            </li>
		            <li class="noStyle">
		            	<h3>The Factory Pattern</h3>
		            	<ul>
		            		<li>
		            			It is used in scenarios where you have a generic class (<u>the factory</u>) that provides <u>the facilities</u> for creating instances of one or more separate "specialized" classes that handle the same task in different ways.
		            		</li>
		            		<li>
		            			A good situation in which the Factory pattern provides an excellent solution is the management of multiple storage mechanisms for a given task (ini file, database or xml file).
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_125.txt'; ?>
									</li>
								</ul>
		            		</li>
		            	</ul>
		            </li>
		            <li class="noStyle">
		            	<h3>The Registry Pattern</h3>
		            	<ul>
		            		<li>
		            			When you want to find an object you usually start with another object that has an association to it ( <i>$vClient.findById(22)</i> ).
		            		</li>
		            		<li>
		            			However, in some cases you won't have an appropriate object to start with (<i>$vClient</i>). You may know the customer's ID number (<i>22</i>) but not have a reference.
		            		</li>
		            		<li>
		            			In this case you need some kind of lookup method: <u>a finder</u>.
		            		</li>
		            		<li>
		            			A Registry is essentially a global object, or at least it looks like one - even if it isn't as global as it may appear.
		            			<ul>
		            				<li class="noStyle">
		            					<?php include 'code/php_code_123.txt'; ?>
		            				</li>
		            			</ul>
		            		</li>
		            	</ul>
		            </li>
		            <li class="noStyle">
		            	<h3>The Model-View-Controller Pattern</h3>
		            	<ul>
		            		<li>
		            			Its goal is that of providing a methodology for separating the business logic (model) from the display logic (view) and the decisional controls (controller).
		            		</li>
		            		<li>
		            			Process:
		            			<ol>
		            				<li>
		            					User initiates an action by callingthe Controller.
		            				</li>
		            				<li>
		            					Controller interfaces with the Model (causing it to perform some sort of action and, therefore, changing its state).
		            				</li>
		            				<li>
		            					View is called, thus causing the user interface to be refreshed to reflect the changes in the Model.
		            				</li>
		            			</ol>
		            		</li>
		            	</ul>
		            </li>
		            <li class="noStyle">
		            	<h3>The ActiveRecord Pattern</h3>
		            	<ul>
		            		<li>
		            			This pattern is commonly used by object persistence tools and in object-relational mapping (ORM).
		            		</li>
		            		<li>
		            			The active record pattern is an approach to accessing data in a database.
		            		</li>
		            		<li>
		            			 A database table or view is wrapped into a class. Thus, an object instance is tied to a single row in the table. After creation of an object, a new row is added to the table upon save. Any object loaded gets its information from the database. When an object is updated the corresponding row in the table is also updated. The wrapper class implements accessor methods or properties for each column in the table or view.
		            		</li>
		            	</ul>
		            </li>
		    	</ul>
			</li>
			<li>
				<h2>SPL: The Standard PHP Library</h2>
				<ul>
					<li>
						It is a collection of interfaces and classes that are meant to solve common problems.
					</li>
					<li>
						No external libraries are needed to build this extension and it is available and compiled by default in PHP 5.
					</li>
					<li>
						SPL provides a set of standard datastructure, a set of iterators to traverse over objects, a set of interfaces, a set of standard Exceptions, a number of classes to work with files and it provides a set of functions.
						<ul>
							<li>
								For example, use a foreach() construct to loop through an object as if it were an array, or even access its individual elements using the array operator [].
							</li>
						</ul>
					</li>
					<li>
						SPL works primarily by providing a number of interfaces that can be used to implement the functionality required to perform certain operations:
						<ol>
							<li>Array Access to objects</li>
							<li>Simple Iteration</li>
							<li>Seekable Iteration</li>
							<li>Recursive Iteration</li>
							<li>Filtered Iteration</li>
						</ol>
					</li>
					<li class="noStyle">
						<h3>Accessing Objects as Arrays</h3>
						<ul>
							<li>
								ArrayAccess interface
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_126.txt'; ?>
									</li>
								</ul>
							</li>
							<li>
								Example which emulates an array that only accepts elements with numeric keys:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_127.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Simple Iterator</h3>
						<ul>
							<li>
								Iterator interface
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_128.txt'; ?>
									</li>
								</ul>
							</li>
							<li>
								Example which will iterate over each of the four elements in the myData private property in the exact same way foreach() works on a standard Array:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_129.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Seekable Iterator</h3>
						<ul>
							<li>
								It extends the standard Iterator interface and adds a seek() method to enable the ability to retrieve a specific item from internal data store.
							</li>
							<li>
								Seekable interface
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_130.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Recursive Iterator</h3>
						<ul>
							<li>
								It allows looping over multi-dimensional tree-like data structures.
							</li>
							<li>
								SimpleXML, for example, uses recursive iteration to allow looping through complex XML document trees.
							</li>
							<li>
								RecursiveIteratorIterator class
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_131.txt'; ?>
									</li>
								</ul>
							</li>
							<li>
								Exemple to display a company details:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_132.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="noStyle">
						<h3>Filtering Iterator</h3>
						<ul>
							<li>
								It is used to filter the items returned by an iteration.
							</li>
							<li>
								Example:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_133.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
        </ul>
    </div>
</section>