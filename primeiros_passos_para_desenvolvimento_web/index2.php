<html>
    <head>
        <title>Meu primeiro site em PHP!</title>
        
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

        <style type="text/css">
            .linha {
                font-weight : bold;
                color       : green;
                padding-left: 15px;
                line-height : 50px;
            }
        </style>    
    </head>

    <body>
        <?php
            for ($i =0; $i < 9; $i++){
                print( " <span class=\"linha\"> Linha Número - " . $i . "</span><br />");
            }
        ?>
    </body>

    <script type="text/javascript">
            $(document) .ready(function() {
                alert("Woohoo!");
            }) ;
    </script>

</html>    