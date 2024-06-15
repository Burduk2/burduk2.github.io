<?php
    require_once './static/inc/config.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta property="og:image" content="./static/img/logo1080.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="./static/img/logo1080.jpg">

    <meta name="description" content="We create websites and maximize their potential to build trust with your customers, globalize your business, leave a lasting impression, imprint your image to minds">
    <meta name="keywords" content="website, web development, create website, increase sales, create portfolio, web design, UI, UX">
    <meta property="og:title" content="Impreent Web Development">
    <meta property="og:description" content="We create websites and maximize their potential to build trust with your customers, globalize your business, leave a lasting impression, imprint your image to minds">
    <meta name="twitter:title" content="Impreent Web Development">
    <meta name="twitter:description" content="We create websites and maximize their potential to build trust with your customers, globalize your business, leave a lasting impression, imprint your image to minds">
    <title>Impreent Web Development</title>

    <link rel="shortcut icon" href="./static/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/css/global.css">
    <link rel="stylesheet" href="./static/css/index.css">
    <script src="./static/js/index.js" defer></script>
</head>
<body>
    <nav>
        <img src="./static/img/logo1080.png" alt="Impreent Web Development">
        <div class="menu">
            <a class="brand-subheading" href="#faq">Services</a>
            <a class="brand-subheading" href="#work">Work</a>
            <a class="brand-subheading contact" href="#contact">Contact</a>
        </div>
    </nav>
    <section class="s-hero">
        <h1>See your dreams come true. Globalize Your Business. <span class="brand-text">Go Beyond.</span></h1>
        <img src="./static/img/hero.flame.png" alt="Impreent Web Development" class="flame-img">
        <div class="green-section" id="reasons">
            <h2 class="brand-subheading">impreent, beyond creating websites</h2>
            <div class="marquee-strings">
                <p class="marquee-string ms1"></p>
                <p class="marquee-string ms2"></p>
                <p class="marquee-string ms3"></p>
            </div>
            <a href="#contact" class="brand-btn2 cta">get my website. go beyond</a>
        </div>
    </section>
    <section class="s-steps" id="steps">
        <img class="bg-img left" src="./static/img/steps.flame.png" alt="We copywrite, build layout, design, embed into code and maintain your website - Impreent">
        <img class="bg-img right" src="./static/img/steps.flame.png" alt="We will build the ultimate platform for your needs">
        <h1 class="section-title"><span class="brand-text">Maximizing</span> the potential of your website</h1>
        <p class="section-subheading">This is how we will build the ultimate platform for your needs, one step at a time.</p>
        <div class="steps-wrapper">
            <div class="step brand-box">
                <h2 class="brand-subheading">1. copywrite</h2>
                <p>Finding the right blend of creativity and strategy, transforming ideas into powerful narratives that drive results and leave a lasting impression.</p>
            </div>
            <div class="step brand-box">
                <h2 class="brand-subheading">2. build layout</h2>
                <p>Engineering an elegant and intuitive layout that captivates and delights users.</p>
            </div>
            <div class="step brand-box">
                <h2 class="brand-subheading">3. design</h2>
                <p>Carefully crafting every element to be pixel-perfect, ensuring seamless functionality and aesthetic appeal that genuinely leave an impreent in viewers’ minds.</p>
            </div>
            <div class="step brand-box">
                <h2 class="brand-subheading">4. Embed into code</h2>
                <p>Translating versatile, exclusive design into dependable, enduring code that delivers world-class functionality and reliability as well as the responsiveness of the design.</p>
            </div>
            <div class="step brand-box">
                <h2 class="brand-subheading">5. Maintain</h2>
                <p>Sustaining website’s operation with meticulous care, ensuring it remains secure, updated, and optimized for seamless performance.</p>
            </div>
        </div>
    </section>
    <section class="s-work" id="work">
        <h1 class="section-title">Our work</h1>
        <h1>Somthing beautiful will appear here soon...</h1>
    </section>
    <section class="s-trust" id="trust">
        <h1 class="section-title">Why people trust us</h1>
        <div class="points-wrapper">
            <div class="point maintenance">
                <img src="./static/img/trust.maintenance.png" alt="Free full maintenace of your website 14 days after launch">
                <div class="textbox">
                    <h2 class="title brand-subheading">14-day maintenace of your website</h2>
                    <p>Receive free, full maintenance of your website for 14 days after launch. Our team will promptly address any issues to ensure smooth operation. Enjoy peace of mind with our complimentary post-launch support.</p>
                </div>
            </div>
            <div class="point transparency">
                <div class="textbox">
                    <h2 class="title brand-subheading">Transparency, consideration of your feedback</h2>
                    <p>We prioritize transparency by providing you with regular updates on the project's progress. Your feedback is highly valued and actively considered at every stage. This ensures that your insights shape the final outcome, reflecting your vision and needs.</p>
                </div>
                <img src="./static/img/trust.transparency.png" alt="Transparency, consideration of your feedback">
            </div>
            <div class="point cactus">
                <img src="./static/img/trust.cactus.png" alt="A gift of cactus for your office">    
                <div class="textbox">
                    <h2 class="title brand-subheading">A cactus for your office</h2>
                    <p>A cactus with your brand name artistically drawn on it as a gift to your order. This personalized item adds a distinctive flair to your working place. Enjoy a better atmosphere in your office.</p>
                </div>
            </div>
        </div>
        <img class="bottom-flame" src="./static/img/hero.flame.png">
    </section>
    <section class="s-contact" id="contact">
        <img class="bg-img" src="./static/img/steps.flame.png" alt="We copywrite, build layout, design, embed into code and maintain your website - Impreent">

        <h1 class="section-title">Wanna Go <span class="brand-text">Beyond?</span> Contact us</h1>
        <p class="section-subheading">We’ll work together to <span class="brand-text"></span></p>

        <form action="./static/inc/clientContact.inc.php" method="post">
            <div class="row">
                <div>
                    <label for="subject-inp">Name</label><br>
                    <input placeholder="Type name..." type="text" name="name" id="name-inp" maxlength="100" required><br>

                    <label for="subject-inp">Subject</label><br>
                    <input placeholder="Type subject..." type="text" name="subject" id="subject-inp" maxlength="100" required><br>

                    <label>Contacts (choose one)</label><br>
                    <div class="contacts-select">
                        <div class="option brand-box">
                            <label for="email-inp">Email:</label>
                            <input placeholder="example@gmail.com" type="email" name="contacts" id="email-inp"  
                                maxlength="100" required>
                        </div>
                        <div class="option brand-box disabled">
                            <label for="tel-inp">Phone:</label>
                            <input placeholder="+1 123-456-7890" type="tel" name="contacts" id="tel-inp"  
                                maxlength="100" disabled required>
                        </div>
                        <div class="option brand-box disabled">
                            <label for="telegram-inp">Telegram:</label>
                            <input placeholder="@username" type="text" name="contacts" id="telegram-inp"  
                                maxlength="100" disabled required>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="message-inp">Message</label><br>
                    <textarea placeholder="Type message..." type="text" name="message" id="message-inp" rows="7" maxlength="500" required></textarea>
                </div>
            </div>
            <button type="submit" class="brand-btn1">send</button>
        </form>
    </section>
    <section class="s-faq" id="faq">
        <h1 class="section-title">FAQ</h1>
        <div class="faq-wrapper">
            <div class="faq">
                <h3 class="q brand-subheading">Do I get a cactus as a gift? <span>+</span></h3>
                <div class="a">We are so glad you asked! <b>Of course!</b> Each of our customers gets a cactus with their brand name drawn on it as a gift! You can place the cactus in your office or another working place, to make it look more alive and nicer!</div>
            </div>
            <div class="faq services">
                <h3 class="q brand-subheading">What services do you provide?<span>+</span></h3>
                <div class="a"><b>Web development</b> (creating websites). We focus exclusively on one service, allowing us to dedicate all our passion and expertise to it. However, this service includes some subservices highlighted <a href="#steps">here.</a></div>
            </div>
            <div class="faq">
                <h3 class="q brand-subheading">Do you do consulting?<span>+</span></h3>
                <div class="a">We provide <b>free consulting</b> regarding your website. We'll guide you through every step, from planning to launch, to ensure your online presence meets your needs and expectations.</div>
            </div>
            <div class="faq">
                <h3 class="q brand-subheading">Why do I need a website?<span>+</span></h3>
                <div class="a">To establish <b>credibility,</b> reach a <b>global audience</b> and <b>engage customers</b> effectively. A website serves as a vital tool for <b>showcasing products and services,</b> driving <b>sales</b>, and facilitating direct <b>communication with potential clients</b> and <a href="#reasons">more.</a></div>
            </div>
            <div class="faq">
                <h3 class="q brand-subheading">What CMS do you work with?<span>+</span></h3>
                <div class="a">We specialize in writing <b>custom code</b> tailored to your specific needs, rather than relying on standard CMS platforms.</div>
            </div>
            <div class="faq">
                <h3 class="q brand-subheading">Do you provide e-commerce solutions?<span>+</span></h3>
                <div class="a"><b>Yes,</b> we specialize in creating custom e-commerce websites with features like product catalogs, shopping carts, secure payment gateways, and more.</div>
            </div>
            <div class="faq">
                <h3 class="q brand-subheading">Can I update the website myself once it’s built?<span>+</span></h3>
                <div class="a"><b>Yes,</b> we can integrate “Admin Panel” functionality into the website, making it easy for you to make changes through a convenient graphic user interface, with no coding required.</div>
            </div>
            <div class="faq">
                <h3 class="q brand-subheading">How do you handle hosting and domain registration?<span>+</span></h3>
                <div class="a">We can assist with <b>new hosting and domain registration,</b> or we can <b>work with your existing hosting</b> provider if you prefer.</div>
            </div>
            <div class="faq">
                <h3 class="q brand-subheading">How do you calculate the price for a project?<span>+</span></h3>
                <div class="a">The price of a project <b>depends</b> on a number of factors, such as the amount of content on the website and features like SEO optimization, speed optimization, content upload, e-commerce functionality and other.</div>
            </div>
            <div class="faq">
                <h3 class="q brand-subheading">What do you need from me to start a project<span>+</span>?</h3>
                <div class="a">We may require various types of information from you, but typically we need <b>general information about you (your bussiness),</b> <b>your brand guidelines,</b> <b>vision,</b> <b>goals.</b></div>
            </div>
        </div>
    </section>
    <footer>
        <img src="./static/img/hero.flame.png" alt="Impreent Web Development" class="top-flame">
        <h2 class="title brand-subheading">
            See your dreams come true. <br> Globalize Your Business.<br> 
            <div>
                <span class="brand-subheading">Go beyond.</span>
                <a class="brand-subheading" href="#contact">Contact us</a>
            </div>
        </h2>
        <div class="bottom-menu">
            <p class="copy">&copy; 2024 Impreent</p>
            <a href="#work">Work</a>
            <a href="#trust">Trust & Safety</a>
            <a href="#faq">FAQ</a>
            <a href="">Partner program?</a>
        </div>
    </footer>
</body>
</html>