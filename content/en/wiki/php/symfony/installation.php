<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Installing and configuring Symfony<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                <h2>Install <a href="https://getcomposer.org" target="_blank">Composer</a></h2>
                <ul>
                    <li>Composer is a dependency management library for PHP.</li>
                    <li>Go to <a href="https://getcomposer.org/doc/00-intro.md" target="_blank">https://getcomposer.org/doc/00-intro.md</a> and follow the description.</li>
                </ul>
            </li>
            <li>
                <h2>Two ways to install Symfony</h2>
                <ol>
                    <li>
                        Using Symfony installer
                        <ul>
                            <li>
                                Install Symfony installer: a small PHP application that must be installed once in your computer and then it can create any
                                number of Symfony applications.
                                <ul>
                                    <li>$> cd c:\xampp\htdocs\mySymfonyProjects</li>
                                    <li>$> php -r "readfile('http://symfony.com/installer');" > symfony</li>
                                    <li>$> php symfony</li>
                                </ul>
                            </li>
                            <li>
                                Download Symfony and create a new project
                                <ul>
                                    <li>$> php symfony myNewProjectName</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        Using Composer
                        <ul>
                            <li>$> composer create-project myNewProjectName</li>
                        </ul>
                    </li>
                </ol>
            </li>
            <li>
                <h2>Update composer</h2>
                <ul>
                    <li>$> composer update</li>
                </ul>
            </li>
            <li>
                <h2>Configure database</h2>
                <ul>
                    <li>One common issue when installing Symfony is that the app/cache and app/logs directories must be writable both by the web server and the command line user.</li>
                    <li>Go to app/config/parameters.yml and configure the database</li>
                    <li>visit the dev environment <a href="http://127.0.0.1/myNewProjectName/web/app_dev.php" target="_blank">http://127.0.0.1/myNewProjectName/web/app_dev.php</a></li>
                    <li class="caution">To get nice and short urls you should point the document root of your webserver or virtualhost to the Symfony/web/ directory. Through this is not required for development, it's recommended at the time your application goes into production.</li>
                </ul>
            </li>
            <li>
                <h2>Using Source Control</h2>
                <ul>
                    <li>When using Composer to manage application's dependencies, it's recommended to ignore the entire
                        vendor/ directory before committing its code to the repository. In order to make it work, check out the Symfony application and then execute "$> composer install"
                        command to download and install all the dependencies required by the application.</li>
                </ul>
            </li>
        </ul>
    </div>
</section>