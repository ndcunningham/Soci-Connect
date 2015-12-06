<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat</title>
    
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel='stylesheet'/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" type="text/css" rel='stylesheet'/>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
    
        // ask user for name with popup prompt    
        var name = prompt("Enter your chat name:", "Guest");
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Guest";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
    </script>

</head>

<body onload="setInterval('chat.update()', 1000)">
<div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Soci-Connect</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav"><li><a href="#">About</a></li></ul>
                      <ul class="nav navbar-nav navbar-right">
                      @if(!Session::has('user'))
                        <li class="active"><a href="{{ url('/login')}}">Login <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Register</a></li>
                        @else
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle navbar-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{session('user')->Name}}
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="{{ url('/logout')}}">Logout</a></li>
                          </ul>
                        </div>
                        @endif
                        </ul>
                        </div>
                    </div><!-- /.navbar-collapse -->
                </nav>
                <div class="content">
                <div class="row">
                    <div class="col-xs-6">
                        <iframe src="http://player.twitch.tv/?video=v28514680" frameborder="0" scrolling="no" height="500" width="100%"></iframe><a href="http://www.twitch.tv/nicotugz?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px;text-decoration:underline;">Watch live video from nicotugz on www.twitch.tv</a>
                    </div>
                    <div class="col-xs-6">
                        <div id="page-wrap">
        
                        <h2>Share and Express you thoughts </h2>
                        
                        <p id="name-area"></p>
                        
                        <div id="chat-wrap"><div id="chat-area"></div></div>
                        
                        <form id="send-message-area">
                            <p>Your message: </p>
                            <textarea id="sendie" maxlength = '100' ></textarea>
                        </form>
                         </div>
                    </div>
                    </div>
                </div>
                <div>
                <br/>
                    @section('footer')
                    &copy; 2015 - Soci-Connect
                    @show
                </div>
            </div>

</body>

</html>