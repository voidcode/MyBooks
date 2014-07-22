<!DOCTYPE html> 
<html>
<head>
	<title>MyBooks</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head>
<body>
	<!-- logon-page -->
	<div data-role="page" data-theme="b" id="logon-page">
		<div data-role="header">
			<h1>LogOn - MyBooks</h1>
		</div>
		<div data-role="main" class="ui-content">
			<form action="" id="logon-form">
				<div class="fieldcontain">
					<label for="password">Your password</label>
					<input type="hidden" name="f" value="logon"/>
					<input type="password" name="password" placeholder="Write your password here!" required />
					<input type="submit" name="logonSubmit" value="Ok, show mybooks!"/>
				</div>
			</form>
		</div>
		<div data-role="footer" data-position="fixed" class="ui-bar">
			<div class="fieldcontain">
				<input type="button" name="getsourcecode" class="getsourcecode" value="Get source code"/>
			</div>
		</div>
	</div>
	<!-- booklist-page -->
	<div data-role="page" data-theme="b" id="booklist-page">
	    <div data-role="header">
	   		<a href="#logon-page" data-icon="back" data-role="button" class="exit-booklist-page">EXIT</a>
	        <h1>MyBooks</h1>
    	    <a href="#upload-page">UPLOAD</a>
	    </div>
	    <div data-role="main" class="ui-content">
            <ul data-role="listview" data-inset="true"  data-filter="true" class="booklist" data-filter-placeholder="Find a book"></ul>
	    </div>
	    <div data-role="footer" data-position="fixed"></div>
	</div>
	
	<!-- upload-page -->
	<div class="page" data-theme="b" id="upload-page">
	    <div data-role="header">
	        <a href="#booklist-page" data-icon="back" data-role="button">BACK</a>
	        <h1>MyBooks</h1>
	    </div>
	    <div data-role="main">
	        <form enctype="multipart/form-data" id="upload-form">
	            <div class="fieldcontain">
	                <input type="file" name="upfiledata" required />
	                <input type="submit" value="UPLOAD NOW"/>
	            </div>
	        </form>
	    </div>
	    <div data-role="footer" data-position="fixed">
	        <h1>Upload your books to MyBooks</h1>
	    </div>
	</div>
	<!-- include: apicalls.js -->
    <script src="js/apicalls.js"></script>
</body>
</html>