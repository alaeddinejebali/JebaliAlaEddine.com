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
					       <h2>HTTPS attributes</h2>
					       <ol>
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
        					               </ul>
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
					       </ol>
					   </li>
					   <li>
					       <h2>Barries to HTTPS</h2>
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
					</ul>
				</li>
				<li>
				    <h2></h2>
				    <ul>
				        <li>
				            
				        </li>
				    </ul>
				</li>
			</ul>
		</div>
	</div>								
</div>