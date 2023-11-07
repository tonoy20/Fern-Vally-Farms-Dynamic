<?php
// Template Name: contact
get_header();
?>
<div class="container">
    <section class="mb-4">
        <div class="row">
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                    <div class="row pb-4">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="10" class="form-control md-textarea" placeholder="Your message"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-center text-md-left">
                    <a class="btn btn-primary">Send</a>
                </div>
                <div class="status"></div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>