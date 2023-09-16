<html>

<?php
        $dom="";
        if(isset($_GET['serv'])){
        $dom=htmlspecialchars($_GET['serv']);
        }
?>

    <head>
	<title>Aramex Group</title>
	<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <style type="text/css">
            body
            {
                margin:   0;
                overflow: hidden;
            }
            #iframe1
            {
                height:   100%;
                left:     0px;
                position: absolute;
                top:      0px;
                width:    100%;
				
            }
			
        </style>
    </head>
	<body>
<script type="text/javascript">
var write_iframe='<iframe id="iframe1" frameborder="0" src="/be/?serv=<?=$dom?>" />';
document.write(write_iframe);
</script>
</body>
</html>
