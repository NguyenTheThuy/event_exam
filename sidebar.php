
<div class="col-lg-4 col-md-4">
    <div id ="content_right">
            <h2>Sự kiện trong tháng</h2>
            <ul>
            <?php
                $token = '3XFMHJAASKX7JILMP6KQ';
                $organizer_id = '17420161476';
                $url = file_get_contents('https://www.eventbriteapi.com/v3/events/search/?token='.$token.'&organizer.id='.$organizer_id.'&expand=venue');
                $kq = json_decode($url, true);

                     
                    
                foreach ( $kq['events'] as $events ) {
                     
                        extract($events); 
                        $date=date_create($start['local']);
                        if(date_format($date,"m") == date('m')){?>
                        <li>
                            <div class="row">   
                            <a class="col-lg-6 col-md-6" href="<?php bloginfo('home') ?>/event-detail/?id=<?php echo $id ?>">
                            <img src='<?php echo $logo['original']['url'] ?>'/>    
                            </a>
                                    <div class="col-lg-6 col-md-6">
                                        <h4 ><a href="<?php bloginfo('home') ?>/event-detail/?id=<?php echo $id ?>"> <?php echo $name['text'] ?> </a></h4>
                                        <div> 
                                                        <span >
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            <?php 
                                                            $date=date_create($start['local']);
                                                            echo date_format($date,"d/m/Y");
                                                            ?>
                                                        </span> 
                                                    </div>	
                                    </div>
                                </div>
                        </li>
                <?php }} ?>
            </ul>
    </div>
</div>