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
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>