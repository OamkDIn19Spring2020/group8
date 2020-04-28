<section class="profile container">
    <div class="row">
        <aside class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-myprofile" role="tab" aria-controls="v-pills-home" aria-selected="true">My Profile</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-favorite" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Favorite</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-review" role="tab" aria-controls="v-pills-profile" aria-selected="false">My Reviews</a>
                <?php echo '<a class="nav-link" href="' . base_url() . 'index.php/myprofile/logout">Logout</a>'; ?>
            </div>
        </aside>
        <div class="tab-content col-9" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-myprofile" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <h2 class="text-center">Personal Info</h2>
                <p class="text-center" style="color: rgb(95, 99, 104);">Basic info, like your name and photo,
                    that you use
                    on SneakerHead
                    services</p>
                <div class="profile__info">
                    <h4>Profile</h4>
                    <p>Some info may be visible to other people using SneakerHead services.</p>
                    <?php
                    if ($fetch_data->num_rows() > 0) {
                        foreach ($fetch_data->result() as $row) {
                    ?>
                            <div class="profile__info--name line row">
                                <div class="col-4">
                                    <p class="thead">name</p>
                                </div>
                                <div class="col-8">
                                    <p>
                                        <?php echo $row->first_name; ?>
                                        <?php echo $row->last_name; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="profile__info--country line row">
                                <div class="col-4">
                                    <p class="thead">country</p>
                                </div>
                                <div class="col-8">
                                    <p>
                                        <?php echo $row->country; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="profile__contactinfo">
                                <h4>Contact info</h4>
                                <p></p>
                                <div class="profile__contactinfo--phone line row">
                                    <div class="col-4">
                                        <p class="thead">phone</p>
                                    </div>
                                </div>
                                <div class="profile__contactinfo--email line row">
                                    <div class="col-4">
                                        <p class="thead">email</p>
                                    </div>
                                </div>
                            <?php
                        }
                    } else {
                            ?>
                            <tr>
                                <td colspan="5">No data found</td>
                            </tr>
                        <?php
                    }
                        ?>
                            </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-favorite" role="tabpanel" aria-labelledby="v-pills-favorite-tab">
                <h3>Nothing</h3>
                <p>Do you want to add something to favorite?</p>
            </div>
            <div class="tab-pane fade" id="v-pills-review" role="tabpanel" aria-labelledby="v-pills-review-tab">
                <h3>Nothing</h3>
                <p>Leave some reviews</p>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            </div>
        </div>
    </div>
</section>
