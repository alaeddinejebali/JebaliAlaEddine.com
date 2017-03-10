<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#modifiers">Java modifiers</a>
		</h4>
	</div>
	<div id="modifiers" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>What are modifiers?</h2>
					<ul>
						<li>
							Modifiers are keywords that you add to those definitions to change their meanings. 
						</li>
						<li>
							Java has a wide variety of modifiers, including the following:
							<ol>
								<li>Java Access Modifiers</li>
								<li>Non Access Modifiers</li>
							</ol>
						</li>
					</ul>
				</li>
				<li>
					<h2>Access Modifiers</h2>
					<ul>
						<li>
							Access modifiers help you set the level of access you want for your class, variables and methods.
						</li>
						<li>
							Variables are eligible for all modifiers: "default", "public", "protected" and "private".
						</li>
						<li>
							Classes can use only "public" and "default" access modifiers.
						</li>
						<li>
							Visibility of the Class should be checked before checking the visibility of the variable defined inside that Class. If the Class is visible then the variables defined inside that Class will be visible.
							If the Class is not visible then no variable will be accessible, even if it is set to public.
						</li>
						<li>
							Access Modifiers for classes
							<ul>
								<li>
									<strong>default</strong> (known as package-private)
									<ul>
										<li>
											 Class will be accessible to the classes which are defined in the same package.
										</li>
									</ul>
								</li>
								<li>
									<strong>public</strong>
									<ul>
										<li>
											Class will be accessible to all the classes available in the Java world.
										</li>
										<li>
											Therefore, fields, methods, blocks declared inside a public class can be accessed from any class belonging to the Java Universe.
										</li>
										<li>
											Example: The main() method of an application has to be public. Otherwise, it could not be called by a Java interpreter (such as java) to run the class.
										</li>
									</ul>
								</li>
								<li>
									Java access aodifiers table for class
									<ul>
										<li class="noStyle">
											<table class="table table-striped">
											<thead>
												<tr>
													<th></th>
													<th>public</th>
													<th>default</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>within same package</td>
													<td class="tac">yes</td>
													<td class="tac">yes</td>
												</tr>
												<tr>
													<td>From outside the same package</td>
													<td class="tac">yes</td>
													<td class="tac">no</td>
												</tr>
											</tbody>
											</table>
										</li>
									</ul>
								</li>										
							</ul>
						</li>
						<li>
							Access Modifiers for Instance and Static Variables
							<ul>
								<li>
									<strong>default</strong> (known as package-private)
									<ul>
										<li>
											It will be accessible to classes which are defined in the same package.
										</li>
									</ul>
								</li>
								<li>
									<strong>public</strong>
									<ul>
										<li>
											It can be accessible from any class available in the Java world.
										</li>
									</ul>
								</li>
								<li>
									<strong>private</strong>
									<ul>
										<li>
											It will be accessible only from within the Class in which it is defined.
										</li>
										<li>
											Using the private modifier is the main way that an object encapsulates itself and hides data from the outside world.
											They can be accessed outside the class, if public getters/setters methods are present in the class.
										</li>
									</ul>
								</li>
								<li>
									<strong>protected</strong>
									<ul>
										<li>
											It will be accessible from its sub classes defined in the same package or in a different package only (via Inheritance).
										</li>
									</ul>
								</li>			
								<li>
									Java access aodifiers table for method
									<ul>
										<li class="noStyle">
											<table class="table table-striped">
											<thead>
												<tr>
													<th></th>
													<th>public</th>
													<th>private</th>
													<th>protected</th>
													<th>default</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>within same class</td>
													<td class="tac">yes</td>
													<td class="tac">yes</td>
													<td class="tac">yes</td>
													<td class="tac">yes</td>
												</tr>
												<tr>
													<td>From any class in same package</td>
													<td class="tac">yes</td>
													<td class="tac">no</td>
													<td class="tac">yes</td>
													<td class="tac">yes</td>
												</tr>
												<tr>
													<td>From any sub-class in same package</td>
													<td class="tac">yes</td>
													<td class="tac">no</td>
													<td class="tac">yes</td>
													<td class="tac">yes</td>
												</tr>
												<tr>
													<td>From any sub-class in different package</td>
													<td class="tac">yes</td>
													<td class="tac">no</td>
													<td class="tac">yes<br/>(only by inheritance)</td>
													<td class="tac">no</td>
												</tr>
												<tr>
													<td>From any non sub-class in different package</td>
													<td class="tac">yes</td>
													<td class="tac">no</td>
													<td class="tac">no</td>
													<td class="tac">no</td>
												</tr>
											</tbody>
											</table>
										</li>											
									</ul>
								</li>
							</ul>
						</li>
						<li>
							A top level class can't be private (because it'll become useless) but Inner classes can be private.
							<ul>
								<li>
									Once you declare an inner class private, it cannot be accessed from an object outside the class.
								</li>
							</ul>
						</li>
						<li>
							The protected access modifier cannot be applied to class and interfaces.
						</li>
						<li>
							Methods and fields in a interface cannot be declared protected.
						</li>
						<li>
							Example about protected and inheritance
							<ul>
								<li>
									In A and B are in the same package
									<?php include 'code/java_36.txt'; ?>
								</li>
								<li>
									In A and B are in different packages
									<?php include 'code/java_37.txt'; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Non Access Modifiers</h2>
					<ul>
						<li>
							<strong>Final</strong>
							<ul>
								<li>
									Class
									<ul>
										<li>
											The Class cannot be extended by any other Class.
										</li>
									</ul>
								</li>
								<li>
									Method
									<ul>
										<li>
											The method cannot be overridden by any subclass.
										</li>
									</ul>
								</li>
								<li>
									Variable (Instance/local/Method-arguments variables)
									<ul>
										<li>
											 The variable value cannot be changed (Final variables are like constants).
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<strong>Abstract</strong>
							<ul>
								<li>
									Method
									<ul>
										<li>
											The Method does not have a body (no implementation) but only a signature.
										</li>
									</ul>
								</li>
								<li>
									Class
									<ul>
										<li>
											Abstract classes are classes that contain one or more abstract methods. 
										</li>
										<li>
											 If a Class has at least one abstract Method, the Class should be (becomes) an abstract Class.
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<strong>Synchronized</strong>
							<ul>
								<li>
									Method
									<ul>
										<li>
											Synchronized Methods can be accessed by only one thread at a time.
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<strong>Native</strong>
							<ul>
								<li>
									Method
									<ul>
										<li>
											The method is implemented on a platform dependent code.
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<strong>Strictfp</strong>
							<ul>
								<li>
									Method (This section needsto be reformalized by me)
									<ul>
										<li>
											All floating-point computation done by the method must be performed in a way that strictly conforms to the IEEE 754 standard. In particular, all values, including intermediate results, must be expressed as IEEE float or double values and cannot take advantage of any extra precision or range offered by native platform floating-point formats or hardware ( Java 1.2 and later). This modifier is rarely used.
										</li>
									</ul>
								</li>
								<li>
									Class
									<ul>
										<li>
											All methods of the class are implicitly strictfp.
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<strong>transient</strong>
							<ul>
								<li>
									Variable
									<ul>
										<li>
											The field is not part of the persistent state of the object and should not be serialized with the object.
										</li>
										<li>
											Used with object serialization; see java.io.ObjectOutputStream.
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<strong>volatile</strong>
							<ul>
								<li>
									Variable
									<ul>
										<li>
											The field can be accessed by unsynchronized threads, so certain optimizations must not be performed on it.
										</li>
										<li>
											This modifier can sometimes be used as an alternative to synchronized. 
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