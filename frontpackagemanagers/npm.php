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
			</ul>
		</div>
	</div>
</div>