<?php
include './conn/connect.php';
?>
<?php header('Content-type: application/xml; charset=utf-8') ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
  <!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->

  <?php
  $category = "SELECT * FROM category";
  $query_tag = mysqli_query($conn, $category);
  while ($row_tag = mysqli_fetch_assoc($query_tag)) {
    $category = stripslashes($row_tag['name']);
    $encode_tag = urlencode($category);
    echo "
  <url>
  <loc>https://www.sabai-999.com/category/$encode_tag</loc>
  <lastmod>2023-08-17T13:59:55+00:00</lastmod>
  <changefreq>monthly</changefreq>
  <priority>0.75</priority>
  </url>";
  }
  ?>
</urlset>