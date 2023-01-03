<article class="article-container-card pt-4">
    <div class="container">

        <?php
        $uri_path = $_SERVER['REQUEST_URI'];
        $currentSegment = basename(parse_url($uri_path, PHP_URL_PATH));
        $category = '';
        $cate_id;
        switch ($currentSegment) {
            case "casino":
                $category = 'คาสิโนออนไลน์';
                $cate_id = '5';
                break;
            case "slot":
                $category = 'สล็อตออนไลน์';
                $cate_id = '4';
                break;
            case "sport":
                $category = 'กีฬาออนไลน์';
                $cate_id = '6';
                break;
            case "lotto":
                $category = 'หวยออนไลน์';
                $cate_id = '3';
                break;
            case "entrance":
                $category = 'ทางเข้า';
                $cate_id = '1';
                break;
            case "register":
                $category = 'สมัคร';
                $cate_id = '2';
                break;
            case "getmoney":
                $category = 'ลิงค์รับทรัพย์';
                $cate_id = '8';
                break;
            case "contact":
                $category = 'ติดต่อ';
                $cate_id = '10';
                break;
            default:
                $category = '';
        }


        ?>
        <?php
        if ($category != '') {
        ?>
            <p class="str-news text-center mb-0"><a href="../category/<?php echo $category ?>">หมวดหมู่ <?php echo $category ?></a></p><br>
        <?php } else { ?>
            <p class="str-news text-center mb-0"><a href="../all-articles/">บทความ / ข่าวสารที่น่าสนใจ</a></p><br>
        <?php
        }
        ?>
        <div class="row d-flex justify-content-center align-items-end">
            <?php
            include_once './conn/connect.php';
            if ($category != '') {
                $sql = "SELECT * ,articles.id as id FROM articles LEFT join category on articles.category_id = category.id WHERE category_id = $cate_id LIMIT 0,3";
                $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
            } else {
                $sql = "SELECT * FROM articles 
            ORDER BY id DESC  LIMIT 0,3 ";
                $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
            }
            while ($resuret = mysqli_fetch_array($q)) {
                $d_topic = $resuret['topic_name'];
                $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                $img = $resuret['image_banner'];
                $date = date("Y-m-d", strtotime($resuret['create_at']));
                $view = $resuret['view'];
                $seo_dec = $resuret['descripion_seo'];
                $url_articles_seo = $resuret['url_articles_seo'];
                $article_id = $resuret['id'];
            ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="bg_articles my-2">
                        <a href="../view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                            <figure class="news-articles-img">
                                <div class="bg-img">
                                    <img class="lazy img-fluid" data-src="../backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                </div>
                            </figure>
                            <div class="px-2">
                                <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                <div class="d-flex flex-column text-center view_date">
                                    <span>
                                        โพสเมื่อ : <?php echo $date; ?>
                                    </span>
                                    <span>
                                        ผู้เข้าชม : <?php echo $view; ?>
                                    </span>
                                </div>

                                <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                        
                            </div>
                        </a>
                        <div class="card__footer">
                            <div class="user">
                                <div class="user__info">
                                    <p>TEGS :</p>
                                    <?php
                                    $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                    $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                    while ($result_tag = $query_tag->fetch_assoc()) {
                                    ?>
                                        <a href="../tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                            <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }

            ?>
        </div>

    </div>
</article>