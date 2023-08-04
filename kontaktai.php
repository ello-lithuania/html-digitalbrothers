<?php include('./header.php'); ?>

<div class="section-main contacts-page-bg contact-page">
    <div class="section-main-inner">
        <div class="section-main-text">
            <h1>Kontaktai</h1>
        </div>
        <h2 class="section-main-heading">ĮVERTINTI PROJEKTĄ</h2>
        <div class="section-contacts-column">
            <div class="first-side">
                <p>Pasidalinkite su mumis savo idėjomis ir poreikiais, o mes pasirūpinsime jų įgyvendinimu.</p>
            </div>
            <div class="second-side">
                <div>
                    <a class="btn-type-outline1 btn-hover-gray" href="tel:+37067631241">+370 676 31 241</a>
                    <a class="btn-type-outline2 btn-hover-gray" href="mailto:info@digitalbrothers.lt">info@digitalbrothers.lt</a>
                </div>
            </div>
        </div>
        <div class="contacts-page-form">
            <form>
            <div class="contacts-page-form-column">
                <input type="text" placeholder="Full name"/>
                <input type="text" placeholder="Company name"/>
            </div>
            <div class="contacts-page-form-column">
                <input type="email" placeholder="Email"/>
                <input type="text" placeholder="Phone (optional)"/>
            </div>
            <div class="form-radio-block">
                <div class="form-radio-block-label">
                    <p>Kokios paslaugos jus domina?</p>
                </div>
                <div class="form-radio-block-main">
                    <label class="custom-radio">
                        <input type="radio" name="radio" checked>
                        <span>mobilios aplikacijos</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="radio">
                        <span>internetiniai tinklapiai</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="radio">
                        <span>programinės įrangos</span>
                    </label>
                </div>
            </div>
            <input type="text" class="form-details" placeholder="Informacija apie projektą"/>
            <button class="btn-main btn-hover-orange">siūsti užklausą</button>
            </form>
        </div>

        <hr/>

    </div>
</div>

<?php include('./footer.php'); ?>