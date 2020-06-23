<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIX, curated coffee components</title>

    <link href="reset.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,600" type="text/css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
	
    <meta name="salesforce-community" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
    <meta name="salesforce-client-id" content="<?php echo getenv('SALESFORCE_CLIENT_ID');?>">
    <meta name="salesforce-redirect-uri" content="https://<?php echo getenv('SALESFORCE_HEROKUAPP_URL');?>/_callback.php">
    <meta name="salesforce-mode" content="<?php echo getenv('SALESFORCE_MODE');?>">
    <meta name="salesforce-namespace" content="<?php echo getenv('SALESFORCE_NAMESPACE');?>">
    <meta name="salesforce-target" content="#sign-in-link">
    <meta name="salesforce-save-access-token" content="true">
    <meta name="salesforce-forgot-password-enabled" content="<?php echo getenv('SALESFORCE_FORGOT_PASSWORD_ENABLED');?>">
    <meta name="salesforce-self-register-enabled" content="<?php echo getenv('SALESFORCE_SELF_REGISTER_ENABLED');?>">
    <meta name="salesforce-self-register-starturl-enabled" content="<?php echo getenv('SALESFORCE_SELF_REGISTER_STARTURL_ENABLED');?>">
    <meta name="salesforce-login-handler" content="onLogin">
    <meta name="salesforce-logout-handler" content="onLogout">
    <meta name="salesforce-mask-redirects" content="<?php echo getenv('SALESFORCE_MASK_REDIRECTS');?>">
	<link href="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=css" rel="stylesheet" type="text/css" />
    <script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=javascript_widget" async defer></script>
  </head>
  
  <body>
  <input id="source_code" type="hidden" value="abc123">
  	<div id="sign-in-link" style="position: absolute; top: 20px;right: 20px;"></div>
	<div id="reg-link" style="position: absolute; top: 65px;right: 20px;"><button id="sfid-reg-button" class="sfid-button" onclick="showRegistration();">Registration</button></div>
    <header>
      <div class="masthead-elements-row-1">
        <div class="element-left"></div>
        <div class="element-middle">
          <img class="logo" src="images/fix-logotype.png" alt="Fix">
          <br>
          <span class="logo-text">Fine Coffee Kits</span>
        </div>
        <div class="element-right">
        </div>
      </div>
    </header>
    <section class="textured-section">
      <h1>Brian's Coffee Components</h1>
      

      <ul class="products">
        <li>
          <img class="product-image" src="images/products/071715_Heroku_3270-.jpg" alt="">
          <h3 class="product-name">AeroPress Coffee Maker</h3>
          <div class="product-button"><a id="aero_link" class="btn btn-hot" href="#" onclick="SFIDWidget.login()">Login for more info</a></div>
        </li>
        <li>
          <img class="product-image" src="images/products/071715_Heroku_3263-.jpg" alt="">
          <h3 class="product-name">MSR Reactor 2.5L Stove System</h3>          
          <div class="product-button"><a id="reactor_link" class="btn btn-hot" href="#" onclick="SFIDWidget.login()">Login for more info</a></div>
        </li>
        <li>
          <img class="product-image" src="images/products/071715_Heroku_3302.jpg" alt="">
          <h3 class="product-name">Chemex Classic 6-cup Coffee Maker</h3>
          <div class="product-button"><a id="chemex_link" class="btn btn-hot" href="#" onclick="SFIDWidget.login()">Login for more info</a></div>
        </li>
      </ul>

    </section>
    <section>

      <h1>Complete Brewing Kits</h1>

      <ul class="kits">
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3338-Edit-.jpg" alt="">
          <h3 class="kit-name">The Chemex Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3353-Edit-.jpg" alt="">
          <h3 class="kit-name">The Pour Over Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3346-.jpg" alt="">
          <h3 class="kit-name">The Camper’s Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3376-Edit-.jpg" alt="">
          <h3 class="kit-name">The French Press Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3385-.jpg" alt="">
          <h3 class="kit-name">The Cold Brew Kit</h3>
        </li>
      </ul>

    </section>
    <footer>

      <div class="trailer-logo">
        <img class="logo" src="images/fix-logotype.png" alt="Fix">
        <br>
        <span class="logo-text">Fine Coffee Kits</span>
      </div>

      <div class="trailer-links">
        <ul class="internal-links">
          <li><a href="https://heroku.github.io/fix">About</a></li>
          <li><a href="https://heroku.github.io/fix">Support</a></li>
          <li><a href="https://heroku.github.io/fix">Contact Us</a></li>
        </ul>
        <ul class="social-links">
          <li><a href="#">
            <img class="social-logo" src="images/social/twitter.png" alt="">
            <span class="social-verb">Follow on</span>
            <span class="social-name">Twitter</span></a></li>
          <li><a href="#">
            <img class="social-logo" src="images/social/facebook.png" alt="">
            <span class="social-verb">Like Us on</span>
            <span class="social-name">Facebook</span></a></li>
          <li><a href="#">
            <img class="social-logo" src="images/social/instagram.png" alt="">
            <span class="social-verb">Follow on</span>
            <span class="social-name">Instagram</span></a></li>
        </ul>
      </div>

    </footer>
	

	
	<script>


	function onLogin(identity) {
		
		var targetDiv = document.querySelector(SFIDWidget.config.target);	
		
		var avatar = document.createElement('a'); 
	 	avatar.href = "javascript:showIdentityOverlay();";
		
		
		var img = document.createElement('img'); 
	 	img.src = identity.photos.thumbnail; 
		img.className = "sfid-avatar";
	
		var username = document.createElement('span'); 
		username.innerHTML = identity.username;
		username.className = "sfid-avatar-name";
	
		var iddiv = document.createElement('div'); 
	 	iddiv.id = "sfid-identity";
		
		avatar.appendChild(img);
		avatar.appendChild(username);
		iddiv.appendChild(avatar);		
	
		targetDiv.innerHTML = '';
		targetDiv.appendChild(iddiv);	
		
		var aero = document.getElementById("aero_link");
		aero.href = "/datasheets/AeroPress-Instr-English-Rev.-D2.pdf";
		aero.innerHTML = 'Datasheet';

		var reactor = document.getElementById("reactor_link");
		reactor.href = "/datasheets/Reactor_StovInst_EURO_EN.pdf";
		reactor.innerHTML = 'Datasheet';

		var chemex = document.getElementById("chemex_link");
		chemex.href = "/datasheets/2014_ChemexBrewGuide.pdf";
		chemex.innerHTML = 'Datasheet';
		
	}
	
	
	function showIdentityOverlay() {

		var lightbox = document.createElement('div'); 
	 	lightbox.className = "sfid-lightbox";
	 	lightbox.id = "sfid-login-overlay";
		lightbox.setAttribute("onClick", "SFIDWidget.cancel();");
		
		var wrapper = document.createElement('div'); 
	 	wrapper.id = "identity-wrapper";
		wrapper.onclick = function(event) {
		    event = event || window.event // cross-browser event
    
		    if (event.stopPropagation) {
		        // W3C standard variant
		        event.stopPropagation()
		    } else {
		        // IE variant
		        event.cancelBubble = true
		    }
		}
		
		var content = document.createElement('div'); 
	 	content.id = "sfid-content";

		var community = document.createElement('a');
		var commURL = document.querySelector('meta[name="salesforce-community"]').content;
		community.href = commURL;
		community.innerHTML = "Go to the Community";
		community.setAttribute("style", "float:left");
		content.appendChild(community);


		var logout = document.createElement('a'); 
	 	logout.href = "javascript:SFIDWidget.logout();SFIDWidget.cancel();";
		logout.innerHTML = "logout";
		logout.setAttribute("style", "float:right");
		content.appendChild(logout);
		
		var t = document.createElement('div'); 
	 	t.id = "sfid-token";
		t.className = "sfid-mb24";
		
		var p = document.createElement('pre'); 
	 	p.innerHTML = JSON.stringify(SFIDWidget.openid_response, undefined, 2);
		t.appendChild(p);
		
		content.appendChild(t);

		
		wrapper.appendChild(content);
		lightbox.appendChild(wrapper);
		
		document.body.appendChild(lightbox);	
		
	}
	
	
	function onLogout() {
		SFIDWidget.init();
		
		var aero = document.getElementById("aero_link");
		aero.href = "#";
		aero.innerHTML = 'Login for more info';

		var reactor = document.getElementById("reactor_link");
		reactor.href = "#";
		reactor.innerHTML = 'Login for more info';

		var chemex = document.getElementById("chemex_link");
		chemex.href = "#";
		chemex.innerHTML = 'Login for more info';

	}

	function showRegistration() {	
		var t = document.createElement('div'); 
	 	if ("modal" === SFIDWidget.config.mode ? t.id = "sfid-content" : "inline" === SFIDWidget.config.mode && (t.id = "sfid-inline-content"), SFIDWidget.config.useCommunityBackgroundColor && (t.style.backgroundColor = SFIDWidget.authconfig.LoginPage.BackgroundColor), "modal" === SFIDWidget.config.mode && null != SFIDWidget.authconfig.LoginPage.LogoUrl) {
            var n = document.createElement("div");
            n.id = "sfid-logo_wrapper",
            n.className = "sfid-standard_logo_wrapper sfid-mt12";
            var i = document.createElement("img");
            i.src = SFIDWidget.authconfig.LoginPage.LogoUrl,
            i.className = "sfid-standard_logo",
            i.alt = "Salesforce",
            n.appendChild(i);
            var o = document.createElement("h2");
            o.id = "dialogTitle";
            var d = document.createTextNode("Registration");
            o.appendChild(d),
            t.setAttribute("role", "dialog"),
            t.setAttribute("aria-labelledby", o.id),
            t.tabIndex = "-1",
            t.addEventListener("keydown", function (e) {
                27 === e.keyCode && SFIDWidget.cancel()
            }, !0),
            t.appendChild(n)
        }
        var a = document.createElement("div");
        if (a.className = "sfid-mb1", a.id = "sfid-error", a.innerHTML = "We can\'t create the user account.", a.style.display = "none", a.setAttribute("role", "alert"), t.appendChild(a)) {
            var r = document.createElement("form");
            r.setAttribute("onSubmit", "startRegistration();return false;");
            var fn = document.createElement("input");
            fn.className = "sfid-wide sfid-mb12",
            fn.type = "text",
            fn.name = "fname",
            fn.id = "sfid-fname",
            fn.setAttribute("autofocus", "autofocus");
            var fnl = document.createElement("LABEL");
            fnl.htmlFor = fn.id,
            fnl.className = "sfid-button-label",
            fnl.innerText = "First Name";
            var ln = document.createElement("input");
            ln.className = "sfid-wide sfid-mb12",
            ln.type = "text",
            ln.name = "lname",
            ln.id = "sfid-lname";
            var lnl = document.createElement("LABEL");
            lnl.htmlFor = ln.id,
            lnl.className = "sfid-button-label",
            lnl.innerText = "Last Name";
            var email = document.createElement("input");
            email.className = "sfid-wide sfid-mb12",
            email.type = "text",
            email.name = "email",
            email.id = "sfid-email";
            var emaill = document.createElement("LABEL");
            emaill.htmlFor = email.id,
            emaill.className = "sfid-button-label",
            emaill.innerText = "Email Address";
            var pw = document.createElement("input");
            pw.className = "sfid-wide sfid-mb12",
            pw.type = "password",
            pw.name = "password",
            pw.id = "sfid-pwd";
            var pwl = document.createElement("LABEL");
            pwl.innerText = "Create a Password",
            pwl.htmlFor = pw.id,
            pwl.className = "sfid-button-label";
            var cpw = document.createElement("input");
            cpw.className = "sfid-wide sfid-mb12",
            cpw.type = "password",
            cpw.name = "cpassword",
            cpw.id = "sfid-cpassword";
            var cpwl = document.createElement("LABEL");
            cpwl.innerText = "Confirm Your Password",
            cpwl.htmlFor = cpw.id,
            cpwl.className = "sfid-button-label",
            (x = document.createElement("input")).className = "sfid-button sfid-wide sfid-mb16",
            x.type = "submit",
            x.id = "sfid-regsubmit",
            x.value = "Create an Account",
            SFIDWidget.config.useCommunityPrimaryColor && (x.style.backgroundColor = SFIDWidget.authconfig.LoginPage.PrimaryColor),
            r.appendChild(fnl),
            r.appendChild(fn),
            r.appendChild(lnl),
            r.appendChild(ln),
            r.appendChild(emaill),
            r.appendChild(email),
            r.appendChild(pwl),
            r.appendChild(pw),
            r.appendChild(cpwl),
            r.appendChild(cpw),
            r.appendChild(x),
            t.appendChild(r);
        }
        var I = SFIDWidget.authconfig.LoginPage.UsernamePasswordEnabled,
        D = SFIDWidget.authconfig.AuthProviders.length,
        W = SFIDWidget.authconfig.SamlProviders.length;
        if (I && (0 < D || 0 < W)) {
            var v = document.createElement("br");
            (F = document.createElement("p")).className = "sfid-small",
            F.innerHTML = "or log in using",
            t.appendChild(v),
            t.appendChild(F)
        } else if (!I && (0 < D || 0 < W)) {
            var F;
            (F = document.createElement("p")).className = "sfid-small sfid-mb16",
            F.innerHTML = "Choose an authentication provider.",
            t.appendChild(F)
        }
        if (0 < SFIDWidget.authconfig.AuthProviders.length) {
            (E = document.createElement("div")).id = "sfid-social";
            for (var h = document.createElement("ul"), b = 0; b < SFIDWidget.authconfig.AuthProviders.length; b++) {
                var y = document.createElement("li"),
                w = SFIDWidget.authconfig.AuthProviders[b].IconUrl,
                C = SFIDWidget.authconfig.AuthProviders[b].SsoUrl;
                -1 === C.indexOf("?") ? C += "?startURL=" + encodeURIComponent(SFIDWidget.config.authorizeURL) : C += "&startURL=" + encodeURIComponent(SFIDWidget.config.authorizeURL);
                var k = SFIDWidget.authconfig.AuthProviders[b].Name;
                if (y.className = "sfid-button-ap", y.id = "sfid-button-ap-" + k, null != w) {
                    var R = document.createElement("img");
                    R.className = "sfid-social-buttonimg",
                    R.src = w,
                    R.alt = "Login with " + k;
                    var _ = document.createElement("a");
                    _.href = C,
                    _.appendChild(R),
                    _.title = k,
                    y.appendChild(_)
                } else {
                    (x = document.createElement("button")).setAttribute("onclick", "location.href='" + C + "';");
                    var U = document.createTextNode(k);
                    x.appendChild(U),
                    y.appendChild(x)
                }
                h.appendChild(y)
            }
            E.appendChild(h),
            t.appendChild(E)
        }
        if (0 < SFIDWidget.authconfig.SamlProviders.length) {
            var E;
            (E = document.createElement("div")).id = "sfid-social";
            h = document.createElement("ul");
            for (var L in SFIDWidget.authconfig.SamlProviders) {
                y = document.createElement("li");
                var x = document.createElement("button"),
                A = H(SFIDWidget.authconfig.SamlProviders[L].SsoUrl, "RelayState"),
                N = "&RelayState=" + encodeURIComponent(SFIDWidget.config.authorizeURL),
                q = SFIDWidget.authconfig.SamlProviders[L].Name;
                y.className = "sfid-button-saml",
                y.id = "sfid-button-saml-" + q,
                x.setAttribute("onclick", "location.href='" + A + N + "';");
                U = document.createTextNode(q);
                x.appendChild(U),
                y.appendChild(x),
                h.appendChild(y)
            }
            E.appendChild(h),
            t.appendChild(E)
        }
		if ("modal" === SFIDWidget.config.mode) {
            var T = document.createElement("div");
            T.className = "sfid-lightbox",
            T.id = "sfid-reg-overlay",
            T.setAttribute("onClick", "cancelReg()");
            var P = document.createElement("div");
            P.id = "sfid-wrapper",
            P.onclick = function (e) {
                (e = e || window.event).stopPropagation ? e.stopPropagation() : e.cancelBubble = !0
            },
            P.appendChild(t),
            T.appendChild(P),
            document.body.appendChild(T)
        } else
            e.appendChild(t)

	}
	function startRegistration() {
		// Call Salesforce Login
		var payload = "";
		payload = '{"firstname" : "' + document.getElementById("sfid-fname").value + '"';
		payload = payload + ' , "lastname" : "' + document.getElementById("sfid-lname").value + '"';
		payload = payload + ' , "email" : "' + document.getElementById("sfid-email").value + '"';
		payload = payload + ' , "source_code" : "' + document.getElementById("source_code").value + '"';
		payload = payload + ' , "password" : "' + document.getElementById("sfid-pwd").value + '"';
		payload = payload + ' , "confirmPassword" : "' + document.getElementById("sfid-cpassword").value + '"';
		payload = payload + ' , "startUrl" : "https%3A%2F%2Frs-embeddedlogin.herokuapp.com%2F_callback.php"';
		payload = payload + ' , "includePassword" : true}';
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			   //alert(xhttp.responseText);
			   var regResult = JSON.parse(i.responseText);			   
			   if (regResult.userid != null && regResult.userid.length > 0) {
				 authenticateReg();  
			   };
			};
			if (this.readyState == 4 && this.status == 400) {
			   alert(xhttp.responseText);
			   // replace alert with Show error 
			};
			if (this.readyState == 4 && this.status == 500) {
			   alert(xhttp.responseText);
			};
		};
		xhttp.open("POST", "https://devtom-externalidentity.cs45.force.com/participants/services/apexrest/SelfReg/V1/", true);
		xhttp.setRequestHeader("Content-type", "application/json;charset=UTF-8");
		xhttp.setRequestHeader("crossOrigin", "true");
		xhttp.setRequestHeader("Access-Control-Allow-Origin", "https://rs-embeddedlogin.herokuapp.com");
		xhttp.setRequestHeader("Access-Control-Allow-Methods", "GET, POST, PATCH, PUT, DELETE, OPTIONS");
		xhttp.setRequestHeader("Access-Control-Allow-Headers", "Origin, Access-Control-Allow-Headers, Content-Type, Authorization, X-Requested-With, X-Auth-Token");
		//xhttp.send(JSON.stringify({"firstname" : "Test153", "lastname" : "Tester", "email" : "rstest153@mailinator.com", "source_code" : "abc123", "password" : "password153", "confirmPassword" : "password153", "startUrl" : "https%3A%2F%2Frs-embeddedlogin.herokuapp.com%2F_callback.php", "includePassword" : true}));
		xhttp.send(payload);
	}		

	function cancelReg() {
                var e = document.getElementById("sfid-reg-overlay");
                e.style.display = "none";
                var t = document.getElementById("sfid-reg-button");
                e.parentNode && e.parentNode.removeChild(e),
                t && t.focus()
    }
	
	function authenticateReg() {
            document.getElementById("sfid-error").style.display = "none",
            document.getElementById("sfid-regsubmit").disabled = !0,
            document.getElementById("sfid-regsubmit").className = "sfid-disabled sfid-wide sfid-mb16";
            var e = document.getElementById("sfid-email").value,
			//var e = 'rstest151@mailinator.com';
            t = document.getElementById("sfid-pwd").value;
			//var t = 'password151';
            if (e && t) {
                var i = new XMLHttpRequest;
                i.withCredentials = !0,
                i.open("POST", SFIDWidget.config.communityURL + "/servlet/servlet.loginwidgetcontroller?type=login", !0),
                i.setRequestHeader("Content-type", "application/x-www-form-urlencoded"),
                i.onreadystatechange = function () {
                    var e = this.DONE || 4;
                    if (this.readyState === e) {
                        var t = JSON.parse(i.responseText);
                        if ("invalid" === t.result) {
                            showError(), document.getElementById("sfid-regsubmit").disabled = !1, document.getElementById("sfid-regsubmit").className = "sfid-button sfid-wide sfid-mb16";
                        } else if ("true" === SFIDWidget.config.maskRedirects) {
                            var n = document.createElement("iframe");
                            n.setAttribute("src", t.result),
                            n.className = "sfid-callback",
                            n.id = "sfid-callback",
						document.body.appendChild(n) 
                        } else {
                            window.location.replace(t.result)
						}
                    }
               },
                i.send("username=" + encodeURIComponent(e) + "&password=" + encodeURIComponent(t) + "&startURL=" + encodeURIComponent(SFIDWidget.config.authorizeURL));
            } else
                showError(), document.getElementById("sfid-regsubmit").className = "sfid-button sfid-wide sfid-mb16", document.getElementById("sfid-regsubmit").disabled = !1
	}

	function showError() {
        document.getElementById("sfid-error").style.display = "inline"
    }
   
	</script>
	
  </body>
</html>
