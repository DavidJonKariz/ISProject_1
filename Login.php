<!DOCTYPE html><html>
<head>
    <title>Login</title>
    <link rel="stylesheet"  href="CSS/login.css">
    <meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1"/><link rel="stylesheet" 
    href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/><link type="text/css" rel="stylesheet" 
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/><link rel="stylesheet" href="/cas/css/cas.css"/>
    <link rel="icon" href="/cas/favicon.ico" type="image/x-icon"/><script type="text/javascript" 
    src="//cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.3.0/zxcvbn.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
    <script>
        /*<![CDATA[*/

        var trackGeoLocation = false;

        var googleAnalyticsTrackingId = null;

        if (googleAnalyticsTrackingId != null && googleAnalyticsTrackingId != '') {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', googleAnalyticsTrackingId, 'auto');
            ga('send', 'pageview');
        }

        /*]]>*/
    </script>
    
</head>

<body id="cas" class="login" style="background-color: #F5F5F5;">
    
    <section id="the_login_stuff" style="background-color: #FFFFFF; margin-left: 30%; width: 625px; padding: 20px;
             margin-top: 10%;">
<div id="container" class="container">
<!--    <header>
    <a id="logo" href="http://www.strathmore.edu" target="_blank" title="Strathmore University">Strathmore</a>
</header>-->
    

<div id="content">
        <div class="row">
            <div id="notices" class="col-sm-12 col-md-6 col-md-push-6">
                <div id="cookiesDisabled" class="alert alert-info" style="display:none;">
    <h2>Browser cookies disabled</h2>
    <p>Your browser does not accept cookies. Single Sign On WILL NOT WORK.</p>
</div>
                
</div>
            <div class="col-sm-12 col-md-6 col-md-pull-6">
                
                <div class="box" id="login">
                    
<!--    <div class="login-header">
        <h2>Login</h2>
        <span class="fa-stack fa-2x hidden-xs">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
        </span>
    </div>-->

    <form method="post" id="fm1">

        <h2>Enter your Username and Password</h2>

        <section class="row">
            <label for="username"><span class="accesskey">U</span>sername:</label><br>

            <div>
                <input class="required"
                       id="username"
                       style="border-radius: 5px;"
                       size="25"
                       tabindex="1"
                       type="text"
                       accesskey="u"
                       autocomplete="off" name="username" value=""/></div>
        </section><br>

        <section class="row">
            <label for="password"><span class="accesskey">P</span>assword:</label><br>
            
            <div>
                <input class="required"
                       type="password"
                       id="password"
                       style="border-radius: 5px;"
                       size="25"
                       tabindex="2"
                       accesskey="p"
                       autocomplete="off" name="password" value=""/><span id="capslock-on" style="display:none;">
                    <p>
                        <i class="fa fa-exclamation-circle"></i>
                        <span>CAPSLOCK key is turned on!</span>
                    </p>
                </span>
            </div><br><br>
        </section>
        <section class="row check">
            </section>
        
        <section class="row btn-row" style="width: 150px;">
            <input type="hidden" name="execution" value="b718a2ea-c24c-471a-8453-dfd2f1472bfc_ZXlKaGJHY2lPaUpJVXpVeE1pSjkuTmk5eFkyTXlhM2Q1VkVoUVUzcHJTbUkyVTA1T0wwSjFaM0phWlhwblNXUlFURWxoUW05dmJtSnlSV1J0UVhwU01tOWFZakpQVTFGRlpteDBkREo0UjFob1NtRTVjVlZ3VkhGcWJWZEVkVzkyZVRCcFdEVm5UV1pDYVhGVlZHWnJNMWR6YTBKVGQzUnVkaTk2TlVGSGNrOU5OVGN6Vlc0eFEyRkdkbGR5ZG1rdlNXd3ZUVFZtT0RWdGJWZHFRbTVSYjJKc1RGZDJSbHBOV1dneFJtNVRWamxpWWsxdFVUSktOVnBwT0dvMlluRlBOQzk1V2xGS05YWm5iM0F5VlhSS2FWVjRTbVF5Y3pobVIzY3pWbVJUT1RKcmFsa3JaSE5MTWtKc1VHTmlXa05yVUVwblMzbHpiMEV4U1hOa2RuRTFabWMyU2paSFMzTTBRU3RJWVhBMk4yeExSVXBhTUU1cllYYzBTMGhxTlhSdFJDOTBabGhGWVhGbFpWbG1Na0pyTlhCbGVXMW5NazVCTlVaWVpVaERTbWxJYVhOQlRIbHpWVmx5WVhKMVYzVndUQzlLZVRSTk1FTkJWazlpYzNNd2JIcEVRbHBZUkVvMVdsSlNVMGwzYWpKRlRtaFVPRkpTT0RacVV5OVRlbTFvU3pWTFRIQm1WMk0wVUVad05rcHZkelJLYURsR2FqZzRUVzVGTUVsWGRtUnVSMlI2Vm1Oa2VuZGxVM2x3VXpONVNteGFWR0pvWlVSSE5VaFhZM2RTTUZBMGFtTk9RVTUxYjJsVWRHbE1TMFJRUkhKTVdqSXlVMngyTlRSa2JERmtVR3hWV1VFNVkybFdPRlZHV1doRmVteEZlbkZxSzNvdlVFdG5NSGRCUnpsSVZFbFRUekZuVXpFMFVVNXVUVmQzTlhGeGNGWlhlVUZTVGxGbGIwaFZWekJCWnpRd1QwVktVblk1Y21sck9EbGpORms0TlVkM2QyMUVjakZCV0V0RGRFbEVUVGR5WVRaemVIZGtTVEZOV0RsR1EyTnhhVFZCTkhkU2FUZ3pRbGR4TURSNE9GbEpiVVY0ZEd4cFdVeG1WVmg2VTJaalQwVXpabFV3TTJWT1N5dEVaV00xZW10VlVYZ3pla042Vml0VVNtMDJNSHBPVEdaR1ZWZFNXRmwyU1RKak1tcDNkV0V2YjJoUVpYRXpWVGxVTVZWTVJ6STRXQzlEYWpOM1ZTOXZNMVV6SzJ0clMwNXJVMnRGZW5WR01XSjJiM013TjI1WGJEUjVNemREV2pCR1ZVcENhVEJ5VEd0NFYyODFNMlJXVDBoNVJ6UldUa3hwV0ZsS1FsRjRSamRaYVVKemJrTm5PVTQyYTJZMFMxUXJZbVFyYkZCc1kyZEthV2N3YzJjelJuaFJZV2xxYUZkUmFXbGFhbGR0ZVZwNVdtNXVVVEpPWm5wRFpHOUJNWFF6UldReVNVeGphalJHY1RkTVVFaHpTamRJWlVObGFrZFROSFl6VFd0TFN6QTNWbGxtYmtaYWVsZzBWRFJOTDNCd2IxcDRXbmRxZEZsaFdXSTNPVFpRWVZWR2JGbEpabEZKY0d0blUybEZTM0ZDVDJnNFYybFBjamR4WTNKM1UySjZlaXRDVmpCcU5USnhjaXMzVUZoMmJqRkRjWE5rT0hSUmJqaHFhMDl2UzIxR1dreFVUVzUzYnk5a09IcFdia1Z2T0dacVdqUndZV1pFTW5wWmNVMTNVVGxtV0hSQ2MzSjFNa2hMTDBKclVYSXJkMW8yWjBzelFWVm5jMXBHUlVRNGJsTnRSMWhqVVhBcksyUmFVSGxoVERCdmFWWllWbHBzVmtVd1FWaHNWMEV6ZVV4UU5FTllhVlJNV1U1d00xVk1MemQ0UlZSMGQycFdWM0ZQYjBWQlozbDJZVlZ4Y2toTVltcExWMng2VEM5RFIyNTRNakJhUjBGYVRHZFVUMEZqZEZCc01FRkxXVkJ0ZG1ZelFuRklNSFZDZWtaaGVGVkVRVWt5WkVRNGMxTjJhWGR2ZVVNd1VYTjJTRnB6SzBGWGIxRTFkMVZTZG14bFRVUlBOVVZ5TmxjMGNXeHFiWGxCUjJaWVlUQjRNelptYWpWb05IWXdVVFYxTjJKTVJsRmpUa292WTNOS1kxUTVVVUpITnpsNlYxbGxjMmxSWTNWeGVucElXbm81YWs5NUwzWnhaVzlQTnpSUFZWTklhMUZGVTFsM2VTdFJkVUYzVERKNk1XbDJhazlRUjBkalJGVnpkMjVvZUdOS04wRktUWGRvV2taeVduWmxaWFJVYkVOMFJuZDVWVkI2T0RKREwwMVZZekJoZWtGV1pXOU9OWGh3UkZReWQzWkNRVTAxTlZwdFRFNDNUMEp1VUVsWmNYRjZia3cyVWt0Q1pFY3lRVlZOYVN0Tkx6Qm5OVU5IWlhKUGNFNU9XRzVZZDNkTFMybFhaRVJEU0hoSFp6WmFkRWhPVkRscFNsTlJZa2hVYW5KSE9HZFNOM1JxYlVRelZsQk1RelExZERKeFJGVkJPR3N5VGt4dU1EZHNkRUZPZDBwYWVraEdXRVpoYkZJdmJWWllXbGxrYkVSQlQxUXZheXR5VWxSRE1rcHliV2h1UzNsRmRVUlFNMEZoVlZGTVJEaEllbE53YnpVcloyNXVXa1VyTlRscUwwWTFPVUpGVW5sTFNVaHZVR1UyU1RGRk5WVk5UemRST0VGVE5VOTFRMU5QTmpCV2FscFNVSEZFWVVONU1qUndXamxoWVVaRGEzaHZPRkJ1Y2pnelVGWnJRMHBDVkhaNFRWcGtaRmRXU21aV1ltVlFXV0ZsVTB4dmNsbEVLeXRVZVcxYWVYcERTa0phVkVWNVJIZHRibFIwZFhWdFkxTklMekpyTWtkbmVuWktTVXRPZUZOcVltWm1OR0Y0VjFSWmJVVmlZMnhsZEVSM2NHd3hUMW80TlVOa00xSkJjMVJNZVV0d1FUQnRNbGh3UVhkeVozZHVjR3QyTjI1b2JEVnNha1p5YUV0eVkxTm5ZVzlNYjA1NFl6bDNTM1ZoZURRdmVpOXplbGR5ZW00MlFsWlRXbU14YldJMVluVndUbXRFWXpOMVowTjZWRkJEWTBWVVNVNDJUVzB5UmpabFJtRldVVmhTVVZOek5Tc3laMWczZFZKdmVFTndjbFU1UlZGUGNGSkNNRlZRTVhsbllXNUtNRXhOUW14SlIyUjBiRGxxUWtSVldIVmtPWGs0ZDJvcldteFJlVzFrT0VJd0wzVmxLMFI2ZEVGb1NrUnFlVk5CYzB0MWMwWmphRXQyZWs1aUx6bGFXVXBxTW1ZeFNESlRXRVJuT0RGMlVHcDVha1p1Ym5sa0wwVnpUWGwwYkdWNmJXUkJjbEEwYzNBMFZtUTVOVEZZUlRabWJuQmxPSHB1VlVKbFYxTkJkbkZPWVVsQlZVeDNXbU00WmtONFN5OVBjRkZFUm5GSlJVcFBTR05JTm5saFJrUjRhMWRRWmtKUFZ6WnNZazloTUhaU1FYWlpOMkUyUlhkTWVHdzBjV2t6UjNKcVMzRmlaa3htU0ZVdlJEQmlkMmN2Ym5KSVluZEVkV01yY1VWVFlVbzJkemN5TUhsYWFsZHVNV0l6YzNodVRVUlpRMWR2YVVackwzRjFPVkZFVURKUVZXNVVWMmN4VTB4VFRUVjFjRVpsYm14cFRGcHNRMk42SzJ4MlVuaG1XRk0wVGxJMGNIVnhUeXRrUkVGS2MxcHJaM0pyVDAwcmNUWXZjRXc0VjJoV1lWQTBXREZJY0hsbWNtbzJRblZIZVc5QmFHa3JRakI2TDBoeVJFbHVUVmhWYkV4MFJVOVFXa1JyVUV4RVkzRktjMVZLVnpoWFVEWmhlbk5DTTFGdlJHVnFNMHhtYTNocGFISlNSMGhpTUc1eWNHSjRaSHBVUlhZd1ZqbFdTWEpYZGtWVVVITTNWVTFLVEhsYU1tVlNSblpMVm1ObGVYaE1UakpZVEZKV2J6SklRVmcxV2tGcU1IWk1RVEJqTkcxdFVreEljek5qV2t4S1JGWXpNWFozTUVWeVdESkdSRVYxWTBwR1NVSk5UbUV3U1cxUVZrZDBXRVJtVGxCTFpFZHBiRGt4Vkhack1UVTNWWE4zU3l0YVpXUm1Oa0V4V2pad2F6QkJkMU5yUjFWWVlYbHlaVk5RUjFWc05VMWFjV05SYkVkTVVGUkNWVFl3VkU5eVZXZDNVRVYwWm5sVU1sbEpaME5XUWtWcFVFRmpjemRtWjA1SVJsUTBOblZNY2tsSFVqZDRhVU5MTjAxWU9UWm9kMjlTVGxjdlNqSmlXR2RTYTB4Q0wxVnhVV2hYY3pWUFNHb3ljamhwVTB4Q1FVVklSbmwyWlVweksxRmpUakpYVnpGeVFrODJaR3N3THpCclJGVkZWMGxtVVZocVMyOUVMM1U1TTFneFozTkRhRVYyTTNscVQyTkNVRkppZFhaT01XWXJlRFZ5YTFRNE5IQmxSa1ZKUVhnNWQwNUlkbEZUS3pZMFNVSjJaMjg1YTAxaFREZE9MM1IxZEdsdUswRnFjbVJzYTFOUFMwZ3hZMHBWZVhNdldYUnpUa2s1U1ZkT2JrdzNSRWRIT1dWcWNrdzBkREJzWjI4MVZ6ZFFjbU5VYzBaU09XTkplR1pMY3pWVFRYQTJZbW94VW1ZelNtTkdMMnBOTWxoc1VsRTBXbmxPV1VKTVQxQkZNRGhpV1dKS1YzQXJZVmRhV2tkc1dYVnFaMjlDVW1JNFQySnRSV1oxY21sRmNTOUdkalJ0UjBRelZVRTNTVEZyYW1Gc2RsTnFVR0ZFZGtSVGVtMTRaMUpSUkZCWmRFSTRZVm9yTXpSMWFuUnNVRXR2U0RkNk5HMDNObWxqTjBocFFXaEpPRVZWYWxCelQweGpaMW94VjJnd1kyUXdhVWh4VDNKblJtSjFNRWwxYTFSemMxRTkuS096WVhfZjJzZ2JyLS1qV2ptVHRYS0NoXzJPdjJjQUhiaTc0ZjFyeXp3WkV2U2dYbXJRWGVzTGF3Um1SMGJ4T21FU2llM2ZPbU0zTUp2NktxakVFTHc="/><input type="hidden" name="_eventId" value="submit"/><input type="hidden" name="geolocation"/><input class="btn btn-submit btn-block"
                   name="submit"
                   accesskey="l"
                   value="LOGIN"
                   tabindex="6"
                   type="submit" style="color: black;"/></section>
    </form><br>
        <script type="text/javascript">
        var i = "One moment please..."
        $("#fm1").submit(function() {
            $(":submit").attr("disabled", true);
            $(":submit").attr("value", i);
            return true;
        });
    </script>
    
</div>
</div>
        </div>
</div><hr>

    <footer>
    <div id="copyright" class="container">
        <p>Copyright &copy; Strathmore University. </p>
        <p>Powered by <a href="http://www.apereo.org/cas" target="_blank">Apereo Central Authentication Service</a>
        </p>
    </div>
</footer>
</div>
        </section>
<div><script src="//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.min.js"></script>
<script type="text/javascript" src="/cas/js/cas.js"></script>



</div>

</body>
</html>
