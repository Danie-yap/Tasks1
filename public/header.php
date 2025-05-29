<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel D. Orot - WordPress Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .main-container{
            background-color: #2596be;
            color: white;
        }
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            margin: auto;
            padding-top: 10px;
            padding-bottom: 10px;

        }
        .nav-left, .nav-right {
            display: flex;
            gap: 50px;
            align-items: center;
        }
        .nav-left a, .nav-right a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .nav-right {
            position: relative;
        }
        .cart-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            display: none;
            z-index: 10;
        }
        .cart:hover .cart-dropdown {
            display: block;
        }
        .logo-search-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            margin: auto;
        }
        .main-logo-container{
            background: white;
            border-bottom: 2px solid #0e9de5;
        }
        .logo img {
            height: 100%;
            width: 100%;
        }
     

        .cart-btn {

            padding: 10px 15px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
            text-decoration: none;
            font-weight: bold;
        }
       .search-bar {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        max-width: 500px;
    }

    .search-bar input {
        width: 700px;
        padding: 12px;
        padding-right: 50px; /* Space for search icon */
        border: 7px solid #e0f2fc;
        border-radius: 50px;
        outline: none;
            height: 30px;
        font-size: 23px;
        font-weight: bold;
        text-align: center;
    }

    .search-bar input::placeholder {
        color: #b1c3cb;
    }

    .custom-icon-search {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        padding: 5px;
    }

    .custom-icon-search img {
        width: 40px;
        height: 40px;
    }

    .custom-cart {
    background: #ffa800;
    padding: 10px;
    border-radius: 227px;
    display: flex;
    align-items: center;
    cursor: pointer;
    border: none;
    height: 60px;
    width: 60px;
    margin: auto;
    }

    .custom-cart img {
    width: 50px;
    height: 40px;

    }
    .search-cart-icons{
        display: flex;
        gap: 14px;
        justify-content: space-between;
    }
    
    
    .third-nav {
            color: white;
        }
        
    .third-nav-sub-container {
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center;
            width: 80%;
            margin: auto;
            text-align: left;
        }
        
    .third-nav-sub-container a {
            color: #1e3440;
            text-decoration: none;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 25px 10px 25px 10px;
            width: 100%;
            justify-content: center;
            font-weight: bold;
        }
        
        
    .third-nav-sub-container .has-submenu {
            cursor: pointer;
            position: relative;
        }
        
    .third-nav-sub-container .submenu {
            display: none;
            flex-direction: column;
            gap: 5px;
            margin-top: 10px;
            padding-left: 20px;
        }
        
    .third-nav-sub-container .submenu a {
            color: #e0f2fc;
            text-decoration: none;
            padding: 8px 10px;
            font-size: 1rem;
        }
        
        
    .third-nav-sub-container i.fas {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }
        
    .third-nav-sub-container a.has-submenu:hover i.fas {
            transform: rotate(180deg); /* Rotate the arrow when hovering */
        }
        .third-nav-sub-container a.active {
            background-color: #0e9de5;
            color: white;
        }
    
    
     .sub-menu-div{
            WIDTH: 100%;
            display: flex;
            flex-direction: column;
        }
        .submenu{
                position: absolute;
        top: 275px;
    z-index: 22;
    background: rgb(14, 157, 229);
    padding: 20px;
        }
        @media (max-width: 1366px) {
    .search-bar input {
        width: 100%;
    }
}
        @media (max-width: 845px) {

.third-nav-sub-container {

    display: flex;
    flex-direction: column;

}
}





/* Default styles for smaller screens */
@media (max-width: 845px) {
    .nav-container {
        position: relative;
    }

    .nav-left, .nav-right {
        display: none; /* Hide the nav links by default */
        flex-direction: column;
        width: 100%;
        background-color: #2596be;
    }

    .menu-toggle {
        display: block;
        cursor: pointer;
        font-size: 1.5rem;
        color: white;
        padding: 10px;
    }

    .nav-container.active .nav-left,
    .nav-container.active .nav-right {
        display: flex; /* Show nav links when the menu is active */
    }
    
    
    
    .nav-container {
    display: flex
;
    align-items: flex-start;
    width: 100%;
    margin: auto;
    padding-top: 10px;
    padding-bottom: 10px;
    flex-direction: row;
    align-content: flex-start;
    justify-content: flex-start;
    flex-wrap: wrap;
}

.sub-menu-div {
    flex-direction: row;
}

.logo-search-container {
    display: flex
;
    justify-content: space-between;
    align-items: center;
    width: 80%;
    margin: auto;
    flex-direction: column;
}

.search-cart-icons {
    padding-bottom: 35px;
}

}

/* Hide menu toggle on larger screens */
@media (min-width: 846px) {
    .menu-toggle {
        display: none;
    }

    .nav-left, .nav-right {
        display: flex;
    }
}

     section{
    overflow: hidden;
}


    </style>
</head>
<body>

<header>
        <div class="main-container">
            <div class="nav-container">
                        <!-- Hamburger Toggle -->
                        <div class="menu-toggle"><i class="fas fa-bars"></i></div>
            
                        <!-- Navigation Links -->
                        <div class="nav-left">
                            <a href="https://greenyellow-crocodile-526542.hostingersite.com"><i class="fas fa-home"></i> Home</a>
                            <a href="#"><i class="fas fa-comments"></i> Blog</a>
                            <a href="#"><i class="fas fa-map-marker-alt"></i> Track My Order</a>
                            <a href="#"><i class="fas fa-question-circle"></i> Help</a>
                        </div>
            
                        <div class="nav-right">
                            <a href="#"><img src="logo/warded-key.png" alt="Warded Key" style="width: 40px; height: 20px; position: relative; left: 10px;"/> Login</a>
                            <a href="#"><i class="fas fa-bars"></i> Wish List</a>
                            <a href="#"><i class="fas fa-user"></i> My Account</a>
                            <div class="cart">
                                <a href="#" class="cart-btn">
                                    <i class="fas fa-shopping-cart"></i> My Cart <i class="fas fa-chevron-down"></i>
                                </a>
                                <div class="cart-dropdown">
                                    <p>Your cart is empty.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            
             </div>

    <div class="main-logo-container">
            <div class="logo-search-container">
                <div class="logo">
                    <img src="logo\logo1.png" alt="Logo">
                </div>
                
                  <div class="search-cart-icons">  
                <div class="search-bar">
                    <input type="text" placeholder="Find Anything from your home...">
                    <button class="custom-icon-search">
                        <img src="logo/search-icon.png" alt="Search">
                    </button>
                </div>
                
                <button class="custom-cart">
                    <img src="logo/cart-icon.png" alt="Cart">
                </button>
                 </div>

            </div>
             </div>
             

                
                
       <div class="third-nav">   
       
        <div class="third-nav-sub-container">
            <div class="sub-menu-div">
            <a href="#" class="has-submenu active"><i></i> HOME</a>
            </div>
            
            <div class="sub-menu-div">
            <a href="#" class="has-submenu"><i class="fas fa-chevron-down"></i> ACCENT</a>
            <div class="submenu">
                <a href="#">Submenu Item 1</a>
                <a href="#">Submenu Item 2</a>
            </div>
            </div>

           <div class="sub-menu-div">
            <a href="#" class="has-submenu"><i class="fas fa-chevron-down"></i> BEDROOM</a>
            <div class="submenu">
                <a href="#">Submenu Item 1</a>
                <a href="#">Submenu Item 2</a>
            </div>
            </div>
            <div class="sub-menu-div">
            <a href="#" class="has-submenu"><i class="fas fa-chevron-down"></i> DINING & LIVING ROOM</a>
            <div class="submenu">
                <a href="#">Submenu Item 1</a>
                <a href="#">Submenu Item 2</a>
            </div>
            </div>

            <div class="sub-menu-div">
            <a href="#" class="has-submenu"><i class="fas fa-chevron-down"></i> KIDS & ENTERTAINMENT</a>
            <div class="submenu">
                <a href="#">Submenu Item 1</a>
                <a href="#">Submenu Item 2</a>
            </div>
            </div>

        </div>
    </div>

     
</header>


<script>
document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('.third-nav-sub-container a');
    const subMenus = document.querySelectorAll('.third-nav-sub-container .submenu');

    // Handle active state toggle
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            navLinks.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
            
            // Toggle submenu display
            const submenu = this.nextElementSibling;
            if (submenu && submenu.classList.contains('submenu')) {
                submenu.style.display = submenu.style.display === 'none' || submenu.style.display === '' ? 'flex' : 'none';
            }
        });
    });

    // Close other submenus when one is opened
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            subMenus.forEach(menu => {
                if (menu !== this.nextElementSibling) {
                    menu.style.display = 'none';
                }
            });
        });
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navContainer = document.querySelector('.nav-container');

    menuToggle.addEventListener('click', function() {
        navContainer.classList.toggle('active');
    });
});
</script>




</body>
</html>
