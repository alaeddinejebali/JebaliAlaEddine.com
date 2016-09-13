<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			PHP5 vs PHP4
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>PHP5 objects
				<ul>
					<li>in PHP5, all objects are passed by reference.
						<ul>
							<li>There is a specialized mechanism to copy objects. This is
								provided by the <i>clone</i> construct and the <i>__clone()</i>
								magic method.
							</li>
						</ul>
					</li>
					<li>In PHP5 constants, as well as static methods and properties,
						can now be defined within the scope of a class.</li>
					<li>In PHP5 class methods and properties now feature visibility,
						and can be declared as public , private or protected . Classes and
						methods can also be declared as final to prevent further
						inheritance.</li>
					<li>PHP 5 features unified constructors and destructors.
						<ul>
							<li>All constructors should now be named <i>__construct()</i>.
							</li>
							<li>The new <i>__destruct()</i> magic method has been added for
								object destruction.
							</li>
						</ul>
					</li>
					<li>PHP5 added <i>interfaces</i> and <i>abstract</i> classes.
					</li>
					<li>Class definitions can now be loaded on demand by using the <i>__autoload()</i>
						function.
					</li>
				</ul>
			</li>
			<li>PHP5 new magic methods
				<ul>
					<li>__get(): is utilized for reading data from inaccessible
						properties.</li>
					<li>__set(): is run when writing data to inaccessible properties.</li>
					<li>__call(): is executed when calling a non-existent method of a
						class.</li>
					<li>__isset(): is called when passing an undefined property to the
						isset() construct.</li>
					<li>__unset(): is called when passing an undefined property to
						unset() .</li>
					<li>__toString(): is called when trying to directly echo or print()
						an object.</li>
					<li>__set_state(): is inserted dynamically by var_export() to allow
						for re-initialization on execution of var_export()'s output.</li>
					<li>
						Example:
						<?php include 'code/php_code_194.txt'; ?>
					</li>
				</ul>
			</li>
			<li>PHP5 new extensions
				<ul>
					<li>SimpleXML: it allows easy access to XML data using object and
						array notation.</li>
					<li>DOMXML and DOMXSL.</li>
					<li>PDO: provides a unified database access extension that allows
						access to many different types of database systems by using a
						common interface.</li>
					<li>Hash extension: like MD5() which added to the PHP core.</li>
					<li>SPL: it provides numerous interfaces that enhance the way
						classes interact with the PHP language.</li>
				</ul>
			</li>
			<li>Error Management
				<ul>
					<li>Classes now support exceptions; the new <i>set_exception_handler()</i>
						function allows you to define a script-wide exception handler.
					</li>
					<li>The <i>E_STRICT</i> error reporting level has been added to the
						language to emit notices when legacy or deprecated code is
						encountered.
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>