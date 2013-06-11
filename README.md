imageCache
==========

Image Cache


To Configure:

Document Root:
Edit imageCache/slirconfig.class.php line 45 - Add Path to document root

Permissions: 
imageCache/slir-error-log must be writable
imageCache/cache/* must be writable

Original .htaccess file must be present


To Use:

domain.com/imageCache/WIDTH-HEIGHT-CROP/IMAGE-DIRECTORY/FILENAME.jpg

eg:

domain.com/imageCache/w100-h100-c1:1/images/FILENAME.jpg
outputs an image 100x100px, cropped to sa square.

domain.com/imageCache/w100-h100/images/FILENAME.jpg
outputs an image with max width of 100 and max height of 100.


