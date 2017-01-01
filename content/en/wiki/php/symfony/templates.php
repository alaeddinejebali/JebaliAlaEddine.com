<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Creating and using templates
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Why use twig?</h2>
				<ul>
					<li>Twig templates are meant to be simple and won't process PHP
						tags. This is by design: the Twig template system is meant to
						express presentation, not program logic.</li>
					<li>Twig can also do things that PHP can't, such as whitespace
						control, sandboxing, automatic HTML escaping, manual contextual
						output escaping, and the inclusion of custom functions and filters
						that only affect templates.</li>
					<li>Twig is fast. Each Twig template is compiled down to a native
						PHP class that is rendered at runtime. The compiled classes are
						located in the app/cache/{environment}/twig directory (where
						{environment} is the environment, such as dev or prod) and in some
						cases can be useful while debugging.</li>
					<li>When debug mode is enabled (common in the dev environment), a
						Twig template will be automatically recompiled when changes are
						made to it. This means that during development you can happily
						make changes to a Twig template and instantly see the changes
						without needing to worry about clearing any cache.</li>
					<li class="caution">When debug mode is disabled (common in the prod
						environment), however, you must clear the Twig cache directory so
						that the Twig templates will regenerate. Remember to do this when
						deploying your application.</li>
				</ul>
			</li>
			<li>
				<h2>Types of special syntax</h2>
				<ul>
					<li>{{ ... }}: prints a variable or the result of an expression to
						the template.</li>
					<li>{% ... %}: controls the logic of the template; it is used to
						execute statements such as for-loops for example.</li>
					<li>{# ... #}: the equivalent of the PHP /* comment */ syntax.</li>
					<li>
                        Example:
                        <?php include "code/symfony_code_34.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Filter</h2>
				<ul>
					<li>
                        Filters modify content before being rendering
                        <?php include "code/symfony_code_35.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Template formats</h2>
				<ul>
					<li>
                        In many cases, you may want to allow a single controller to render multiple different formats based on
                        the "request format".
                        <?php include "code/symfony_code_36.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Template inheritance</h2>
				<ul>
					<li>You can use as many levels of inheritance as you want.</li>
					<li>Child templates don't have to define all parent blocks.</li>
					<li>Example:
						<ul>
							<li>
                                Base layout
                                <?php include "code/symfony_code_37.txt"; ?>
                            </li>
							<li>
                                Child layout
                                <?php include "code/symfony_code_38.txt"; ?>
                            </li>
						</ul>
					</li>
					<li>
                        If you need to get the content of a block from the parent template, you can use the {{
                        parent() }} function. This is useful if you want to add to the contents of a parent block
                        instead of completely overriding it:
                        <?php include "code/symfony_code_39.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Template naming and locations</h2>
				<ul>
					<li>By default, templates can live in two different locations:
						<ul>
							<li>"app/Resources/views/": The applications views directory can
								contain application-wide base templates (i.e. your application's
								layouts and templates of the application bundle) as well as
								templates that override third party bundle templates.</li>
							<li>"path/to/bundle/Resources/views/": Each third party bundle
								houses its templates in its Resources/views/ directory (and
								subdirectories). When you plan to share your bundle, you should
								put the templates in the bundle instead of the app/ directory.</li>
						</ul>
					</li>
					<li>Referencing Templates in a Bundle
						<ul>
							<li>Symfony uses a <strong>bundle:directory:filename.format.engine</strong>
								syntax for templates that live inside
								"src/bundle/Resources/views/directory/filename.format.engine".
							</li>
							<li>Symfony uses a <strong>bundle::filename.format.engine</strong>
								syntax for templates that live inside
								"src/bundle/Resources/views/filename.format.engine".
							</li>
						</ul>
					
					<li>
				
				</ul>
			</li>
			<li>
				<h2>Include other templates</h2>
				<ul>
					<li>
                        articleDetails template
                        <?php include "code/symfony_code_40.txt"; ?>
                    </li>
					<li>
                        article template
                        <?php include "code/symfony_code_41.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Embed controller</h2>
				<ul>
					<li>
                        Suppose that we have "ArticleController" and a "recentArticles($max) action".
                        <?php include "code/symfony_code_42.txt"; ?>
                    </li>
					<li>
                        we want to include the list of 3 recent articles in the sidebar:
                        <?php include "code/symfony_code_43.txt"; ?>
                    </li>
					<li>
                        To include the controller, you'll need to refer to it using the standard syntax: bundle:controller:action
                        <?php include "code/symfony_code_44.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Asynchronous Content with hinclude.js</h2>
				<ul>
					<li>Controllers can be embedded asynchronously using the <a
						href="ttp://mnot.github.com/hinclude/" target="_blank">hinclude.js</a> JavaScript library.
                        <?php include "code/symfony_code_45.txt"; ?>
                    </li>
					<li>When using a controller instead of a URL, you must enable the
						Symfony <strong>fragments</strong> configuration:
                        <?php include "code/symfony_code_46.txt"; ?>
                    </li>
					<li>
                        Default content (while loading or if JavaScript is disabled) can be set globally in your application
                        configuration:
                        <?php include "code/symfony_code_47.txt"; ?>
                    </li>
					<li>
                        You can define default templates per render function (which will override any global default template
                        that is defined):
                        <?php include "code/symfony_code_48.txt"; ?>
                    </li>
					<li>
                        Or you can also specify a string to display as the default content:
                        <?php include "code/symfony_code_49.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Linking to assets</h2>
				<ul>
					<li>
                        Including Stylesheets and JavaScripts in Twig
                        <?php include "code/symfony_code_50.txt"; ?>
                    </li>
					<li>
                        Include an extra stylesheet or JavaScript from a child template
                        <?php include "code/symfony_code_51.txt"; ?>
                    </li>
					<li>Include assets located in your bundles' <strong>Resources/public</strong> folder
                        <?php include "code/symfony_code_52.txt"; ?>
                        <ul>
							<li class="caution">You will need to run the "php app/console
								assets:install target [--symlink]" command, which moves (or
								symlinks) files into the correct location. (target is by default
								"web").</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Global Template Variables</h2>
				<ul>
					<li>During each request, Symfony will set a global template
						variable app in both Twig and PHP template engines by default.
						<ul>
							<li>app.security: The security context.</li>
							<li>app.user: The current user object.</li>
							<li>app.request: The request object.</li>
							<li>app.session: The session object.</li>
							<li>app.environment: The current environment (dev, prod, etc).</li>
							<li>app.debug: True if in debug mode. False otherwise.</li>
						</ul>
                        <?php include "code/symfony_code_53.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Overriding Bundle Templates</h2>
				<ul>
					<li>Symfony always starts by looking in the <strong>app/Resources/{BUNDLE_NAME}/views/</strong>
						directory for a template. If the template doesn't exist there, it
						continues by checking inside the <strong>Resources/views</strong>
						directory of the bundle itself. This means that all bundle
						templates can be overridden by placing them in the correct <strong>app/Resources</strong>
						subdirectory.
					</li>
					<li>Example: Customize 404 Twig error page
						<ul>
							<li>
                                Create "error404.html.twig" in "app/Resources/TwigBundle/views/Exception/"
                                <?php include "code/symfony_code_54.txt"; ?>
                            </li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Output Escaping</h2>
				<ul>
					<li>If you're using Twig, output escaping is on by default and
						you're protected.</li>
					<li>
                        Intwig, to disable output escaping, add the raw filter:
                        <?php include "code/symfony_code_56.txt"; ?>
                    </li>
					<li>
                        In PHP, output escaping is not automatic, meaning you'll need to manually escape where necessary.
                        <?php include "code/symfony_code_55.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Debugging</h2>
				<ul>
					<li>When using PHP, you can use the <strong>dump()</strong>
						function from the VarDumper component if you need to quickly find
						the value of a variable passed.
					</li>
					<li>
                        In Twig:
                        <?php include "code/symfony_code_57.txt"; ?>
                    </li>
					<li class="caution">The variables will only be dumped if Twig's <strong>debug</strong>
						setting (in config.yml) is true. By default this means that the
						variables will be dumped in the dev environment but not the prod
						environment
					</li>
				</ul>
			</li>
			<li>
				<h2>Syntax checking</h2>
				<ul>
					<li>
                        <?php include "code/symfony_code_58.txt"; ?>
                    </li>
				</ul>
			</li>
		</ul>
	</div>
</section>