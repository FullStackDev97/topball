<?php $title = 'contact'; ?>

<?php ob_start(); ?>
<div class="container">



    

    <!-- start section -->
    <section class="big-section wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center margin-six-bottom">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500">Page Contact</h6>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <form id="project-contact-form" action="./?path=main&action=traitement-email" method="POST" >
                            <div class="row row-cols-1 row-cols-md-2">
                                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                <input class="medium-input bg-white margin-25px-bottom required" id="inputEmail" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" type="email" name="email" placeholder="Email">
                                    <input class="medium-input bg-white margin-25px-bottom required" id="inputSujet" pattern="^[a-zA-Z\- ]+$" type="text" name="sujet" placeholder="Subject">
                                </div>
                                <div class="col margin-4-rem-bottom sm-margin-20px-bottom">
                                    <textarea class="medium-textarea bg-white h-200px" rows="6" id="inputMsg" pattern="^[a-zA-Z\-]+$" name="message" placeholder="Your message"></textarea>
                                </div>
                                <div class="col text-start sm-margin-20px-bottom">
                                    <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-10px-right margin-5px-top required">
                                    <label for="terms_condition" class="text-small d-inline-block align-top w-85 md-w-90 xs-w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                </div>
                                <div class="col text-center text-md-end">
                                    <button class="btn btn-medium btn-fancy btn-gradient-sky-blue-pink mb-0" type="submit"> Send Message</button>
                                    
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    

</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>