<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#npm">NPM</a>
		</h4>
	</div>
	<div id="npm" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Presentation</h2>
					<ul>
						<li>
                            NPM (Node Package Manage) is a module manager for JavaScript (front and back).
						</li>
						<li>
                            It's replacing Bower
						</li>
						<li>
						      Install NPM
						      <ul>
						      
						      </ul>
						</li>
						<li>
						      Upgrade to latest version
						      <ul>
						          <li>
						              $> npm install -g npm@latest
						          </li>
						      </ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Basic commands</h2>
					<ul>
						<li>
                            $> npm install
                            <ul>
                                <li>
                                    Install needed dependencies of a the project (founds in <i>package.json</li> file)
                                </li>
                            </ul>
						</li>
						<li>
                            $> npm <i>&lt;taskName&gt;</i>
                            <ul>
                                <li>
                                    Run tasks found in "script" section of <i>package.json</li> file.
                                </li>
                            </ul>
						</li>
						<li>
						  $> npm help &lt;commandName&gt;
						  <ul>
						      <li>
						          Open the documentation of that command.
						      </li>
						  </ul>
						</li>
						<li>
						  $> npm help-search &lt;commandSubstringNam&gt;
						  <ul>
						      <li>
						          List of commands using this word
						      </li>
						  </ul>
						</li>
						<li>
						  $> npm init
						  <ul>
						      <li>
						          Create <i>package.json</i> file.
						      </li>
						  </ul>
						</li>
						<li>
						  $> npm init -y
						  <ul>
						      <li>
						          Create <i>package.json</i> file with all default options accepted.
						      </li>
						  </ul>
						</li>
						<li>
						  $> npm config set &lt;key&gt; &lt;value&gt;
						  <ul>
						      <li>
						          Set default values to be used when running "$> npm init"
						      </li>
						      <li>
						          Example: $> npm set init-author-name "Ala"
						      </li>
						  </ul>
						</li>
						<li>
						  $> npm config get &lt;key&gt;
						  <ul>
						      <li>
						          Get saved value for &lt;key&gt;
						      </li>
						  </ul>
						</li>
						<li>
						  $> npm config delete &lt;key&gt;
						  <ul>
						      <li>
						          Delete saved value for &lt;key&gt;
						      </li>
						  </ul>
						</li>
						<li>
						  $> npm config list
						  <ul>
						      <li>
						          Show all the config settings.
						      </li>
						  </ul>
						</li>
					</ul>
				</li>
				<li>
				    <h2>Packages installation</h2>
				    <ul>
				        <li>
				            $> npm isnatll &lt;urlToGitRepositoryOfThePackage&gt;
				            <ul>
				                <li>
				                    Install the package from it's git repository
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm isnatll &lt;path/to/folder&gt;
				            <ul>
				                <li>
				                    Install the package from a folder.
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm install -g &lt;packageName&gt;
				            <ul>
				                <li>
				                    Package will be installed globally (accessible form everywhere as a command line).
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm install &lt;packageName&gt;
				            <ul>
				                <li>
				                    Package will be installed under "&lt;yourProject&gt;/node_modules" folder.
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm install --save &lt;packageName&gt;
				            <ul>
				                <li>
				                    Save the dependencies  on <i>package.json</i> file.
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm install --save-dev &lt;packageName&gt;
				            <ul>
				                <li>
				                    Save the dependencies  on <i>package.json</i> file in "devDependencies" section.
				                </li>
				                <li>
				                    Is useful when you don't need the package in production but only for development (like a karama package which is only used for testing when developing)
				                </li>
				            </ul>
				        </li>
				    </ul>
				</li>
				<li>
				    <h2>List installed packages</li>
				    <ul>
				        <li>
				            $> ls node_modules/
				        </li>
				        <li>
				            $> npm list
				        </li>
				        <li>
				            $> npm list --depth 1
				        </li>
				        <li>
				            $> npm list --depth 0
				        </li>
				        <li>
				            $> npm list --global true
				        </li>
				        <li>
				            $> npm list --long true
				            <ul>
				                <li>
				                    Show info of packages
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm list --json true
				            <ul>
				                <li>
				                    Show info of packages in json format
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm list --dev true
				        </li>
				        <li>
				            $> npm list --prod true
				        </li>
				    </ul>
				</li>
				<li>
				    <h2>Uninstall (remove) packages</h2>
				    <ul>
				        <li>
				            $> npm uninstall -g &lt;packageName&gt;
				            <ul>
				                <li>
				                    Remove globally the package.
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm uninstall &lt;packageName&gt;
				            <ul>
				                <li>
				                    Remove it from "&lt;yourProject&gt;/node_modules" folder but it'll still exist in <i>package.json</i>.
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm uninstall &lt;packageName&gt; --save
				            <ul>
				                <li>
				                    Remove it from "&lt;yourProject&gt;/node_modules" folder and from <i>package.json</i>.
				                </li>
				            </ul>
				        </li>
				    </ul>
				</li>
				<li>
				    <h2>Install specific version</li>
				    <ul>
				        <li>
				            vx.y.z
				            <ul>
				                <li>
				                    x: major version
				                </li>
				                <li>
				                    y: minor version (new features added...)
				                </li>
				                <li>
				                    x: patch / revision version (bug fixes...)
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm install &lt;packageName&gt;@1.8.2
				        </li>
				        <li>
				            $> npm install &lt;packageName&gt;@1.8.x
				            <ul>
				                <li>
				                    Install latest version of v1.8
				                </li>
				                <li>
				                    Is equivalent to: $> npm install &lt;packageName&gt;@1.8
				                </li>
				            </ul>
				        </li>
				        <li>
				            $> npm install &lt;packageName&gt;@">=1.1.0 <1.4.0"
				        </li>
				        <li>
				            Install from <i>package.json</i> (when running "$> npm install")
				            <ul>
				                <li>
				                    ^x.y.z: install latest version of major release.
				                </li>
				                <li>
				                    ~x.y.z: install latest version of minor release.
				                </li>
				            </ul>
				        </li>
				    </ul>
				</li>
                <li>
                	<h2>Update packages</h2>
                	<ul>
                		<li>
                			$> npm update --save
                		</li>
                		<li>
                			$> npm update --prod
                		</li>
                		<li>
                			$> npm update -g &lt;packageName&gt;
                			<ul>
                				<li>
                					upadate the installed globally version
                				</li>
                			</ul>
                		</li>
                		<li>
                			$> npm update &lt;packageName&gt;
                			<ul>
                				<li>
                					Get the latest version
                				</li>
                			</ul>
                		</li>
                	</ul>
                </li>
                <li>
                	<h2>Prunning</h2>
                	<ul>
                		<li>
                			It's useful when you're preparing going to prod.
                			<ul>
                				<li>
                					Imagine that you or another memeber of the team used "$> npm remove &lt;packageName&gt;" by mistake.
                				</li>
                				<li>
                					As there'll be no alert, the project may not work in production
                				</li>
                			</ul>
                		</li>
                		<li>
                			$> npm list --depth 0
                			<ul>
                				<li>
                					In case you see "extraneous" near a package name, it means that this package is not specified in <i>package.json</i> file.
                				</li>
                			</ul>
                		</li>
                		<li>
                			$> npm prune
                			<ul>
                				<li>
                					Compare installed packages with ones found in <i>package.json</i> file and then fixes problems.
                				</li>
                			</ul>
                		</li>
                		<li>
                			$> npm prune &lt;packageName&gt;
                		</li>
                		<li>
                			$> npm prune --production
                			<ul>
                				<li>
                					Will remove all "dev" packages.
                				</li>
                			</ul>
                		</li>
                	</ul>
                </li>
                <li>
                	<h2>NPM registery</h2>
                	<ul>
                		<li>
                			You can look for a package from <a href="http://npmjs.com" target="_blank"></a>.
                		</li>
                		<li>
                			Searching for a package
                			<ul>
                				<li>
                					$> npm search &lt;aString&gt;
                					<ul>
                						<li>
                							Looks for packages having that word in their names and/or in their descriptions.
                						</li>
                						<li>
                							The problem is that you may get too many results, so <a href="http://npmjs.com" target="_blank"></a> is better.
                						</li>
                					</ul>
                				</li>
                			</ul>
                		</li>
                		<li>
                			$> npm repo &lt;packageName&gt;
                			<ul>
                				<li>
                					Open package repository page
                				</li>
                			</ul>
                		</li>
                		<li>
                			Publish your own package
                			<ul>
                				<li>
                					Start by creating an account on <a href="http://npmjs.com" target="_blank"></a>.
                				</li>
                				<li>
                					Prepare your project for publishing
                					<ul>
                						<li>
                							Setup the project for GIT.
                						</li>
                						<li>
                							create a <i>package.json</i> file.
                						</li>
                					</ul>
                				</li>
                				<li>
                					Publish to NPM
                					<ul>
                						<li>
                							$> npm publish
                						</li>
                						<li>
                							$> npm info &lt;packageName&gt;
                						</li>
                						<li>
                							$> npm repo &lt;packageName&gt;
                						</li>
                						<li>
                							See your project at <a href="http://npmjs.im/&lt;packageName&gt;" target="_blank"></a>
                						</li>
                					</ul>
                				</li>
                				<li>
                					Publish an update
                					<ul>
                						<li>
                							Make you changes.
                						</li>
                						<li>
                							Update the version of the project. There are 2 ways:
                							<ol>
                								<li>
                									Update <i>package.json</i>.
                								</li>
                								<li>
                									Automatically update of <i>package.json</i> by tapping:
                									<ul>
                										<li>
                											$> npm version major
                										</li>
                										<li>
                											$> npm version minor
                										</li>
                										<li>
                											$> npm version patch
                										</li>
                									</ul>
                									Using this way, NPM will create a new commit and a new tag will be created! So you need to run "$> npm publish --tags"
                								</li>
                							</o>
                						</li>
                						<li>
                							$> npm publish
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