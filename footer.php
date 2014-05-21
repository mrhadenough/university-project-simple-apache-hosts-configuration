</div>
<!-- end main -->
<!-- footer -->
<div id="footer">
    <div id="left_footer">&copy; Copyright 2008 Blue Space</div>
    <div id="right_footer">
        <!-- DO NOT DELETE THIS LINK! READ THE LICENSE! -->
        Design by <a href="http://www.realitysoftware.ca" title="Website Design">Reality Software</a>
        <!-- ****************************************** -->
    </div>
</div>
<!-- end footer -->

<script>
function stylesheet(url) {
    var s = document.createElement('link');
    s.type = 'text/css';
    s.async = true;
    s.href = url;
    s.rel = 'stylesheet';
    var x = document.getElementsByTagName('head')[0];
    x.appendChild(s);
}

function script(url) {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var x = document.getElementsByTagName('head')[0];
    x.appendChild(s);
}

function doFirst() {
	stylesheet('/css/style.min.css');
	script('/js/jquery-2.1.0.min.js');
	script('/js/default.js');
}

</script>

</body>
</html>