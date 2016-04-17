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
            			</ul>
            		</li>
            	</ul>
            </li>
            <li>
            	
            </li>
        </ul>
    </div>
</section>