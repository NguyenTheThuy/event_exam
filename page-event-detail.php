<!--
Template Name: Event Detail Template
-->

  <?php get_header();
?>

<section id="mainContent">
    <div class="content">
        <div class="col-lg-8 col-md-8">
            <div class="content_left">
            <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

$token = '3XFMHJAASKX7JILMP6KQ';
$url = file_get_contents('https://www.eventbriteapi.com/v3/events/'.$id.'/?token='.$token.'');
$kq = json_decode($url, true);
extract($kq);
?>

<div class="page-header" style='background-image: url(<?php echo $logo['original']['url'] ?>)'>
    <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title"><?php echo $name['text'] ?></h1>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.page-header-->
    <!-- news -->
    <div class="card-section">
            <div class="card-block bg-white mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0">
                            <div >
                            <h1><?php echo $name['text'] ?></h1>
                            <h3>
                                <?php 
                                    if($is_free){
                                        echo 'Free';
                                    }
                                ?>
                            </h3>
                        </div>
                            <h3>Thời gian</h3>
                            <div>
                                <h4>Bắt đầu: 
                                    <?php 
                                    $date=date_create($start['local']);
                                    echo date_format($date,"d/m/Y");
                                    ?>
                                </h4>
                                <h4>Kết thúc: 
                                    <?php 
                                    $date=date_create($end['local']);
                                    echo date_format($date,"d/m/Y");
                                    ?>
                                </h4>
                            </div>
                            <h3>Địa điểm</h3>
                            <div>
                                <p><?php echo $venue['address']['country']; ?></p>
                            </div>
                            <h3>Nội dung</h3>
                            <p><?php echo $description['text'] ?></p>
                        </div>
                        <!-- /.section-title -->
                    </div>
                </div>
            </div>
            </div>

  <?php } else {
    echo '00000';
  } ?>
            </div>
            
        </div>
        <?php get_sidebar(); ?>
    </div>
</section>

<?php get_footer(); ?>