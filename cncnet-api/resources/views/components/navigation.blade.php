<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-links" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"><img src="/images/logo.png" alt="CnCNet Logo"/></a>
        </div>
        <div class="collapse navbar-collapse" id="navigation-links">
            <ul class="nav navbar-nav">
                @if(isset($ladders))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ladders <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($ladders as $k => $ladder)
                        <li>
                            <a href="/ladder/{{ $ladder->abbreviation }}/" title="Tiberian Dawn" class="game-cover game-{{ $ladder->abbreviation }}">
                                {{ $ladder->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Downloads <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li role="separator" class="nav-title">C&amp;C Originals</li>
                        <li><a href="command-and-conquer">Command &amp; Conquer</a></li>
                        <li><a href="red-alert">Red Alert</a></li>
                        <li><a href="dune-2000">Dune 2000</a></li>
                        <li><a href="tiberian-sun">Tiberian Sun</a></li>
                        <li><a href="red-alert-2">Red Alert 2</a></li>
                        <li><a href="yuris-revenge">Yuri's Revenge</a></li>
                        <li><a href="renegade">Renegade</a></li>
                        <li role="separator" class="divider"></li>
                        <li role="separator" class="nav-title">C&amp;C Mods</li>
                        <li><a href="dawn-of-the-tiberium-age">Dawn of the Tiberium Age</a></li>
                        <li><a href="mental-omega">Mental Omega</a></li>
                        <li><a href="twisted-insurrection">Twisted Insurrection</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="download">View All Downloads</a></li>
                    </ul>
                </li>
                <li><a href="//forums.cncnet.org">Forums</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="status" class="dropdown-toggle status-cncnet status-text" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Players Online <span class="online">...</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu status-games">
                        <li class="game-status status-td"><a href="//cncnet.org/command-and-conquer">Command &amp; Conquer <span class="online">999</span></a></li>
                        <li class="game-status status-ra"><a href="//cncnet.org/red-alert">Red Alert <span class="online">999</span></a></li>
                        <li class="game-status status-d2"><a href="//cncnet.org/dune-2000">Dune 2000 <span class="online">999</span></a></li>
                        <li class="game-status status-ts"><a href="//cncnet.org/tiberian-sun">Tiberian Sun <span class="online">999</span></a></li>
                        <li class="game-status status-yr"><a href="//cncnet.org/yuris-revenge">Yuri's Revenge <span class="online">999</span></a></li>
                        <li class="game-status status-rg"><a href="//cncnet.org/renegade">Renegade <span class="online">...</span></a></li>
                        <li role="seperator" class="divider"></li>
                        <li class="game-status status-dta"><a href="//cncnet.org/dawn-of-the-tiberium-age">Dawn of the Tiberium Age <span class="online">999</span></a></li>
                        <li class="game-status status-mo"><a href="//cncnet.org/mental-omega">Mental Omega<span class="online">999</span></a></li>
                        <li class="game-status status-ti"><a href="//cncnet.org/twisted-insurrection">Twisted Insurrection<span class="online">999</span></a></li>
                        <li role="seperator" class="divider"></li>
                        <li class="cncnet-status"><a href="//cncnet.org/status">CnCNet Status <span class="pull-right">OK</span></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <?php $user = \Auth::user(); ?>
                  
                    <a href="status" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="user-profile">
                        <ul class="list-inline">
                            <li>
                                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                            </li>
                            <li>
                                @if(isset($user))
                                    {{ $user->name }} <span class="caret"></span>
                                @else
                                    Ladder Account <span class="caret"></span>
                                @endif
                            </li>
                        </div>
                    </a>

                    @if(isset($user))
                    <ul class="dropdown-menu">
                        <li><a href="/account">Manage Account</a></li>
                        <li><a href="/auth/logout">Sign out</a></li>
                    </ul>
                    @else
                    <ul class="dropdown-menu">
                        <li><a href="/auth/login">Sign in</a></li>
                        <li><a href="/auth/register">Sign up</a></li>
                    </ul>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>