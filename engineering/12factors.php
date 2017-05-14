<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#12factors">12 Factors</a>
		</h4>
	</div>
	<div id="12factors" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>1. Base de code</h2>
					<ul>
						<li>
							Une app = un repo
							Example: un repo pour le back, un repo pour le front
						</li>
					</ul>
				</li>
				<li>
					<h2>2. Dépendances</h2>
					<ul>
						<li>
							Définir dans un fichier nos bibliothèques.
							Tapez une commande pour les installer
						</li>
					</ul>
				</li>
				<li>
					<h2>3. Configuration</h2>
					<ul>
						<li>
							Séparer strictement la fonf du code
						</li>
						<li>
							utiser des variables d'environnement. Cela permet de:
							<ul>
								<li>
									Eviter les erreur humaines (faute de frappes)
								</li>
								<li>
									Déployer à chaud: Pouvoir modifier des variables de conf sans re-pacager et déployer de nouveau.
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>4. Services externes</h2>
					<ul>
						<li>
							service externe = service brocker
						</li>
						<li>
							Les utiliser juste comme services (pas besoin de les installer, les maintenir...etc)
							expl: mySQl, service SMTP, RabbitMQ
						</li>
						<li>
							pas d'appel direct à la BD: Si on change du BD, on change du service brocker et on change pas d'application.
						</li>
					</ul>
				</li>
				<li>
					<h2>5. Build, release, run</h2>
					<ul>
						<li>
							Build: compiler code + dépendances (composer)
						</li>
						<li>
							Release: fusionner code + conf env
						</li>
						<li>
							Run: lancer application
						</li>
					</ul>
				</li>
				<li>
					<h2>6. Processus</h2>
					<ul>
						<li>
							Executer l'application comme un ou plusieurs processus sans état.
						</li>
						<li>
							Toutes les données qui doivenet être persistent doivent être enregistrés sur une BD externe (expl: stocker les sessions sur REDIS).
						</li>
						<li>
							L'avantage est que si un service web tombe en panne les données de sessions ne sont pas perdu.
						</li>
					</ul>
				</li>
				<li>
					<h2>7. Association de ports</h2>
					<ul>
						<li>
							Pour exporter un service, il suffit de déclarer le port utilisé.
						</li>
					</ul>
				</li>
				<li>
					<h2>8. Concurence</h2>
					<ul>
						<li>
							La montée en charge se fait en augumentant le nombre d'instances des composants applicatifs.
						</li>
						<li>
							Scalabilité horizontale: augumenter les instances;
						</li>
						<li>
							Scalabilité verticale: augumenter la mémoire, l'espace disque pour une instance.
						</li>
					</ul>
				</li>
				<li>
					<h2>9. Jetable</h2>
					<ul>
						<li>
							Des applications dans le cloud peuvenet être démarrer et stopper à tout moment.
						</li>
					</ul>
				</li>
				<li>
					<h2>10. Parité Dev/prod</h2>
					<ul>
						<li>
							Objectif 12 factors: faciliter le déployement continue => besoin d'avoir un env DEV le plus proche possible de l'env PROD.
						</li>
					</ul>
				</li>
				<li>
					<h2>11. Log</h2>
					<ul>
						<li>
							Traiter les logs comme des queux (flux) d'évennement.
						</li>
					</ul>
				</li>
				<li>
					<h2>12. Processus d'admin</h2>
					<ul>
						<li>
							expl: changement de la structure d'une table.
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
