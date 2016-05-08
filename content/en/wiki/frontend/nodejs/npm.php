<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">NPM: Node Package Manager<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                npm provides two main functionalities:
                <ul>
                    <li>Command line utility to install Node.js packages, do version management and dependency management of Node.js packages.</li>
                    <li>Online repositories for node.js packages/modules which are searchable on search.nodejs.org</li>
                </ul>
            </li>
            <li>
                Check npm version
                <?php include "code/nodejs_code_05.txt"; ?>
            </li>
            <li>
                Updgrade to the latest verstion
                <?php include "code/nodejs_code_06.txt"; ?>
            </li>
            <li>
                Installing modules
                <ul>
                    <li>
                        Local installation
                        <ul>
                            <li>
                                The moduleName will be installed in path/to/your/project/node_modules
                                <?php include "code/nodejs_code_07.txt"; ?>
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
                                <?php include "code/nodejs_code_08.txt"; ?>
                            </li>
                            <li>
                                Can not be imported using require() in Node application directly.
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                List installed modules
                <ul>
                    <li>
                        List locally installed modules
                        <?php include "code/nodejs_code_09.txt"; ?>
                    </li>
                    <li>
                        List globally installed modules
                        <?php include "code/nodejs_code_10.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                Uninstall a module
                <ul>
                    <li>
                        <?php include "code/nodejs_code_11.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                Update a module
                <ul>
                    <li>
                        <?php include "code/nodejs_code_12.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                Search a module
                <ul>
                    <li>
                        <?php include "code/nodejs_code_13.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                package.json
                <ul>
                    <li>
                        Should be in the root directory of a Node application/module.
                    </li>
                </ul>
            </li>
            <li>
                Create a module
                <ul>
                    <li>
                        Generate package.json
                        <?php include "code/nodejs_code_14.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                Register on npm repository site
                <ul>
                    <li>
                        <?php include "code/nodejs_code_15.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                Publish your module
                <ul>
                    <li>
                        <?php include "code/nodejs_code_16.txt"; ?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>
