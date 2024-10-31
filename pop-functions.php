<?php

function init_pop_assets(){
	wp_enqueue_script( 'my-pop-press', plugins_url("assets/pop-main.js",__FILE__), false , false, true);	
	wp_enqueue_script( 'my-pop-display', "//static.kds.media/tabu/display.js", false , false, true);
}  

function init_admin_pop_assets(){
	wp_enqueue_script( 'my-pop-press', plugins_url("assets/pop-tabs.js",__FILE__), false , false, true);	
	wp_enqueue_style( "pop-style", plugins_url("assets/pop-style.css",__FILE__), $deps, $ver, $media );
	
}

function pop_update_notice() {
	if( isset($_REQUEST['name'])  ){
    ?>
    <div class="updated notice">
        <p> Form submit successfully </p>
    </div>
    <?php
	}
}
	
function pop_wpse27856_set_content_type(){
    		return "text/html";
}

function pop_wpdocs_register_page(){
    add_menu_page( 
        __( 'Pop Press', 'textdomain' ),
        'Pop Press',
        'manage_options',
        'pop-signUp',
        'pop_menu_page',
        'data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4NC4xODQgNDg0LjE4NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDg0LjE4NCA0ODQuMTg0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGc+Cgk8cGF0aCBkPSJNMzA5LjQzLDIxOS45NDRjLTE5LTEwLjUtMzkuMi0xOC41LTU5LjItMjYuOGMtMTEuNi00LjgtMjIuNy0xMC40LTMyLjUtMTguMmMtMTkuMy0xNS40LTE1LjYtNDAuNCw3LTUwLjMgICBjNi40LTIuOCwxMy4xLTMuNywxOS45LTQuMWMyNi4yLTEuNCw1MS4xLDMuNCw3NC44LDE0LjhjMTEuOCw1LjcsMTUuNywzLjksMTkuNy04LjRjNC4yLTEzLDcuNy0yNi4yLDExLjYtMzkuMyAgIGMyLjYtOC44LTAuNi0xNC42LTguOS0xOC4zYy0xNS4yLTYuNy0zMC44LTExLjUtNDcuMi0xNC4xYy0yMS40LTMuMy0yMS40LTMuNC0yMS41LTI0LjljLTAuMS0zMC4zLTAuMS0zMC4zLTMwLjUtMzAuMyAgIGMtNC40LDAtOC44LTAuMS0xMy4yLDBjLTE0LjIsMC40LTE2LjYsMi45LTE3LDE3LjJjLTAuMiw2LjQsMCwxMi44LTAuMSwxOS4zYy0wLjEsMTktMC4yLDE4LjctMTguNCwyNS4zYy00NCwxNi03MS4yLDQ2LTc0LjEsOTQgICBjLTIuNiw0Mi41LDE5LjYsNzEuMiw1NC41LDkyLjFjMjEuNSwxMi45LDQ1LjMsMjAuNSw2OC4xLDMwLjZjOC45LDMuOSwxNy40LDguNCwyNC44LDE0LjZjMjEuOSwxOC4xLDE3LjksNDguMi04LjEsNTkuNiAgIGMtMTMuOSw2LjEtMjguNiw3LjYtNDMuNyw1LjdjLTIzLjMtMi45LTQ1LjYtOS02Ni42LTE5LjljLTEyLjMtNi40LTE1LjktNC43LTIwLjEsOC42Yy0zLjYsMTEuNS02LjgsMjMuMS0xMCwzNC43ICAgYy00LjMsMTUuNi0yLjcsMTkuMywxMi4yLDI2LjZjMTksOS4yLDM5LjMsMTMuOSw2MCwxNy4yYzE2LjIsMi42LDE2LjcsMy4zLDE2LjksMjAuMWMwLjEsNy42LDAuMSwxNS4zLDAuMiwyMi45ICAgYzAuMSw5LjYsNC43LDE1LjIsMTQuNiwxNS40YzExLjIsMC4yLDIyLjUsMC4yLDMzLjctMC4xYzkuMi0wLjIsMTMuOS01LjIsMTMuOS0xNC41YzAtMTAuNCwwLjUtMjAuOSwwLjEtMzEuMyAgIGMtMC41LTEwLjYsNC4xLTE2LDE0LjMtMTguOGMyMy41LTYuNCw0My41LTE5LDU4LjktMzcuOEMzODYuMzMsMzI5LjU0NCwzNzAuMDMsMjUzLjQ0NCwzMDkuNDMsMjE5Ljk0NHoiIGZpbGw9IiNiOGI4YjgiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K',
        //plugins_url( 'popPress/assets/img/pop-icon.png' ),
        //'dashicons-admin-plugins',
        65
    ); 
}

function pop_menu_page( $current = 'signUp' ) {
		require_once  "inc/signUp.php";
}


