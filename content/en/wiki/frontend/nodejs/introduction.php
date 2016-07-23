<section class="wiki-article">
	<div class="wiki-article-title">
    	<h1 class="btnShowHideArticleBody" data-article-visibility="off">Introduction<h1>
    </div>
    <div class="wiki-article-body invisible">
    	<ul>
    		<li>
    			<h2>What is Google Chrome's V8 JavaScript Engine</h2>
    			<ul>
    				<li>
    					
    				</li>
    			</ul>
    		</li>
			<li>
				<h2>What's NodeJS</h2>
				<ul>
					<li>
						Node.js is an open source, cross-platform runtime environment for developing server-side and networking applications.
					</li>
					<li>
						 It was developed by Ryan Dahl in 2009.
					</li>
					<li>
						 It's built on Google Chrome's JavaScript Engine (V8 Engine).
					</li>
					<li>
						Node.js applications are written in JavaScript.
					</li>
				</ul>
			</li>
			<li>
				<h2>Features of Node.js</h2>
				<ul>
					<li>
						Asynchronous and Event Driven 
						<ul>
							<li>
								All APIs of Node.js library are asynchronous that is, non-blocking.
							</li>
							<li>
								It essentially means a Node.js based server never waits for an API to return data: a notification mechanism of Events of Node.js helps the server to get a response from the previous API call
							</li>
						</ul>
					</li>
					<li>
						Very Fast
						<ul>
							<li>
								Being built on Google Chrome's V8 JavaScript Engine, Node.js library is very fast in code execution.
							</li>
						</ul>
					</li>
					<li>
						Single Threaded but Highly Scalable
						<ul>
							<li>
								Node.js uses a single threaded model with event looping.
							</li>
							<li>
								Event mechanism helps the server to respond in a non-blocking way and makes the server highly scalable as opposed to traditional servers which create limited threads to handle requests.
							</li>
							<li>
								Node.js uses a single threaded program and the same program can provide service to a much larger number of requests than traditional servers like Apache HTTP Server.
							</li>
						</ul>
					</li>
					<li>
						No Buffering
						<ul>
							<li>
								Node.js applications never buffer any data. It simply output the data in chunks.
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>What is an application scalability</h2>
				<ul>
					<li>
						Scalability is the capability to increase resources to yield a linear (ideally) increase in service capacity.
					</li>
					<li>
						The key characteristic of a scalable application is that additional load only requires additional resources rather than extensive modification of the application itself.
					</li>
				</ul>
			</li>
			<li>
				<h2>Where to Use Node.js?</h2>
				<ul>
					<li>
						I/O bound Applications.
					</li>
					<li>
						Data Streaming Applications.
					</li>
					<li>
						DIRT: Data Intensive Real time Applications.
					</li>
					<li>
						JSON APIs based Applications.
					</li>
					<li>
						SPA: Single Page Applications
					</li>
				</ul>
			</li>
			<li>
				<h2>Where Not to Use Node.js?</h2>
				<ul>
					<li>
						It is not advisable to use Node.js for CPU intensive applications.
					</li>
				</ul>
			</li>
			<li>
				<h2>What are the parts of a Node.js application</h2>
				<ul>
					<li>
						Import required modules
					</li>
					<li>
						Create server which will listen to client's request (similar to Apache HTTP Server).
					</li>
					<li>
						Read request and return response (read HTTP request made by client which can be a browser or console and return the response).
					</li>
				</ul>
			</li>
    		<li>
    			<h2>REPL: Read Eval Print Loop</h2>
		        <ul>
		            <li>
		                It represents a computer environment (like a window console or Unix/Linux shell) where a command is entered and system responds with an output in interactive mode.
		            </li>
		            <li>
		                Node.js comes bundled with a REPL environment.
		            </li>
		            <li>
		                It performs the following desired tasks.
		                <ul>
		                    <li>Read: Reads user's input, parse the input into JavaScript data-structure and stores them in memory.</li>
		                    <li>Eval: Takes and evaluates the data structure.</li>
		                    <li>Print: Prints the result.</li>
		                    <li>Loop: Loops the above command until user press ctrl-c twice.</li>
		                </ul>
		            </li>
		            <li>
		            	Using REPL:
		            	<ul>
		            		<li>
		            			Start it:
		            			<ul>
		            				<li class="noStyle">
		            					<?php include 'code/nodejs_code_19.txt'; ?>
		            				</li>
		            			</ul>
		            		</li>
		            		<li>
		            			Underscore Variable
		            			<ul>
		            				<li>
		            					You can use underscore "_" to get the last result:
		            					<?php include 'code/nodejs_code_21.txt'; ?>
		            				</li>
		            			</ul>
		            		</li>
		            		<li>
		            			Stopping REPL
		            			<ul>
		            				<li>
		            					Use "ctrl+c" twice.
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