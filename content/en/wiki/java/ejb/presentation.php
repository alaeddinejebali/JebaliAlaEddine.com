<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Title
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Presentation</h2>
				<ul>
					<li>
						What is an enterprise Java Bean?
						<ul>
							<li>A reusable component.</li>
							<li>A Java object.</li>
							<li>An encapsulation of enterprise businedd logic and data.</li>
							<li>Executed in a containers.</li>
							<li>
								EJB enterprise Java Beans
								<ul>
									<li>
										Business logic (SessionBean)
									</li>
									<li>
										Workflow logic (MessageDrivenBean)
									</li>
									<li>
										Persistence logic (Entity Beans: JPA Entity)
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						EJB containers provide:
						<ul>
							<li>Pooling</li>
							<li>Transaction management</li>
							<li>Security</li>
							<li>Naming and directory</li>
							<li>Configuration</li>
						</ul>
					</li>
					<li>
						History of EJB
						<ul>
							<li>
								EJB 1.0
								<ul>
									<li>All Java based</li>
									<li>It was cumbersome.</li>
								</ul>
							</li>
							<li>
								EJB 2
								<ul>
									<li>Java based + XML</li>
									<li>
										Strengths
										<ul>
											<li>
												More capabilities than EJB 1.0
											</li>
											<li>
												Clean separation of business services
											</li>
											<li>
												Persistence supports usable object/relational mapping
											</li>
											<li>
												Message oriented middleware capabilities
											</li>
										</ul>
									</li>
									<li>
										Weaknesses
										<ul>
											<li>
												Cumbersome programming model
											</li>
											<li>
												Complex deployment model
											</li>
											<li>
												Mediocre object/relational mapping
											</li>
										</ul>
									</li>
									<li>EJB 2.0: it was tedious</li>
									<li>EJB 2.1: it was slightly easier</li>
								</ul>
							</li>
							<li>
								EJB 3
								<ul>
									<li>Java based + XML + annotations</li>
									<li>
								</ul>
								<li>
									Strengths
									<ul>
										<li>
											Simplified programming modem
										</li>
										<li>
											Simplified deployment model
										</li>
										<li>
											More robust persistence structure
										</li>
									</ul>
								</li>
								<li>
									Weaknesses
									<ul>
										<li>
											Yet another programming model
										</li>
										<li>
											AOP (Aspect Oriented programming) and dependency injection not as robust as another frammeworks
										</li>
										<li>
											Limited vendor support
										</li>
									</ul>
								</li>
								<li>
									EJB 3.0
									<ul>
										<li>it was slightly easier</li>
										<li>
											News:
											<ul>
												<li>
													Annotations instead of deployment descriptors
												</li>
												<li>
													Callback methods and listener
												</li>
												<li>
													Interceptors
												</li>
												<li>
													Dependency injection
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									EJB 3.1
									<ul>
										<li>It's easier</li>
										<li>
											News
											<ul>
												<li>
													Simplified EJB development (no interfaces)
												</li>
												<li>
													Singleton session beans
												</li>
												<li>
													Enhanced timer service
												</li>
												<li>
													Application profiles
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</li>
						</ul>
					</li>
					<li>
						Session Beans
						<ul>
							<li>
								A session bean is a reusable logic components.
							</li>
							<li>
								Can be used to manage state across client interactions.
							</li>
							<li>
								3 types
								<ul>
									<li>
										Stateless
									</li>
									<li>
										Statefull
									</li>
									<li>
										Singleton (for EJB 3.1 or higher)
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Message Driven Beans (MDB)
						<ul>
							<li>
								Reusable workflow logic components
								<ul>
									<li>
										Rely on Java Messaging System
									</li>
									<li>
										Support transactions
									</li>
								</ul>
							</li>
							<li>
								Similar to Stateless Session Beans
								<ul>
									<li>
										MDB have no client-oriented state
									</li>
									<li>
										No distinction acress client or bean
									</li>
								</ul>
							</li>
							<li>
								Different from Stateless Session Beans
								<ul>
									<li>
										No direct client access
									</li>
									<li>
										Asynchronous interaction
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Entity Beans
						<ul>
							<li>
								Persistence model for EJB
							</li>
							<li>
								3 primary types
								<ul>
									<li>
										Bean managed persistence
									</li>
									<li>
										Container managed persistence
									</li>
									<li>
										JPA entities
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						EJB access modes
						<ul>
							<li>
								Local client-access (this the default mode)
								<ul>
									<li>
										Local beans are accessible
										<ul>
											<li>
												Only by other EJBs in the same context
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								Remote client-access
								<ul>
									<li>
										Remote beans are accessible
										<ul>
											<li>
												By other EJBs in the same context and outside the context
											</li>
											<li>
												By other objects outside the container
											</li>
											<li>
												Only Session Beans can be remote
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								Web-services client-access
								<ul>
									<li>
										translate Session Beans and MDBs into web-services
									</li>
									<li>
										Container managers WSDL/SOAP mappings
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						EJB access mode resume
						<ul>
							<li>
								Session Bean can be:
								<ul>
									<li>@Local (or @LocalBan using EJB 3.1)</li>
									<li>@Remote</li>
									<li>@WebService</li>
								</ul>
							</li>
							<li>
								Message Driven can be:
								<ul>
									<li>@WebService</li>
								</ul>
							</li>
							<li>
								Entity Bean
								<ul>
									<li>N/A</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						EJB management modes
						<ul>
							<li>
								Container-managed mode
								<ul>
									<li>
										A client can't access an EJB directly.
									</li>
									<li>
										The conatainer looks like a proxy between the client and the EJB.
									</li>
									<li>
										The container determine when to instanciate an EJB.
									</li>
									<li>
										The container determine how many EJBs to instanciate (container can create and handle a pool of EJBs).
									</li>
								</ul>
							</li>
							<li>
								Bean-managed mode
							</li>
						</ul>
					</li>
					<li>
						EJB lifecycle
						<ul>
							<li>
								Lifecycle is managed by container
							</li>
							<li>
								Lifecycle phases
								<ul>
									<li>
										Doesn't exist
										<ul>
											<li>
												No bean instance in memory
											</li>
										</ul>
									</li>
									<li>
										Post-construct
										<ul>
											<li>
												Bean instance exists but isn't ready for client interaction.
											</li>
										</ul>
									</li>
									<li>
										Ready
										<ul>
											<li>
												Bean instance exists, has been initialized and it's ready for interactions
											</li>
										</ul>
									</li>
									<li>
										Pre-removal
										<ul>
											<li>
												Bean instance is about to be removed
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>