<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#presentation">Presentation</a>
		</h4>
	</div>
	<div id="presentation" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Introduction</h2>
					<ul>
						<li>aaaaa</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>



<ul>
	<li>
		Data binding
		<ul>
			<li>
				There are 4 types of data binding:
				<ol>
					<li>
						Interpolation: from component to DOM (expl when you are displaying data in a DIV you can't change/edit it)
						<ul>
							<li>
								Angular1
								<h3>{{<context>.user.name}}</h3>
							<li>
							<li>
								Angular2 (no context)
								<h3>{{user.name}}</h3>
							</li>
						</ul>
					</li>
					<li>
						One way binding: from component to DOM
						<ul>
							<li>
								Angular1
								<h3 ng-bind="<context>.user.name"></h3>
							<li>
							<li>
								Angular2
								<h3 [<htmlElementProperty>]="user.name"></h3>
								<h3 [innerText]="user.name"></h3>
								<input [value]="user.name" />
								<div [style.color]="red">{{user.name}}</div>
							</li>
						</ul>
					</li>
					<li>
						Event binding: from DOM to component
						<ul>
							<li>
								Angular1
								<button ng-click="<context>.log('clicked')" ng-blur="<context>.log('blur')"></button>
							</li>
							<li>
								Angular2
								<button (click)="log('clicked')" (blur)="log('blur')"></button>
							</li>
						</ul>
					</li>
					<li>
						Two way binding: from component to DOM and from DOM to component
						<ul>
							</li>
								Angular1
								<input ng-model="<context>.user.name" />
							<li>
							<li>
								Angular2
								<input [(model)]="user.name" />
							</li>
						</ul>
					</li>
				</ol>
			</li>
			<li>
				See http://angular2-first-look.azurewebsites.net/live-examples/compare/angular/2-way/eplnkr.html?bust=1493809290772
			</li>
		</ul>
	<li>
	<li>
		Less built-in directives
		<ul>
			<li>
				Angular1
				<ul>
					<li>
						ng-click="f()", ng-focus="f()", ng-blur="f()", ng-keyup="f()"
					</li>
				</ul>
			</li>
			<li>
				Angular2
				<ul>
					<li>
						(click)="", (focus)="f()", (blur)="f()", (keyup)="f()"
					</li>
				</ul>
			</li>
			<li>
				Examples: see videos #8, #9, #10
			</li>
		</ul>
	</li>
	<li>
		Services
		<ul>
			<li>
				Angular1: you can use:
				<ul>
					<li>
						Factories
					</li>
					<li>
						Services
					</li>
					<li>
						Providers
					</li>
					<li>
						Constants
					</li>
					<li>
						Values
					</li>
				</ul>
			</li>
			<li>
				Angular2: you need
				<ul>
					<li>
						Just a Class
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		Dependency Injection
		<ul>
			<li>
				Angular1
				angular
					.module('app')
					.controller('VehiculesController', VehiculesController);
				VehiculesController.$inject = ['VehiculeService'];
				function VehiculesController(VehiculeService){
					//...
				}
			</li>
			<li>
				Angular2
				@Component({moduleId: module.id, selector: 'my-vehicules', templateUrl: 'vehicules.component.html'})
				export class VehiculesComponent{
					vehicules = this.vehiculeService.getVehicules();
					constructor(private vehiculeService: VehiculeService){
						//...
					}
				}
			</li>
			See example #12
		</ul> 
	</li>
</ul>
For a complete example, see #0
