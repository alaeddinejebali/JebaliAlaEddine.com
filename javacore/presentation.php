<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#introduction">Presentation</a>
		</h4>
	</div>
	<div id="introduction" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Install Java</h2>
					<ul>
						<li>
							Install Java-8
							<?php include 'code/java_09.txt'; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>What's Java</h2>
					<ul>
						<li>
							Java code gets compiled once rather than needing to be recompiled for different operating systems. This is known as "write once, run everywhere.".
						</li>
						<li>
							A <span class="samplecode">JAR</span> file is like a zip file of mainly Java class files.
						</li>
					</ul>
				</li>	
				<li>
					<h2>Scenario</h2>
					<ul>
						<li>
							You write the source code into a <span class="samplecode">.java</span> file.
						</li>
						<li>
							You use <span class="samplecode">javac</span> to compile the code.
							A <span class="samplecode">.class</span> file is generated: It's the <strong>byte code</strong>.
						</li>
						<li>
							The byte code is executed by the JVM to run application.
						</li>
					</ul>
				</li>
				<li>
					Java Just-in-time compiler
					<ul>
						<li>
							 It's a component of the JRE that improves the performance of Java applications at run time.
						</li>
						<li>
							A JIT compiler runs after the program has started and compiles the code on the fly (or just-in-time, as it's called).
						</li>
						<li>
							In the past, most programs written in any language have had to be recompiled, and sometimes, rewritten for each computer platform.
							This is because they compile <strong>all</strong> the code to machine language <strong>before</strong> the program is first run.
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
						<li>
							The reason why people deactivate JIT  is that JIT compilation fundamentally uses executable data, and thus poses security challenges and possible exploits.
						</li>
					</ul>
				</li>
				<li>
					<h2>Java portability</h2>
					<ul>
						<li>
							After the compilation phase, the bytecode can be moved to any machine(Windows / Linux) and executed by JVM.
						</li>
						<li>
							 JVM reads the bytecode and generates machine specific code.
						</li>
						<li>
							In order to generate machine specific code JVM needs to be machine specific. So every type of Machine(Windows/Linux/Mac) has a specific JVM.
						</li>
						<li>
							Conslusion: Java is Portable but JVM is Machine Specific.
						</li>
					</ul>
				</li>
				<li>
					<h2>Hello world example</h2>
					<ul>
						<li class="noStyle">
							<h3>Without package</h3>
							<ul>
								<li class="noStyle">
									<?php include "code/java_17.txt"; ?>
									<?php include "code/java_16.txt"; ?>
								</li>
								<li>
									Compile
									<ul>
										<li class="noStyle">
											<?php include "code/java_18.txt"; ?>
											This will generate "HelloWorld.class" file at the same location of "HelloWorld.java".
										</li>
									</ul>
								</li>
								<li>
									Run
									<ul>
										<li class="noStyle">
											<?php include "code/java_19.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									Note: When running Java application, you're running the ".class" files not the ".java" file.
								</li>
								<li>
									Understand <span class="samplecode">public static void main(String args[])</span>
									<ul>
										<li>
											public
											<ul>
												<li>
													Means that this Method will be accessible by any Class(If other Classes are able to access this Class).
												</li>
											</ul>
										</li>
										<li>
											static
											<ul>
												<li>
													Means the given Method or variable is not instance related but Class related.
												</li>
												<li>
													It can be accessed without creating the instance of a Class.
												</li>
											</ul>
										</li>
										<li>
											void
											<ul>
												<li>
													Means the Method will not return any value.
												</li>
											</ul>
										</li>
										<li>
											main
											<ul>
												<li>
													This Method name is searched by JVM as a starting point for an application with a particular signature only.
												</li>
											</ul>
										</li>
										<li>
											String args[]
											<ul>
												<li>
													is the parameter to the main Method.
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>Using a package</h3>
							<ul>
								<li class="noStyle">
									<?php include "code/java_31.txt"; ?>
								</li>
								<li>
									When you compile using the command:
									<ul>
										<li class="noStyle">
											<?php include "code/java_18.txt"; ?>
											It will generate "HelloWorld.class" file at the same location of "HelloWorld.java".
										</li>
									</ul>
								</li>
								<li>
									When you compile using the command
									<?php include "code/java_32.txt"; ?>
									It will generate a 3 folders "com/ala/company/" and 1 file "HelloWorld.class" inside "company" folder named.
								</li>
								<li>
									To run:
									<ul>
										<li class="noStyle">
											<?php include "code/java_33.txt"; ?>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							When using Eclipse IDE, you can use
							<ul>
								<li>
									<span class="samplecode">CTRL+B</span> to compile and build the application.
								</li>
								<li>
									<span class="samplecode">ALT+SHIFT+X</span> to run the code.
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>JDK, JRE and JVM</h2>
					<ul>
						<li class="noStyle">
							<h3>JDK</h3>
							<ul>
								<li>
									Java Development Kit.
								</li>
								<li>
									Contains everything required to <strong>develop</strong> and <strong>run</strong> Java application.
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>JRE</h3>
							<ul>
								<li>
									Java Run time Environment
								</li>
								<li>
									 Contains everything required to <strong>run</strong> Java application which has already been compiled.
								</li>
								<li>
									It doesn't contain the code library required to develop Java application.
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>JVM</h3>
							<ul>
								<li>
									Java Virtual Machine.
								</li>
								<li>
									It's a virtual machine that provides runtime environment to execute Java <stong>byte code</strong> (It doesn't understand <span class="samplecode">.java</span> code).
								</li>
								<li>
									Works on top of your operating system to provide a recommended environment for your compiled Java code.
								</li>
								<li>
									It only provide the environment. It needs the Java code library to run applications.
								</li>
							</ul>
						</li>
						<li class="noStyle">
							<h3>JDK vs JRE vs JVM</h3>
							<ul>
								<li>
									JRE = JVM + Required libraries to run application.
								</li>
								<li>
									JDK = JRE + Required libraries and tools to develop Java Application (like compilers and debuggers...etc.).
								</li>
							</ul>
						</li>						
					</ul>
				</li>
				<li>
					<h2>Benefits of Java</h2>
					<ul>
						<li>
							Simple
							<ul>
								<li>
									The confusing and ambiguous concepts of C++ (pointers and operator overloading) are either left out in Java or they have been re-implemented in a cleaner way.
								</li>
							</ul>
						</li>
						<li>
							Object Oriented
							<ul>
								<li>
									In java everything is Object which has some data and behaviour.
								</li>
								<li>
									Java can be easily extended as it is based on Object Model.
								</li>
							</ul>
						</li>
						<li>Encapsulation
							<ul>
								<li>Java supports access modifiers to protect data from unintended access and modification.</li>
							</ul>
						</li>
						<li>Platform Independent
							<ul>
								<li>Thanks to "write once, run everywhere."</li>
								<li>
									On compilation Java program is compiled into bytecode.
									This bytecode is platform independent and can be run on any machine (witch has a JRE installed).
								</li>
							</ul>
						</li>
						<li>Robust
							<ul>
								<li>One of the major advantages of Java over C++ is that it prevents memory leaks.</li>
								<li>Java manages memory on its own and does garbage collection automatically.</li>
							</ul>
						</li>
						<li>Secure
							<ul>
								<li>Java code runs inside the JVM.</li>
								<li>This creates a sandbox that makes it hard for Java code to do evil things to the computer/server it is running on (almost no interaction with the OS).</li>
							</ul>
						</li>
						<li>
							Multi Threading
							<ul>
								<li>
									It lets you write program that can do many tasks simultaneously.
								</li>
								<li>
									Benefit of multithreading is that it utilizes same memory and other resources to execute multiple threads at the same time
									(example: While typing, grammatical errors are checked along).
								</li>
							</ul>
						</li>
						<li>
							High Performance
							<ul>
								<li>
									Java is an interpreted language, so it will never be as fast as a compiled language like C or C++.
								</li>
								<li>
									But, Java enables high performance with the use of <a href="javajit">just-in-time compiler</a>.
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>