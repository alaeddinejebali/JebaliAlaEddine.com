<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Databases and Doctrine<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                <h2>Configure the Database</h2>
                <ul>
                    <li>
                        In "app/config/parameters.yml":
                        <?php include "code/symfony_code_59.txt"; ?>
                    </li>
                    <li>
                        There's no way to set up the database to be UTF-8 inside Doctrine. Uou need to do it on server
                        (with phpmyadmin)
                    </li>
                    <li>
                        Create the database:
                        <?php include "code/symfony_code_60.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Create an Entity class</h2>
                <ul>
                    Create "src/AppBundle/Entity/Product.php"
                    <?php include "code/symfony_code_61.txt"; ?>
                    You can use this command to launch an interactive mode and asks questions to determine the bundle
                    name, location, configuration format and default structure:
                    <?php include "code/symfony_code_62.txt"; ?>
                </ul>
            </li>
            <li>
                <h2>Add mapping information</h2>
                <ul>
                    <li>
                        You should specify metadata using 3 formats: YAML, XML or PHP annotations.
                    </li>
                    <li>
                        A bundle can accept only one metadata definition format. For example, it's not possible to mix
                        YAML metadata definitions with annotated PHP entity class definitions.
                        <?php include "code/symfony_code_63.txt"; ?>
                    </li>
                    <li>
                        The table name is optional and if omitted, will be determined automatically based on the name of
                        the entity class.
                    </li>
                    <li class="caution">
                        Be careful that your class name and properties aren't mapped to a protected SQL keyword (such
                        as group or user). For example, if your entity class name is Group, then, by default, your table
                        name will be group, which will cause an SQL error in some engines. See <a
                            href="http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/basic-mapping.html#quoting-reserved-words"
                            target="_blank">Doctrine's Reserved
                            SQL keywords documentation</a> on how to properly escape these names.
                    </li>
                </ul>
            </li>
            <li>
                <h2>Generate Getters and setters</h2>
                <ul>
                    <li>
                        Using commands below, they will:
                        <ul>
                            <li>generate getters and setters;</li>
                            <li>generate repository classes configured with the @ORM\Entity(repositoryClass="...")
                                annotation;
                            </li>
                            <li>generate the appropriate constructor for 1:n and n:m relations.</li>
                        </ul>
                        <?php include "code/symfony_code_64.txt"; ?>
                    </li>
                    <li class="caution">
                        This command makes sure that all the getters and setters are generated for the Product class.
                        This is a
                        safe command - you can run it over and over again: it only generates getters and setters that
                        don't exist
                        (i.e. it doesn't replace your existing methods).
                    </li>
                </ul>
            </li>
            <li>
                <h2>Create database tables/schema</h2>
                <ul>
                    <li>
                        Create all the database tables needed for every known entity
                        <?php include "code/symfony_code_65.txt"; ?>
                    </li>
                    <li>
                        Actually, this command is incredibly powerful. It compares what your database should look like
                        (based on the mapping information of your entities) with how it actually looks, and generates
                        the
                        SQL statements needed to update the database to where it should be. In other words, if you add a
                        new property with mapping metadata to Product and run this task again, it will generate the
                        "alter
                        table" statement needed to add that new column to the existing product table.
                    </li>
                    <li>
                        An even better way to take advantage of this functionality is via <a
                            href="https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html"
                            target="_blank">migrations</a>, which allow you to
                        generate these SQL statements and store them in migration classes that can be run systematically
                        on your production server in order to track and migrate your database schema safely and
                        reliably.
                    </li>
                </ul>
            </li>
            <li>
                <h2>Persisting objects</h2>
                <ul>
                    <li>
                        In "src/AppBundle/Controller/DefaultController.php"
                        <?php include "code/symfony_code_66.txt"; ?>
                    </li>
                    <li class="caution">
                        Doctrine is aware of all your managed entities, when you call the flush() method,
                        it calculates an overall changeset and executes the queries in the correct order. It utilizes cached
                        prepared statement to slightly improve the performance. For example, if you persist a total of 100
                        Product objects and then subsequently call flush(), Doctrine will execute 100 INSERT queries
                        using a single prepared statement object.
                    </li>
                </ul>
            </li>
            <li>
                <h2>Fetch objects</h2>
                <ul>
                    <li>
                        In "AppBundle/Entity/product"
                        <?php include "code/symfony_code_67.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Update an object</h2>
                <ul>
                    <li>
                        Notice that calling $em->persist($product) isn't necessary. Recall that this method simply tells
                        Doctrine to manage or "watch" the $product object. In this case, since you fetched the $product object
                        from Doctrine, it's already managed.
                        <?php include "code/symfony_code_68.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Delete an object</h2>
                <ul>
                    <li>
                        $em->remove($product); $em->flush();
                    </li>
                </ul>
            </li>
            <li>
                <h2>Querying for Objects Using Doctrine's Query Builder</h2>
                <ul>
                    <li>
                        <?php include "code/symfony_code_69.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Querying for Objects with DQL (Doctrine Query Language)</h2>
                <ul>
                    <li>
                        <?php include "code/symfony_code_70.txt"; ?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>