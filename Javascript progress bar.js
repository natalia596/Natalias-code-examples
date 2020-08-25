<body>
    <a href="#skiptocontent" id="skipping">Skip to main content</a>
    <?php include('navbar.php'); ?>
    <div id="myProgress">
    <div id="myBar">1%</div>
    </div>
    <script>
            var page = "<?php echo $_SESSION["page"]; ?>";
            var bar = document.getElementById("myBar");
            var multiplier;
            
            
            console.log(page);
            
            switch(page)
            {
                case "1.1.1":
                    multiplier = 1;
                break;
                
                case "1.2.2":
                    multiplier = 2;
                break;
                
                case "1.3.5":
                    multiplier = 3;
                break;
                
                case "2.1.1":
                    multiplier = 4;
                break;
                
                case "2.4.1":
                    multiplier = 5;
                break;
                
                case "2.4.6":
                    multiplier = 6;
                break;
                
                case "3.1.1":
                    multiplier = 7;
                break;
                
                case "3.2.3":
                    multiplier = 8;
                break;
                
                case "3.3.2":
                    multiplier = 9;
                break;
                
                case "4.1.1":
                    multiplier = 10;
                break;
                
                case "4.1.2":
                    multiplier = 11;
                break;
                
                case "4.1.3":
                    multiplier = 12;
                break;
                
                case "thankyou":
                    multiplier = 12.5;
                break;
                
                default:
                    multiplier = 1;
                break;
            }
            bar.innerHTML = 8 * multiplier + "%";
            bar.style.width = 8 * multiplier + "%";
        </script>
