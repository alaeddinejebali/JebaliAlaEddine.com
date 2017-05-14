<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#yarn">Yarn</a>
		</h4>
	</div>
	<div id="yarn" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Presentation</h2>
					<ul>
						<li>
							Yarn consumes "<i>package.json</i>" file (like NPM).
						</li>
						<li>
							Stores dependencies in "<i>node_modules</i>" directory (like NPM).
						</li>
						<li>
							produces a "<i>yarn.lock</i>" file.
						</li>
						<li>
							It has a flat dependencies tree.
						</li>
						<li>
							It parallelizes tasks (not like the sequencing of NPM)
						</li>
					</ul>
				</li>
				<li>
					<h2>Installation and basic commands</h2>
					<ul>
						<li>
							Install Yarn
							<ul>
								<li class="noStyle">
									$> npm install -g yarn
								</li>
							</ul>
						</li>
						<li>
							Identify why a package has been installed
							<ul>
								<li class="noStyle">
									$> yarn why &lt;packageName&gt;
								</li>
								<li>
									Which other packages depend upon it or whether it was explicitly marked as a dependency in the package.json manifest.
								</li>
							</ul>
						</li>
						<li>
							Basics commands (compared to NPM)
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<td>NPM</td>
										<td>Yarn</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>$> npm install</td>
										<td>$> yarn</td>
									</tr>
									<tr>
										<td>$> npm init</td>
										<td>$> yarn init</td>
									</tr>
									<tr>
										<td>$> npm install &lt;packageName&gt; --save</td>
										<td>$> yarn add &lt;packageName&gt;</td>
									</tr>
									<tr>
										<td>$> npm install &lt;packageName&gt; --save-dev</td>
										<td>$> yarn add &lt;packageName&gt; --dev</td>
									</tr>
									<tr>
										<td>$> npm uninstall &lt;packageName&gt;</td>
										<td>$> yarn remove &lt;packageName&gt;</td>
									</tr>
									<tr>
										<td>$> npm </td>
										<td>$> yarn </td>
									</tr>
									<tr>
										<td>$> npm </td>
										<td>$> yarn </td>
									</tr>
									<tr>
										<td>$> npm </td>
										<td>$> yarn </td>
									</tr>
								</tbody>
							</table>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>				