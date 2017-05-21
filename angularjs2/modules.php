<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#modules">Modules</a>
		</h4>
	</div>
	<div id="modules" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>JavaScript modules</h2>
					<ul>
						<li>
							We assmeble our application from modules.
						</li>
						<li>
							A module exports an asset such a Service, Component, or a shared value.
						</li>
						<li>
							Example:
							<?php include "code/18.txt"; ?>
						</li>
					</ul>
				</li>
				<li>
					<h2>Angular modules</h2>
					<ul>
						<li>
							We use <span class="smallcode">NgModule</span> to organize our application into cohensive blocks of related functionality.
						</li>
						<li>
							An Angular module is a class decorated bu <span class="smallcode">@NgModule</span>.
						</li>
						<li>
							It's important to note that every application begins with one Angular module.
						</li>
						<li>
							Role of Angular modules
							<ul>
								<li>
									Import other Angular modules.
								</li>
								<li>
									Identify Components, pipes and Directives.
								</li>
								<li>
									Provide services to injectors.
								</li>
								<li>
									Can be eagerly or lazily loaded.
								</li>
								<li>
									Example: the root Angular module
									<?php include "code/19.txt"; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>