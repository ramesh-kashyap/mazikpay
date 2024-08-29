<div class="page-content">
    <div class="page-info">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Income Reports</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reward Bonus</li>
            </ol>
        </nav>
    </div>
    <div class="main-wrapper">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reward Bonus</h5>

                        <div style="overflow-x:auto">
                        <table id="zero-conf" class="display" style="width:100%">
                       
                        <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Matching 60%</th>
                                    <th>Matching 40%</th>
                                    <th>Bonus</th>
                                    <!--<th>Commission</th>-->
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                if ($first_lvl > 0) {
                                    $status = 'Achieved';
                                    if ($second_lvl > 0) {
                                        $color = 'rgb(251, 189, 24)';
                                        $active = '';
                                    } else {
                                        $color = '#74d28c';
                                        $active = '( Active )';
                                    }
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>1</td>

                                    <td>3 Lac</td>
                                    <td>2 Lac</td>

                                    <td>&#8377; 12500 / Phone</td>
                                    <td><?= @$status ?></td>


                                </tr>


                                <?php

                                if ($second_lvl > 0) {
                                    $status = 'Achieved';
                                    if ($third_lvl > 0) {
                                        $color = 'rgb(251, 189, 24)';
                                    } else {
                                        $color = '#74d28c';
                                    }
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>2</td>

                                    <td>6 Lac</td>
                                    <td>4 Lac</td>

                                    <td>&#8377; 25000 / Laptop</td>
                                    <td><?= @$status ?> </td>


                                </tr>



                                <?php

                                if ($third_lvl > 0) {
                                    $status = 'Achieved';
                                    if ($four_lvl > 0) {
                                        $color = 'rgb(251, 189, 24)';
                                    } else {
                                        $color = '#74d28c';
                                    }
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>3</td>

                                    <td>12 Lac</td>
                                    <td>10 Lac</td>

                                    <td>&#8377; 50000 / Bike </td>
                                    <td><?= @$status ?></td>


                                </tr>


                                <?php

                                if ($four_lvl > 0) {
                                    $status = 'Achieved';
                                    if ($five_lvl > 0) {
                                        $color = 'rgb(251, 189, 24)';
                                    } else {
                                        $color = '#74d28c';
                                    }
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>4</td>

                                    <td>18 Lac</td>
                                    <td>12 Lac</td>

                                    <td>&#8377; 1 Lac / Bullet</td>
                                    <td><?= @$status ?> </td>


                                </tr>

                                <?php

                                if ($five_lvl > 0) {
                                    $status = 'Achieved';
                                    if ($six_lvl > 0) {
                                        $color = 'rgb(251, 189, 24)';
                                    } else {
                                        $color = '#74d28c';
                                    }
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>5</td>

                                    <td>30 Lac</td>
                                    <td>20 Lac</td>

                                    <td>&#8377; 2 Lac / Swift D.P</td>
                                    <td><?= @$status ?> </td>


                                </tr>


                                <?php

                                if ($six_lvl > 0) {
                                    $status = 'Achieved';
                                    if ($seven_lvl > 0) {
                                        $color = 'rgb(251, 189, 24)';
                                    } else {
                                        $color = '#74d28c';
                                    }
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>6</td>

                                    <td>66 Lac</td>
                                    <td>44 Lac</td>

                                    <td>&#8377; 4 Lac / Nexon D.P</td>
                                    <td><?= @$status ?> </td>


                                </tr>


                                <?php

                                if ($seven_lvl > 0) {
                                    $status = 'Achieved';
                                    if ($eight_lvl > 0) {
                                        $color = 'rgb(251, 189, 24)';
                                    } else {
                                        $color = '#74d28c';
                                    }
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>7</td>

                                    <td>1.20 Cr</td>
                                    <td>80 Lac</td>

                                    <td>&#8377; 8 Lac / i20 </td>
                                    <td><?= @$status ?> </td>


                                </tr>


                                <?php

                                if ($eight_lvl > 0) {
                                    $status = 'Achieved';
                                    if ($nine_lvl > 0) {
                                        $color = 'rgb(251, 189, 24)';
                                    } else {
                                        $color = '#74d28c';
                                    }
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>8</td>

                                    <td>3 Cr</td>
                                    <td>2 Cr</td>

                                    <td>&#8377; 15 Lac / Creta </td>
                                    <td><?= @$status ?></td>


                                </tr>


                                <?php

                                if ($nine_lvl > 0) {
                                    $status = 'Achieved';
                                    if ($ten_lvl > 0) {
                                        $color = 'rgb(251, 189, 24)';
                                    } else {
                                        $color = '#74d28c';
                                    }
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>9</td>

                                    <td>6 Cr</td>
                                    <td>4 Cr</td>

                                    <td>&#8377; 40 Lac / BMW</td>
                                    <td><?= @$status ?> </td>


                                </tr>


                                <?php

                                if ($ten_lvl > 0) {
                                    $status = 'Achieved';
                                    $color = '#74d28c';
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000;
font-weight: 600;">
                                    <td>10</td>

                                    <td>11 Cr</td>
                                    <td>7.5 Cr</td>

                                    <td>&#8377; 1 Cr / Villa</td>
                                    <td><?= @$status ?> </td>


                                </tr>

                                <?php

                                if ($eleven_lvl > 0) {
                                    $status = 'Achieved';
                                    $color = '#74d28c';
                                } else {
                                    $status = 'Pending';
                                    $color = 'none';
                                }

                                ?>
                                <tr style="background:<?= @$color ?>;color: #000; font-weight: 600;">
                                    <td>11</td>

                                    <td>25 Cr</td>
                                    <td>10 Cr</td>

                                    <td>&#8377; 1.75 Cr / Villa + World Tour</td>
                                    <td><?= @$status ?> </td>


                                </tr>
                            </tbody>


                        </table>
                      
                        <br>
                        

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
