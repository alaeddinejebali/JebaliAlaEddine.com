<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Routing
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Include routing resources</h2>
				<ol>
					<li>
                        Using annotations
                        <?php include "code/symfony_code_24.txt"; ?>
                    </li>
					<li>
                        Using .yml file
                        <?php include "code/symfony_code_25.txt"; ?>
                    </li>
				</ol>
			</li>
			<li>
				<h2>Create routing</h2>
				<ul>
					<li>
                        Symfony loads all the routes for your application from a single routing configuration file. The file is
                        usually "app/config/routing.yml", but can be configured to be anything (including an XML or PHP file)
                        via the application configuration file:
                        <?php include "code/symfony_code_16.txt"; ?>
                    </li>
					<li>
                        Matches the homepage (/) and maps it to the AppBundle:Main:homepage controller.:
                        <?php include "code/symfony_code_17.txt"; ?>
                    </li>
					<li>
                        Routing with Placeholders: Many routes will contain one or more named "wildcard" placeholders (like /page/{wildcardPlaceholder}):
                        <?php include "code/symfony_code_18.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Optional placeholders</h2>
				<ul>
					<li>
                        a request like /blog will matches /blog/1
                        <?php include "code/symfony_code_19.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Required placeholders</h2>
				<ul>
					<li>
                        Notice that both routes have patterns that match URLs that look like
                        /blog/*. The Symfony router will always choose the first matching route it finds. In other words, the
                        blog_show route will never be matched. Instead, a URL like /blog/my-blog-post will match the first
                        route (blog) and return a nonsense value of my-blog-post to the {page} parameter.
                        <?php include "code/symfony_code_19.txt"; ?>
                    </li>
					<li>
                        The answer to the problem is to add route requirements or route conditions ({page} portion should be an integer.)
                        <?php include "code/symfony_code_21.txt"; ?>
                    </li>
					<li class="caution">The order of the routes is very important! If
						the blog_show route were placed above the blog route, the URL
						/blog/2 would match blog_show instead of blog since the {slug}
						parameter of blog_show has no requirements.</li>
				</ul>
			</li>
			<li>
				<h2>Adding HTTP Method Requirements</h2>
				<ul>
					<li>
                        You can also match on the method of the incoming request (i.e. GET, HEAD, POST, PUT, DELETE).
                        <?php include "code/symfony_code_22.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Adding a Host Requirement</h2>
				<ul>
					<li>To be done</li>
				</ul>
			</li>
			<li>
				<h2>Special routing parameters</h2>
				<ol>
					<li>"_controller": used to determine which controller is executed
						when the route is matched.</li>
					<li>"_format": used to set the request format.</li>
					<li>"_locale": used to set the locale on the request.</li>
				</ol>
				<ul>
					<li>
                        Example:
                        <?php include "code/symfony_code_23.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Prefix routes</h2>
				<ul>
					<li>
                        suppose you want to
                        prefix all routes in the AppBundle with /site (e.g. /site/blog/{slug} instead of /blog/{slug}):
                        <?php include "code/symfony_code_27.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Generating URLs</h2>
				<ul>
					<li>
                        To generate a URL, you need to specify the name of the route (e.g. blog_show) and any wildcards (e.g.
                        slug = my-blog-post)
                        <?php include "code/symfony_code_28.txt"; ?>
                    </li>
					<li class="caution">
                        In controllers that don't extend Symfony's base Controller5, you can use the router service's
                        generate() method:
                        <?php include "code/symfony_code_26.txt"; ?>
                    </li>
					<li>If the front-end of your application uses Ajax requests, you
						might want to be able to generate URLs in JavaScript based on your
						routing configuration. By using the <a
						href="https://github.com/FriendsOfSymfony/FOSJsRoutingBundle"
						target="_blank">FOSJsRoutingBundle</a>, you can do exactly that:

					</li>
					<li>Generating URLs with Query Strings
						<ul>
							<li>
                                If you pass extra wildcard values, they will be added to the URI as a query string:
                                <?php include "code/symfony_code_30.txt"; ?>
                                Will generate "/blog/2?category=Symfony"
                            </li>
						</ul>
					</li>
					<li>
                        Generating URLs from a Template
                        <?php include "code/symfony_code_31.txt"; ?>
                    </li>
					<li>Generate absolute URL
						<ul>
							<li>By default, the router will generate relative URLs</li>
							<li>From controller
								<ul>
									<li>
                                        pass true to the third argument of the generateUrl() method:
                                        <?php include "code/symfony_code_32.txt"; ?>
                                    </li>
								</ul>
							</li>
							<li>From template
								<ul>
									<li>
                                        Use url() rather than path():
                                        <?php include "code/symfony_code_33.txt"; ?>
                                    </li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>