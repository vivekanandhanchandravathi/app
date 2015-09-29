<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

</head>
<body>
<div data-role="page" id="login">
    
  <div data-role="header">
     <h1>Acme Corporation</h1>
  </div>
    
  <div data-role="content">
        
    <form id="frmLogin">
      <div data-role="fieldcontain">
        <label for="email">
          <em>* </em> Email: </label>
          <input type="text" id="email" 
            name="email" class="required email" />
      </div>
            
      <div data-role="fieldcontain">
        <label for="password"> 
          <em>* </em>Password: </label>
          <input type="password" id="password" 
            name="password" class="required" />
      </div>
            
      <div class="ui-body ui-body-b">
        <button class="btnLogin" type="submit" 
          data-theme="a">Login</button>
      </div>
    </form>
        
  </div>
    
</div>
</div>
<div data-role="footer"  >
<h4>this is about Footer copy right</h4>
</div>
</div>
</body>
</html>
logout.php
