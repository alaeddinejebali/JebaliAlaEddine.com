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
                		See <a href="/wiki/xml/">This XML wiki</a>.
                	</li>
                	<li>
                		In the next sextions, we will suppose that we have a library.xml file: &lt;library&gt;&lt;book isbn=""&gt;&lt;title&gt;&lt;/title&gt;&lt;author&gt;&lt;/author&gt;&lt;publisher&gt;&lt;/publisher&gt;&lt;/book&gt;&lt;/library&gt;.
                	</li>
                </ul>
            </li>
            <li>
            	<h2>SimpleXML</h2>
            	<ul>
            		<li>
            			It's a PHP library which provides an easy way to work with XML documents (especially reading and iterating through XML data).
            		</li>
            		<li>
            			The only restraint is that the XML document must be well-formed.
            		</li>
            		<li>
            			Parsing XML
            			<ul>
            				<li>
            					Using procedural approach
            					<ul>
            						<li class="noStyle">
            							<?php include 'code/php_code_134.txt'; ?>
            						</li>
            					</ul>
            				</li>
            				<li>
            					Using OOP approach
            					<ul>
            						<li>
            							SimpleXMLElement($file, $optionalLibxmlParameters, $isPathToFile)
            							<?php include 'code/php_code_135.txt'; ?>
            						</li>
            					</ul>
            				</li>
            			</ul>
            		</li>
            		<li>
            			Accessing Children and Attributes
            			<ul>
            				<li>
            					When SimpleXML parses an XML document, it converts all its XML elements, or nodes, to properties of the resulting SimpleXMLElement object
            				</li>
            				<li>
            					In addition, it converts XML attributes to an associative array that may be accessed from the property to which they belong.
            				</li>
            				<li>
            					When you know their names:
            					<ul>
            						<li class="noStyle">
            							<?php include 'code/php_code_137.txt'; ?>
										The major drawback of this approach is that it is necessary to know the names of every element and attribute in the XML document
            						</li>
            					</ul>
            				</li>
            				<li>
            					When you don't know their names (or you don't want to know them):
            					<ul>
            						<li class="noStyle">
            							<?php include 'code/php_code_138.txt'; ?>
            						</li>
            					</ul>
            				</li>
            			</ul>
            		</li>
            		<li>
            			XPath Queries
            			<ul>
            				<li>
            					Using SimpleXMLElement::xpath() , you can run an Xpath query on any SimpleXMLElement object.
            				</li>
            				<li>
            					It returns an array of SimpleXMLElement objects—even if only a single element is returned.
            					<?php include 'code/php_code_139.txt'; ?>
            				</li>
            			</ul>
            		</li>
            		<li>
            			Modifying XML Documents
            			<ul>
            				<li>
            					SimpleXMLElement::asXML(): returns an XML string.
            				</li>
            				<li>
            					SimpleXMLElement::asXML($optionalFilePath): Save XML document to $optionalFilePath and and return a Boolean value to indicate the operation's success.
            				</li>
            				<li>
            					SimpleXMLElement::addChild($name, $optionalParam, $optionalNamespaceToWhichChildBelongs)
            				</li>
            				<li>
            					It returns a SimpleXMLElement object.
            					<?php include 'code/php_code_140.txt'; ?>
            				</li>
            				<li class="caution">
            					If a file with the same path already exists, a call to asXML() will overwrite it without warning.
            				</li>
            				<li>
            					Remove XML children and attributes
            					<ul>
            						<li>SimpleXML does not provide the means to remove children and attributes.</li>
            						<li>
            							You can do:
            							<?php include 'code/php_code_141.txt'; ?>
            						</li>
            						<li>
            							This only removes child elements and their attributes, however. It will not remove attributes from the element at the book level.
            						</li>
            						<li>
            							To effectively remove children and attributes, you must export  your SimpleXMLElement to DOM.
            						</li>
            					</ul>
            				</li>
            			</ul>
            		</li>
            		<li>
            			Working With Namespaces
            			<ul>
            				<li>
            					It allows a provider to associate certain element and attribute names with namespaces identified by URIs.
            				</li>
            				<li>
            					SimpleXMLElement::getDocNamespaces(): returns an array of <b>all</b> namespaces declared in the document (declared in the root element referenced by the SimpleXMLElement object).
            				</li>
            				<li>
            					SimpleXMLElement::getDocNamespaces($optionalDoRecursive): behave recursively and return the namespaces declared in all children. 
            				</li>
            				<li>
            					SimpleXMLElement::getNamespaces($optionalDoRecursive): returns an array that <b>only contains those namespaces that are actually used</b> throughout the document.
            				</li>
            				<li class="noStyle">
            					Example:
								<?php include 'code/php_code_142.txt'; ?>
            				</li>
            			</ul>
            		</li>
            	</ul>
            </li>
            <li>
            	<h2>DOM</h2>
            	<ul>
            		<li>
            			Since SimpleXML and DOM objects are inter-operable, you can use SimpleXML for simplicity and DOM for power on the same document with minimal effort.
            		</li>
            		<li>
            			Load and save an XML Document
            			<ul>
            				<li class="noStyle">
            					<?php include 'code/php_code_143.txt'; ?>
            				</li>
            			</ul>
            		</li>
            		<li>
            			XPath Queries
            			<ul>
            				<li>
            					<i>DomXpath</i> is far more powerful than the <i>SimpleXML</i> equivalent.
            					<?php include 'code/php_code_144.txt'; ?>
            				</li>
            			</ul>
            		</li>
            		<li>
            			Modifying XML Documents
            			<ul>
            				<li>
            					Example: Add a new book to our “libary.xml” document
            					<?php include 'code/php_code_145.txt'; ?>
            				</li>
            			</ul>
            		</li>
            		<li>
            			Moving data
            			<ul>
            				<li>
            					DOM extension doesn’t provide a method that takes care of that, explicitly.
            				</li>
            				<li>
            					Use a combination of DomNode::appendChild() and DomNode::insertBefore()
            					<?php include 'code/php_code_146.txt'; ?>
            				</li>
            				<li>
            					If you want to duplicate a node, use DomNode::cloneNode()
            					<?php include 'code/php_code_147.txt'; ?> 
            				</li>
            			</ul>
            		</li>
            		<li>
            			Modifying data
            			<ul>
            				<li>
            					When modifying data, you typically want to edit the CDATA within a node. Apart from using the methods shown above, you can use XPath to find a CDATA node and modify its contents directly:
            					<?php include 'code/php_code_148.txt'; ?>
            					Resulting in the following output:
            					<?php include 'code/php_code_149.txt'; ?>
            				</li>
            			</ul>
            		</li>
            		<li>
            			Removing Data
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