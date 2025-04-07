<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>New Message from <?php echo e($data['name']); ?></h2>
    <p>Email: <?php echo e($data['email']); ?></p>
    <p>Subject: <?php echo e($data['subject'] ?? ''); ?></p>
    <p>Phone Number: <?php echo e($data['phone'] ?? ''); ?></p>
    <p><b>Message</b>: <?php echo e($data['message']); ?></p>
</body>
</html><?php /**PATH /home/hlabi/Desktop/work/searchadeal/resources/views/emails/contact.blade.php ENDPATH**/ ?>