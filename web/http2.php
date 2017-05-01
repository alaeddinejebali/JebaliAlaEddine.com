<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#http2">HTTP2</a>
		</h4>
	</div>
	<div id="http2" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Introduction</h2>
					<ul>
						<li>
							History
							<ul>
								<li>
									1997	:	HTTP1.1
								</li>
								<li>
									2010	:	SPDY (pronounced as in english accent "<i>speedy</i>")
								</li>
								<li>
									2015	:	HTTP2
								</li>
							</ul>
						</li>
						<li>
							Browser support
							<ul>
								<li>
									IE >= 11
								</li>
							</ul>
						</li>
						<li>
							HTTP1 networks calls are plain text. In HTTP2 networks calls are Binary frames.
						</li>
					</ul>
				</li>
				<li>
					<h2>Features</h2>
					<ul>
						<li>
							Multiplexing
							<ul>
								<li>
									HTTP1 opens a new TCP connexion each time you want to download a resource (images, css file, font file,...etc) from the server.
								</li>
								<li>
									HTTP2 opens only 1 TCP connexion between the client and the server (stream).
								</li>
								<li>
									So using HTTP2 there is no need to concatenate resources (like concatenate all your .js files) in one file since we'll not make a new connexion to each resource.
								</li>
							</ul>
						</li>
						<li>
							Compression of headers
						</li>
					</ul>
				</li>
				<li>
					<h2>Tools</h2>
					<ul>
						<li>
							Chrome Dev tools
							<ul>
								<li>
									See how to display "protocol" column in "Network" tab.
								</li>
								<li>
									F12 -> "Network" -> "Protocol" column.
								</li>
								<li>
									When you see "H2" it means that it's HTTP2.
								</li>
							</ul>
						</li>
						<li>
							Plugin available for Chrome and Firefox
							<ul>
								<li>
									<a href="https://chrome.google.com/webstore/detail/http2-and-spdy-indicator/mpbpobfflnpcgagjijhmgnchggcjblin?hl=en" target="_blank">HTTP/2 and SPDY indicator</a>
								</li>
							</ul>
						</li>
						<li>
							CURL
							<ul>
								<li>
									You need to add HTTP2 module to curl first
									<?php include 'code/05.txt'; ?>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Why HTTP2?</h2>
					<ul>
						<li>
							Loading time (you earn between -25% and -50% than using HTTP1)
						</li>
						<li>
							More secure (TLS)
						</li>
						<li>
							SEO: Latency of pages and their security are factors of ranking.
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>