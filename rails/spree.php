<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Spree
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">

			
			<!--------------------------------------------------	MODULES	-------------------------------------------------->
			<div class="row">
				<div class=" col-md-offset-2 col-md-8 col-md-offset-2">
					<div class="tac">
						<h2>SPREE E-COMMERCE</h2><hr/>
					</div>
					<ol class="rounded-list ttu">
						<li><a href="#install">Install Spree</a></li>
						<li><a href="#extensions">Spree Extensions</a></li>
						<li><a href="#installGemLocally">Install GEMs locally</a></li>
						<li><a href="#deface">Deface overrides</a></li>
					</ol>
				</div>
			</div>
			
			<!--------------------------------------	INSTALL SPREE	----------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="install" class="oneSection">
						<div class="panel panel_1">
							<div class="panel-heading panel-heading_1">
								<h3 class="panel-title"><strong>Install Spree</strong></h3>
							</div>
							<div class="panel-body">
								<ol>
									<li>1. <div class="code">$ rails new myApplication</div></li>
									<li>2. The content of the Gem file should be
										<div class="code">
											source 'https://rubygems.org'<br/><br/>
											
											# Bundle edge Rails instead: gem 'rails', github: 'rails/rails'<br/>
											gem 'rails', '4.0.0'<br/><br/>
											
											# Use sqlite3 as the database for Active Record<br/>
											gem 'sqlite3'<br/><br/>
											
											# Use SCSS for stylesheets<br/>
											gem 'sass-rails', '~> 4.0.0'<br/><br/>
											
											# Use Uglifier as compressor for JavaScript assets<br/>
											gem 'uglifier', '>= 1.3.0'<br/><br/>
											
											# Use CoffeeScript for .js.coffee assets and views<br/>
											gem 'coffee-rails', '~> 4.0.0'<br/><br/>
											
											# Use jquery as the JavaScript library<br/>
											gem 'jquery-rails'<br/><br/>
											
											# Turbolinks makes following links in your web application faster. Read more: https://github.com/rails/turbolinks<br/>
											gem 'turbolinks'<br/><br/>
											
											# Build JSON APIs with ease. Read more: https://github.com/rails/jbuilder<br/>
											gem 'jbuilder', '~> 1.2'<br/><br/>
											
											group :doc do<br/>
											# bundle exec rake doc:rails generates the API under doc/api.<br/>
											gem 'sdoc', require: false<br/>
											end
										</div>
									</li>	
									<li>
										3. Make sure you have already <a href="#rorInstallGit">installed GIT</a>. Then add the following lines to the Gem file
										<div class="code">
											gem 'spree', github: 'spree/spree', branch: '2-1-stable'<br/>
											gem 'spree_auth_devise', github: 'spree/spree_auth_devise', branch: '2-1-stable'
										</div>								
									</li>
									<li>4. <div class="code">$ bundle</div></li>
									<li>5. <div class="code">$ rails g spree:install --sample=false --seed=false</div></li>
									<li>6. <div class="code">$ rake db:seed</div></li>
									<li>7. Install sample data<div class="code">$ rake spree_sample:load</div></li>
									<li>8. <div class="code">$ rails s</div></li>
									<li>9. Check the store at <a href="http://localhost:3000" target="_blank">http://localhost:3000</a></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!----------------------------------	INSTALL RUBY ON RAILS ON WINDOWS	---------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="extensions" class="oneSection">
						<div class="panel panel_2">
							<div class="panel-heading panel-heading_2">
								<h3 class="panel-title"><strong>Spree Extensions</strong></h3>
							</div>
							<div class="panel-body">
								<ol>
									<li>Extensions are the primary mechanism for customizing a Spree site.</li>
									<li>Finding Usefol Spree Extensions in the Extension Registry in <a href="http://spreecommerce.com/extensions" target="_blank">http://spreecommerce.com/extensions</a></li>
									<li><br/><strong>Installing an Extension</strong></li>
										<ol>
											<li>1. At the bottom of your gem file add this line<div class="code">gem 'spree_fancy', :git => 'git://github.com/spree/yourExtension.git', :branch => '2-1-stable'</div></li>
											<li>2. Install the gem via Bundle<div class="code">$ bundle install</div></li>
											<li>3. Copy over the required migrations and assets from the extension.<div class="code">$ bundle exec rails g yourExtension:install</div></li>
										</ol>
									<li><br/><strong>Creating an Extension</strong><br/>We'd like to be able to set a sale price on a product and show products that are on sale on a separate products page.</li>
										<ol>
											<li>
												1. Generating the extension<div class="code">$ spree extension simple_sales</div>
												This creates a spree_simple_sales directory with several additional files and directories.
											</li>
											<li>2. <div class="code">$ cd spree_simple_sales</div></li>
											<li>
												3. Add a Sale Price to Variants: We need to do is create a migration that adds a sale_price column to variants.
												<div class="code">$ rails g migration add_sale_price_to_spree_variants sale_price:decimal</div>
												Edit the generated migration to ensure the correct precision and scale.<br/>
												Go to "spree_simple_sales/db/migrate/xxx_add_sale_price_to_spree_variants.rb"
											</li>
											<li>
												4. Add "simple_sales" extension to the spree application.<br/>
												At the bottom of the gem file, add
												<div class="code">gem 'spree_simple_sales', :path => 'thePathWhereYouPutYourExtension/spree_simple_sales'</div>
												If the generated extension is in the same location as your spree project, you shoold do: gem 'spree_simple_sales', :path => '../spree_simple_sales'
											</li>
											<li>5. Run bundle <div class="code">$ bundle install</div></li>
											<li>
												6. Run the spree_simple_sales install generator (To copy over the migration we just created)
												<div class="code">$ rails g spree_simple_sales:install</div>
											</li>
											<li>
												7. Add a Controller Action to HomeController<br/>
												Extend "Spree::HomeController" and add an action that selects "on sale" products.
												<div class="code">
													$ cd spree_simple_sales/app/controllers/spree/<br/>
													$ mkdir spree
												</div>
												Create a new file "spree_simple_sales/app/controllers/spree/home_controller_decorator.rb" and add the following content to it
												<div class="code">
													module Spree<br/>
														<div class="level1"></div>HomeController.class_eval do<br/>
															<div class="level2"></div>def sale<br/>
																<div class="level3"></div>@products = Product.joins(:variants_including_master).where('spree_variants.sale_price is not noll').uniq<br/>
															<div class="level2"></div>end<br/>
														<div class="level1"></div>end<br/>
													end
												</div>
												This will select just the products that have a variant with a sale_price set.
											</li>
											<li>
												8. Add a route to this action in our "spree_simple_sales/config/routes.rb" file.
												<div class="code">
													Spree::Core::Engine.routes.draw do<br/>
														<div class="level1"></div>get "/sale" => "home#sale"<br/>
													end
												</div>
											</li>
											<ol>
												<li>
													Let's update the sample data so we have at least one product that is on sale in our application.
													<div class="code">
														$ rails console<br/>
														> product = Spree::Product.first<br/>
														> variant = product.master<br/>
														> variant.sale_price = 8.00<br/>
														> variant.save
													</div>
												</li>
											</ol>
											<li>
												9. Create a view<br/>
												We suppose that at least one product in our database that is on sale. Let's create a view to display these products.<br/>
												Create "spree_simple_sales\app\views\spree\home\sale.html.rb" and add the following content to it
												<div class="code">
													<pre>
		&lt;div data-hook="homepage_products"&gt;
			<%= render 'spree/shared/products', :products => @products %>
		&lt;/div&gt;
													</pre>
												</div>
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
					<div id="installGemLocally" class="oneSection">
						<div class="panel panel_3">
							<div class="panel-heading panel-heading_3">
								<h3 class="panel-title"><strong>Install GEMs locally</strong></h3>
							</div>
							<div class="panel-body">
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
			
			<!----------------------------------------	DEFACE OVERRIDES	----------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="deface" class="oneSection">
						<div class="panel panel_4">
							<div class="panel-heading panel-heading_4">
								<h3 class="panel-title"><strong>Deface overrides</strong></h3>
							</div>
							<div class="panel-body">
								<ol>
									<li>What is Deface?</li>
									<ol>
										<li>Deface is a standalone Rails library that enables you to customize Erb templates without needing to directly edit the underlying view file.</li>
										<li>Deface allows you to use standard CSS3 style selectors to target any element (including Ruby blocks), and perform an action against all the matching elements.</li>
										<li>
											If you wanted to insert some code just before the +#registration+ div on the login page, you would define an override as follows:
											<div class="code">
												Deface::Override.new(<br/>
													<div class="level1"></div>:virtual_path  => "spree/checkout/registration",
													<div class="level1"></div>:insert_before => "div#registration",
													<div class="level1"></div>:text          => "<p>Registration is the future!</p>",
													<div class="level1"></div>:name          => "registration_future"<br/>
												)
											</div>
											More Deface actions are available here <a target="_blank" href="http://guides.spreecommerce.com/developer/view.html#using-deface">http://guides.spreecommerce.com/developer/view.html#using-deface</a>
										</li>
									</ol>
									<li>
										<strong>Improve the previous extension "simple_sales"</strong><br/>
										- Our goal is to add a field to the product edit admin page that allows the sale_price to be added or updated via Admin area.<br/>
										- Using Deface will allow us to keep our view customizations in one spot, app/overrides, and make sure we are always using the latest implementation of the view provided by Spree.<br/>
										- In the Rails project, create "app/overrides/add_sale_price_to_product_edit.rb" and add the following content:
										<div class="code">
											Deface::Override.new(:virtual_path => 'spree/admin/products/_form',<br/>
											<div class="level1"></div>:name => 'add_sale_price_to_product_edit',<br/>
											<div class="level1"></div>:insert_after => "erb[loud]:contains('text_field :price')",<br/>
											<div class="level1"></div>:text => "<br/>
												<div class="level2"></div><%= f.field_container :sale_price do %><br/>
												<div class="level2"></div><%= f.label :sale_price, raw(Spree.t(:sale_price) + content_tag(:span, ' *')) %><br/>
												<div class="level2"></div><%= f.text_field :sale_price, :value =><br/>
													<div class="level3"></div>number_to_currency(@product.sale_price, :unit => '') %><br/>
												<div class="level2"></div><%= f.error_message_on :sale_price %><br/>
											<div class="level1"></div><% end %><br/>
											")							
										</div>
										- Delegate sale_price to the master variant in order to get the updated product edit form working.
										<ol>
											<li>
												Create "app/models/spree/product_decorator.rb" and add the following code
												<div class="code">
													module Spree<br/>
														<div class="level1"></div>Product.class_eval do<br/>
															<div class="level2"></div>delegate_belongs_to :master, :sale_price<br/>
														<div class="level1"></div>end<br/>
													end									
												</div>
											</li>
										</ol>
										- Go to <a target="_blank" href="http://localhost:3000/admin/products">http://localhost:3000/admin/products</a> and edit a product. You'll see a "Sale Price *" field under "Master Price *".
									</li>	
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--------------------------------------	END	------------------------------------->
	</div>
</section>