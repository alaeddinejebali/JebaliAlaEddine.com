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
					<h2>Typescript is</h2>
					<ul>
						<li>
							JavaScript + Code Encapsulation + Type support.
						</li>
					</ul>
				</li>
				<li>
					<h2>TypeScript is also</h2>
					<ul>
						<li>
							open source
						</li>
						<li>
							Maintained by <a href="https://www.typescriptlang.org/" target="_blank">Microsoft</a>.
						</li>
						<li>
							Uses ES6/ES7.
						</li>
						<li>
							Transpiles to JavaScript.
						</li>
					</ul>
				</li>
				<li>
					<h2>Benefits of typed language</h2>
					<ul>
						<li>
							Mistakes are detected eralier.
						</li>
						<li>
							Less bugs.
						</li>
						<li>
							Saves lot of time.
						</li>
					</ul>
				</li>
				<li>
					<h2>TypeScript compiler</h2>
					<ul>
						<li>
							It's cross-plateform (works on Windows, Linux and MacOS).
						</li>
						<li>
							It compile TypeScript code to a configured version of JavaScript (ES3, ES5, ES6). Default is ES3.
						</li>
						<li>
							To compile a single file
							<?php include 'code/08.txt'; ?>
						</li>
						<li>
							To compile all .ts files
							<?php include 'code/09.txt'; ?>
						</li>
						<li>
							To compile to a single .ts file, update <i>tsconfig.json</i> by adding this line:
							<?php include 'code/10.txt'; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Install TypeScript</h2>
					<ul>
						<li>
							<a href="/frontend/nodejs" target="_blank">Install nodeJS</a>.
							<?php include 'code/01.txt'; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>tsconfig.json</h2>
					<ul>
						<li>
							Specifies the root files and the compiler options required to compile the project.
						</li>
						<li>
							"files" property: only the specified files are included.
						</li>
						<li>
							"exclude" property: the compiler includes all TypeScript (*.ts or *.tsx) files in the containing directory and subdirectories except for those files or folders that are excluded.
						</li>
						<li>
							The "files" property cannot be used in conjunction with the "exclude" property.
							<ul>
								<li class="noStyle">
									<?php include 'code/02.txt'; ?>
								</li>
							</ul>
						</li>
						<li>
							When <strong><i>sourceMap</i></strong> is true, <strong><i>.map</i></strong> files are source map files that let tools map between the generated JavaScript code and the TypeScript source files that created it.
						</li>
						<li>
							Many debuggers (e.g. Visual Studio or Chrome's dev tools) can consume these files so you can debug the TypeScript file instead of the JavaScript file.
						</li>
						<li>
							Find all descriptions explanation here <a href="http://json.schemastore.org/tsconfig" target="_blank">http://json.schemastore.org/tsconfig</a>.
						</li>
					</ul>
				</li>
				<li>
					<h2>Import other files into current file</h2>
					<ul>
						<li class="noStyle">
							<?php include 'code/03.txt'; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Data types</h2>
					<ul>
						<li>
							Built-in
							<ul>
								<li>boolean</li>
								<li>string</li>
								<li>number</li>
								<li class="noStyle">
									<?php include 'code/21.txt'; ?>
								</li>
								<li>
									Array
									<ul>
										<li class="noStyle">
											<?php include 'code/20.txt'; ?>
										</li>
									</ul>
								</li>
								<li>
									null and undefined: See <a href="#undefinedvsnull">this sections</a> for more details.
								</li>
								<li>
									Function
									<ul>
										<li class="noStyle">
											<?php include 'code/22.txt'; ?>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							Custom
							<ul>
								<li>enum</li>
								<li>array</li>
								<li>interface</li>
								<li>class</li>
							</ul>
						</li>
						<li>
							Special type
							<ul>
								<li>
									any: used when you're not sure about the type of a variable when it's declaredd.
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Accessor and modifier</h2>
					<ul>
						<li class="noStyle">
							<?php include 'code/04.txt'; ?>
						</li>
						<li>
							This is only available when targeting ES5 version and higher (tsc -t ES5 app.tsc).
						</li>
					</ul>
				</li>
				<li>
					<h2>Arrow functions (Lambda)</h2>
					<ul>
						<li>
							See <a href="/frontend/javascript#advancedtopics" target="_blank">this section</a>.
						</li>
					</ul>
				</li>
				<li id="declare">
					<h2>"declare" keyword</h2>
					<ul>
						<li>
							It is used to declare variables that may not have originated from a TypeScript file.
						</li>
						<li>
							For example, lets imagine that we have a library called "gpt" that doesn’t have a TypeScript declaration file. You can declare it like taht:
							<?php include 'code/18.txt'; ?>
							<ul>
								<li>
									The problem the 1<em>st</em> declaration is that you won’t have Intellisense for that variable in design time but you will be able to use the library in your code.
								</li>
								<li>
									With <strong><i>declare</i></strong> in the 2<em>nd</em> it's more readable and expresses an ambient declaration.
								</li>
							</ul>
						</li>
						<li>
							See <a href="#jquery">Example use jQuery in your typescript project</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>