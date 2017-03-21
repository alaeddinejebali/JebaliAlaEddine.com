<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#classesandobjects">Classes and Objects</a>
		</h4>
	</div>
	<div id="classesandobjects" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Classes</h2>
					<ul>
						<li>
							A Class is a template for creating objects which defines its state and behavior. 
						</li>
						<li>
							A class contains <i>field</i> and <i>method</i> to define the state and behavior of its object.
						</li>
						<li>
							Syntax for declaring classes
							<ul>
								<li class="noStyle"><?php include 'code/java_34.txt'; ?></li>
							</ul>
						</li>
						<li>
							Example of a Class
							<ul>
								<li class="noStyle"><?php include 'code/java_35.txt'; ?></li>
							</ul>
						</li>
						<li>
							 A source file can contain more than one Java Class.
							 <ul>
							 	<li>
							 		There can be only one public class per source code file but it can have multiple non public classes.
							 	</li>
							 	<li>
							 		In case there is a public class present in the source code file, the name of the file should be the name of the class.
							 	</li>
							 	<li>
							 		Files with no public class can have any name for the class.
							 	</li>
							 </ul>
						</li>
						<li>
							An <strong>Abstract</strong> Class can not be instantiated (like MathUtils class, you don't need to instanciate it to use the MathUtils.doSum(a, b)).
						</li>
						<li>
							A <strong>Final</strong> Class can not be subclassed: It's a class that can't be extended.
						</li>
						<li>
							A Class can not be both final and abstract.
						</li>
					</ul>
				</li>
				<li>
					<h2>Constructors</h2>
					<ul>
						<li>
							Constructors have only one purpose: create an instance of a Class.
						</li>
						<li>
							Every Constructor calls its Superclass constructor
							<ul>
								<li class="noStyle">
									<?php include "code/java_38.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							A default constructor is created if you don't define any constructors in your class. It simply is a no argument constructor which does nothing.
							<ul>
								<li class="noStyle">
									<?php include "code/java_39.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							Rules:
							<ul>
								<li>Constructors cannot be marked static.</li>
								<li>Constructor cannot be marked abstract.</li>
								<li>A Constructor cannot be overridden.</li>
								<li>A Constructor cannot be Final.</li>		
								<li>
									super() or this() construct: If used in constructor, must occur as the first statement in a constructor
								</li>		
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Creating Objects</h2>
					<ul>
						<li>
							constructor
							<ul>
								<li>
									The name of the constructor matches the name of the class.
								</li>
								<li>
									There’s no return type.
								</li>
							</ul>
						</li>
						<li>
							Order of Initialization
							<ul>
								<li>
									<i>Fields</i> and <i>instance initializer</i> blocks are run in the order in which they appear in the file.
								</li>
								<li>
									The constructor runs after all fields and instance initializer blocks have run.
								</li>
							</ul>
						</li>
						<li>
							Instance initializers
							<ul>
								<li>
									It's a code blocks which appears outside a method.
								</li>
								<li>
									When an object is initialized, instance initializers will be called (before the constructor block).
									<ul>
										<li><?php include 'code/java_07.txt'; ?></li>
									</ul>
								</li>
								<li>
									In a class that had multiple constructors, you would have to repeat the code in each constructor. 
									With an instance initializer, you can just write the code once, and it will be executed no matter what constructor is used to create the object.
								</li>
								<li>
									Order matters for the fields and blocks of code. You can’t refer to a variable before it has been initialized:
									<ul>
										<li class="noStyle"><?php include 'code/java_08.txt'; ?></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							Different ways to create an object in Java
							<ol>
								<li>
									Using <strong>new</strong> keyword
								</li>
								<li>
									Using New Instance (Reflection)
									<ul>
										<li>
											"<strong>Class.forName</strong>" loads the Class in Java but doesn't create any Object. 
										</li>
										<li>
											To Create an Object of the Class you have to use the "<strong>newInstance</strong>" Method of the Class class.
										</li>
										<li class="noStyle">
											<?php include 'code/java_49.txt'; ?>
										</li>
										<li>
											This is the most common approach to register a JDBC driver to connect to a DB is to use Java's Class.forName() method, to dynamically load the driver's class file into memory, which automatically registers it.
										</li>
									</ul>
								</li>
								<li>
									Using Clone
									<ul>
										<li>
											Used to create a copy of <u>an existing</u> Object.
										</li>
										<li>
											<?php include 'code/java_50.txt'; ?>
										</li>
										<li>
											"<i>clone()</i>" method is declared "<i>protected</i>" in Object class.
											So it can be accessed only in subclass or in same package.
											That is the reason why it has been overridden here in Class.
										</li>
										<li>
											Class need to implement "<i>Cloneable</i>" Interface otherwise it will throw "<i>CloneNotSupportedException</i>".
										</li>
									</ul>
								</li>
								<li>
									Using Object Deserialization
									<ul>
										<li>
											It produces the opposite of serializing an Object.
										</li>
									</ul>
								</li>
								<li>
									Using ClassLoader
									<ul>
										<li>
											This way is much the same as Class.forName option.
										</li>
										<li class="noStyle">
											<?php include 'code/java_51.txt'; ?>
										</li>
									</ul>
								</li>
							</ol>
						</li>
					</ul>
				</li>
				<li>
					<h2>"this" keyword</h2>
					<ul>
						<li>
							It works as a reference to the current Object whose Method or constructor is being invoked.
						</li>
						<li>
							 Variable Hiding
							 <ul>
							 	<li>
							 		Using <i>this</i> keyword with a field to point to the instance variable instead of the local variable.
							 		<?php include 'code/java_43.txt'; ?>
							 	</li>
							 </ul>
						</li>
						<li>
							Explicit Constructor Invocation
							<ul>
								<li>
									<i>this</i> keyword can be used inside the constructor to call another overloaded constructor in the same Class.
								</li>
								<li>
									This occurs if a Class has two overloaded constructors, one without argument and another with argument
								</li>
								<li>
									Then the <i>this</i> keyword can be used to call constructor with argument from the constructor without argument.
								</li>
								<li>
									This is required as the constructor can not be called explicitly.
								</li>
								<li class="noStyle">
									<?php include "code/java_44.txt"; ?>
								</li>
								<li class="caution">
									Important
									<ul>
										<li>
											<i>this</i> keyword can only be the first statement in Constructor (Like <i>super</i> keyword).
											<ul>
												<li class="noStyle">
													<?php include "code/java_45.txt"; ?>
												</li>
											</ul>
										</li>
										<li>
											A constructor can have either <i>this</i> or <i>super</i> keyword but not both.
											<ul>
												<li class="noStyle">
													<?php include "code/java_46.txt"; ?>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									The <i>this</i> keyword can be used as Method parameter
									<ul>
										<li class="noStyle">
											<?php include "code/java_47.txt"; ?>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>