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
        </ul>
    </div>
</section>