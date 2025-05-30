<style>
    .main-footer {
    color: white;
    font-family: Arial, sans-serif;
        z-index: 10;
    position: relative;
    overflow: hidden;
}

.newsletter {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 30px;
    width: 80%;
    margin: auto;
}
.fa-envelope{
    font-size: 50px;
}
.newsletter-left {
    display: flex;
    align-items: center;
    font-size: 30px;
    gap: 30px;
    font-weight: 700;
}

.newsletter-form {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    margin-top: 10px;
}

.newsletter-form input {
    padding: 10px;
    border-radius: 4px;
    border: none;
    width: 465px;
    max-width: 100%;
}

.newsletter-form button {
    padding: 11px 40px;
    background: #ffa800;
    border: none;
    border-radius: 4px;
    color: white;
    font-weight: bold;
    cursor: pointer;
    font-size: 21px;
}

.footer-columns {
    width: 80%;
    margin: auto;
    color: #344462;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
    margin-bottom: 30px;
}

.footer-col h4 {
    margin-bottom: 15px;
    font-size: 1.5rem;
    display: inline-block;
    padding-bottom: 5px;
}

.footer-col ul {
    list-style: none;
    padding: 0;
}

.footer-col ul li {
    margin-bottom: 10px;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 8px;
}

.footer-logo {
    width: 100%;
    margin-bottom: 10px;
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 20px 15px 20px 15px;
    font-size: 1.2rem;
    width: 80%;
    margin: auto;
    align-items: center;
    
}
.main-footer-bottom{
    background:#0e9de5;
}
.social-icons a {
    color: white;
    margin-left: 10px;
    font-size: 1.2rem;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #ffa800;
}


.footer-col ul li {
    margin-bottom: 10px;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

.footer-col ul li i {
    background-color: #0e9de5;
    color: #fff;
    width: 10px;
    height: 10px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
}
.main-newsletter{
    background: #0e9de5;
    padding: 40px 0px;
}
h4{
    color:#0e9de5;
    margin-top: 0px;
}
.col1{
    border-right: solid 1px #344462;
}
.col2{
    border-right: solid 1px #344462;
}
.col3{
    border-right: solid 1px #344462;
}
.main-footer-columns{
    padding-top: 50px;
}


.social-icons {
    display: flex;
    gap: 0px;
}

.social-icons a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    color: white; /* icon color */
    width: 40px;
    height: 40px;
    border: 2px solid white; /* border color */
    border-radius: 50%;
    text-decoration: none;
    font-size: 18px;
    transition: background 0.3s, color 0.3s;
}
.image-articles{
        display: flex;
    justify-content: center;
    background: white;
}

/* Hide menu toggle on larger screens */
@media (max-width: 768px) {
    
.newsletter-form input {
            width: 85%;
}

.newsletter {
    display: flex;
    align-items: flex-start;
    margin-bottom: 30px;
    width: 100%;
    margin: auto;
    flex-direction: column;
    padding: 0px 10px;
}
.newsletter-left {
    font-size: 25px;
}
.fa-envelope {
    font-size: 35px;
}
.col1 {
    border-right: none;
}
.col2 {
    border-right: none;
}
.col3 {
    border-right: none;
}

}
section{
    overflow: hidden;
}


    
</style>

<footer class="main-footer">
<div class="image-articles">
<img src="images/article5.png" alt="Logo" class="footer-article">
</div>


    <div class="main-cont-footer">
        
    <!-- Newsletter Signup Section -->
    <div class="main-newsletter">
    <div class="newsletter">
        <div class="newsletter-left">
            <i class="fas fa-envelope"></i>
            <span>SIGN UP FOR OUR NEWSLETTER:</span>
        </div>
        <form class="newsletter-form">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit">SUBSCRIBE</button>
        </form>
    </div>
     </div>
    

    <!-- Footer Middle Section -->
     <div class="main-footer-columns">
    <div class="footer-columns">
        
        
        <div class="footer-col col1">
            <img src="logo/logo1.png" alt="Logo" class="footer-logo">
            <p>At Home Buys Plus, we're not just about selling Furniture! Sure, as the Florida's number 1 Furniture store we do have one of the most exclusive collections of Furni- ture styles available online, but with our wide selection of products from mattress- es to Fire Places, we cater to your entire furniture needs - and all at great value bargain prices!</p>
        </div>

        <div class="footer-col col2">
            <h4>SHOP BY:</h4>
            <ul>
                <li><i class="fas"></i> Accents</li>
                <li><i class="fas"></i> Bedrooms</li>
                <li><i class="fas"></i> Dining & Living Room</li>
                <li><i class="fas"></i> Kids & Entertainment</li>
            </ul>
        </div>

        <div class="footer-col col3">
            <h4>INFORMATION & SUPPORT</h4>
            <ul>
                <li><i class="fas"></i> Delivery Detail</li>
                <li><i class="fas"></i> Returns Policy</li>
                <li><i class="fas"></i> About Us</li>
                <li><i class="fas"></i> Terms & Conditions</li>
                <li><i class="fas"></i> My Account</li>
                <li><i class="fas"></i> FAQ</li>
                <li><i class="fas"></i> Privacy Policy</li>
            </ul>
        </div>

        <div class="footer-col ">
            <h4>CUSTOMER SERVICE</h4>
            <ul>
                <li><i class="fas"></i> About Us</li>
                <li><i class="fas"></i> Contact Us</li>
                <li><i class="fas"></i> Delivery</li>
                <li><i class="fas"></i> Sign up for email</li>
                <li><i class="fas"></i> Deal match</li>
                <li><i class="fas"></i> Financing</li>
                <li><i class="fas"></i> FAQs</li>
                <li><i class="fas"></i> Order and Returns</li>
            </ul>
        </div>
    </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="main-footer-bottom">
    <div class="footer-bottom">
        <p>© 2016 KingsGreatBuyPlus. All Rights Reserved.</p>
        
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        
    </div>
    </div>
     </div>
</footer>

