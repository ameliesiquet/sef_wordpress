<?php
$errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_errors']);
?>
<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" >
    <input type="hidden" name="action" value="contact_form">
    <fieldset class="contact__form">
        <legend class="visually_hidden">Contact form</legend>
        <div class="contact__form__name">
            <div class="contact__form__name__firstname">
                <label for="firstname" data-type="required">Prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" autocomplete="name"
                       required>
                <?php if (!empty($errors)): ?>
                    <p class="form-error"><?php echo $errors['nom'] ?? ''; ?></p>
                <?php endif; ?>
            </div>
            <div class="contact__form__name__lastname">
                <label for="name" data-type="required">Nom</label>
                <input type="text" name="name" id="name" placeholder="Votre nom" autocomplete="family-name"
                       required>
                <?php if (!empty($errors)): ?>
                    <p class="form-error"><?php echo $errors['prenom'] ?? ''; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="contact__form__email">
            <label for="email" data-type="required">Email</label>
            <input type="email" name="email" id="email" placeholder="Votre adresse mail" autocomplete="email"
                   required>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['email'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="contact__form__subject">
            <label for="subject">Comment pouvons nous aider?</label>
            <input type="text" name="subject" id="subject" placeholder="J'ai besoin de vous pour...">
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['subject'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="contact__form__message">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="40" rows="3"
                      placeholder="Ici vous pouvez écrire votre message"></textarea>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['message'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="cta">
            <button type="submit" class="cta__btn">envoyer</button>
        </div>
</form>


