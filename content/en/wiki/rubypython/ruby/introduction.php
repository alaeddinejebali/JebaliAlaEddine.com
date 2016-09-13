<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Introduction
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">

			<!-----------------------------------------	ABOUT RUBY	------------------------------------------>
			<div class="row">
				<div class="col-md-12">
					<div id="aboutRuby" class="oneSection">
						<div class="panel panel_1">
							<div class="panel-heading panel-heading_1">
								<h3 class="panel-title"><strong>About Ruby</strong></h3>
							</div>
							<div class="panel-body">
								<ol>
									<li>- Ruby is similar to Perl, Smalltalk, Python, LISP.</li>
									<li>- Ruby is not just for web applications (we can see it as C++ too).</li>
									<li>- Ruby is a true OOP.</li>
									<li>- Ruby is an interpreted language like PHP and PERL.</li>
									<li>
										- Why Ruby ?<br/>
											<ul>
												<li>Easy to learn</li>
												<li>Open source (very liberal license)</li>
												<li>Rich libraries</li>
												<li>Very easy to extend</li>
												<li>Truly Object-Oriented</li>
												<li>Less Coding with fewer bugs</li>
												<li>Helpful community</li>
											</ul>
									</li>
									<li>
										- Why Not Ruby ?<br/>
										<ul>
											<li>Performance - Although it rivals Perl and Python.</li>
											<li>Threading model does not use native threads.</li>
										</ul>
									</li>								
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--------------------------------------	INSTALL RUBY	------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="installRuby" class="oneSection">
						<div class="panel panel_2">
							<div class="panel-heading panel-heading_2">
								<h3 class="panel-title"><strong>Install Ruby</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li><strong>On Windows</strong></li>
									<ol>
										<li>1. Download the last version of Ruby from <a href="http://rubyinstaller.org/downloads/" target="_tab">http://rubyinstaller.org/downloads/</a></li>
										<li>2. Install it (Check add Ruby executables to your PATH)</li>
										<li>3. Start->Programs->Ruby->Start Command Prompt with Ruby. Check the installation and the version<div class="code">ruby -v</div></li>
									</ol>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------	BASICS RUBY	--------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="basicsRuby" class="oneSection">
						<div class="panel panel_3">
							<div class="panel-heading panel-heading_3">
								<h3 class="panel-title"><strong>Basics Ruby</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>Try Ruby online: <a href="http://tryruby.org/levels/1/challenges/0" target="_blank">http://tryruby.org/levels/1/challenges/0</a></li>								
									<li>Official documentation: <a href="http://www.ruby-doc.org" target="_blank">http://www.ruby-doc.org</a>
									<li>After installing Ruby, you can try it by opening a shell window and type "irb" and you'll get interactive Ruby.</li>
									<li>If you have a "test.rb" file, use a terminal to cd to the same location as the .rb file and then execute using "ruby test.rb"
									<li>Comment</li>
									<ol>
										<li><strong>#</strong>This is a simple line comment</li>
										<li><strong>=begin</strong><br/><div class="level1"></div>My 1<sup>st</sup> line comment<br/><div class="level1"></div>My 2<sup>nd</sup> line comment<br/><strong>=end</strong></li>
									</ol>
									<li>Write to standard output: puts "string variable" or puts (variable)</li>
									<li>Ruby name of variables are case sensitive.</li>
									<li>"Hello"<strong>.class</strong> => String</li>
									<li><strong>?</strong> returns a boolean: "Hello".instance_of<strong>?</strong>String => Yes</li>
									<li><strong>!</strong> changes the left operand:<div class="code">a = "hello";<br/>a.upcase! #the value of 'a' is now changed<br/>puts(a) => HELLO</div></li>
									<li>Convert String to Integer: "1"<strong>.to_i</strong></li>
									<li>Convert Integer to String: 1<strong>.to_s</strong></li>
									<li>Concatenation: 'a' + 'b' => 'ab'&nbsp;&nbsp;OR&nbsp;&nbsp;'a'<<'b' => 'ab'</li>
									<li>
										(BEGIN)/(END) statement is used to declare code to be called (before)/(at the end of) the program is run.
										<div class="code">
											puts "This is main Ruby Program"<br/>
											BEGIN {<br/>
												<div class="level1"></div>puts "Initializing Ruby Program"<br/>
											}<br/>
											<br/>
											#Outputs<br/>
											#Initializing Ruby Program<br/>
											#This is main Ruby Program										
										</div>
									</li>
									<li>
										unless Statement: Executes code if conditional is false. If the conditional is true, code specified in the else clause is executed.
										<div class="code">
											x=1<br/>
											unless x>2<br/>
												<div class="level1"></div>puts "x < 2"<br/>
											else<br/>
												<div class="level1"></div>puts "x > 2"<br/>
											end<br/><br/>
											#Outputs: x < 2
										</div>									
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------------------------	BLOCKS	--------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="blocksRuby" class="oneSection">
						<div class="panel panel_4">
							<div class="panel-heading panel-heading_4">
								<h3 class="panel-title"><strong>Basics Ruby</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>A block is always invoked from a function with the same name as that of the block.</li>
									<li>
										You invoke a block by using the "yield" statement.
										<div class="code">
											def test<br/>
												<div class="level1"></div>puts "You are in the method"<br/>
											   <div class="level1"></div>yield 5<br/>
											   <div class="level1"></div>puts "ou are again back to the method"<br/>
											   <div class="level1"></div>yield 100<br/>
											end<br/>
											test {|i| puts "Block #{i}"}<br/><br/>
											#Outputs:<br/>
											#You are in the method<br/>
											#Block 5<br/>
											#You are again back to the method<br/>
											#Block 100
										</div>
									</li>
									<li>
										Every Ruby source file can declare blocks of code to be run as the file is being loaded (the BEGIN blocks) and after the program has finished executing (the END blocks).
										<div class="code">
											BEGIN{<br/>
												<div class="level1"></div>puts "BEGIN code block"<br/>
											}<br/>									
											END{<br/>
												<div class="level1"></div>puts "END code block"<br/>
											}<br/>
											puts "MAIN code block"<br/><br/>
											#Outputs<br/>
											#BEGIN code block<br/>
											#MAIN code block<br/>
											#END code block<br/>
										</div>	
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!------------------------------------------	MODULES	-------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="modulesRuby" class="oneSection">
						<div class="panel panel_5">
							<div class="panel-heading panel-heading_5">
								<h3 class="panel-title"><strong>Basics Ruby</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>Modules define a namespace, a sandbox in which your methods and constants can play without having to worry about being stepped on by other methods and constants.</li>
									<div class="code">
										#-------- trig.rb --------#<br/>
										module Trig<br/>
											<div class="level1"></div>PI = 3.141592654<br/>
											<div class="level1"></div>def Trig.sin(x)<br/>
												<div class="level2"></div>...<br/>
											<div class="level1"></div>end<br/>
											<div class="level1"></div>def Trig.cos(x)<br/>
												<div class="level2"></div>...<br/>
											<div class="level1"></div>end<br/>
										end<br/><br/>
										
										#-------- moral.rb --------#<br/>
										module Moral<br/>
											<div class="level1"></div>VERY_BAD = 0<br/>
											<div class="level1"></div>BAD = 1<br/>
											<div class="level1"></div>def Moral.sin(badness)<br/>
												<div class="level2"></div>...<br/>
											<div class="level1"></div>end<br/>
										end<br/><br/>
										
										#-------- test.rb --------#<br/>
										require 'trig.rb'<br/>
										require 'moral'<br/>
										y = Trig.sin(Trig::PI/4)<br/>
										wrongdoing = Moral.sin(Moral::VERY_BAD)
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-----------------------------------------	LOOPS	------------------------------------------>
			<div class="row">
				<div class="col-md-12">
					<div id="loopsRuby" class="oneSection">
						<div class="panel panel_6">
							<div class="panel-heading panel-heading_6">
								<h3 class="panel-title"><strong>Loops</strong></h3>
							</div>
							<div class="panel-body">
						<ul>
							<li>For:<div class="code"><strong>for</strong> v <strong>in</strong> m..n<br/><div class="level1"></div>puts "Inside the loop <strong>#{v}</strong><br/><strong>end</strong></div></li>
							<li>Enumeration:<div class="code">(m..n)<strong>.each do</strong> |v|<br/><div class="level1"></div>puts "Inside the loop <strong>#{v}</strong><br/><strong>end</strong></div></li>
							<li>Loop exactly m times: <div class="code">m<strong>.times do</strong> |v|<br/><div class="level1"></div>puts "Inside the loop <strong>#{v}</strong><br/><strong>end</strong></div></li>
							<li>Loop from m to n: <div class="code">m<strong>.upto(</strong>n<strong>) do</strong> |v|<br/><div class="level1"></div>puts "Inside the loop <strong>#{v}</strong><br/><strong>end</strong></div></li>
							<li>
								<div class="code">
									while conditional [do]<br/>
										<div class="level1"></div>code<br/>
									end								
								</div>
							</li>
							<li>
								<div class="code">
									begin<br/>
										<div class="level1"></div>code<br/>
									end while conditional
								</div>	
							</li>							
							<li>
								<div class="code">
									until conditional [do]<br/>
										<div class="level1"></div>code<br/>
									end
								</div>	
							</li>
							<li>
								<div class="code">
									begin<br/>
										<div class="level1"></div>code<br/>
									end until conditional								
								</div>
							</li>
							<li>
								<div class="code">
									for i in 0..5<br/>
										<div class="level1"></div>puts "Value of local variable is #{i}"<br/>
									end
								</div>
							</li>
						</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-------------------------------------------	MIXIN	------------------------------------------>
			<div class="row">
				<div class="col-md-12">
					<div id="loopsRuby" class="oneSection">
						<div class="panel panel_7">
							<div class="panel-heading panel-heading_7">
								<h3 class="panel-title"><strong>Multiple inheritance (mixin)</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>
										Ruby does not support multiple inheritance directly but Ruby Modules have another wonderful use.
										<div class="code">
											module A<br/>
												<div class="level1"></div>def a1<br/>
												<div class="level1"></div>end<br/>
												<div class="level1"></div>def a2<br/>
												<div class="level1"></div>end<br/>
											end<br/>
											module B<br/>
												<div class="level1"></div>def b1<br/>
												<div class="level1"></div>end<br/>
												<div class="level1"></div>def b2<br/>
												<div class="level1"></div>end<br/>
											end<br/>
											
											class Sample<br/>
											include A<br/>
											include B<br/>
												<div class="level1"></div>def s1<br/>
												<div class="level1"></div>end<br/>
											end<br/><br/>
											
											samp=Sample.new<br/>
											samp.a1<br/>
											samp.a2<br/>
											samp.b1<br/>
											samp.b2<br/>
											samp.s1<br/>
										</div>
									</li>
									<li>
										The class Sample includes both modules A and B. The class Sample can access all four methods, namely, a1, a2, b1, and b2. Therefore, you can see that the class Sample inherits from both the modules. Thus, you can say the class Sample shows multiple inheritance or a mixin.
									</li>							
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------	ARRAY	--------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="arraysRuby" class="oneSection">
						<div class="panel panel_8">
							<div class="panel-heading panel-heading_8">
								<h3 class="panel-title"><strong>Arrays</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>
										<div class="code">
											#---- SHOW ELEMENTS ----<br/>
											def displayArray(tab)<br/>
												<div class="level1"></div>tab.each do |oneElement|<br/>
													<div class="level2"></div>puts oneElement;<br/>
												<div class="level1"></div>end<br/>
											end<br/><br/>
											#-------- TAB1 ---------<br/>
											tab1 = Array.new<br/>
											puts tab1.length # same as tab.size<br/>
											tab1.push "A";<br/>
											tab1.push "B"<br/>
											tab1.push "C"<br/>
											puts "tab1 size is #{tab1.length} and their elements are:"<br/>
											displayArray(tab1);<br/><br/>
											#-------- TAB2 ---------<br/>
											tab2 = ["A", "B", "C", "D", "E"]<br/>
											puts "tab2 size is #{tab2.length} and their elements are:";<br/>
											displayArray(tab2);
										</div>							
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------------------------	HASHES	--------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="hashesRuby" class="oneSection">
						<div class="panel panel_9">
							<div class="panel-heading panel-heading_9">
								<h3 class="panel-title"><strong>Hashes (Associated tables)</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>A Hash is a collection of key-value pairs like this: "employee" => "salary". It is similar to an Array, except that indexing is done via arbitrary keys of any object type, not an integer index.</li>
									<li></li>
									<li>
										When you access any key in a hash that has a default value, if the key or value doesn't exist, accessing the hash will return the default value:
										<div class="code">
											months = Hash.new( "January" )<br/>
											puts "#{months[0]}"<br/>
											puts "#{months[72]}"				
										</div>
									</li>
									<li>
										<div class="code">
											months = Hash["notTooGod"=>"January", "good"=>"February", "excellent"=>"March"]<br/>
											puts "#{months['excellent']}"
										</div>
										is similar to:
										<div class="code">
											months = Hash[:notTooGod=>"January", :good=>"February", :excellent=>"March"]<br/>
											puts "#{months[:excellent]}"
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------------------------	RANGES	-------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="rangesRuby" class="oneSection">
						<div class="panel panel_10">
							<div class="panel-heading panel-heading_10">
								<h3 class="panel-title"><strong>Ranges</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>
										The ".." form creates an inclusive range, while the "..." form creates a range that excludes the specified high value (the end point).
										<div class="code">
											(1..5)        #==> 1, 2, 3, 4, 5<br/>
											(1...5)       #==> 1, 2, 3, 4<br/>
											('a'..'d')    #==> 'a', 'b', 'c', 'd'
										</div>							
									</li>
									<li>
										Ranges as Conditions:
										<div class="code">
											score = 70<br/>
											result = case score<br/>
											   <div class="level1"></div>when 0..40: "Fail"<br/>
											   <div class="level1"></div>when 41..60: "Pass"<br/>
											   <div class="level1"></div>when 61..70: "Pass with Merit"<br/>
											   <div class="level1"></div>when 71..100: "Pass with Distinction"<br/>
											   <div class="level1"></div>else "Invalid Score"<br/>
											end
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------	EXCEPTIONS	-------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div id="exceptionsRuby" class="oneSection">
						<div class="panel panel_11">
							<div class="panel-heading panel-heading_11">
								<h3 class="panel-title"><strong>Exceptions</strong></h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>
										<div class="code">
											begin<br/>
												<div class="level1"></div>puts 'I am before the raise.'<br/>
												<div class="level1"></div>raise 'An error has occurred.'<br/>
												<div class="level1"></div>puts 'I am after the raise.'<br/>
											rescue<br/>
												<div class="level1"></div>puts 'I am rescued.'<br/>
											end<br/>
											puts 'I am after the begin block.'<br/><br/>
											
											#Outputs:
											# I am before the raise.  
											# I am rescued.  
											# I am after the begin block.
										</div>
									</li>
									<li>
										ensure Statement: Sometimes, you need to guarantee that some processing is done at the end of a block of code, regardless of whether an exception was raised. For example, you may have a file open on entry to the block and you need to make sure it gets closed as the block exits. The ensure clause does just this.
										<div class="code">
											begin<br/>
											   <div class="level1"></div>#.. process<br/>
											   <div class="level1"></div>#..raise exception<br/>
											rescue<br/>
											   <div class="level1"></div>#.. handle error<br/>
											ensure<br/>
											   <div class="level1"></div>#.. finally ensure execution<br/>
											   <div class="level1"></div>#.. This will always execute.<br/>
											end
										</div>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
						<!------------------------------------------	END	--------------------------------------->
			
	</div>
</section>