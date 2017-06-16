<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#asynchronousandpromises">Asynchronous and promises</a>
		</h4>
	</div>
	<div id="asynchronousandpromises" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		<ul>
			<li>
				Asynchrony: get the benefits of multi-threading without the need to create new threads.
			</li>
			<li>
				<h2>Primeses</h2>
				<ul>
					<li>
						A promise is an object that has a <i>then</i> method.
						Look at <a href="https://promisesaplus.com/" target="_blank">https://promisesaplus.com/</a>
						<ul>
							<li class="noStyle">
								<?php include "code/javascript_code_134.txt"; ?>
								"onFullfilled" can:
								<ul>
									<li>
										return another promise
									</li>
									<li>
										return a value
									</li>
									<li>
										throw an error
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						IE Browser supports of promises: Edge12 (no IE)
					</li>
					<li>
						You can chain promises
					</li>
					<li>
						You can pass an array of promises
						<ul>
							<li>
								.call()
								<ul>
									<li>
										"onFullfilled" is called when all promisess are passed.
									</li>
									<li>
										"onRejected" is called when at least one promise is rejected.
									</li>
									<li>
										Example:
										<?php include "code/javascript_code_135.txt"; ?>
									</li>
								</ul>
							</li>
							<li>
								.race()
								<ul>
									<li>
										<?php include "code/javascript_code_136.txt"; ?>
									</li>
									<li>
										When 1<sup>st</sup> promise passes, we execute "firstFulfilled".
									</li>
									<li>
										When 1<sup>st</sup> promise rejected, we execute "firstRejected".
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Example of promises
					</li>
				</ul>
			</li>
			<li>
				<h2>Callbacks</h2>
				<ul>
					<li>
						aa
					</li>
				</ul>
			</li>
			<li>
				<h2>Inversion of control</h2>
				<ul>
					<li>
						aa
					</li>
				</ul>
			</li>
			<li>
				<h2>Generators</h2>
				<ul>
					<li>
						<?php include "code/javascript_code_117.txt"; ?>
					</li>
				</ul>
			</li>
			<li id="promise">
				<h2>Promises</h2>
				<ul>
					<li>
						pronouced using French accent "<i>promaaisse</i>".
					</li>
					<li>
						how primises == inversion of control???
					</li>
				</ul>
			</li>
			<li>
				<h2>Chained promises</h2>
				<ul>
					<li>
						ccc
					</li>
				</ul>
			</li>
		</ul>
		</div>
	</div>								
</div>