<!DOCTYPE HTML>
<html>
    <head>
    	<meta charset="UTF-8">
    	<!--
             ____                            ____                                          
            /\  _`\   __                    /\  _`\                  __                    
            \ \ \L\ \/\_\    ___     __     \ \ \/\ \     __    ____/\_\     __     ___    
             \ \ ,__/\/\ \  /'___\ /'__`\    \ \ \ \ \  /'__`\ /',__\/\ \  /'_ `\ /' _ `\  
              \ \ \/  \ \ \/\ \__//\ \L\.\_   \ \ \_\ \/\  __//\__, `\ \ \/\ \L\ \/\ \/\ \ 
               \ \_\   \ \_\ \____\ \__/.\_\   \ \____/\ \____\/\____/\ \_\ \____ \ \_\ \_\
                \/_/    \/_/\/____/\/__/\/_/    \/___/  \/____/\/___/  \/_/\/___L\ \/_/\/_/
                                                                             /\____/       
                                                                             \_/__/
                                                                                                                                                         
            Graphic Design & Marketing | www.picadesign.com
        -->
        <title>Website Backup</title>
        {{ Asset::styles() }}
        <!--[if lt IE 9]>{{ HTML::script('http://html5shim.googlecode.com/svn/trunk/html5.js') }}<![endif]-->
    </head>
    
    <body>
    	<section class="wrapper">
    		<header>
    			{{ HTML::link_to_action('users@register', 'Register Now!') }}
    		</header>
    		@yield('content')
    	</section>
    	{{ Asset::scripts() }}
    </body>
</html>