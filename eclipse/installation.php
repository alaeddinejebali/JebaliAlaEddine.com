<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#installation">Installation</a>
		</h4>
	</div>
	<div id="installation" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>			
				<li>
					<h2>Install Eclipse on Linux</h2>
					<ul>
						<li>Download Eclipse from <a
							href="http://www.eclipse.org/downloads/" target="_blank">http://www.eclipse.org/downloads/</a>.
						</li>
						<li>We are installing "EclipsePHP".</li>
						<li>Extract zip file to Desktop</li>
						<li>sudo mv /Desktop/EclipsePHP /opt/</li>
						<li>Create an eclipse executable in your path
							<ul>
								<li class="noStyle">
	                    			<?php include "code/eclipse_code__01.txt"; ?>
	                    		</li>
							</ul>
						</li>
						<li>Create a gnome menu item
							<ul>
								<li>
	                    			$> sudo nano /usr/share/applications/eclipse.desktop
	                    			<?php include "code/eclipse_code__02.txt"; ?>
	                    		</li>
							</ul>
						</li>
						<li>Launch Eclipse for the first time
							<ul>
								<li>
	                    			Launch Eclipse for the first time
	                    			<?php include "code/eclipse_code__03.txt"; ?>
	                    		</li>
							</ul>
						</li>
						<li>Close Eclipse and reopen it from "Start menu".</li>
					</ul>
				</li>			
			</ul>
		</div>
	</div>
</div>