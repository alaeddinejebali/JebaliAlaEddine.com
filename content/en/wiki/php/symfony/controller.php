<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Controller<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                <h2>get $_GET and $_POST parameters</h2>
                <ul>
                    <li>
                        <?php include "code/symfony_code_15.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Redirect and forward</h2>
                <ul>
                    <li>
                        Redirect to another page:
                        <?php include "code/symfony_code_09.txt"; ?>
                    </li>
                    <li>
                        Forward to another controller (ex: redirect to AcmeHelloBundle/HelloController::fancyAction):
                        <?php include "code/symfony_code_14.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Accessing services</h2>
                <ul>
                    <li>
                        When extending the base controller class, you can access any Symfony service via the get() method.
                        <?php include "code/symfony_code_10.txt"; ?>
                    </li>
                    <li>
                        You can list all services using:
                        <?php include "code/symfony_code_11.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Managing sessions</h2>
                <ul>
                    <li>
                        By default, Symfony stores the attributes in a cookie by using the native PHP sessions.
                        <?php include "code/symfony_code_12.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Flash Messages</h2>
                <ul>
                    <li>
                        They are messages wich 'gone in a flash': they live exactly for one request (example: a message to confirm a user registration after sending a form)
                        <?php include "code/symfony_code_13.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Create static pages</h2>
                <ul>
                    <li>
                        If you want to create a static page (like 'terms and services' page), you don't need a controller

                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>