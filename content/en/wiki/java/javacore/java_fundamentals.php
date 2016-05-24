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
								<u>Fields</u> and <u>instance initializer</u> blocks are run in the order in which they appear in the file.
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
				</ul>
			</li>
		</ul>
	</div>
</section>