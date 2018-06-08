<div class="content ">
  <div class='blog-posts'>
    <div class='cf'>

<?php
$token = '3XFMHJAASKX7JILMP6KQ';
$organizer_id = '17420161476';
$url = file_get_contents('https://www.eventbriteapi.com/v3/events/search/?token='.$token.'&organizer.id='.$organizer_id.'&expand=venue');
$kq = json_decode($url, true);

foreach ( $kq['events'] as $events ) {
 
        extract($events); ?>
        <div class='post'>
            <a href='#'>
              <div class='image' style='background-image: url(<?php echo $logo['original']['url'] ?>)'>
                <div class='time'>
                  <div class='date'>
                    <?php 
                    $date=date_create($start['local']);
                    echo date_format($date,"d");
                    ?>
                  </div>
                  <div class='month'>
                  <?php 
                    $date=date_create($start['local']);
                    echo date_format($date,"M");
                    ?>
                  </div>
                </div>
                
                  <?php
                  for ($x = 0; $x <= strlen($name['text']); $x++) {
                    if($name['text'][$x] == '*'){
                      echo '<div class="highlights">Sự kiện nổi bật</div>';
                    }
                  }
                  ?>
              </div>
              <div class='content'>
                <h3><a href="<?php bloginfo('home') ?>/event-detail/?id=<?php echo $id ?>"> <?php echo $name['text'] ?> </a></h1>
                <p><?php echo $description['text'] ?></p>
                <div class='region'><?php echo $venue['address']['region'] ?></div>
              </div>
            </a>
          </div>
    <?php } ?>
    </div>
  </div>
</div>