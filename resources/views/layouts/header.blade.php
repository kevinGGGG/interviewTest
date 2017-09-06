	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
   	 		<div class="navbar-header">
      			<a class="navbar-brand" href="#">Moremote</a>
    		</div>
	    		</ul>
	    		<ul class="nav navbar-nav navbar-right">
	      			<li>{!! isset($user) ? '<a>'.$user->name.'</a>' : '<a href="/login">登入</a>' !!}</li>
    				<li>{!! isset($user)?'<a href="/logout">登出</a>': '' !!}</li>
	    		</ul>
  		</div>
	</nav>
