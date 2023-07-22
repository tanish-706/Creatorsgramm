<a href="#" id="back-to-top"></a>
            <!-- footer begin -->
            <footer class="pt-0">
            <div class="subfooter footer_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 footer_pad">
                            <div class="de-flex footer_center">
                                <div class="de-flex-col footer_border">
                                    
                                        <span class="copy footer_div">© C-Gramm Inc. All Rights Reserved.</span>
                                    
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#" class="footer_content">Terms of Service</a>
                                        <a href="#" class="footer_content">Help</a>
                                        <a href="privacy.php" class="footer_content">Privacy Policy</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        
    </div>

    <!-- <div id="selector">
        <div id="demo-rtl" class="sc-opt">
            <div class="sc-icon">RTL</div><span class="sc-val">Click to Enable</span>
        </div>
    </div> -->
    
    <!-- Javascript Files
    ================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particles-settings.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
   
        const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
        // show navbar
        nav.classList.toggle('show_new')
        // change icon
        //toggle.classList.toggle('bx-x')
        // add padding to body
        bodypd.classList.toggle('body-pd')
        // add padding to header
        headerpd.classList.toggle('body-pd')
        })
        }
        }

        showNavbar('header-toggle','nav-bar','body-pd','header2')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink(){
        if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
        }
        }
        linkColor.forEach(l=> l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
        });
   </script>
</body>
</html>