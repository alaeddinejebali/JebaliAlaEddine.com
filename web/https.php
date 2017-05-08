<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#https">HTTPS</a>
		</h4>
	</div>
	<div id="https" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Introduction</h2>
					<ul>
						<li>
					       MitM: Main in the middle attacks
					       <ul>
					           <li>
					               Normally the communication is made between a client/server A and another client/server B.
					           </li>
					           <li>
					               MitM takes place between A and B.
					           </li>
					           <li>
					               MitM receives messages from A and send it (as is or after modification) to B; instead of a direct communication between A and B.
					           </li>
					           <li>
					               How can MitM can be inserted between A and B?
					               <ul>
					                   <li>
					                       We are taking an example of a browser which is connected to a wireless router.
					                   </li>
					                   <li>
					                       The wireless router forward all the traffics.
					                   </li>
					                   <li>
					                       Imagine that the wireless router is infected/attacked. Such as you are in a free cyber caffe WIFI, how do you know what they are doing with the traffic?!!!
					                   </li>
					                   <li>
					                       Also the router can be connected to ISP.
					                   </li>
					                   <li>
					                       ISP will then communicate with a web server.
					                   </li>
					                   <li>
					                       The web server can be in another country!...etc
					                   </li>
					               </ul>
					           </li>
							</ul>
						</li>
						<li>
					       HTTPS attributes
							<ul>
        					   <li>
        					       Confidentiality
        					       <ul>
        					           <li>
        					               It means how to keep the things (passwords, email messages, bank accounts...etc) in my connection secure.
        					           </li>
        					       </ul>
        					   </li>
        					   <li>
        					       Integrity
        					       <ul>
        					           <li>
        					               Like when you have the action page for a login form in HTTPS but the form itself is in HTTP!
        					           </li>
        					           <li>
        					               The attacks you may have are: Change the login form action page, inject malware...etc.
        					           </li>
        					       </ul>
        					   </li>
					           <li>
					               Authentity
					               <ul>
					                   <li>
					                       You give a certification to the server, so it know you.
					                   </li>
        					           <li>
        					               Using HTTPS can mitigate: DNS hijacking, phishing.
        					           </li>
					               </ul>
					           </li>
					       </ul>
						</li>
						<li>
					       Barries to HTTPS
							<ul>
					           <li>
					               Cost
					           </li>
					           <li>
					               Complexity
					           </li>
					           <li>
					               Speed (due to encrypting/crypting process)
					           </li>
					           <li>
					               Compatibility: everything inserted in HTTPS must be in HTTPS (AJAX calls, services embedded...etc)
					           </li>
							</ul>
						</li>
						<li>
							CA: Certification authority
							<ul>
								<li>
									It's an entity that issues (publish) a digital certificate.
								</li>
								<li>
									A digital certificate certifies the ownership of a public key (by the named subject of the certification).
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
				    <h2>SSl and TLS</h2>
				    <ul>
				        <li>
							SSL (Secure Sockets Layer) is originally deevelopped by Netscape.
							SSL-3 is launched in 1996.
				        </li>
				        <li>
							TLS (Transport Layer Security) is defined in 1999 as an upgrade of SSL3.
							TLS-1.3 is in a working draft as of 2017.
				        </li>
				        <li>
							SSL is not TLS.
				        </li>
				        <li>
							TLS is not HTTPS.
				        </li>
				    </ul>
				</li>
				<li>
				    <h2>TLS Handshake (<em>in ar: mousafaha</em>)</h2>
				    <ul>
				        <li>
				            Pahse I: Negiciation phase
							<ul>
								<li>
									Exchanged data here is not secure (not encrypted).
								</li>
								<li>
									During this phase the client and the server don't know identity of each others.
								</li>
								<li>
									Objectif: the client and server agree how they'll communicate securely.
								</li>
								<li>
									Step 1: Client send "<i>client hello</i>" to the server.
								</li>
								<li>
									Step 2: Server respond with a "<i>server hello</i>" and send a public key to client.
								</li>
								<li>
									Step 3: Client verify this public key against a list of <i>certification authority</i>. Objectif: build a confidance.
								</li>
								<li>
									Step 4: Client perform a key exchange with server which is encrypted with the server public key.
								</li>
								<li>
									Step 5: Server respond to client with a "<i>server finished response</i>".
								</li>
								<li>
									Step 6: From now secure connections begin.
								</li>
							</ul>
				        </li>
				        <li>
				            Pahse II: Start the secured connection
							<ul>
								<li>
									Exchanged data here become encrypted.
								</li>
							</ul>
				        </li>
				    </ul>
				</li>
				<li>
				    <h2>SSL implementation</h2>
				    <ul>
				        <li>
				            todo: How to do it in a local project. With using a certification in Dev mode.
				        </li>
				        <li>
				            Create a local self signed certification.
				        </li>
				        <li>
				            See http://badssl.com
				        </li>
				    </ul>
				</li>
				<li>
					<h2>Redirect from HTTP to HTTPS</h2>
					<ul>
						<li>
							Client send an HTTP request to server (insecure request).
						</li>
						<li>
							Server respond with HHTP 301 (permanent redirect).
							<ul>
								<li>
									todo: what is 301 redirect?
								</li>
								<li>
									It'll tells the client that you need to subsequent HTTPS requests back to the server.
								</li>
								<li>
									Each HTTP request will be returned with 301 to a secure HTTPS request.
								</li>
							</ul>
						</li>
						<li>
							Debug with Chrome DevTools
							<ul>
								<li>
									You tape http://demo.com
								</li>
								<li>
									F12 -> Network
								</li>
								<li>
									You see a call to http://demo.com with a status code equal to 301 and a "<i>response headers</i>" -> "<i>Location</i>" -> "<i>http<strong>s</strong>://demo.com</i>"
								</li>
								<li>
									A network request is made just after that to http<strong>s</strong>://demo.com which has the status code 200.
								</li>
							</ul>
						</li>
						<li>
							Advantages
							<ul>
								<li>
									We established a HTTPS secure request.
								</li>
							</ul>
						</li>
						<li>
							Disadvantages
							<ul>
								<li>
									We have 2 requests generated.
								</li>
								<li>
									Since the 1<sup>st</sup> one is in HTTP, so it's always a risk.
								</li>
								<li>
									If an attack get made in the middle between the 1<sup>st</sup> HTTP and the 2<sup>nd</sup> HTTP<strong>S</strong> request, it can proxy the attack traffic bacl and forward to the server and back and forxard insecurely to the client!
								</li>
								<li>
									Solution: HSTS
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>HSTS: HTTP Strict transport Security</h2>
					<ul>
						<li>
							It solves the problem of the 1<sup>st</sup> request above.
						</li>
						<li>
							Visit http<strong>s</strong>://demo.com, F12 -> Network -> you'll see only 1 request -> "Response Headers" -> "strict-transport-security: max-age=&lt;tooBigValueInSeconds&gt;": It's the HSTS header.
						</li>
						<li>
							How it works?
							<ul>
								<li>
									Go back and load http://demo.com
								</li>
								<li>
									You'll see 2 different requests made.
								</li>
								<li>
									The 1<sup>st</sup> one has a 307 Internal redirect.
									It"s size is 0 Byte and load-time=6ms.
								</li>
								<li>
									F12 -> Headers - > "Response Headers" -> "Non-Authorative-Reason: HSTS".
								</li>
								<li>
									The 2<sup>nd</sup> request is the secure one.
								</li>
							</ul>
						</li>
						<li>
							Advantage
							<ul>
								<li>
									Once filled in, during the &lt;tooBigValueInSeconds&gt;" of HSTS header, the browser will not make insecure requests.
								</li>
							</ul>
						</li>
						<li>
							Disadvantage/Problem: TOFU
							<ul>
								<li>
									The just 1<sup>st</sup> request before setting the &lt;tooBigValueInSeconds&gt;" value is an insecure request.
								</li>
								<li>
									It's TOFU: Trust On First Use.
								</li>
							</ul>
						</li>
						<li>
							Solution to TOFU
							<ul>
								<li>
									Give a bigger value to "<i>max-age</i>" (a year for example).
								</li>
								<li>
									Add "<i>includeSubDomains</i>" to "Response Headers" -> "strict-transport-security" -> so subdomains also has the same HSTS value.
								</li>
								<li>
									Add "<i>preload</i>" key word to "Response Headers" -> "strict-transport-security"
								</li>
							</ul>
						</li>
						<li>
							Preloading HSTS
							<ul>
								<li>
									See <a href="http://hstspreload.org" target="_blank">http://hstspreload.org</a>
								</li>
								<li>
									Your site will only be accessible using HTTPS.
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>