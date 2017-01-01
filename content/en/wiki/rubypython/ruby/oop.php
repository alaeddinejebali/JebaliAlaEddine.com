<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Object Oriented Programming
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">

			
			<!-------------------------------------	CLASSES AND OBJECTS	----------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="classesRuby" class="oneSection">
						<div class="panel panel_12">
							<div class="panel-heading panel-heading_12">
								<h3 class="panel-title"><strong>Classes and objects</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>Ruby is pure object-oriented language and everything appears to Ruby as an object. Every value in Ruby is an object, even the most primitive things: strings, numbers and even true and false. Even a class itself is an object that is an instance of the "Class" class.</li>
									<li>"initialize" method = constructor</li>
									<li>The class variables are prefixed with two @ characters (@@).</li>
									<li>
										<div class="code">
											class Client<br/>
												@@id;<br/>
												@@name;<br/>
												@@age;<br/>
												COMPANY = "WhiteCape"<br/><br/>
												
												#construct<br/>
												def initialize(id, name, age)<br/>
													<div class="level1"></div>@@id = id<br/>
													<div class="level1"></div>@@name = name<br/>
													<div class="level1"></div>@@age = age<br/>
												end<br/><br/>
												
												#Accessor<br/>
												def getId<br/>
													<div class="level1"></div>@@id<br/>
												end<br/>
												def getName<br/>
													<div class="level1"></div>@@name<br/>
												end<br/>
												def getAge<br/>
													<div class="level1"></div>@@age<br/>
												end<br/><br/>
												
												#Setters<br/>
												def setId(vId)<br/>
													<div class="level1"></div>@@id = vId;<br/>
												end<br/>
												def setName(vName)
													<div class="level1"></div>@@name = vName;<br/>
												end<br/>
												def setAge(vAge)
													@@age = vAge;<br/>
												end<br/><br/>
												
												#sayHello method<br/>
												def sayHello()<br/>
													<div class="level1"></div>@greeting = "Good morning"<br/>
													puts "#@greeting from Client class"<br/>
												end<br/><br/>
												
												#show details of client<br/>
												def displayDetails<br/>
													<div class="level1"></div>puts "id: #{getId}"<br/>
													<div class="level1"></div>puts "Name: #{getName}"<br/>
													<div class="level1"></div>puts "Age: #{getAge}"<br/>
													<div class="level1"></div>puts "Company name: #{COMPANY}"<br/>
												end<br/>
											end<br/><br/>
											
											#Test our class<br/>
											c1 = Client. new(15, "Ala Eddine JEBALI", 29);<br/>
											c1.setAge(30);<br/>
											c1.sayHello();<br/>
											c1.displayDetails
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!------------------------------------------------	END CONTAINER	---------------------------------------------->
	</div>
</section>