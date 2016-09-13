<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Introduction
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
<ul>
	<li>
		<h2>About ROR</strong></h2>
		<ul>
			<li>Web application framework</li>
			<li>Written in Ruby</li>
			<li>Open source</li>	 
			<li>Principles:</li>
				<ol>
					<li>DRY (Don't Repeat Yourself): the Mantra of rails</li>
					<li>Conventions and Sensible Defaults</li>
							<li>
											Ruby on Rails MVC framework:
											<ul>
												<li>Model (ActiveRecord / activerecord-x.y.z gem): Maintains the relationship between Object and Database and handles validation, association, transactions, and more. This subsystem is implemented in ActiveRecord library which provides an interface and binding between the tables in a relational database and the Ruby program code that manipulates database records. Ruby method names are automatically generated from the field names of database tables, and so on.</li>
												<li>View (ActionView / actionpack-x.y.z gem)</li>
												<li>Controller (ActionController)</li>
											</ul>
										</li>
										<li>ActiveRecord provides a range of programming techniques and shortcuts for manipulating data from an SQL database.</li>
										<li>ActionController and ActionView provide facilities for manipulating and displaying that data. Rails ties it all together.</li>
									</ol>
									<li>When you install Ruby you get the web server <a href="http://ruby-doc.org/stdlib-1.9.3/libdoc/webrick/rdoc/WEBrick.html" target="_blank">WEBRrick</a> installed.</li>	
									<li>To get more info about ROR generators go to <a href="http://guides.rubyonrails.org/generators.html" target="_blank">http://guides.rubyonrails.org/generators.html</a></li>
									<ol>
										<li><div class="code">$ rails generate controller myController myAction1</div></li>
											<ol>
												<li>Creates "app/controllers/my_controller_controller.rb" file</li>
												<li>Creates "MyControllerController" class inside it</li>
												<li>Creates "app/views/my_controller/myAction1.html.erb" folder</li>
												<li>
													Creates "app/config/routes.rb" and adds inside it <div class="code">get "my_controller/myAction1"</div>
													Try <a href="http://localhost:3000/my_controller/myAction1" target="_blank">http://localhost:3000/my_controller/myAction1</a>
												</li>
											</ol>
									</ol>
									<li>You can add a static page in "/public/foldername/mystaticpage.html" and access it like <a href="http://localhost:3000/foldername/mystaticpage" target="_blank">http://localhost:3000/foldername/mystaticpage</a></li>
									<li>
										To install a gem with dependicies
										<div class="code">
											gem install rubyGemFileName --include-dependencies									
										</div>
									</li>
									<li>
										How to debug an object?
										<ol>	
											<li>
												1. Inside a controller (but your view won't be rendered):
												<div class="code">
													render :text => @some_object.inspect
												</div>
											</li>
											<li>
												2. Output to 'log/development.log':
												<div class="code">
													Rails.logger.debug("My object: #{@some_object.inspect}")
												</div>
											</li>
											<li>
												3. Inside a view:
												<div class="code">
													<%= debug(@some_object) %>
												</div>
											</li>
										</ol>
									</li>
								</ul>
</li>
</ul>

			
			<!----------------------------------	INSTALL RUBY ON RAILS ON WINDOWS	---------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="installOnWindows" class="oneSection">
						<div class="panel panel_2">
							<div class="panel-heading panel-heading_2">
								<h3 class="panel-title"><strong>Install Rails on Windows</strong></h3>
							</div>
							<div class="panel-body">
								<ol>
									<li>1. Download the last version of Ruby from <a href="http://rubyinstaller.org/downloads/" target="_tab">http://rubyinstaller.org/downloads/</a></li>
									<li>2. Install it (Check add Ruby executables to your PATH)</li>
									<li>3. Start->Programs->Ruby->Start Command Prompt with Ruby. Check the installation and the version<div class="code">ruby -v</div></li>
									<li>4. Close the prompt and reopen it</li>
									<li>5. Make sure that you have the latest version of RubyGems<div class="code">gem update --system</div></li>
									<li>6. Install DevKit</li>
										<ol>
											<li>6.1 Go to <a href="http://rubyinstaller.org/downloads" target="_tab">http://rubyinstaller.org/downloads</a> and check the version you need based on the version of Ruby used<img src="<?php echo $baseUrl; ?>/assets/wiki/Ruby/ruby-devkit.png" /></li>
											<li>6.3 Creat a folder "devkit" into c:\Ruby200</li>
											<li>6.4 Open the .exe file and extract the content into c:\Ruby200\devkit</li>
											<li>6.5 Close the prompt and reopen it</li>
											<li>6.6 >cd c:\Ruby200\devkit<div class="code">ruby dk.rb init<br/>ruby dk.rb install</div></li>
											<li>1.7 Close the prompt and reopen it</li>
											<li>1.8 Install Rails<div class="code">gem install rails</div>If you get a "Cannot convert to UTF8..." error, ignore it. If you get a dependencies problems, try to install them one by one.</li>
										</ol>
								</ol>
								<ol>
									<li><i>Note</i>: How to install GEMs locally?</li>
									<ol>
										<li>1. <div class="code">$ gem install --local pathToYourGemFile.gem</div></li>
										<li>
											2. OR gem  will attempt a local installation (i.e. a .gem file in the current directory), and if that fails, it will attempt to download and install the most recent version of the gem you want.
										</li>
									</ol>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--------------------------------------	INSTALL RAILS ON LINUX	------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="installOnLinux" class="oneSection">
						<div class="panel panel_3">
							<div class="panel-heading panel-heading_3">
								<h3 class="panel-title"><strong>Install Rails on Linux</strong></h3>
							</div>
							<div class="panel-body">
								<ol>
									<li>1. First, let's check to see if you already have Ruby installed. Bring up a command prompt and type ruby -v. If Ruby responds, and if it shows a version number at or above 1.8.2 then skip to step 3. Otherwise, we'll install a fresh Ruby.</li>
									<li>2. Download ruby-x.y.z.tar.gz from <a href="www.ruby-lang.org" target="_blank">www.ruby-lang.org</a></li>
									<li>3. Untar the distribution, and enter the top-level directory.</li>
									<li>
										4. Do the usual open-source build as follows
										<div class="code">
											>$ cd ruby-x.y.z<br/>
											ruby-x.y.z>$ ./configure<br/>
											ruby-x.y.z>$ make<br/>
											ruby-x.y.z>$ make test<br/>
											ruby-x.y.z>$ make install
										</div>
									</li>
									<li>
										5. Install RubyGems. Go to <a href="rubygems.rubyforge.org" taregt="">rubygems.rubyforge.org</a>, and follow the download link. Once you have the file locally, enter the following in your shell window.
										<div class="code">
											>$ tar -xzf rubygems-0.8.10.tar.gz<br/>
											>$ cd rubygems-0.8.10<br/>
											rubygems-0.8.10>$ ruby setup.rb
										</div>
									</li>
									<li>
										6. Now use RubyGems to install Rails. Still in the shell, issue the following command.
									</li>
									<li>
										7. Now use RubyGems to install Rails. Still in the shell, issue the following command.
										<div class="code">>$ gem install rails --include-dependencies</div>
									</li>
									<li>
										Keeping Rails Up-to-Date:
										<div class="code">
											>$ gem update rails
										</div>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!----------------------------------------	INSTALL GIT	----------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="installGit" class="oneSection">
						<div class="panel panel_4">
							<div class="panel-heading panel-heading_4">
								<h3 class="panel-title"><strong>Install GIT</strong></h3>
							</div>
							<div class="panel-body">
								<ol>
									<li>1. Download it from <a href="http://msysgit.github.com/" target="_blank">http://msysgit.github.com</a><br/>You can check <a href="http://www.git-scm.com/book/en/Getting-Started-Installing-Git#Installing-on-Windows" target="_blank">http://www.git-scm.com/book/en/Getting-Started-Installing-Git#Installing-on-Windows</a> to see how to install it.</li>
									<li>First-time system setup:</li>
									<ol>
										<li>
											1. After installing Git, you should perform a set of one-time setup steps. These are system setups, meaning you only have to do them once per computer:<br/>
											<div class="code">
												$ git config --global user.name "myGitUsername"<br/>
												$ git config --global user.email myGitEmail
											</div>									
										</li>
										<li>2. Add git to system PATH<div class="code">;C:\Program Files\Git\bin</div></li>
									</ol>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--------------------------------------	CREATE A SUMPLE APPLICATION	------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="simpleApp" class="oneSection">
						<div class="panel panel_5">
							<div class="panel-heading panel-heading_5">
								<h3 class="panel-title"><strong>Create a simple page (without model)</strong></h3>
							</div>
							<div class="panel-body">
								<ol>
									<li>- Create the application</li>
									<ol>
										<li><div class="code">> rails new myAppilcation</div></li>
										<li>- Most important directories will be:</li>
										<ol>
											<li>"app/": Core application (app) code, including models, views, controllers, and helpers</li>
											<li>"app/assets": Applications assets such as cascading style sheets (CSS), JavaScript files, and images</li>
											<li>"db/": Database files</li>
										</ol>
									</ol>
									<li>- To create your home page, you need to create at minimum a controller and a view.</li>
									<ol>
										<li>
											<div class="code">> generate myController myView</div>
											Rails will create several files and a route for you. Most important of these are of course the controller, located at app/controllers/myController_controller.rb and the view, located at app/views/myController/myView.html.erb.<br/>
											to access your page, you need to go to <a href="http://localhost:3000/myController/myView">http://localhost:3000/myController/myView</a><br/>
											To make your page accessible via <a href="http://localhost:3000/">http://localhost:3000/</a> you need to add this route <div class="code">root 'myController#myView'</div>
										</li>
									</ol>
									<li>- Install bundle</li>
									<ol>
										<li>After creating a new Rails application, the next step is to use Bundler to install and include the gems needed by the app.</li>
										<li>
											<div class="code">> bundule install</div>
										</li>
									</ol>
									<li>- Run the application</li>
									<ol>
										<li><div class="code">> cd myAppilcation<br/>> rails server</div></li>
									</ol>		
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!----------------------------------	CREATE A COMPLETE APPLICATION	---------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="completeApp" class="oneSection">
						<div class="panel panel_6">
							<div class="panel-heading panel-heading_6">
								<h3 class="panel-title"><strong>Create a complete application</strong></h3>
							</div>
							<div class="panel-body">
								<ol>
									<li>
										- Ruby on Rails recommends to create three databases: A database for each development, testing and production environment. According to convention their names should be:
										<ol>
											<li>1. projectName_development</li>
											<li>2. projectName_production</li>
											<li>3. projectName_test</li>
										</ol>
									</li>
									<li>
										- Rails Active Record is the Object/Relational Mapping (ORM) layer supplied with Rails.
									</li>
									<li>
										- Translating Model to database
										<ol>
											<li>- Each entity (such as book) gets a table in the database named after it, but in the plural (books).</li>
											<li>- Each such entity-matching table has a field called id, which contains a unique integer for each record inserted into the table.</li>
											<li>- Given entity x and entity y, if entity y belongs to entity x, then table y has a field called x_id.</li>
											<li>- The bulk of the fields in any table store the values for that entity's simple properties (anything that's a number or a string).</li>
										</ol>
									</li>
									<li>
										<br/><strong>Step1: Generate Model</strong>
										<div class="code">>$ rails generate model Book</div>
									</li>
									<li>
										- Why use Rail migration?
										<ol>
											<li>- Teams of developers - if one person makes a schema change, the other developers just need to update, and run "rake migrate".</li>
											<li>- Production servers - run "rake migrate" when you roll out a new release to bring the database up to date as well.</li>
											<li>- Multiple machines - if you develop on both a desktop and a laptop, or in more than one location, migrations can help you keep them all synchronized.</li>
											<li>
												<div class="code">
													class Books < ActiveRecord::Migration<br/>
														<div class="level1"></div>def self.up<br/>
															<div class="level2"></div>create_table :books do |t|<br/>
																<div class="level3"></div>t.column :title, :string, :limit => 32, :null => false<br/>
																<div class="level3"></div>t.column :price, :float<br/>
																<div class="level3"></div>t.column :subject_id, :integer<br/>
																<div class="level3"></div>t.column :description, :text<br/>
																<div class="level3"></div>t.column :created_at, :timestamp<br/>
															<div class="level2"></div>end<br/>
														<div class="level1"></div>end<br/><br/>
												
														<div class="level1"></div>def self.down<br/>
															<div class="level2"></div>drop_table :books<br/>
														<div class="level1"></div>end<br/>
													end
												</div>
											</li>
											<li>- The method self.up is used when migrating to a new version.</li>
											<li>- The method self.down is used to roll back any changes if needed.</li>
											<li>
												<div class="code">
													class Subjects < ActiveRecord::Migration<br/>
														<div class="level1"></div>def self.up<br/>
															<div class="level2"></div>create_table :subjects do |t|<br/>
																<div class="level3"></div>t.column :name, :string<br/>
															<div class="level2"></div>end<br/>
															<div class="level2"></div>Subject.create :name => "Physics"<br/>
															<div class="level2"></div>Subject.create :name => "Mathematics"<br/>
															<div class="level2"></div>Subject.create :name => "Chemistry"<br/>
															<div class="level2"></div>Subject.create :name => "Psychology"<br/>
															<div class="level2"></div>Subject.create :name => "Geography"<br/>
														<div class="level1"></div>end<br/><br/>
												
														<div class="level1"></div>def self.down<br/>
															<div class="level2"></div>drop_table :subjects<br/>
														<div class="level1"></div>end<br/>
													end
												</div>
											</li>
											<li>
												<img class="caution" src="<?php echo $baseUrl; ?>/assets/images/caution.png">
												Before running migration generator, its recommended to clean existing migrations generated by model generators (remove './db/migrate/' files).
												<div class="code">
													>$ rails generate migration books<br/>
													>$ rails generate migration subjects
												</div>
											</li>
											<li>
												Run the migration:<br/>
												<strong>Rake</strong> is a Ruby build program similar to Unix make program that Rails takes advantage of to simplify the execution of complex tasks such as updating a database's structure etc.
												<div class="code">>$ rake db:migrate</div>
											</li>
											<li>
												Running migrations for production and test databases:
												<div class="code">
													>$ set RAILS_ENV=production<br/>
													>$ rake db:migrate
												</div>
												<img class="caution" src="<?php echo $baseUrl; ?>/assets/images/caution.png">
												On Unix, use "export RAILS_ENV=production" instead of set command.
											</li>
										</ol>				
									</li>
									<li>
										<br/><strong>Step2: Create ressources and routes</strong><br/>
										- A resource is the term used for a collection of similar objects, such as posts, people or animals. You can create, read, update and destroy items for a resource and these operations are referred to as CRUD operations.<br/>
										- Rails provides a resources method which can be used to declare a standard REST resource. Here's what config/routes.rb should look like after the post resource is declared.
										<div class="code">
											#---------- config/routes.rb ------------------<br/>
											Blog::Application.routes.draw do<br/>
												<div class="level1"></div>#Create the default view (www.yourDomain.com)<br/>
												<div class="level1"></div>#root "welcome#index"<br/><br/>
											
												<div class="level1"></div>get '/book/list'<br/>
												<div class="level1"></div>get '/book/new'<br/>
												<div class="level1"></div>get '/book/create'<br/><br/>
											
												<div class="level1"></div>#Create resources<br/>
												<div class="level1"></div>resources :books<br/>
											end
										</div>
									</li>
									<li>
										<br/><strong>Step3: Create controllers</strong><br/>
										<div class="code">
											>$ rails generate controller Book
										</div>
										This will create 'app/controllers/book_controller.rb'. Add this content:
										<div class="code">
											class BookController < ApplicationController<br/><br/>
										
												<div class="level1"></div>#Search the books table and store each row it finds in the @books instance object.<br/>
												<div class="level1"></div>def list<br/>
													<div class="level2"></div>@books = Book.find(:all)<br/>
												<div class="level1"></div>end<br/><br/>
												
												<div class="level1"></div>#Tell Rails to find only the book that has the id defined in params[:id].<br/>
												<div class="level1"></div>def show<br/>
													<div class="level2"></div>@book = Book.find(params[:id])<br/>
												<div class="level1"></div>end<br/><br/>
												
												<div class="level1"></div>#Called when you will display a page to the user to take user input.<br/>
												<div class="level1"></div>def new<br/>
													<div class="level2"></div>@book = Book.new<br/>
													<div class="level2"></div>@subjects = Subject.find(:all)<br/>
												<div class="level1"></div>end<br/><br/>
												
												<div class="level1"></div>#Once you take user input using HTML form, create a record into the database.<br/>
												<div class="level1"></div>def create<br/>
													<div class="level2"></div>@book = Book.new(params[:book])<br/>
													<div class="level2"></div>if @book.save<br/>
														<div class="level3"></div>redirect_to :action => 'list'<br/>
													<div class="level2"></div>else<br/>
														<div class="level3"></div>@subjects = Subject.find(:all)<br/>
														<div class="level3"></div>render :action => 'new'<br/>
													<div class="level2"></div>end<br/>
												<div class="level1"></div>end<br/><br/>
												
												<div class="level1"></div>#Retrieve a single object based on its id and display it on a page.<br/>
												<div class="level1"></div>def edit<br/>
													<div class="level2"></div>@book = Book.find(params[:id])<br/>
													<div class="level2"></div>@subjects = Subject.find(:all)<br/>
												<div class="level1"></div>end<br/><br/>
												
												<div class="level1"></div>#This method will be called after the edit method when user modifies a data and wants to update the changes.<br/>
												<div class="level1"></div>def update<br/>
													<div class="level2"></div>@book = Book.find(params[:id])<br/>
													<div class="level2"></div>if @book.update_attributes(params[:book])<br/>
														<div class="level3"></div>redirect_to :action => 'show', :id => @book<br/>
													<div class="level2"></div>else<br/>
														<div class="level3"></div>@subjects = Subject.find(:all)<br/>
														<div class="level3"></div>render :action => 'edit'<br/>
													<div class="level2"></div>end<br/>
												<div class="level1"></div>end<br/><br/>
												
												<div class="level1"></div>#Delete a record into the database.<br/>
												<div class="level1"></div>def delete<br/>
													<div class="level2"></div>Book.find(params[:id]).destroy<br/>
													<div class="level2"></div>redirect_to :action => 'list'<br/>
												<div class="level1"></div>end<br/><br/>
												
												<div class="level1"></div>#Display all the subjects<br/>
												<div class="level1"></div>def show_subjects<br/>
													<div class="level2"></div>@subject = Subject.find(params[:id])<br/>
												<div class="level1"></div>end<br/>
											end<br/>
										</div>
									</li>
									
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!------------------------------------------------	END CONTAINER	---------------------------------------------->

	</div>
</section>