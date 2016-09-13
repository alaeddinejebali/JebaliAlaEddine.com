<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Introduction
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>TypeScript is</h2>
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
						<?php include 'code/02.txt'; ?>
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
				</ul>
			</li>
			<li>
				<h2>Arrow functions (Lambda)</h2>
				<ul>
					<li>
						See <a href="/frontend/javascript#advancedtopics" taget="_blank">this section</a>.
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>