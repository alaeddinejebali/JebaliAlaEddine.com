<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off"> Fundamentals of Java<h1>
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Basics</h2>
				<ul>
					<li>
						JDk vs JRE
					</li>
					<li>
						Javadoc comment
						<ul>
							<li class="noStyle"><?php include 'code/java_01.txt'; ?></li>
						</ul>
					</li>
					<li>
						If you do have a public class, it needs to match the file name.
					</li>
					<li>
						You can put two (or more) classes in the same file. However, there can only be one <i>public</i> class per <i>.java</i> file, as public classes must have the same name as the source file (other classes must be declared ithout <i>public</i>).
					</li>
					<li>
						Hello program
						<ul>
							<li class="noStyle"><?php include 'code/java_02.txt'; ?></li>
							<li>
								The result of <i>javac</i> is a file of <i>bytecode</i> by the same name, but with a <i>.class</i> file name extension. Bytecode consists of instructions that the JVM knows how to execute.
							</li>
						</ul>
					</li>
					<li>
						A <i>JAR</i> file is like a zip file of mainly Java class files.
					</li>
				</ul>
			</li>
			<li>
				<h2>Packages and imports</h2>
				<ul>
					<li>ackages are logical groupings for classes.</li>
					<li>
						Java automatically looks (first) in the current package for other classes.
					</li>
					<li>
						Wildcards
						<ul>
							<li>
								Using the wildcard can shorten the import list.
							</li>
							<li>
								<i>import java.util.*;</i>
								<ul>
									<li>
										Every class in the java.util package is available to this program when Java compiles it.
									</li>
									<li>
										It doesn’t import child packages, fi elds, or methods; it imports only classes.
									</li>
									<li class="caution">
										You might think that including so many classes slows down your program, but it doesn’t. The compiler fi gures out what’s actually needed. Which approach you choose is personal preference.
									</li>
								</ul>
							</li>
							<li>
								There’s one special package in the Java world called <i>java.lang</i>: it is automatically imported (this is why we use <i>System</i> without importing <i>java.lang</i>).
							</li>
							<li>
								you can only have one wildcard and it must be at the end (expl of error: <i>import java.nio.*.*;</i>).
							</li>
						</ul>
					</li>
					<li>
						Naming Conflicts
						<ul>
							<li>
								One of the reasons for using packages is so that class names don’t have to be unique across all of Java.
							</li>
							<li>
								If you explicitly import a class name, it takes precedence over any wildcards present.
								<ul>
									<li class="noStyle"><?php include 'code/java_03.txt'; ?></li>
								</ul>
							</li>
							<li>
								If you really need to use two classes with the same name
								<ul>
									<li class="noStyle"><?php include 'code/java_04.txt'; ?></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Creating a new package
						<ul>
							<li class="noStyle"><?php include 'code/java_05.txt'; ?></li>
						</ul>
					</li>
					<li>
						Class Paths and JARs
						<ul>
							<li>
								You can also specify the location of the other fi les explicitly using a class path.
							</li>
							<li>
								This technique is useful when the class fi les are located elsewhere or in special JAR files.
								<ul>
									<li class="noStyle"><?php include 'code/java_06.txt'; ?></li>
								</ul>
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
						instance initializers
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
								 In a class that had multiple constructors, you would have to repeat the code in each constructor. With an instance initializer, you can just write the code once, and it will be executed no matter what constructor is used to create the object.
							</li>
							<li>
								Order matters for the fi elds and blocks of code. You can’t refer to a variable before it has been initialized:
								<ul>
									<li><?php include 'code/java_08.txt'; ?></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Types of data</h2>
				<ul>
					<li>
						Primitive Types
						<ul>
							<li>
								Java has 8 built-in data types:
								<ol>
									<li>
										boolean
										<ul>
											<li>
												true or false
											</li>
										</ul>
									</li>
									<li>
										byte
										<ul>
											<li>
												8-bit integral value (expl: 123)
											</li>
										</ul>
									</li>
									<li>
										short
										<ul>
											<li>
												16-bit integral value (expl: 123)
											</li>
										</ul>
									</li>
									<li>
										int
										<ul>
											<li>
												32-bit integral value (expl: 123)
											</li>
										</ul>
									</li>
									<li>
										long
										<ul>
											<li>
												64-bit integral value (expl: 123)
											</li>
										</ul>
									</li>
									<li>
										float
										<ul>
											<li>
												32-bit floating-point value (expl: 123.45f)
											</li>
											<li>
												java distinct a float from a double by the letter 'f' following the number.
											</li>
										</ul>
									</li>
									<li>
										double
										<ul>
											<li>
												64-bit floating-point value (expl: 123.456)
											</li>
										</ul>
									</li>
									<li>
										char
										<ul>
											<li>
												16-bit Unicode value (expl: 'a')
											</li>
										</ul>
									</li>
								</ol>
							</li>
							<li>
								A byte is 8 bits.
							</li>
							<li>
								A bit has two possible values: 0 or 1.
							</li>
							<li>
								2<supp>8</supp>=256
							</li>
							<li>
								A byte can hold a value from –128 to 127.
							</li>
							<li>
								-128 + 127 = 255
							</li>
							<li>
								Since 0 needs to be included in the range, -128 + 127 + 1 = 256
							</li>
							<li>
								The number of bits is used by Java when it figures out how much memory to reserve for your variable. (expl: when you write <i>int num;</i> Java allocates 32 bits)
							</li>
						</ul>
					</li>
					<li>
						Reference Types
						<ul>
							<li>
								It refers to an object
							</li>
							<li>
								Unlike primitive types that hold their values in the memory where the variable is allocated, references do not hold the value of the object they refer to. Instead, a reference "points" to an object by storing the memory address where the object is located, a concept referred to as a pointer.
							</li>
							<li>
								An object in memory can be accessed only via a reference.
							</li>
						</ul>
					</li>
					<li>
						Primitives types vs reference types
						<ul>
							<li>
								All the primitive types have lowercase type names. Reference types starts with uppercase.
							</li>
							<li>
								Reference types can be assigned <i>null</i>, which means they do not currently refer to an object. Primitive types will give you a compiler error if you attempt to assign them <i>null</i>.
								<ul>
									<li class="noStyle"><?php include 'code/java_20.txt'; ?></li>
								</ul>
							</li>
							<li>
								Reference types can be used to call methods when they do not point to <i>null</i>. Primitives types do not have methods.
								<ul>
									<li class="noStyle"><?php include 'code/java_21.txt'; ?></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Declaring and Initializing Variables</h2>
				<ul>
					<li>
						A variable is a name for a piece of memory that stores data.
					</li>
					<li>
						Variable names are case sensitive.
					</li>
					<li>
						Each variable must be declared with a type.
						<ul>
							<li class="noStyle"><?php include 'code/java_24.txt'; ?></li>
						</ul>
					</li>
					<li>
						It's not possible to declare multiple variables of different types in the same statement.
						<ul>
							<li class="noStyle"><?php include 'code/java_22.txt'; ?></li>
						</ul>
					</li>
					<li>
						It's not possible to declare two different types in the same statement.
						<ul>
							<li class="noStyle"><?php include 'code/java_23.txt'; ?></li>
						</ul>
					</li>
					<li>
						Identifiers
						<ul>
							<li>
								There are only three rules to remember for legal identifiers:
								<ul>
									<li>
										The name must begin with a letter or with "$" or " _".
									</li>
									<li>
										The name must contain letters, digits, charachters "$", charachters" _".
									</li>
									<li>
										You cannot use the same name as a Java reserved word (abstract, boolean, native, goto...etc).
										<ul>
											<li>
												Exemple legal identifiers:
												<ul>
													<li class="noStyle"><?php include 'code/java_23.txt'; ?></li>
												</ul>
											</li>
											<li>
												Exemple illegal identifiers:
												<ul>
													<li class="noStyle"><?php include 'code/java_23.txt'; ?></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								It's recommended that you don’t start any identifi ers with "$" because the compiler uses this symbol for some files.
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Default Initialization of Variables</h2>
				<ul>
					<li>
						Local Variables
						<ul>
							<li>
								A local variable is a variable defined within a method.
							</li>
							<li>
								Local variables must be initialized before use.
							</li>
							<li>
								The compiler will not let you read an uninitialized value.
								<ul>
									<li class="noStyle"><?php include 'code/java_27.txt'; ?></li>
								</ul>
								The compiler is also smart enough to recognize initializations that are more complex.
								<ul>
									<li class="noStyle"><?php include 'code/java_28.txt'; ?></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Instance and Class Variables
						<ul>
							<li>
								Variables that are not local variables are known as <i>instance variables</i> or <i>class variables</i> or <i>fields</i>.
							</li>
							<li>
								Instance variables vs class variables
								<ul>
									<li>
										A variable is an <i>instance variable</i> if it has not the "static" keyword in its declaration.
									</li>
									<li>
										A variable is a <i>class variable</i> or a <i>field</i> if it has the "static" keyword in its declaration.
										<ul>
											<li class="noStyle"><?php include 'code/java_30.txt'; ?></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								Instance and class variables do not require you to initialize them
							</li>
							<li>
								When you declare these variables, the compiler gives them a default value:
								<ul>
									<li>
										boolean: false
									</li>
									<li>
										byte, short, int, long: 0
									</li>
									<li>
										float , double: 0.0
									</li>
									<li>
										char: null
									</li>
									<li>
										Everything else: null
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Variable Scope</h2>
				<ul>
					<li>
						Local variables can never have a scope larger than the method they are defined in. However, they can have a smaller scope (block where they are defined).
						<ul>
							<li class="noStyle"><?php include 'code/java_28.txt'; ?></li>
						</ul>
					</li>
					<li>
						Instance variables: in scope from declaration until object garbage collected (ie: when the object is destroyed).
					</li>
					<li>
						Class variables: in scope from declaration until program ends.
					</li>
				</ul>
			</li>
			<li>
				<h2>Elementss in a Class</h2>
				<ul>
					<li>
						Ordering elements in a class:
						<ol>
							<li>Packages (if any)</li>
							<li>Imports (if any)</li>
							<li>Class declaration (required)</li>
							<li>All fields must be declared inside the class.</li>
						</ol>					
					</li>
					<li>
						Inner classes are classes within a class.
					</li>
					<li>
						Multiple classes can be defined in the same file, but only one of them is allowed to be "public".
						<ul>
							<li>
								The file name must mutch the public class name.
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Destroying Objects</h2>
				<ul>
					<li>
						Java provides a garbage collector to automatically look for objects that aren’t needed anymore.
					</li>
					<li>
						All Java objects are stored in your program memory’s <b>heap</b>.
						<ul>
							<li>
								The heap represents a large pool of unused memory allocated to your Java application.
							</li>
						</ul>
					</li>
					<li>
						Garbage Collection
						<ul>
							<li>
								It refers to the process of automatically freeing memory on the heap by deleting objects that are no longer reachable in your program.
							</li>
							<li>
								System.gc()
								<ul>
									<li>
										It meekly suggests that now might be a good time for Java to kick off a garbage collection run.
									</li>
									<li>
										It is not guaranteed to run.
									</li>
								</ul>
							</li>
							<li>
								An object is no longer reachable when one of two situations occurs:
								<ul>
									<li>The object no longer has any references pointing to it.</li>
									<li>All references to the object have gone out of scope.</li>
								</ul>
							</li>
							<li>
								Objects vs References
								<ul>
									<li>
										They are two different entities.
									</li>
									<li>
										The reference is a variable that has a name and can be used to access the contents of an object. Objects have no name.
									</li>
									<li>
										A reference can be assigned to another reference, passed to a method, or returned from a method.
									</li>
									<li>
										All references are the same size, no matter what their type is. Objects vary in size depending on their class definition.
									</li>
									<li>
										A reference may or may not be created on the heap. Objects are always on the heap.
									</li>
									<li>
										An object sits on the heap and does not have a name. Therefore, you have no way to access an object except through a reference.
									</li>
									<li>
										An object cannot be assigned to another object, nor can an object be passed to a method or returned from a method.
									</li>
									<li>
										It is the object that gets garbage collected, not its reference.
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