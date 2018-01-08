<div class="site-menubar">
	<div class="site-menubar-header">
	  <div class="cover overlay">
	    <img class="cover-image" src="{{ URL::asset('assets/examples/images/dashboard-header.jpg') }}" alt="">
	    <div class="overlay-panel vertical-align overlay-background">
	      <div class="vertical-align-middle">
	        <a class="avatar avatar-lg" href="javascript:void(0)">
	          @if(isset(Auth::user()->image) and !empty(Auth::user()->image))
                <img src="{{ URL::asset(Auth::user()->image) }}" alt="">
              @else
                <img src="{{ URL::asset('img/users/profile.jpg') }}" alt="">
              @endif
	        </a>
	        <div class="site-menubar-info">
	          <h5 class="site-menubar-user">{{ Auth::user()->name }}</h5>
	          <p class="site-menubar-email">{{ Auth::user()->email }}</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="site-menubar-body">
	  <div>
	    <div>
	      <ul class="site-menu" data-plugin="menu">

			<li class="site-menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
				<a class="animsition-link" title="Dashboard" href="{{ route('dashboard') }}">
					<i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
					<span class="site-menu-title">Home</span>
				</a>
			</li>

			@can('add_clinica')
				<li class="site-menu-item {{ Request::is('pessoas-fisicas') ? 'active' : '' }}">
					<a class="animsition-link" href="{{ route('pessoasfisicas') }}">
						<i class="site-menu-icon fa fa-user-md" aria-hidden="true"></i>
						<span class="site-menu-title">Usuários</span>
					</a>
				</li>
			@endcan

			@can('add_clinica')
				<li class="site-menu-item {{ Request::is('pessoas-fisicas') ? 'active' : '' }}">
					<a class="animsition-link" href="{{ route('pessoasfisicas') }}">
						<i class="site-menu-icon fa fa-user-md" aria-hidden="true"></i>
						<span class="site-menu-title">Escolas</span>
					</a>
				</li>
			@endcan

			@can('add_clinica')
				<li class="site-menu-item {{ Request::is('pessoas-fisicas') ? 'active' : '' }}">
					<a class="animsition-link" href="{{ route('pessoasfisicas') }}">
						<i class="site-menu-icon fa fa-user-md" aria-hidden="true"></i>
						<span class="site-menu-title">Anos</span>
					</a>
				</li>
			@endcan

			@can('add_clinica')
				<li class="site-menu-item {{ Request::is('pessoas-fisicas') ? 'active' : '' }}">
					<a class="animsition-link" href="{{ route('pessoasfisicas') }}">
						<i class="site-menu-icon fa fa-user-md" aria-hidden="true"></i>
						<span class="site-menu-title">Classes</span>
					</a>
				</li>
			@endcan

			@can('add_clinica')
				<li class="site-menu-item {{ Request::is('pessoas-fisicas') ? 'active' : '' }}">
					<a class="animsition-link" href="{{ route('pessoasfisicas') }}">
						<i class="site-menu-icon fa fa-user-md" aria-hidden="true"></i>
						<span class="site-menu-title">Vídeos</span>
					</a>
				</li>
			@endcan

			@can('add_clinica')
				<li class="site-menu-item {{ Request::is('pessoas-fisicas') ? 'active' : '' }}">
					<a class="animsition-link" href="{{ route('pessoasfisicas') }}">
						<i class="site-menu-icon fa fa-user-md" aria-hidden="true"></i>
						<span class="site-menu-title">Arquivos</span>
					</a>
				</li>
			@endcan

			@can('add_clinica')
				<li class="site-menu-item {{ Request::is('pessoas-fisicas') ? 'active' : '' }}">
					<a class="animsition-link" href="{{ route('pessoasfisicas') }}">
						<i class="site-menu-icon fa fa-user-md" aria-hidden="true"></i>
						<span class="site-menu-title">Avisos</span>
					</a>
				</li>
			@endcan

			@can('add_clinica')
				<li class="site-menu-item {{ Request::is('pessoas-fisicas') ? 'active' : '' }}">
					<a class="animsition-link" href="{{ route('pessoasfisicas') }}">
						<i class="site-menu-icon fa fa-user-md" aria-hidden="true"></i>
						<span class="site-menu-title">Pessoas Físicas</span>
					</a>
				</li>
			@endcan

			<li class="site-menu-item has-sub">
				<a href="javascript:void(0)">
					<i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
					<span class="site-menu-title">Relatórios</span>
					<span class="site-menu-arrow"></span>
				</a>
				<ul class="site-menu-sub">
					
					@can('add_clinica')
						<li class="site-menu-item {{ Request::is('faturas') ? 'active' : '' }}">
							<a class="animsition-link" href="{{ route('faturas') }}">
								<i class="site-menu-icon fa fa-money" aria-hidden="true"></i>
								<span class="site-menu-title">Faturas</span>
							</a>
						</li>
					@endcan

					@can('add_clinica')
						<li class="site-menu-item {{ Request::is('transferencias') ? 'active' : '' }}">
							<a class="animsition-link" href="{{ route('transferencias') }}">
								<i class="site-menu-icon fa fa-random" aria-hidden="true"></i>
								<span class="site-menu-title">Transferências</span>
							</a>
						</li>
					@endcan

					@can('add_clinica')
						<li class="site-menu-item {{ Request::is('saques') ? 'active' : '' }}">
							<a class="animsition-link" href="{{ route('saques') }}">
								<i class="site-menu-icon fa fa-exchange" aria-hidden="true"></i>
								<span class="site-menu-title">Saques</span>
							</a>
						</li>
					@endcan
				</ul>
			</li>
	        
	        

	       
	
	      </ul>
	    </div>
	  </div>
	</div>
</div>