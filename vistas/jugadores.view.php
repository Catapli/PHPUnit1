
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $player->getName()?></h5>
                                <!-- Product price-->
                                <span ><?= 'Age:'.$player->age()?></span><br>
                                <span ><?= 'Goals:'.$player->getGoals()?></span><br>
                                <span ><?= 'Played:'.$player->getMinutes()." (".$player->getMatches().")"?></span>

                                <div class="d-flex justify-content-center small text-warning mb-2" >
                                    <?php  for ($i = 0; $i < $player->getYellowCard(); $i++){?>
                                        <div class="bi-star-fill"></div>
                                    <?php }?>
                                    <?php  for ($i = 0; $i < $player->getRedCard(); $i++){?>
                                        <div class="bi-star-fill" style="color:red"></div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#"><?=$player->getCountry()?></a></div>
                        </div>
                    </div>
                </div>



