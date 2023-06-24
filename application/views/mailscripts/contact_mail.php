<div><h2><?php echo SITE_NAME; ?></h2></div>
<h2>Hello, <?php echo $name; ?></h2><hr/>
<h3><?php echo $title; ?> <br><p>Got inquiry mail from <?php echo $message['name']; ?></p>
<pre>
    Name: <?php echo $message['name']; ?><br>
    Phone: <?php echo $message['phone']; ?><br>
    Message: <?php echo $message['subject']; ?>
</pre>
