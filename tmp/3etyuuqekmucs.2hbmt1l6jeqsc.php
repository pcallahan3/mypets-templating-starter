<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
            <title><?= $title ?></title> 
    </head>
    <body>
      
        <h1><?= $title ?></h1> 
        <p>User logged in as <?= $username ?> using <?= $password ?></p>
        
        
        <!--Working with expressions-->
        <h3>Temp:</h3>
        <p>Fahrenheit: <?= $temp ?> degrees.</p>
        <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
        <p>I like the color <?= $color ?></p>
        <p><?= $radius ?> - C=3.14r</p>
        
        
        
            <p>My firt book mark is <a href="<?= $bookmarks[0] ?>"><?= $bookmarks[0] ?></a></p>
            <ul>
                <?php foreach (($bookmarks?:[]) as $bookmark): ?>
                    <li>
                        <a href="<?= $bookmark ?>"><?= $bookmark ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            
            
      
      
             <ul>
                <?php foreach (($address?:[]) as $key=>$value): ?>
                    <li>
                        <p><?= $key ?> - <?= $value ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
             
             
                 <?php foreach (($desserts?:[]) as $key=>$value): ?>
                    <li>
                       <input type="checkbox" name="<?= $key ?>" value="<?= $value ?>"> "<?= $value ?>"<br>
               
                    </li>
                <?php endforeach; ?>
               
               <?php if ($preferredCustomer): ?>
                    <strong>thank you for being a preferred a customer</strong><br>
                <?php endif; ?>
                
               <?php if ($lastLogin > strtotime('-1 month')): ?>
                    welcome back 
                    <?php else: ?>Its been a while
                <?php endif; ?>
                 
                 <h1>My Pet</h1>
                 <p><?= $mypet->getName() ?></p>
                 <p><?= $mypet->getColor() ?></p>
                 
                  <?php if ($mypet1->getColor() == $color): ?>
                    <img src="https://www.google.com/search?q=google+dog&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjM7aaS_vXTAhVC5GMKHY07ABcQ_AUICygC&biw=1480&bih=688#imgrc=yjIeCqQpoJPRgM:" alt="Mountain View" style="width:304px;height:228px;">
                    <?php else: ?>Been a while 
                <?php endif; ?>
                 
                 
              
             
    </body>
</html>