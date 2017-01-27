<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#registry">Registry</a>
		</h4>
	</div>
	<div id="registry" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Registry pattern</h2>
					<ul>
						<li>When you want to find an object you usually start with another
							object that has an association to it ( <i>$vClient.findById(22)</i>
							).
						</li>
						<li>However, in some cases you won't have an appropriate object to
							start with (<i>$vClient</i>). You may know the customer's ID
							number (<i>22</i>) but not have a reference.
						</li>
						<li>In this case you need some kind of lookup method: <u>a finder</u>.
						</li>
						<li>A Registry is essentially a global object, or at least it looks
							like one - even if it isn't as global as it may appear.
							<ul>
								<li class="noStyle">
									<?php include 'code/designpatterns_03.txt'; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>