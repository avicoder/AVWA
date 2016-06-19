
<?php
include('top.php');
?>
	<script src="http://js.pusherapp.com/1.9/pusher.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script>
	var username;
	var pusher;
	var nettuts_channel;
	var has_chat = false;
	function ajaxCall(ajax_url, ajax_data, successCallback) {
		$.ajax({
			type : "POST",
			url : ajax_url,
			dataType : "json",
			data: ajax_data,
			time : 10,
			success : function(msg) {
				if( msg.success ) {
					successCallback(msg);
				} else {
					alert(msg.errormsg);
				}
			},
			error: function(msg) {
			}
		});
	}
	
	function updateOnlineCount() {
		$('#chat_widget_counter').html($('.chat_widget_member').length);
	}
	
	function newMessageCallback(data) {
		if( has_chat == false ) { //if the user doesn't have chat messages in the div yet
			$('#chat_widget_messages').html(''); //remove the contents i.e. 'chat messages go here'
			has_chat = true; //and set it so it won't go inside this if-statement again
		}
		
		$('#chat_widget_messages').append(data.message + '<br />');
	}
	
	$(document).ready(function() {
		$('#chat_widget_login_button').click(function() {
			$('#chat_widget_login_button').hide(); //hide the login button
			$('#chat_widget_login_loader').show(); //show the loader gif
			username = $('#chat_widget_username').val(); //get the username
			username = username.replace(/[^a-z0-9]/gi, ''); //filter it
			if( username == '' ) { //if blank, then alert the user
				alert('Please provide a valid username (alphanumeric only)');
			} else { //else, login our user via start_session.php
				ajaxCall('start_session.php', { username : username }, function() {
					pusher = new Pusher('12c4f4771a7f75100398'); //APP KEY
					Pusher.channel_auth_endpoint = 'pusher_auth.php'; //override the channel_auth_endpoint
					nettuts_channel = pusher.subscribe('presence-nettuts'); //join the presence-nettuts channel
					
					pusher.connection.bind('connected', function() {
						$('#chat_widget_login_loader').hide(); //hide the loading gif
						$('#chat_widget_login_button').show(); //show the login button again
						
						$('#chat_widget_login').hide(); //hide the login screen
						$('#chat_widget_main_container').show(); //show the chat screen
						
						//here, we bind to the pusher:subscription_succeeded event, which is called whenever you
						//successfully subscribe to a channel
						nettuts_channel.bind('pusher:subscription_succeeded', function(members) {
							//this makes a list of all the online clients and sets the online list html
							//it also updates the online count
							var whosonline_html = '';
							members.each(function(member) {
								whosonline_html += '<li class="chat_widget_member" id="chat_widget_member_' + 
								member.id + '">' + member.info.username + '</li>';
							});
							$('#chat_widget_online_list').html(whosonline_html);
							updateOnlineCount();
						});
						
						//here we bind to the pusher:member_added event, which tells us whenever someone else
						//successfully subscribes to the channel
						nettuts_channel.bind('pusher:member_added', function(member) {
							//this appends the new connected client's name to the online list
							//and updates the online count as well
							$('#chat_widget_online_list').append('<li class="chat_widget_member" ' +
							'id="chat_widget_member_' + member.id + '">' + member.info.username + '</li>');
							updateOnlineCount();
						});
						
						//here, we bind to pusher:member_removed event, which tells us whenever someone
						//unsubscribes or disconnects from the channel
						nettuts_channel.bind('pusher:member_removed', function(member) {
							//this removes the client from the online list and updates the online count
							$('#chat_widget_member_' + member.id).remove();
							updateOnlineCount();
						});	
						
						nettuts_channel.bind('new_message', function(data) {
							newMessageCallback(data);
						});
					});
				});
			}
		});
		
		$('#chat_widget_form').submit(function() {
			var message = $('#chat_widget_input').val(); //get the value from the text input
			$('#chat_widget_button').hide(); //hide the chat button
			$('#chat_widget_loader').show(); //show the chat loader gif
			ajaxCall('send_message.php', { message : message }, function(msg) { //make an ajax call to send_message.php
				$('#chat_widget_input').val(''); //clear the text input
				$('#chat_widget_loader').hide(); //hide the loader gif
				$('#chat_widget_button').show(); //show the chat button
				newMessageCallback(msg.data); //display the message with the newMessageCallback function
			});
			return false;
		});
	});
	</script>
		<style>
		#chat_widget_container {
			
		}
		
		#chat_widget_login {
			width: 733px;
			text-align: center;
			height: 166px;
			margin-top: 80px;
		}
		
		#chat_widget_main_container {
			display: none;
		}
		
		#chat_widget_messages_container { 
			float: left;
			width: 600px;
			border: 1px solid #DDD;
			height: 200px;
			overflow: auto;
			padding: 5px;
			background-color: #FFF;
			position: relative;
		}
		
		#chat_widget_messages {

			bottom: 0px;
		}
		
		#chat_widget_online {
			width: 20%;
			height: 200px;
			float: left;
			padding: 0px 10px;
			border: 1px solid #DDD;
			border-left: 0px;
			background-color: #FFF;
			overflow: auto;
			margin: 0px 10px;
		}
		
		#chat_widget_online_list {
			list-style: none;
			padding: 0px;
		}
		
		#chat_widget_online_list > li {
			margin-left: 0px;
		}
		
		#chat_widget_input_container {
			margin-top: 10px;
			text-align: left;
		}
		
		#chat_widget_input {
			width: 750px	;

		}
		#chat_widget_loader { display: none; }
		#chat_widget_login_loader { display: none; }
		.clear { clear: both; }
	</style>
<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can exploit web socket vulnerabilities</div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
Websocket provides full duplex communication over a TCP connection. Websockets are used in web applications to speed up the communication. In web application a persistent connection between the browser and the server can be established using websockets. Initial 'upgrade' handshake happens over HTTP and later communication happens over the TCP channels using websocket protocol. 
 <br /><br/>
Few applications authenticate connections based on Origin header value which is not a secure way of authenticating connections/ users. Websocket protocol doesn't handle authentication on its own but there are different techniques to authenticate user connections. Some of the techniques involve HTTP authentication, cookie based authentication and token based authentication.
<br/><br/>

If proper authorization checks are not present on the server side then depending on how the application uses websocket data an attacker may be able to perform unauthorized transactions.


</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-CLIENT-010</span></div>
  <div class="panel-body">
Is authentication needed for establishing a connection?<br /><br />
Can unauthorized transaction be performed using web sockets?


</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-warning"> Medium</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center><hr/>

  
  	<div id="chat_widget_container">
		<div id="chat_widget_login" class="form-signin">
		
       <label for="chat_widget_username" class="sr-only">Name :</label>
			<input type="name" id="chat_widget_username"   class="form-control" placeholder="Handle"  name="username" required autofocus><br />
			<button class="btn btn-lg btn-danger btn-block" type="submit" name="submit" id="chat_widget_login_button">Enter Chat room</button>
	<img src="loading.gif" alt="Logging in..." id="chat_widget_login_loader" />
		</div>
		
		<div id="chat_widget_main_container">
			<div id="chat_widget_messages_container" class="panel panel-success">
			<span class="label label-default">Chat Window</span><hr/>
				<div id="chat_widget_messages">
				</div>
			</div>
			<div id="chat_widget_online" class="panel panel-info">
							<span class="label label-success">Online (<span id="chat_widget_counter">0</span>)</span>
				<ul id="chat_widget_online_list">
					<li>online users go here</li>
				</ul>
			</div>
			<div class="clear"></div>
			<div id="chat_widget_input_container">
				<form method="post" id="chat_widget_form">
				
				<div class="input-group">
      <input type="text" class="form-control"   id="chat_widget_input" placeholder="Type your message here..... Press Enter">
      <span class="input-group-btn">
        <img src="loading.gif" alt="Sending..." id="chat_widget_loader" />

      </span>
    </div>
				</form>
			</div>
		</div>
	</div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</div>Tools Required:
<span class="label label-default">Burp Suite</span>
<span class="label label-default">Inspect Element</span>
<br /> <hr />
<h2>How to test? </h2>
<style type="text/css">
	table.tableizer-table {
	border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
} 
.tableizer-table td {
	padding: 4px;
	margin: 3px;
	border: 1px solid #ccc;
	
}
.tableizer-table th {
	background-color: #428bca; 
	color: #FFF;
	font-weight: bold;
}
</style><table class="tableizer-table">
<tr class="tableizer-firstrow"><th>S. No.</th><th>Testing Technique</th><th>Where to Apply</th><th>Expected Results</th><th>Interpretation</th></tr>
 <tr><td>1</td><td>Check the requests for URI ws:// or wss:// or "Upgrade: websocket" header. Alternatively you check  client side code for the presence of ws:// or wss:// URI which would confirm that websocket is being used.
<br/><br/>
</td><td>Pages using websockets</td><td>Connection allowed without authentication. </td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Check the requests for URI ws:// or wss:// or "Upgrade: websocket" header. Alternatively you check  client side code for the presence of ws:// or wss:// URI which would confirm that websocket is being used.
<br/><br/>
</td><td>Pages using websockets</td><td>Prompt for user credentials is displayed or HTTP cookie is validated during the websocket handshake before allowing the user to connect.</td><td>Safe</td></tr>
 <tr><td>3</td><td>If authentication is enabled check if week authentication is used?</td><td>Pages using websockets</td><td>If authentication can be bypassed or DoS can be caused or credentials can be stolen.</td><td>Safe</td></tr>
 <tr><td>4</td><td>Understand the usage of websocket in the application and use parameter and url manipulation techniques to bypass authorization. </td><td>Pages using websockets</td><td>Successful parameter or URL manipulation attacks. </td><td>Unsafe</td></tr> 
 <tr><td>5</td><td>Understand the usage of websocket in the application and use parameter and url manipulation techniques to bypass authorization. </td><td>Pages using websockets</td><td>Failed attacks. </td><td>Safe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>