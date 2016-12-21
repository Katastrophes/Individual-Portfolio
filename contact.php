<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
    <title>Teron Russell | Digital Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/long-scrolly.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
       
    <!-- Navigation -->
    <?php include('/inc/navbar.inc'); ?>
    
    <div class="top">
    <h1>Get in Touch</h1>
    </div>
    
    <div class="content">
    <form name="mail" method="post" action="database-write.php" >
        
        
        <div >
        <div class="items">
        Name:<br>
        <input type="text" name="firstname" required="required"><br>
        </div>
        
        <div class="items">
        Email:<br>
        <input type="email" name="email"><br>
        </div>
        
        <div class="items">
        Telephone:<br>
        <input type="text" name="phone"><br>
        </div>
        
        <div class="message">
        Message:<br>
            <textarea placeholder="" required="required" name="message"></textarea><br>
        </div>
        
        
        <div>
        <br><input class="Cbutton" type="submit" name="button">
        </div>
        </div>
        
    </form>
    </div>
    
    
    <!-- Email Validation -->
    <script src="js/validate.js"></script>
    
</body>
</html>