<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#introduction">Introduction</a>
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
							A <i>JAR</i> file is like a zip file of mainly Java class files.
						</li>
					</ul>
				</li>	
				<li>
					<h2>Scenario</h2>
					<ul>
						<li>
							You write the source code into a .java file.
						</li>
						<li>
							You use javac to compile the code. A ".class" file is generated: It's the <strong>byte code</strong>.
						</li>
						<li>
							The byte code is executed by the JVM to run application.
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
						<li>
							<h3>Without package</h3>
							<ul>
								<li>
									<?php include "code/java_17.txt"; ?>
									<?php include "code/java_16.txt"; ?>
								</li>
								<li>
									Compile
									<?php include "code/java_18.txt"; ?>
									This will generate "HelloWorld.class" file at the same location of "HelloWorld.java".
								</li>
								<li>
									Run
									<?php include "code/java_19.txt"; ?>
								</li>
								<li>
									Note: When running Java application, you're running the ".class" files not the ".java" file.
								</li>
								<li>
									Understand public static void main(String args[])
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
						<li>
							<h3>Using a package</h3>
							<ul>
								<li>
									<?php include "code/java_31.txt"; ?>
								</li>
								<li>
									When you compile using the command
									<?php include "code/java_18.txt"; ?>
									It will generate "HelloWorld.class" file at the same location of "HelloWorld.java".
								</li>
								<li>
									When you compile using the command
									<?php include "code/java_32.txt"; ?>
									It will generate a 3 folders "com/ala/company/" and a "HelloWorld.class" file inside it.
								</li>
								<li>
									To run:
									<?php include "code/java_33.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							When using Eclipse IDE, you can use
							<ul>
								<li>
									CTRL+B to compile and build the application
								</li>
								<li>
									ALT+SHIFT+X to run the code
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>JDK, JRE and JVM</h2>
					<ul>
						<li>
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
						<li>
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
						<li>
							<h2>JVM</h2>
							<ul>
								<li>
									Java Virtual Machine.
								</li>
								<li>
									Works on top of your operating system to provide a recommended environment for your compiled Java code.
								</li>
								<li>
									Works with bytecode.
								</li>
								<li>
									It only provide the environment. It needs the Java code library to run applications.
								</li>
							</ul>
						</li>
						<li>
							<h2>JDK vs JRE vs JVM</h2>
							<ul>
								<li>
									JRE = JVM + Required libraries to run application.
								</li>
								<li>
									JDK = JRE + Required libraries to develop Java Application.
								</li>
							</ul>
						</li>						
					</ul>
				</li>
				<li>
					<h2>Benefits of Java</h2>
					<ul>
						<li>Object Oriented</li>
						<li>Encapsulation
							<ul>
								<li>Java supports access modifi ers to protect data from unintended access and modifi cation.</li>
							</ul>
						</li>
						<li>Platform Independent
							<ul>
								<li>Thanks to "write once, run everywhere."</li>
							</ul>
						</li>
						<li>Robust
							<ul>
								<li>One of the major advantages of Java over C++ is that it prevents memory leaks.</li>
								<li>Java manages memory on its own and does garbage collection automatically.</li>
							</ul>
						</li>
						<li>Simple</li>
						<li>Secure
							<ul>
								<li>Java code runs inside the JVM.</li>
								<li>This creates a sandbox that makes it hard for Java code to do evil things to the computer it is running on.</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>