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
						It is a subset of SGML (Standard Generalized Markup Language).
					</li>
					<li>
						It was designed to store and transport data.
					</li>
					<li>
						XML was designed to be both human- and machine-readable.
					</li>
                    <li>
                    	Its most common applications are the popular RSS (Really Simple Syndication).
					</li>
					<li>
						XML documents must contain one root element that is the parent of all other elements.
					</li>
					<li>
						In XML, the attribute values must always be quoted (&lt;book isbn="101"&gt;).
					</li>
					<li>
					An XML can be extended (adding new child and/or attributes) without breaking applications.
					</li>
					<li>
						XMl vs HTML
						<ul>
							<li>
								Similarities
								<ul>
									<li>XML is a markup language much like HTML</li>
								</ul>
							</li>
							<li>
								Differences
								<ul>
									<li>
										XML tags are not predefined like HTML tags are.
									</li>
									<li>
										XML was designed to carry data (with focus on what data is), HTML was designed to display data (with focus on how data looks).
									</li>
									<li>
										XML is Often a Complement to HTML: XML is used to store or transport data, while HTML is used to format and display the same data.
									</li>
									<li>
										In HTML, some elements might work well, even with a missing closing tag. In XML, it is illegal to omit the closing tag (all elements must have a closing tag).
									</li>
									<li>
										HTML tags are case insensitive. XML tags are case sensitive (opening and closing tags must be written with the same case).
									</li>
									<li>
										In HTML, you might see improperly nested elements (&lt;b&gt;&lt;i&gt;Hello&lt;/b&gt;&lt;/i&gt;). In XML, all elements must be properly nested within each other.
									</li>
									<li>
										HTML truncates multiple white-spaces to one single white-space. XML does not truncate multiple white-spaces.
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						XML vs JSON (to be determined)
						<ul>
							<li>
								Similarities
								<ul>
									<li>
										Both are used to interchange data.
									</li>
									<li>
										Both are human and machine-readable.
									</li>
								</ul>
							</li>
							<li>
								Differences
								<ul>
									<li>
										XML makes it easy to put metadata into the tags (in the form of attributes).
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Terms:
						<ul>
							<li>
								Siblings are children on the same level (brothers and sisters). Like &lt;name/&gt;&lt;age/&gt; in &lt;person/&gt;.
							</li>
							<li>
								Entity: An entity is a named unit of storage.
							</li>
							<li>
								Element: Everything from (including) the element's start tag to (including) the element's end tag (text, attributes, other elements).
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
					<li>
						Namespaces
						<ul>
							<li>
								
							</li>
						</ul>
					</li>
                </ul>
            </li>
        </ul>
    </div>
</section>