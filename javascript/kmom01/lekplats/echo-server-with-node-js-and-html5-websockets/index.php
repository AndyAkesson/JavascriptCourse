<?php $title='Anders Akesson | Client using HTML5 websockets API to a echo server'; 
include(__DIR__ . '/../mall/header.php'); ?>

<div id='flash'>
<h1>Setting up a client for a websocket echo server.</h1>
<p>Check the console to see what actually happens.</p>

<form id='form1'>
  <p>
    <label>Connect: </label></br><input id='connect_url'/>
    <input id='connect' type='button' value='Connect'/>
    <input id='close' type='button' value='Close connection' disabled="true" />
  </p>
  <p>
    <label>Send message: </label></br><input id='message'/>
    <input id='send_message' type='button' value='Send' disabled="true" />
  </p>
  <p>
    <label>Log output: </label></br><textarea rows="20" cols="80" id='output' class='output'></textarea>
  </p>
</form> 

</div>

<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>