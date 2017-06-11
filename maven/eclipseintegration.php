<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#eclipseintegration">Eclipse integration</a>
		</h4>
	</div>
	<div id="eclipseintegration" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>XXXXXXX</h2>
					<ul>
						<li>
							Modern IDEs have Maven integration built into them.
						</li>
						<li>
							They allow you to execute default goals.
						</li>
						<li>
							To import a Maven project, you need to select a folder which has the <span class="samplecode">pom.xml</span> file at the root.
						</li>
						<li>
							In "package Explorer", you can see "maven Dependencies" (found in pom.xml).
						</li>
						<li>
							Convert existing project to a Maven project
							<ul>
								<li>
									If you have a <i>pom.xml</i>, you can convert the project to a Maven project.
								</li>
								<li>
									Right click this project -> "Configure" -> "Convert to Maven Project".
								</li>
								<li>
									Once converted, it'll set the classpath and automatically build the project.
								</li>
							</ul>
						</li>
						<li>
							pom.xml views (when opened in Eclipse)
							<ul>
								<li>
									"Overview" tab
									<ul>
										<li>
											You can directly edit it. When you save the file source will be updated.
										</li>
									</ul>
								</li>
								<li>
									"Dependencies" tab
									<ul>
										<li>
											You can click add and search for a dependency.
										</li>
									</ul>
								</li>
								<li>
									"Dependency Heirarchy" tab
									<ul>
										<li>
											Displays the complete dependency tree, including transitive dependencies as well overridden dependencies.
										</li>
										<li>
											it allows you too to detect conflict between dependencies.
										</li>
									</ul>
								</li>
								<li>
									"Effective pom" tab
									<ul>
										<li>
											It's the complete pom with everything inherited from the pom project, if we have a parent pom, and the default super pom.
										</li>
										<li>
											More of a debugging tool to see what the pom is doing.
										</li>
										<li>
											
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
