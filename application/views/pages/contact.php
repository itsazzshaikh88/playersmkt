<!-- Section Area - Content Central -->
<style>
    /* Form Theme ---------------------------------------------------------*/
/* line 2678, ../sass/main.scss */
.abc {
	margin: 0;
	width: 100%;
}

/* line 2682, ../sass/main.scss */
.abc input {
	margin-bottom: 25px;
	height: 45px;
	border-radius: 0;
	width: 100%;
}

/* line 2688, ../sass/main.scss */
.abc label {
	font-weight: normal;
}

/* line 2691, ../sass/main.scss */
.abc textarea {
	border-radius: 0;
	width: 100%;
	height: 100px;
}

/* line 2696, ../sass/main.scss */
.abc .btn {
	margin-top: 25px;
	margin-bottom: -5px;
	width: auto;
	height: auto;
	border: 0;
	font-size: 1rem;
}

</style>
<section class="content-info">

    <div class="container">
        <div class="row paddings-mini">
            <!-- Left Content -->
            <div class="col-md-4">
                <aside class="panel-box">
                    <div class="titles no-margin">
                        <h4><?= $this->lang->line('side_top_headding') ?></h4>
                    </div>
                    <div class="info-panel">
                        <address>
                            <strong>Sports Cup, Inc.</strong><br>
                            <i class="fa fa-map-marker"></i><strong><?= $this->lang->line('address') ?> : </strong> fa795 Folsom Ave, Suite 600<br>
                            <i class="fa fa-plane"></i><strong><?= $this->lang->line('city') ?> : </strong>San Francisco, CA 94107<br>
                            <i class="fa fa-phone"></i><strong> <abbr title="Phone"><?= $this->lang->line('phone') ?> :</abbr></strong> (123) 456-7890
                        </address>
                    </div>
                </aside>

                <aside class="panel-box">
                    <div class="titles no-margin">
                        <h4><?= $this->lang->line('side_bottom_headding') ?></h4>
                    </div>
                    <div class="info-panel">
                        <address>
                            <i class="fa fa-envelope"></i><strong><?= $this->lang->line('email') ?> :</strong><a href="mailto:#"> sales@sportscup.com</a><br>
                            <i class="fa fa-envelope"></i><strong><?= $this->lang->line('email') ?> :</strong><a href="mailto:#"> support@sportscup.com</a>
                        </address>
                    </div>
                </aside>
            </div>
            <!-- End Left Content -->

            <!-- Right Content -->
            <div class="col-md-8">
               
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4><?= $this->lang->line('main_headding') ?></h4>
                        </div>
                        <div class="info-panel">
                            <!-- Form Contact -->
                            <form  action="<?= base_url('Contact/add_user_data') ?>" method="POST" class="abc">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label><?= $this->lang->line('your_name') ?> *</label>
                                        <input type="text" required="required" value="" maxlength="100" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label><?= $this->lang->line('your_email') ?> *</label>
                                        <input type="email" required="required" value="" maxlength="100" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label><?= $this->lang->line('subject') ?> *</label>
                                        <input type="text" required="required" value="" maxlength="100" class="form-control" name="subject" id="subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label><?= $this->lang->line('comment') ?> *</label>
                                        <textarea maxlength="5000" rows="10" class="form-control" name="massage" id="massage" style="height: 138px;" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="<?= $this->lang->line('send_msg') ?>" class="btn btn-lg btn-primary">
                                    </div>
                                </div>
                            </form>
                            <!-- End Form Contact -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
            <!-- End Right Content -->
        </div>
    </div>

</section>
<!-- End Section Area -  Content Central -->