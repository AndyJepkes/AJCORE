<div class="example-page f2-example-container">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand">F2 Example Container</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="../../docs/">Docs</a></li>
						<li><a href="../../docs/sdk/">SDK</a></li>
						<li class="divider-vertical"></li>
						<li><a href="http://www.openf2.org/" target="_blank">OpenF2.org</a></li>
						<li><a href="https://github.com/OpenF2/F2" target="_blank">View Project on GitHub</a></li>
					</ul>
					<form class="navbar-search pull-left">
						<input id="symbolLookup" class="search-query span2 ui-autocomplete-input" type="text" placeholder="Symbol Lookup" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
					</form>
					<button id="btnSelectApps" type="button" class="btn pull-right">Select Apps</button>
				</div>
			</div>
		</div>
	</div>

	<div id="mainContent" class="indexPage container"></div>

	<div id="languageSelect" class="modal hide">
		<div class="modal-header">
			<h3>Please select example apps</h3>
		</div>
		<div class="modal-body">
			<span class="help-block">
				There are a variety of Apps written in several programming languages.
				Please select the language(s) that can run on your computer to continue.
				You can select other Apps to load later by clicking the 'Select Apps'
				button in the top nav bar.
			</span>
			<div class="span2" data-language="js">
				<h4>JavaScript</h4>
			</div>
			<div class="span2" data-language="php">
				<h4>PHP</h4>
			</div>
			<div class="span2" data-language="csharp">
				<h4>C#</h4>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-primary disabled" type="button">Save</button>
		</div>
	</div>

	<div id="notice" class="modal hide">
		<div class="modal-header">
			<h3>F2 Example Container</h3>
		</div>
		<div class="modal-body">
			<p>
				Since the example container is a website, this page requires a web server <a href="http://docs.openf2.org/container-development.html#configuration">configured locally</a>. Once you have that setup, point your browser at <code>http://localhost/F2/examples/container/</code>.
			</p>
		</div>
		<div class="modal-footer">
			<button class="btn btn-primary" type="button">OK, close this window</button>
		</div>
	</div>

	
	<!--needed for $.autocomplete used in search box at top of this page-->
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
	<script src="modules/F2/js/f2.debug.js" type="text/javascript"></script>
	<script src="modules/F2/js/bootstrap.js?2.2.2" type="text/javascript"></script>

	<!-- Include container-specific logic, notably F2.init() -->
	<script type="text/javascript">
		$(function(){
			//can't run this container from a file:// protocol
			if (location.protocol === "file:"){
				var $m = $("#notice").modal();
				// bind save button
				$m.on('click', 'button.btn', function() {
					$m.modal('hide');
					window.close();
				});
			}
		});
	</script>
	<script src="modules/F2/js/storage.js"></script>
	<script src="modules/F2/js/container.js"></script>
	<script src="modules/F2/js/examples.js"></script>
</div>

