<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#repositories">Repositories</a>
		</h4>
	</div>
	<div id="repositories" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>What are repositories</h2>
					<ul>
						<li>
							They are where Maven looks at to download code and other artifacts from so that we can use them inside of our application.
						</li>
						<li>
							They are just a HTTP accesible location that you download files from.
						</li>
						<li>
							The default location is defined in the super "pom.xml" file.
							Never edit that file because there's ways to override that.
							Either through a global parent project file or through our project's "pom.xml".
						</li>
						<li>
							Default location: <a href="https://repo.maven.apache.org/maven2/" target="_blank">https://repo.maven.apache.org/maven2/</a>.
						</li>
					</ul>
				</li>
				<li>
					<h2>Local repository</h2>
					<ul>
						<li>
							It's where Maven stores everything it downloads
						</li>
						<li>
							Maven looks locally to see if we have this code. 
							And if it doesn't, it will go out and download that from a remote repository.
						</li>
						<li>
							 When it downloads it, it'll install it, by default, in your <span class="samplecode">/users/userName/.../.m2/repository</span>.
						</li>
						<li>
							It stores artifacts using the information that you provided for <i>artifactId</i>, <i>groupId</i> and <i>version</i>.
						</li>
					</ul>
				</li>
				<li>
					<h2>Dependency repository</h2>
					<ul>
						<li>
							They are where we download all of our depencies from
							<ul>
								<li>
									Can contain just releases and/or snapshots.
								</li>
							</ul>
						</li>
						<li>
							Specify our own repository:
							<ul>
								<li>
									Example of spring core <a href="http://repo.springsource.org/libs-snapshot/org/springframework/spring-core/3.2.0.BUILD-SNAPSHOT/" target="_blank">http://repo.springsource.org/libs-snapshot/org/springframework/spring-core/3.2.0.BUILD-SNAPSHOT/</a>
									<?php include "code/01.txt"; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Plugin repository</h2>
					<ul>
						<li>
							It's identical to Dependency repositories, just it deals with Plugins.
						</li>
						<li>
							Example:
							<?php include "code/02.txt"; ?>
						</li>
						<li>
							Goals are really just configured plugins in your application.
						</li>
						<li>
							Plugins are tied to one of the defined phases, but can usually be overridden.
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
