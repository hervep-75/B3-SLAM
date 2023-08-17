<!DOCTYPE html>
<html>
    
<head>
        
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Architects+Daughter">-->
<link rel="stylesheet" type="text/css" href="../bWAPP/stylesheets/stylesheet.css" media="screen" />
<link rel="shortcut icon" href="../bWAPP/images/favicon.ico" type="image/x-icon" />

<!--<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<script src="../bWAPP/js/html5.js"></script>

<title>bWAPP - Unvalidated Redirects & Forwards</title>

</head>

<body>
    
<header>

<h1>bWAPP</h1>

<h2>an extremely buggy web app !</h2>

</header>    

<div id="menu">
      
    <table>
        
        <tr>
            
            <td><a href="portal.php">Bugs</a></td>
            <td><a href="password_change.php">Change Password</a></td>
            <td><a href="user_extra.php">Create User</a></td>
            <td><a href="security_level_set.php">Set Security Level</a></td>
            <td><a href="reset.php" onclick="return confirm('All settings will be cleared. Are you sure?');">Reset</a></td>            
            <td><a href="credits.php">Credits</a></td>
            <td><a href="http://itsecgames.blogspot.com" target="_blank">Blog</a></td>
            <td><a href="logout.php" onclick="return confirm('Are you sure you want to leave?');">Logout</a></td>
            <td><font color="red">Welcome Bee</font></td>
            
        </tr>
        
    </table>   
   
</div>

<div id="main">
    
    <h1>Vous devez changer vos identifiants pour continuer</h1>

<form action="eni-invalid-redirect.php" method="POST">
<input type="text" name="login"/><br/>
<input type="password" name="password"/><br/>
<input type="submit" value="valider" />
</form>

<?php 

$login=$_POST['login'];
$pass=$_POST['password'];

if(isset($login) && isset($pass)){
	echo "Exemple de phishing, vos identifiants $login et $pass auraient pu être volés";
}
?>    
</div>
    
<div id="side">
    
    <a href="http://twitter.com/MME_IT" target="blank_" class="button"><img src="./images/twitter.png"></a>
    <a href="http://be.linkedin.com/in/malikmesellem" target="blank_" class="button"><img src="./images/linkedin.png"></a>
    <a href="http://www.facebook.com/pages/MME-IT-Audits-Security/104153019664877" target="blank_" class="button"><img src="./images/facebook.png"></a>
    <a href="http://itsecgames.blogspot.com" target="blank_" class="button"><img src="./images/blogger.png"></a>

</div>     
    
<div id="disclaimer">
          
    <p>bWAPP is licensed under <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank"><img style="vertical-align:middle" src="./images/cc.png"></a> &copy; 2014 MME BVBA / Follow <a href="http://twitter.com/MME_IT" target="_blank">@MME_IT</a> on Twitter and ask for our cheat sheet, containing all solutions! / Need an exclusive <a href="http://www.mmebvba.com" target="_blank">training</a>?</p>
   
</div>
    
<div id="bee">
    
    <img src="./images/bee_1.png">
    
</div>
    
<div id="security_level">
  
    <form action="/securiteWEB/bWAPP/unvalidated_redir_fwd_2.php" method="POST">
        
        <label>Set your security level:</label><br />
        
        <select name="security_level">
            
            <option value="0">low</option>
            <option value="1">medium</option>
            <option value="2">high</option> 
            
        </select>
        
        <button type="submit" name="form_security_level" value="submit">Set</button>
        <font size="4">Current: <b>low</b></font>
        
    </form>   
    
</div>
    
<div id="bug">

    <form action="/securiteWEB/bWAPP/unvalidated_redir_fwd_2.php" method="POST">
        
        <label>Choose your bug:</label><br />
        
        <select name="bug">
   
<option value='0'>----------------------  bWAPP v2.2  -----------------------</option><option value='1'>/ A1 - Injection /</option><option value='2'>HTML Injection - Reflected (GET)</option><option value='3'>HTML Injection - Reflected (POST)</option><option value='4'>HTML Injection - Reflected (Current URL)</option><option value='5'>HTML Injection - Stored (Blog)</option><option value='6'>iFrame Injection</option><option value='7'>LDAP Injection (Search)</option><option value='8'>Mail Header Injection (SMTP)</option><option value='9'>OS Command Injection</option><option value='10'>OS Command Injection - Blind</option><option value='11'>PHP Code Injection</option><option value='12'>Server-Side Includes (SSI) Injection</option><option value='13'>SQL Injection (GET/Search)</option><option value='14'>SQL Injection (GET/Select)</option><option value='15'>SQL Injection (POST/Search)</option><option value='16'>SQL Injection (POST/Select)</option><option value='17'>SQL Injection (AJAX/JSON/jQuery)</option><option value='18'>SQL Injection (CAPTCHA)</option><option value='19'>SQL Injection (Login Form/Hero)</option><option value='20'>SQL Injection (Login Form/User)</option><option value='21'>SQL Injection (SQLite)</option><option value='22'>SQL Injection (Drupal)</option><option value='23'>SQL Injection - Stored (Blog)</option><option value='24'>SQL Injection - Stored (SQLite)</option><option value='25'>SQL Injection - Stored (User-Agent)</option><option value='26'>SQL Injection - Stored (XML)</option><option value='27'>SQL Injection - Blind - Boolean-Based</option><option value='28'>SQL Injection - Blind - Time-Based</option><option value='29'>SQL Injection - Blind (SQLite)</option><option value='30'>SQL Injection - Blind (Web Services/SOAP)</option><option value='31'>XML/XPath Injection (Login Form)</option><option value='32'>XML/XPath Injection (Search)</option><option value='33'>/</option><option value='34'>/ A2 - Broken Auth. & Session Mgmt. /</option><option value='35'>Broken Authentication - CAPTCHA Bypassing</option><option value='36'>Broken Authentication - Forgotten Function</option><option value='37'>Broken Authentication - Insecure Login Forms</option><option value='38'>Broken Authentication - Logout Management</option><option value='39'>Broken Authentication - Password Attacks</option><option value='40'>Broken Authentication - Weak Passwords</option><option value='41'>Session Management - Administrative Portals</option><option value='42'>Session Management - Cookies (HTTPOnly)</option><option value='43'>Session Management - Cookies (Secure)</option><option value='44'>Session Management - Session ID in URL</option><option value='45'>Session Management - Strong Sessions</option><option value='46'>/</option><option value='47'>/ A3 - Cross-Site Scripting (XSS) /</option><option value='48'>Cross-Site Scripting - Reflected (GET)</option><option value='49'>Cross-Site Scripting - Reflected (POST)</option><option value='50'>Cross-Site Scripting - Reflected (JSON)</option><option value='51'>Cross-Site Scripting - Reflected (AJAX/JSON)</option><option value='52'>Cross-Site Scripting - Reflected (AJAX/XML)</option><option value='53'>Cross-Site Scripting - Reflected (Back Button)</option><option value='54'>Cross-Site Scripting - Reflected (Custom Header)</option><option value='55'>Cross-Site Scripting - Reflected (Eval)</option><option value='56'>Cross-Site Scripting - Reflected (HREF)</option><option value='57'>Cross-Site Scripting - Reflected (Login Form)</option><option value='58'>Cross-Site Scripting - Reflected (phpMyAdmin)</option><option value='59'>Cross-Site Scripting - Reflected (PHP_SELF)</option><option value='60'>Cross-Site Scripting - Reflected (Referer)</option><option value='61'>Cross-Site Scripting - Reflected (User-Agent)</option><option value='62'>Cross-Site Scripting - Stored (Blog)</option><option value='63'>Cross-Site Scripting - Stored (Change Secret)</option><option value='64'>Cross-Site Scripting - Stored (Cookies)</option><option value='65'>Cross-Site Scripting - Stored (SQLiteManager)</option><option value='66'>Cross-Site Scripting - Stored (User-Agent)</option><option value='67'>/</option><option value='68'>/ A4 - Insecure Direct Object References /</option><option value='69'>Insecure DOR (Change Secret)</option><option value='70'>Insecure DOR (Reset Secret)</option><option value='71'>Insecure DOR (Order Tickets)</option><option value='72'>/</option><option value='73'>/ A5 - Security Misconfiguration /</option><option value='74'>Arbitrary File Access (Samba)</option><option value='75'>Cross-Domain Policy File (Flash)</option><option value='76'>Cross-Origin Resource Sharing (AJAX)</option><option value='77'>Cross-Site Tracing (XST)</option><option value='78'>Denial-of-Service (Large Chunk Size)</option><option value='79'>Denial-of-Service (Slow HTTP DoS)</option><option value='80'>Denial-of-Service (SSL-Exhaustion)</option><option value='81'>Denial-of-Service (XML Bomb)</option><option value='82'>Insecure FTP Configuration</option><option value='83'>Insecure SNMP Configuration</option><option value='84'>Insecure WebDAV Configuration</option><option value='85'>Local Privilege Escalation (sendpage)</option><option value='86'>Local Privilege Escalation (udev)</option><option value='87'>Man-in-the-Middle Attack (HTTP)</option><option value='88'>Man-in-the-Middle Attack (SMTP)</option><option value='89'>Old/Backup & Unreferenced Files</option><option value='90'>Robots File</option><option value='91'>/</option><option value='92'>/ A6 - Sensitive Data Exposure /</option><option value='93'>Base64 Encoding (Secret)</option><option value='94'>BEAST/CRIME/BREACH Attacks</option><option value='95'>Clear Text HTTP (Credentials)</option><option value='96'>Heartbleed Vulnerability</option><option value='97'>Host Header Attack (Reset Poisoning)</option><option value='98'>HTML5 Web Storage (Secret)</option><option value='99'>POODLE Vulnerability</option><option value='100'>SSL 2.0 Deprecated Protocol</option><option value='101'>Text Files (Accounts)</option><option value='102'>/</option><option value='103'>/ A7 - Missing Functional Level Access Control /</option><option value='104'>Directory Traversal - Directories</option><option value='105'>Directory Traversal - Files</option><option value='106'>Host Header Attack (Cache Poisoning)</option><option value='107'>Host Header Attack (Reset Poisoning)</option><option value='108'>Local File Inclusion (SQLiteManager)</option><option value='109'>Remote & Local File Inclusion (RFI/LFI)</option><option value='110'>Restrict Device Access</option><option value='111'>Restrict Folder Access</option><option value='112'>Server Side Request Forgery (SSRF)</option><option value='113'>XML External Entity Attacks (XXE)</option><option value='114'>/</option><option value='115'>/ A8 - Cross-Site Request Forgery (CSRF) /</option><option value='116'>Cross-Site Request Forgery (Change Password)</option><option value='117'>Cross-Site Request Forgery (Change Secret)</option><option value='118'>Cross-Site Request Forgery (Transfer Amount)</option><option value='119'>/</option><option value='120'>/ A9 - Using Known Vulnerable Components /</option><option value='121'>Buffer Overflow (Local)</option><option value='122'>Buffer Overflow (Remote)</option><option value='123'>Drupal SQL Injection (Drupageddon)</option><option value='124'>Heartbleed Vulnerability</option><option value='125'>PHP CGI Remote Code Execution</option><option value='126'>PHP Eval Function</option><option value='127'>phpMyAdmin BBCode Tag XSS</option><option value='128'>Shellshock Vulnerability (CGI)</option><option value='129'>SQLiteManager Local File Inclusion</option><option value='130'>SQLiteManager PHP Code Injection</option><option value='131'>SQLiteManager XSS</option><option value='132'>/</option><option value='133'>/ A10 - Unvalidated Redirects & Forwards /</option><option value='134'>Unvalidated Redirects & Forwards (1)</option><option value='135'>Unvalidated Redirects & Forwards (2)</option><option value='136'>/</option><option value='137'>/ Other bugs... /</option><option value='138'>ClickJacking (Movie Tickets)</option><option value='139'>Client-Side Validation (Password)</option><option value='140'>HTTP Parameter Pollution</option><option value='141'>HTTP Response Splitting</option><option value='142'>HTTP Verb Tampering</option><option value='143'>Information Disclosure - Favicon</option><option value='144'>Information Disclosure - Headers</option><option value='145'>Information Disclosure - PHP version</option><option value='146'>Information Disclosure - Robots File</option><option value='147'>Insecure iFrame (Login Form)</option><option value='148'>Unrestricted File Upload</option><option value='149'>---------------------------  Extras  --------------------------</option><option value='150'>A.I.M. - No-authentication Mode</option><option value='151'>Client Access Policy File</option><option value='152'>Cross-Domain Policy File</option><option value='153'>Evil 666 Fuzzing Page</option><option value='154'>Manual Intervention Required!</option><option value='155'>Unprotected Admin Portal</option><option value='156'>We Steal Secrets... (html)</option><option value='157'>We Steal Secrets... (plain)</option><option value='158'>WSDL File (Web Services/SOAP)</option>

        </select>
        
        <button type="submit" name="form_bug" value="submit">Hack</button>
        
    </form>
    
</div>
      
</body>
    
</html>

