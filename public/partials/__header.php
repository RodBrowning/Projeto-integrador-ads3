
<header>
	<!-- Menu Superior-->
	<div class="row barra-color">
		<div class="container">
			<div class="logo col-md-6 col-sm-6 float-left"><img id="logo" src="imagem/menu-superior/logo.png"></div>
			<div class="right-header col-md-6 col-sm-6 float-right">
				<div class="inner-right-header display-block">
					<span>Rodrigo Moura</span>
						<!-- Botões -->
						<div class="display-inline-block mt-1" >
							<!--Configuração-->
							<button value="0" class="button-top-menu right-header-menu-button config" onclick="laranjaMenuSuperiorDireito(value),ajaxRequestIndex('configuracao')"><svg class="right-header-menu-image pathSvg"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path d="M16 14c0-2.203-1.797-4-4-4s-4 1.797-4 4 1.797 4 4 4 4-1.797 4-4zM24 12.297v3.469c0 0.234-0.187 0.516-0.438 0.562l-2.891 0.438c-0.172 0.5-0.359 0.969-0.609 1.422 0.531 0.766 1.094 1.453 1.672 2.156 0.094 0.109 0.156 0.25 0.156 0.391s-0.047 0.25-0.141 0.359c-0.375 0.5-2.484 2.797-3.016 2.797-0.141 0-0.281-0.063-0.406-0.141l-2.156-1.687c-0.453 0.234-0.938 0.438-1.422 0.594-0.109 0.953-0.203 1.969-0.453 2.906-0.063 0.25-0.281 0.438-0.562 0.438h-3.469c-0.281 0-0.531-0.203-0.562-0.469l-0.438-2.875c-0.484-0.156-0.953-0.344-1.406-0.578l-2.203 1.672c-0.109 0.094-0.25 0.141-0.391 0.141s-0.281-0.063-0.391-0.172c-0.828-0.75-1.922-1.719-2.578-2.625-0.078-0.109-0.109-0.234-0.109-0.359 0-0.141 0.047-0.25 0.125-0.359 0.531-0.719 1.109-1.406 1.641-2.141-0.266-0.5-0.484-1.016-0.641-1.547l-2.859-0.422c-0.266-0.047-0.453-0.297-0.453-0.562v-3.469c0-0.234 0.187-0.516 0.422-0.562l2.906-0.438c0.156-0.5 0.359-0.969 0.609-1.437-0.531-0.75-1.094-1.453-1.672-2.156-0.094-0.109-0.156-0.234-0.156-0.375s0.063-0.25 0.141-0.359c0.375-0.516 2.484-2.797 3.016-2.797 0.141 0 0.281 0.063 0.406 0.156l2.156 1.672c0.453-0.234 0.938-0.438 1.422-0.594 0.109-0.953 0.203-1.969 0.453-2.906 0.063-0.25 0.281-0.438 0.562-0.438h3.469c0.281 0 0.531 0.203 0.562 0.469l0.438 2.875c0.484 0.156 0.953 0.344 1.406 0.578l2.219-1.672c0.094-0.094 0.234-0.141 0.375-0.141s0.281 0.063 0.391 0.156c0.828 0.766 1.922 1.734 2.578 2.656 0.078 0.094 0.109 0.219 0.109 0.344 0 0.141-0.047 0.25-0.125 0.359-0.531 0.719-1.109 1.406-1.641 2.141 0.266 0.5 0.484 1.016 0.641 1.531l2.859 0.438c0.266 0.047 0.453 0.297 0.453 0.562z"/></svg></button>

							<button value="1" class="button-top-menu right-header-menu-button config pathSvg" onclick="laranjaMenuSuperiorDireito(value), showPopUp('log-out')"><svg class="right-header-menu-image log-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"/></svg></button>
						</div>
					</p>
				</div>
			</div>
		</div>			
	</div>

	<!-- Menu de navegação -->
	<nav class="row nav-bar">
		<ul class="menu-superior">
			<li>
				<a id="link" class="menu-link active" onclick="barraLaranjadoMenu(id),ajaxRequestIndex('lancamento')" href="#">Nova Entrada</a> 
			</li>
			<li>
				<a id="link2" class="menu-link" href="#" onclick="barraLaranjadoMenu(id),ajaxRequestIndex('caixa')">Caixa</a> 
			</li>
			<li>
				<a id="link3" class="menu-link" href="#" onclick="barraLaranjadoMenu(id),ajaxRequestIndex('historico')">Histórico</a> 
			</li>
		</ul>
	</nav>
</header>

