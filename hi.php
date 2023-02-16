<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $store = array (
            'dong_ho' => array (
                'sp01' => array (
                    'image' => 'https://thekeyluxury.vn/uploads/dong-ho-rolex-doi-1.jpg',
                    'name' => 'Rolex',
                    'price' => '300.000.000',
                ),
                'sp02' => array (
                    'image' => 'https://chonhangchuan.com/wp-content/uploads/2022/03/Cac-hang-dong-ho-noi-tieng-6.jpg',
                    'name' => 'Texcon',
                    'price' => '210.000.000',
                ),
                'sp03' => array (
                    'image' => 'https://a.ipricegroup.com/media/Bich/dong-ho-noi-tieng-the-gioi-tag-heuer.jpg',
                    'name' => 'Alunix',
                    'price' => '360.000.000',
                ),
                'sp04' => array (
                    'image' => 'https://luxewatch.vn/wp-content/uploads/2018/04/2312.jpg',
                    'name' => 'Marin',
                    'price' => '80.000.000',
                ),
                'sp05' => array (
                    'image' => 'https://euluxury.vn/upload_images/20220409/files/franck_muller_v41_vang_hong.jpg',
                    'name' => 'Muler',
                    'price' => '102.000.000',
                ),
            ),
            'dong_ho_noi_bat' => array (
                'sp1' => array (
                    'image' => 'https://cdn.tgdd.vn/hoi-dap/1453131/top-20-cac-thuong-hieu-dong-ho-noi-tieng-chiem-linh-thi%20(23)-800x481.jpg',
                    'name' => 'Omega',
                    'price' => '480.000.000',
                ),
                'sp2' => array (
                    'image' => 'https://chiaki.vn/upload/news/content/2022/03/hang-dong-ho-casio-png-1646819669-09032022165429.png',
                    'name' => 'Sun',
                    'price' => '210.000.000',
                ),
                'sp3' => array (
                    'image' => 'https://dongholuxury8668.com/wp-content/uploads/2020/02/hang-dong-ho-noi-tieng.jpg',
                    'name' => 'Tomas',
                    'price' => '120.000.000',
            ),
        )
    );    
    ?>

    <div id="content">
        
        <?php 
            foreach($store as $k => $v) {
                
                if ($k == 'dong_ho') {  
                    ?>
                <h1 class="list_title">Đồng hồ</h1> <br>
                <div class="show">
                    <?php
                    foreach ($v as $k1 => $v1) {
                        ?>
                        <div class="my_oclock">
                            <div class="donghonb">
                                <p id="hinh_anh"><img src="<?php echo $v1['image']; ?>" alt=""></p> <br>
                                <p><span>Name: </span><?php echo $v1 ['name'] ?></p>
                                <p><span> Price: </span><?php echo $v1 ['price'] ?></p>
                            </div>
                        </div>
                        <?php
                    };
                    
                }
                elseif ($k == 'dong_ho_noi_bat') {
                    ?>
                </div>

                    <h1 class="list_title">Đồng hồ nổi bật</h1> <br>
                    <div class="show">
                        <?php
                        foreach ($v as $k1 => $v1) {
                            ?>
                            <div class="my_oclock">
                                <div class="donghonb">
                                    <p><img src="<?php echo $v1['image']; ?>" alt=""></p> <br>
                                    <p><span>Name: </span><?php echo $v1 ['name'] ?></p>
                                    <p><span> Price: </span><?php echo $v1 ['price'] ?></p>
                                </div>
                            </div>
                            <?php   
                        }
                    ?>     
                </div>          
                <?php
                }
            }
        
    
        ?>
    </div>
  
</body>
</html>