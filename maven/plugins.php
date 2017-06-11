<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#plugins">Plugins</a>
		</h4>
	</div>
	<div id="plugins" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Goals and phases</h2>
					<ul>
						<li>
							The default goals are plugins configured in the maven install: <i>clean</i>, <i>compile</i>, <i>test</i>, <i>package</i>, <i>install</i>, <i>deploy</i>.
						</li>
						<li>
							Super POM has 3 goals defined in it (which are added to your effective POM):
							<?php include "code/03.txt"; ?>
						</li>
						<li>
							Phases
							<ul>
								<li>
									??????
								</li>
								<li>
									integration-test
									<ul>
										<li>
											Deploy and run integration tests.
										</li>
									</ul>
								</li>
								<li>
									verify
									<ul>
										<li>
											Run checks againts package to verify integrity.
										</li>
									</ul>
								</li>
								<li>
									install
									<ul>
										<li>
											Install the package in our local repository.
										</li>
									</ul>
								</li>
								<li>
									deploy
									<ul>
										<li>
											Copy final package to a remote repository.
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Compiler plugin</h2>
					<ul>
						<li>
							Used to compile and test code. See <a href="http://maven.apache.org/plugins/maven-compiler-plugin" target="_blank">http://maven.apache.org/plugins/maven-compiler-plugin</a>.
						</li>
						<li>
							It invokes <span class="samplecode">Javac</span> but with a classpath set from dependencies.
						</li>
						<li>
							Default to Java 1.5 regardless of what JSK is installed.
						</li>
						<li>
							The configuration section allows customization:
							<?php include "code/04.txt"; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Jar plugin</h2>
					<ul>
						<li>
							Used to package code into a Jar. See <a href="http://maven.apache.org/plugins/maven-jar-plugin/index.html" target="_blank">http://maven.apache.org/plugins/maven-jar-plugin/index.html</a>.
						</li>
						<li>
							Tied to the package phase.
						</li>
						<li>
							Configuration:
							<?php include "code/05.txt"; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Source plugin</h2>
					<ul>
						<li>
							Used to attach source code into a Jar. See <a href="http://maven.apache.org/plugins/maven-source-plugin/index.html" target="_blank">http://maven.apache.org/plugins/maven-source-plugin/index.html</a>.
						</li>
						<li>
							Tied to the package phase.
						</li>
						<li>
							Configuration:
							<?php include "code/06.txt"; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Javadoc plugin</h2>
					<ul>
						<li>
							Used to attach javadocs to a Jar. See <a href="http://maven.apache.org/plugins/maven-javadoc-plugin/index.html" target="_blank">http://maven.apache.org/plugins/maven-javadoc-plugin/index.html</a>.
						</li>
						<li>
							Tied to the package phase.
						</li>
						<li>
							Configuration:
							<?php include "code/07.txt"; ?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
