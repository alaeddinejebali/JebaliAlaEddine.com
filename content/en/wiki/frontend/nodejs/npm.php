<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">NPM: Node Package Manager<h1>
    </div>
    <div class="wiki-article-body invisible">
    	<ul>
    		<li>
    			<h2>What's NPM?</h2>
    			<ul>
    				<li>
    					NPM is used to install packages (in local or global mode). Also, if you use it in development, it makes it easier to specify and link dependencies.
    				</li>
		            <li>
		                NPM provides two main functionalities:
		                <ul>
		                    <li>Command line utility to install Node.js packages, do version management and dependency management of Node.js packages.</li>
		                    <li>Online repositories for node.js packages/modules which are searchable on search.nodejs.org</li>
		                </ul>
		            </li>
		            <li>
		            	Check npm version
		            	<ul>
		            		<li class="noStyle">
		            			<?php include "code/nodejs_code_05.txt"; ?>
		            		</li>
		            	</ul>
		            </li>
		            <li>
		                Updgrade to the latest verstion
		                <ul>
		                	<li class="noStyle">
		                		<?php include "code/nodejs_code_06.txt"; ?>
		                	</li>
		                </ul>
            		</li>		             			
    			</ul>
    		</li>
            <li>
                <h2>Installing modules using NPM</h2>
                <ul>
                    <li>
                        Local installation
                        <ul>
                            <li>
                                The moduleName will be installed in path/to/your/project/node_modules
                                <ul>
			                		<li class="noStyle">
			                			<?php include "code/nodejs_code_07.txt"; ?>
			                		</li>
		                		</ul>
                            </li>
                            <li>
                                Locally deployed packages are accessible via require() method.
                            </li>
                        </ul>
                    </li>
                    <li>
                        Global installation
                        <ul>
                            <li>
                                Globally installed packages/dependencies are stored in system directory
                                <ul>
				                	<li class="noStyle">
				                		<?php include "code/nodejs_code_08.txt"; ?>
				                	</li>
			                	</ul>
                            </li>
                            <li>
                                Can not be imported using require() in Node application directly.
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <h2>List installed modules</h2>
                <ul>
                    <li>
                        List locally installed modules
                        <ul>
		                	<li class="noStyle">
		                		<?php include "code/nodejs_code_09.txt"; ?>
		                	</li>
		                </ul>
                    </li>
                    <li>
                        List globally installed modules
                        <ul>
		                	<li class="noStyle">
		                		<?php include "code/nodejs_code_10.txt"; ?>
		                	</li>
		                </ul>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Uninstall a module</h2>
                <ul>
                    <li class="noStyle">
                        <?php include "code/nodejs_code_11.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Update a module</h2>
                <ul>
                    <li class="noStyle">
                        <?php include "code/nodejs_code_12.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Search a module</h2>
                <ul>
                    <li class="noStyle">
                        <?php include "code/nodejs_code_13.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>package.json</h2>
                <ul>
                    <li>
                        Should be in the root directory of any Node application or a module.
                    </li>
                    <li>
                    	It is used to define the properties of a package.
                    </li>
                </ul>
            </li>
            <li>
                <h2>Create a module</h2>
                <ul>
                    <li>
                        Generate package.json
                        <ul>
                        	<li class="noStyle">
                        		<?php include "code/nodejs_code_14.txt"; ?>
                        	</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Register on npm repository site</h2>
                <ul>
                    <li class="noStyle">
                        <?php include "code/nodejs_code_15.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Publish your module</h2>
                <ul>
                    <li class="noStyle">
                        <?php include "code/nodejs_code_16.txt"; ?>
                    </li>
                </ul>
            </li>
    	</ul>
    </div>
</section>
