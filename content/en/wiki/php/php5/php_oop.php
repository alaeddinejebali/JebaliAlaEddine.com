<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Object Oriented Programming<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
        	<li>
        		<h2>Fundamental concepts of OOP</h2>
        		<ul>
        			<li></li>
        		</ul>
        	</li>
        	<li>	
        		<h2>OOP principle</h2>
        		<ul>
		            <li>In PHP4, objects are passed by values.</li>
		            <li>In PHP5, objects are passed by references.</li>
		            <?php include 'code/php_code_86.txt'; ?>
		            <li>The initialization of properties is limited to assigning values (you can't initialize a variable by calling a function).</li>
        		</ul>
        	</li>
        	<li>
        		<h2>Inheritance</h2>
        		<ul>
        			<li class="noStyle">
        				<?php include 'code/php_code_87.txt'; ?>
        			</li>
        			<li>
        				parent classes can be accessed using the special parent:: namespace (like in h() function).
        			</li>
        		</ul>
        	</li>
        	<li>
        		<h2>Constructors / Destructors</h2>
				<ul>
        			<li>In PHP 4, it was possible to define a class method whose name was the same as the class itself (if you decided to rename your class, you would also have to rename your constructor!).</li>
        			<li>
        				PHP 5 now uses the magic <b>__construct()</b> method as the constructor for any class regardless of the class' name.
					</li>
        			<li>
        				A destructoris id called right before an object is destroyed, and is useful for performing cleanup procedures—such as disconnecting from a remote resource, or deleting temporary files).
        				<?php include 'code/php_code_88.txt'; ?>
        			</li>
        			<li>
        				Destruction occurs when all references to an object are gone, and this may not necessarily take place when you expect it—or even when you want it to.
					</li>
        			<li>
        				There is no way to determine the order in which any two objects in your scripts will be destroyed.
        			</li>
        		</ul>
        	</li>
        	<li>
        		<h2>Visibility</h2>
        		<ul>
					<li>
						public
						<ul>
							<li>The resource can be accessed from any scope.</li>
						</ul>
					</li>
					<li>
						protected
						<ul>
							<li>The resource can only be accessed from within the class where it is defined and its descendants.</li>
						</ul>
					</li>
					<li>
						private
						<ul>
							<li>The resource can only be accessed from within the class where it is defined.</li>
						</ul>
					</li>
					<li>
						final
						<ul>
							<li>The final visibility level only applies to methods and classes.</li>
							<li>The resource is accessible from any scope, but cannot be overridden in descendant classes.</li>
							<li>Classes that are declared as final cannot be extended.</li>
						</ul>
					</li>
					<li class="noStyle">
						<?php include 'code/php_code_89.txt'; ?>
					</li>
					<li class="caution">
						There are times when you wish to make the constructor privatefor example when using certain design patterns like Singleton or Factory.
					</li>
        		</ul>
        	</li>
        	<li>
				<h2>Static</h2>
				<ul>
					<li>
						In PHP 4 you define static method using the scope resolution operator "::" officially known as <i>Paamayim Nekudotayim</i> (Hebrew for "Double Colon").
					</li>
					<li>
						Static properties
						<ul>
							<li>
								Cannot be accessed through the object using the arrow operator ->.
							</li>
							<li>
								Calling static properties using object notation will result in a notice.
							</li>		
						</ul> 
					</li>
					<li>
						Static methods
						<ul>
							<li>
								Are callable without an instance of the object created.
							</li>
							<li>
								Therefore the pseudo-variable $this is not available inside the method declared as static.
								<?php include 'code/php_code_90.txt'; ?>
							</li>
						</ul>
					</li>	
				</ul>      	
        	</li>
        	<li>
        		<h2>Class Constants</h2>
        		<ul>
        			<li>
        				Class constants are public and accessible from all scopes.
        				<?php include 'code/php_code_91.txt'; ?>	
        			</li>
        			<li>
        				Class constants are significantly faster than traditional constants (those declared with the define()).
        			</li>
        		</ul>
        	</li>
        	<li>
        		<h2>Abstract Classes</h2>
        		<ul>
        			<li>
        				Defines the basic skeleton of a specific type.
        			</li>
        			<li>
        				A class having at least one <b>abstract method</b> must be declared as an <b>abstract class</b>.
        			</li>
        			<li>
        				Cannot be used directly, but they must be extended so that the descendent class provides a full complement of methods.
        				<?php include 'code/php_code_92.txt'; ?>
        			</li>
        		</ul>
        	</li>
        	<li>
        		<h2>Interfaces</h2>
        		<ul>
        			<li>
        				Used to specify an API that a class must implement.
        			</li>
        			<li>
        				This allows you to create a common "contract" that your classes must implement in order to satisfy certain logical requirements.
        				<ul>
        					<li>
        						for example, you could use interfaces to abstract the concept of database provider into a common API that could then be implemented by a series of classes that interface to different DBMSs.
        					</li>
        				</ul>
        				<?php include 'code/php_code_93.txt'; ?>
        			</li>
        			<li class="caution">
        				You must define all of the methods of an interface and all of the arguments of an interface methods.
        			</li>
        			<li>
        				It is possible to implement more than one interface in the same class:
        				<?php include 'code/php_code_94.txt'; ?>
        			</li>
        			<li>
        				A class can extend another class, as well as implement multiple interfaces at the same time:
        				<?php include 'code/php_code_95.txt'; ?>
        			</li>
        			<li class="caution">
        				A class can only extend one parent class, but it can implement multiple interfaces.
        			</li>
        		</ul>
        	</li>
        	<li>
        		<h2>Determining An Object’s Class</h2>
        		<ul>
        			<li>
        				Determine whether a given object is an instance of a particular class, or whether it implements a specific interface.
        				<?php include 'code/php_code_96.txt'; ?>
        			</li>
        		</ul>
        	</li>
        	<li>
        		<h2>Exceptions</h2>
        		<ul>
        			<li>
        				Exception base class
        				<ul>
        					<li class="noStyle">
        						<?php include 'code/php_code_97.txt'; ?>
        					</li>
        				</ul>
        			</li>
        			<li>
        				Throwing Exceptions
        				<ul>
        					<li>
        						Any exception that is thrown inside the try{} block is going to be caught and passed on the code inside the catch{} block, where it can be handled.
        						<?php include 'code/php_code_98.txt'; ?>
        					</li>
        					<li>
        						You can also chain just the catch blocks:
        						<?php include 'code/php_code_99.txt'; ?>
        					</li>
        					<li>
        						To avoid fatal errors from uncaught exceptions, you could wrap your entire application in a try/catch block; which is not a good idea!
        					</li>
        					<li>
        						A better solution is (set_exception_handler()): PHP allows us to define a "catch-all" function that is automatically called whenever an exception is not handled
        						<?php include 'code/php_code_100.txt'; ?>
        					</li>
        				</ul>
        			</li>
        		</ul>
        	</li>
        	<li>
        		<h2>Lazy Loading</h2>
        		<ul>
					<li>
						Prior to PHP 5, instantiating an undefined class, or using one of its methods in a static way would cause a fatal error.
					</li>
					<li>
						This meant that you needed to include all of the class files that you might need rather than loading them as they were needed.
					</li>
					<li>
						To solve this problem, PHP 5 features an ""autoload facility that makes it possible to implement ""lazy loading"" (loading of classes on-demand).
					</li>
					<li>
						When referencing a non-existent class, PHP will try to call the __autoload() global function so that the script may be given an opportunity to load it.
					</li>
					<li>
						If, after the call to autoload(), the class is still not defined, the interpreter gives up and throws a fatal error.
					</li>
					
					function __autoload($class){
						require_once str_replace("_", "/", $class);
					}
					$obj = new Those_Some_Class();
					// __autoload() is called and passed "Those_Some_Class.php" as its argument
					// and load those/Some/Class.php
					<li>
						Advantage of lazy loading: Classes that are never used are never loaded.
					</li>
					
					
					Reflection API
					<li>
						a collection of functions and objects that allows you to examine the contents of a script's code at runtime.
					</li>
					<li>
						It can be used to generate simple documentation, or for determining whether certain functionality is available to a script.
					</li>
					<li>
						It allows you to inspect both user defined and internal functions, classes and objects, as well as extensions.
					</li>
					<li>
						ReflectionFunction($function)
						<ul>
							<li class="noStyle">
								<?php include 'code/php_code_.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						ReflectionClass(($class)
						<ul>
							<li class="noStyle">
								<?php include 'code/php_code_.txt'; ?>
							</li>
						</ul>
					</li>
        		</ul>
        	</li>
        </ul>
    </div>
</section>