<!-- Before -->
<img src="img\wallpaper-100w.jpg" alt="Mountains" />
<!-- Fix -->
<img src="img\wallpaper-100w.jpg" width="640" height="360" alt="Mountains" />

<!-- Fix add preload -->
<head>
  <link rel="preload" as="font">
</head>
<!-- Fix add &display=swap -->
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
</head>
<style>
/* AVOID COMPLEX SELECTORS */ 
.box:nth-last-child(-n+1) .title {
    /* styles */
}
/* INSTEAD USE A CLASS */ 
.final-box-title{
  /* styles */
}
</style>