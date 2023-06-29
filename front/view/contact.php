<?php ob_start() ?>
<head>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeHu84mAAAAAPmFnP54CmB4kbcK4vtgPtW_5qRy"></script>
</head>
<div class="container">
    <form method="post">
        <h2 class="text-center">Contact</h2>
        <div class="mb-3 form">
            <div class="">
                <label for="exampleInputNom1" class="form-label">Votre Nom : *</label>
                <input type="text" name="name" class="form-control" id="exampleInputNom1" required>
            </div>
            <div class="">
                <label for="exampleInputPrenom1" class="form-label">Votre Prénom :</label>
                <input type="text" name="first_name" class="form-control" id="exampleInputPrenom1">
            </div>
        </div>
        <div class="mb-3 form">
            <div class="">
                <label for="exampleInputEmail1" class="form-label">Votre Email : *</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
            </div>
            <div class="">
                <label for="exampleInputTel1" class="form-label">Votre Téléphone *</label>
                <input type="tel" name="tel" class="form-control" id="exampleInputTel1" 
                pattern="[0-9]{10}" placeholder="0606060606" required>
            </div>
            <div class="">
                <label for="exampleInputNom1" class="form-label">Votre Sujet *</label>
                <input type="text" name="sujet" class="form-control" id="exampleInputNom1" required>
            </div>
        </div>
        <div class="mb-3 form">
            <label for="exampleFormControlTextarea1">Votre Message</label>
            <textarea class="form-control" type="text" name="message" rows="5" 
            id="exampleFormControlTextarea1"></textarea>
        </div>
        <div class="g-recaptcha" data-sitekey="6LflDc8mAAAAAAzWC-f8Hr8unhlPMKZCyaM4tGq8"></div>
        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" name="submit" class="btn btn-outline-success">Envoyer</button>
        </div>
        <div class="form">
            <h4><?= $success ?></h4>
        </div>
    </form>
</div>
<script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.enterprise.ready(async () => {
            const token = await grecaptcha.enterprise.execute('6LeHu84mAAAAAPmFnP54CmB4kbcK4vtgPtW_5qRy', {action: 'LOGIN'});
            // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
            // reCAPTCHA Enterprise to the end user's browser.
            // This token must be validated by creating an assessment.
            // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
        });
    }
</script>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>