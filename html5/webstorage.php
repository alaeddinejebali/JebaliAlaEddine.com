<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#webstorage">XXXXXXX</a>
		</h4>
	</div>
	<div id="webstorage" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>What is webstorage?</h2>
					<ul>
						<li>
							It comes in 2 differents parts: local or session.
						</li>
						<li>
							Local storage write info in user machine and it'll be available anytime.
						</li>
						<li>
							Session storage is the same as local storage except the fact that the lifecycle is only available throw the user session.
							So when you restart the browser or refresh the page, info are lost.
						</li>
						<li>
							Browsers suport: IE8+ supports the API (no storage event). IE9+ supports storage event.							
						</li>
					</ul>
				</li>
				<li>
					<h2>Security</h2>
					<ul>
						<li>
							Per session
						</li>
						<li>
							Per domain
						</li>
					</ul>
				</li>
				<li>
					<h2>Capacity</h2>
					<ul>
						<li>
							Between 2MB and 10MB (often 5MB).
						</li>
						<li>
							Some browsers allow you to control it to allow more space.
						</li>
					</ul>
				</li>
				<li>
					<h2>Web storage vs cookies</h2>
					<ul>
						<li>
							Web storage has a larger capacity (of storage volume).
						</li>
						<li>
							Web storage data are not sent to server with each request (cookies are always sent with HTTP-Header).
						</li>
					</ul>
				</li>
				<li>
					<h2>Web storage vs IndexedDB</h2>
					<ul>
						<li>
							Web storage are simple API.
						</li>
						<li>
							Web storage are key/value pair (not a query language).
						</li>
						<li>
							Web storage are available (supported) by many browsers than IndexedDB.
						</li>
					</ul>
				</li>
				<li>
					<h2>Storage API</h2>
					<ul>
						<li>
							storage.clear: 
						</li>
						<li>
							storage.getItem: 
						</li>
						<li>
							storage.key: 
						</li>
						<li>
							storage.length: 
						</li>
						<li>
							storage.remainingSpace: 
						</li>
						<li>
							storage.removeItem: 
						</li>
						<li>
							storage.setItem: 
						</li>
					</ul>
				</li>
				<li>
					<h2>Example with local storage</h2>
					<ul>
						<li class="noStyle">
							<?php include "code/05.txt"; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Example with session storage</h2>
					<ul>
						<li class="noStyle">
							<?php include "code/06.txt"; ?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
