<section class="wiki-article">
	<div class="wiki-article-title">
    	<h1 class="btnShowHideArticleBody" data-article-visibility="off">Node.js Events<h1>
    </div>
    <div class="wiki-article-body invisible">
    	<ul>
			<li>
				<h2>Callback vs Events</h2>
				<ul>
					<li>
						Callback functions are called when an asynchronous function returns its result.
					</li>
					<li>
						Events functions listens to events. Whenever an event gets fired, its listener function starts executing.
					</li>
				</ul>
			</li>
			<li>
				<h2>Event Driven Programming</h2>
				<ul>
					<li>
						Node.js is a single threaded application but it support concurrency via concept of event and callbacks (async function calls ).
					</li>
					<li>
						Node.js uses async function calls to maintain the concurrency.
					</li>
					<li>
						Node uses <a href="/wiki/designpatterns" target="_blank">observer pattern</a>.
					</li>
					<li>
						As soon as Node starts its server, it simply initiates its variables, delcares functions and then simply waits for event to occur. This why Node is very fast.
					</li>
					<li>
						In an event-driven application, there is generally a main loop that listens for events, and then triggers a callback function when one of those events is detected.
					</li>
					<li>
						Node.js has multiple in-built events available through events module and EventEmitter class which is used to bind events and event listeners.
					</li>
				</ul>
			</li>
			<li>
				<h2>EventEmitter Class</h2>
				<ul>
					<li>
						All objects which emit events are instances of events.EventEmitter.
					</li>
					<li>
						EventEmitter class lies in events module.
						<ul>
							<li class="noStyle">
								<?php include 'code/nodejs_code_23.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						When an EventEmitter instance faces any error, it emits an "error" event.
					</li>
					<li>	
						When new listener is added, "newListener" event is fired.
					</li>
					<li>	
						When a listener is removed, "removeListener" event is fired.
					</li>
				</ul>
			</li>
			<li>
				<h2>EventEmitter methods</h2>
				<ul>
					<li>
						addListener(event, listener)
						<ul>
							<li>
								Adds a listener to the end of the listeners array for the specified event.
							</li>
							<li>
								Returns emitter, so calls can be chained.
							</li>
						</ul>
					</li>
					<li>
						on(event, listener)
						<ul>
							<li>
								Adds a listener to the end of the listeners array for the specified event.
							</li>
							<li>
								Returns emitter, so calls can be chained.
							</li>
						</ul>
					</li>
					<li>
						once(event, listener)
						<ul>
							<li>
								Adds a one time listener for the event. This listener is invoked only the next time the event is fired, after which it is removed.
							</li>
							<li>
								Returns emitter, so calls can be chained.
							</li>
						</ul>
					</li>
					<li>
						removeListener(event, listener)
						<ul>
							<li>
								Remove a listener from the listener array for the specified event.
							</li>
							<li>
								Returns emitter, so calls can be chained.
							</li>
						</ul>
					</li>
					<li>
						removeAllListeners([event])
						<ul>
							<li>
								Removes all listeners (or those) of the specified event.
							</li>
							<li>
								Returns emitter, so calls can be chained.
							</li>
						</ul>
					</li>
					<li>
						setMaxListeners(n)
						<ul>
							<li>
								By default EventEmitters will print a warning if more than 10 listeners are added for a particular event.
							</li>
							<li>
								This is a useful default which helps finding memory leaks.
							</li>
							<li>
								This function allows that to be increased.
							</li>
							<li>
								Set to zero for unlimited.
							</li>
						</ul>
					</li>
					<li>
						listeners(event)
						<ul>
							<li>
								Returns an array of listeners for the specified event.
							</li>
						</ul>
					</li>
					<li>
						emit(event, [arg1], [arg2], [...])
						<ul>
							<li>
								Execute each of the listeners in order with the supplied arguments. 
							</li>
							<li>
								Returns true if event had listeners, false otherwise.
							</li>
						</ul>
					</li>
					<li>
						EventEmitter.listenerCount(emitter, event)
						<ul>
							<li>
								Return the number of listeners for a given event.
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Example</h2>
				<ul>
					<li class="noStyle">
						<?php include 'code/nodejs_code_24.txt'; ?>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>