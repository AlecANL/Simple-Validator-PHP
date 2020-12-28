<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/styles.css">
    <title>Contact Form</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="post" class="form">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name: " data-field="field-1" value="<?php !$hasSend && isset($name) ? print $name: "" ?>" >
            <input type="text" class="form-control" id="email" name="email" placeholder="Email: " data-field="field-2" value="<?php !$hasSend && isset($email) ? print $email: "" ?>">
            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message:" data-field="field-3" value="<?php !$hasSend && isset($message) ? print $message: "" ?>"></textarea>
            <?php if(!empty($errors)): ?>
                <div class="alert error">
                    <?php echo $errors ?>
                </div>
            <?php endif ?>
            <input type="submit" value="Send Message" id="button" class="btn btn--primary" name="submit">
        </form>
    </div>
    <!-- <script src="/app/src/js/app.js"></script> -->
</body>
</html>