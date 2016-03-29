<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">XML and Web Services<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                <h2>XML Basics</h2>
                <ul>
                	<li>
                		XML: eXtensible Markup Language.
                	</li>
                    <li>
                    	Its most common applications are the popular RSS (Really Simple Syndication).
					</li>
					<li>
						It is a subset of SGML (Standard Generalized Markup Language).
					</li>
					<li>
						Terms:
						<ul>
							<li>
								Entity: An entity is a named unit of storage.
							</li>
							<li>
								Element: A data object that is part of an XML document.
							</li>
							<li>
								DTD (Document Type Declaration): A set of instructions that describes the accepted structure and content of an XML file.
							</li>
							<li>
								Well-formed: An XML document is considered well-formed when it contains a single root level element, all tags are opened and closed properly and all entities (&lt;, &gt;, &amp;, ’, " ) are escaped properly.
							</li>
							<li>
								Valid: An XML document is valid when it is both well-formed and obeys a referenced DTD (an XML document can never be valid and not well-formed).
							</li>
						</ul>
					</li>
					<li>
						However, all XML documents must be well-formed for PHP’s XML functionality to properly parse them.
						<ul>
							<li class="noStyle">
								<?php include 'code/php_code_134.txt'; ?>
							</li>
						</ul>
					</li>
                </ul>
            </li>
        </ul>
    </div>
</section>