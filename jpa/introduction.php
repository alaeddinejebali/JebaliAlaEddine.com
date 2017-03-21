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
					<h2>What is JPA?</h2>
					<ul>
						<li>
							JPA: Java Persistence Architecture
						</li>
						<li>
							It is a Java specification for accessing, persisting, and managing data between Java objects / classes and a relational database.  
						</li>
						<li>
							JPA is a specification, meaning it provides guidelines for developing an interface that complies with a certain standard.
						</li>
						<li>
							While JPA dictates an interface, it does not provide an implementation of that interface, meaning there is no underlying code that performs the operations to persist an object to a relational database.
						</li>
						<li>
							Its purpose is to provide a set of guidelines that can be followed by JPA providers to create an ORM implementation in a standardized manner.
						</li>
						<li>
							To look at the concept of JPA from another perspective, imagine if you were provided this interface.
							<ul>
								<li class="noStyle">
									<?php include "code/jpa_01.txt"; ?>
								</li>
								<li>
									 If this interface is used within any code it will not execute because no concrete objects that implement this interface exist to perform the work. 
								</li>
								<li>
									This same concept applies to JPA just on a larger scale since the API specification defines many interfaces and annotations.
								</li>
							</ul>
						</li>
						<li>
							JPA providers develop a JPA implementation that meets the requirements of the JPA specification.
						</li>
						<li>
							Hibernate is a JPA Provider, as well as others such as EclipseLink and TopLink.
						</li>
						<li>
							With a JPA implementation in place Java objects can be now be persisted to a relational database, since there is underlying code to perform the work.
							<ul>
								<li class="noStyle">
									<?php include "code/jpa_02.txt"; ?>
								</li>
							</ul>
						</li>
						<li>
							 If we choose to use JPA, we can eventually switch out our chosen JPA implementation for another implementation as long as they both meet the JPA specification.
							<ul>
								<li>
									Let's assume that the Hibernate implementation behind the scenes has several deficiencies causing  the poor performance.
								</li>
								<li>
									Upon encountering this issue, another provider may decide the need for another JPA implementation exists.
								</li>
								<li>
									This provider creates their own implementation of the JPA specification and publishes the code.
								</li>
								<li class="noStyle">
									<?php include "code/jpa_03.txt"; ?>
								</li>								
							</ul>
						</li>
						<li>
							In reality, this is not always a seamless transition between JPA implementation, since we often utilize features of the implementation that are not support by the specification and each implementation has its own little quirks.
							<ul>
								<li>
									To illustrate this point, consider if we had called the superSelect method within our application.
									<?php include "code/jpa_04.txt"; ?>
								</li>
								<li>
									At this point, we cannot swap our JPA implementation to the "<i>AlaJpaImplementation</i>" JPA implementation because its interface does not contain the superSelect method.
								</li>
								<li>
									This example attempts to illustrate the restrictions that occur when a developer chooses to use the straight Hibernate implementation, which is not bound by the JPA specification.
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
