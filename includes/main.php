

    <style>
        * {
            box-sizing: border-box;
        }

        nav {

            
        }

        .logo {
            float: left;
            padding: 8px;
            margin-left: 16px;
            margin-top: 8px;

        }

        .logo a {
            color: black;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 18px;
            letter-spacing: 0px;
            text-decoration: none;
            color: black;
        }

        nav ul {
            float: right;
        }

        nav ul li {
            display: inline-block;
            float: left;
        }

        nav ul li:not(:first-child) {
            margin-left: 48px;
        }

        nav ul li:last-child {
            margin-right: 24px;
        }

        nav ul li a {
            display: inline-block;
            outline: none;
            color: black;
            text-transform: uppercase;
            text-decoration: none;
            font-size: 14px;
            letter-spacing: 1.2px;
            font-weight: 600;
            color: black;
        }

        @media screen and (max-width: 864px) {
            .logo {
                padding-top: 0px;
                padding-left: 36%;
            }

            .nav-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                background: #fff;
                opacity: 0;
                transition: all 0.2s ease;
            }

            .nav-wrapper ul {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 100%;
            }

            .nav-wrapper ul li {
                display: block;
                float: none;
                width: 100%;
                text-align: right;
                margin-bottom: 10px;
            }

            .nav-wrapper ul li:nth-child(1) a {
                transition-delay: 0.2s;
            }

            .nav-wrapper ul li:nth-child(2) a {
                transition-delay: 0.3s;
            }

            .nav-wrapper ul li:nth-child(3) a {
                transition-delay: 0.4s;
            }

            .nav-wrapper ul li:nth-child(4) a {
                transition-delay: 0.5s;
            }

            .nav-wrapper ul li:not(:first-child) {
                margin-left: 0;
            }

            .nav-wrapper ul li a {
                padding: 10px 24px;
                opacity: 0;
                color: #000;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: 1.2px;
                transform: translateX(-20px);
                transition: all 0.2s ease;
            }

            .nav-btn {
                position: fixed;
                right: 10px;
                top: 10px;
                display: block;
                width: 48px;
                height: 48px;
                cursor: pointer;
                z-index: 9999;
                border-radius: 50%;
            }

            .nav-btn i {
                display: block;
                width: 20px;
                height: 2px;
                background: #000;
                border-radius: 2px;
                margin-left: 14px;
            }

            .nav-btn i:nth-child(1) {
                margin-top: 16px;
            }

            .nav-btn i:nth-child(2) {
                margin-top: 4px;
                opacity: 1;
            }

            .nav-btn i:nth-child(3) {
                margin-top: 4px;
            }
        }

        #nav:checked+.nav-btn {
            transform: rotate(45deg);
        }

        #nav:checked+.nav-btn i {
            background: #000;
            transition: transform 0.2s ease;
        }

        #nav:checked+.nav-btn i:nth-child(1) {
            transform: translateY(6px) rotate(180deg);
        }

        #nav:checked+.nav-btn i:nth-child(2) {
            opacity: 0;
        }

        #nav:checked+.nav-btn i:nth-child(3) {
            transform: translateY(-6px) rotate(90deg);
        }

        #nav:checked~.nav-wrapper {
            z-index: 9990;
            opacity: 1;
        }

        #nav:checked~.nav-wrapper ul li a {
            opacity: 1;
            transform: translateX(0);
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <input type="checkbox" id="nav" class="hidden">
            <label for="nav" class="nav-btn">
                <i></i>
                <i></i>
                <i></i>
            </label>
            <div class="logo animate__animated animate__zoomInDown">
                <a href="index.php">ARV.ID </a>
            </div>
            <div class=" nav-wrapper">
                <ul>


         


                    <li>
                     <?php   if(!isset($_SESSION['customer_email'])){
                            echo'<a href="checkout.php" >sign in</a>';
                        }else{
                            echo'<a href="../logout.php">log out</a>';
                        }
        ?>
                    </li>
        
        <li><a class="currency__change" href="customer/my_account.php?my_orders">
            <?php
            if(!isset($_SESSION['customer_email'])){
            echo "Welcome"; 
            }
            else
            { 
                echo "Welcome : " . $_SESSION['customer_email'] . "";
              }
        ?>
            </a></li>
        
        <li><a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a></li>
                    <li>
                        <a href="shop.php" class="nav-link">Shop</a>
                    </li>
                    <li>
                       <?php
                        if(!isset($_SESSION['customer_email'])){
                          echo'<a href="customer_register.php">Register</a>';
                        }else{
                          
                            echo'<a href="my_account.php?my_orders">My account</a>';
                        }
        ?>
        
        
                    </li>
                    <li>
                        <a href="#" class="nav-link">Contact</a>
                    </li>


                   

                </ul>
            </div>
        </nav>
    </div>
