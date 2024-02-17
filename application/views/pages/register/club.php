<div class="default-section mt-5 mb-5">
    <?php
    if (empty($player_detail)) :
    ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-radius-none custom-login-card">
                        <div class="card-body border-radius-none">
                            <h3 class="text-green"><?= $this->lang->line('club_main_headding') ?></h3>
                            <small class="text-black"><?= $this->lang->line('club_register_p') ?>
                                
                            </small>
                            <hr>
                            <form id="form" onsubmit="submitForm()" method="post" action="register/player">
                                <div class=" form-group row">
                                    <label class="control-label text-black col-sm-3"><?= $this->lang->line('club_first_name') ?> <span class="float-right">:</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="<?= $this->lang->line('club_input_first_name') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-black col-sm-3"><?= $this->lang->line('club_last_name') ?> <span class="float-right">:</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="<?= $this->lang->line('club_input_last_name') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-black col-sm-3"><?= $this->lang->line('club_country_name') ?> <span class="float-right">:</span> </label>
                                    <div class="col-sm-9">
                                        <?php include 'partials/__countries.php' ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-black col-sm-3"><?= $this->lang->line('club_city_name') ?> <span class="float-right">:</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text" id="city" name="city" class="form-control" placeholder="<?= $this->lang->line('club_input_city_name') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-black col-sm-3"><?= $this->lang->line('club_your_sports') ?> <span class="float-right">:</span> </label>
                                    <div class="col-sm-9">
                                        <select id="sport_id" name="sport_id" class="form-control form-control-sm" required="">
                                            <option value=""><?= $this->lang->line('club_input_your_sports') ?></option>
                                            <?php
                                            foreach ($sports as $sport) :
                                            ?>
                                                <option value="<?= $sport['sr_no'] ?>"><?= $sport['sport_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-black col-sm-3"><?= $this->lang->line('club_your_mail') ?> <span class="float-right">:</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="<?= $this->lang->line('club_input_your_mail') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-black col-sm-3"><?= $this->lang->line('club_your_pass') ?> <span class="float-right">:</span> </label>
                                    <div class="col-sm-9">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="<?= $this->lang->line('club_input_your_pass') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-black col-sm-3"><?= $this->lang->line('club_your_password') ?> <span class="float-right">:</span> </label>
                                    <div class="col-sm-9">
                                        <input type="password" id="con_password" name="con_password" class="form-control" placeholder="<?= $this->lang->line('club_input_your_password') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary" id="submit-btn"><?= $this->lang->line('club_submit') ?> </button>
                                </div>
                                <div class="alert alert-danger d-none" id="message-container" tabindex="0">
                                    <p class="pb-0 mb-0" id="message-box"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" text-center mt-5">
                        <h5 class="mt-5 text-black"><?= $this->lang->line('club_register_info') ?></h5>
                        <img src="images/register.png" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    <?php else : ?>
        <div class="container paddings" style="background-color: #fff;">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="images/email.png" class="img-fluid w-50" alt="">
                </div>
                <div class="col-md-6 p-5">
                    <h3 class="text-green"><?= $this->lang->line('congo') ?> <?= "$player_detail[first_name] $player_detail[last_name]"; ?></h3>
                    <h5 class="mt-3"><?= $this->lang->line('congo_p1') ?>
                        
                    </h5>
                    <h5 class="mt-3"><?= $this->lang->line('congo_p2') ?>
                        
                    </h5>
                    <div class="text-center">
                        <a class="btn btn-primary mt-5" href="login/player"><?= $this->lang->line('login_acc') ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>