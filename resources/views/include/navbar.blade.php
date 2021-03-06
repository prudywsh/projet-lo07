<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ICD</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    @if(Auth::user()->is_admin)
                        <li><a href="#/admin"><b>administration</b></a></li>
                    @endif
                    <li class="dropdown">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" >Bonjour, {{ Auth::user()->login }}</a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="text-center bottom">
                                        <a href="logout">Déconnexion</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Se connecter</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="login">Login</label>
                                                <input name="login" type="text" class="form-control" id="login" placeholder="Login" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="password">Mot de passe</label>
                                                <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bottom text-center">
                                        Chercheur sans compte ? <a href="#/inscription"><b>Inscription</b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

    </div>
</nav>


