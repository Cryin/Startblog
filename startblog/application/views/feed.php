<?php  echo '<?xml version="1.0" encoding="' . $encoding . '"?>' . "\n"; ?>
<rss version="2.0" >
    <channel>
     
    <title><?php echo $feed_name; ?></title>
 
    <link><?php echo $feed_url; ?></link>
    <description><?php echo $page_description; ?></description>
    <dc:language><?php echo $page_language; ?></dc:language>
    <dc:rights>Copyright <?php echo gmdate("Y", time()); ?></dc:rights>
    <admin:generatorAgent rdf:resource="http://www.codeigniter.com/" />
 
    <?php foreach ($articles as $key => $value): ?>
     
        <item>
 
          <title><?php echo xml_convert($value['title']); ?></title>
          <link><?php echo anchor("/Articles/article/{$value['id']}","","")?></link>
          <guid><?php echo anchor("/Articles/article/{$value['id']}","","")?></guid>
 
            <description><![CDATA[ <?php echo character_limiter($value['content'], 200); ?> ]]></description>
            <pubDate><?php echo $value['published_at']; ?></pubDate>
        </item>
 
         
    <?php endforeach; ?>
     
    </channel>
</rss>