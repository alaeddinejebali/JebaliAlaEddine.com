<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Creating pages<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                <h2>Introduction</h2>
                <ul>
                    <li>The same application can be run with different
                        configurations by running the application in different environments.
                    </li>
                    <li>Symfony comes with three
                        environments defined (dev, test and prod) but you can create your own as well.
                    </li>
                    <li>Symfony comes with two web-accessible front controllers: "app_dev.php" provides the dev
                        environment,
                        and "app.php" provides the prod environment.
                    </li>
                    <li>The test environment is normally only used when running unit tests, and so
                        doesn't have a dedicated front controller
                    </li>
                    <li>In Symfony, a bundle is like a plugin, except that all of
                        the code in your application will live inside a bundle. A bundle is simply a structured set of files within a directory that implement a single feature. You might
                        create a BlogBundle, a ForumBundle or a bundle for user management. Each directory contains everything related to that feature, including PHP files,
                        templates, stylesheets, JavaScripts, tests and anything else. Every aspect of a feature exists in a bundle
                        and every feature lives in a bundle.
                    </li>
                    <li>
                        Bundle directory structure
                        <ul>
                            <li>"Controller/": contains the controllers of the bundle (e.g. SayhelloController.php).</li>
                            <li>"DependencyInjection/": holds certain dependency injection extension classes, which may
                            import service configuration, register compiler passes or more (this directory is not necessary).</li>
                            <li>"Resources/config/": houses configuration, including routing configuration (e.g.
                            routing.yml).</li>
                            <li>"Resources/views/": holds templates organized by controller name (e.g. Hello/
                            index.html.twig).</li>
                            <li>"Resources/public/": contains web assets (images, stylesheets, etc) and is copied or
                            symbolically linked into the project web/ directory via the assets:install console command.</li>
                            <li>"Tests/": holds all tests for the bundle.</li>
                        </ul>
                    </li>
                    <li>
                        Symfony project directory structure
                        <ul>
                            <li>"app/": This directory contains the application configuration;</li>
                            <li>"src/": All the project PHP code is stored under this directory;</li>
                            <li>"vendor/": Any vendor libraries (described in composer.json) are placed here by
                                convention;
                            </li>
                            <li>"web/": This is the web root directory and contains any publicly accessible files;</li>
                        </ul>
                    </li>
                    <li>
                        Autoloading
                        <ul>
                            <li>When Symfony is loading, a special file - vendor/autoload.php - is included. This file
                                is created by
                                Composer and will autoload all application files living in the src/ folder as well as
                                all third-party
                                libraries mentioned in the composer.json file.
                            </li>
                            <li>Because of the autoloader, you never need to worry about using include or require
                                statements.
                                Instead, Composer uses the namespace of a class to determine its location and
                                automatically
                                includes the file on your behalf the instant you need a class.
                            </li>
                        </ul>
                    </li>
                    <li>
                        Rendering a template
                        <ul>
                            <li>$this->render(BundleName:ControllerName:TemplateName, array('var1' => $var1))</li>
                            <li>
                                Physical location
                                <ul>
                                    <li>/path/to/BundleName/Resources/views/ControllerName/TemplateName</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Create a hello world example (MycompanyGreetingBundle)</h2>
                <ul>
                    <li>$> php app/console generate:bundle --namespace=Mycompany/GreetingBundle --format=yml</li>
                    <li>
                        When running this command the following tasks happen:
                        <ol>
                            <li>Create the bundle directory in "src/Mycompany/GreetingBundle"</li>
                            <li>
                                Register the bundle in the kernel
                                <ul>
                                    <li><?php include "code/symfony_code_04.txt"; ?></li>
                                </ul>
                            </li>
                            <li>
                                Create the route
                                <ul>
                                    <li><?php include "code/symfony_code_05.txt"; ?></li>
                                    <li>
                                        Define a route for/hello/John
                                        <?php include "code/symfony_code_06.txt"; ?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                Create the controller
                                <ul>
                                    <li><?php include "code/symfony_code_07.txt"; ?></li>
                                </ul>
                            </li>
                            <li>
                                Create the view
                                <ul>
                                    <li><?php include "code/symfony_code_08.txt"; ?></li>
                                </ul>
                            </li>
                            <li>
                                Clear cache
                                <ul>
                                    <li>$> php app/console cache:clear --env=dev --no-debug</li>
                                    <li>visit: <a href="http://127.0.0.1:8081/symfonyTest/web/app_dev.php/hello/John" target="_blank">http://127.0.0.1:8081/symfonyTest/web/app_dev.php/hello/John</a></li>
                                </ul>
                            </li>
                        </ol>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>