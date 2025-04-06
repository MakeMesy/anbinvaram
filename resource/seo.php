<?php
$page_image_main = "./assets/img/main/mainicon.png";
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo htmlspecialchars($page_title); ?></title>

<!-- seo -->
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo $page_url; ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
<!-- add keywords ------------------------------ -->
<meta name="keywords" content="">
<meta name="revisit-after" content="1 days">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta property="og:image" content="<?php echo $page_image_main; ?>">
<meta property="og:url" content="<?php echo $page_url; ?>">
<meta property="og:type" content="website">

<!-- Structured Data for SEO -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?php echo htmlspecialchars($page_title); ?>",
        "description": "<?php echo htmlspecialchars($page_description); ?>",
        "url": "<?php echo $page_url; ?>",
        "image": "<?php echo $page_image_main; ?>",
        "publisher": {
            "@type": "Organization",
            "name": "Anbin Varam",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo $page_image_main; ?>"
            }
        }
    }
</script>


<!-- Google tag (gtag.js) -->

<!-- links -->
<link rel="shortcut icon" href="<?php echo $page_image; ?>" type="image/x-icon">

<link rel="stylesheet" href="./assets/css/resource/style.css">
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


