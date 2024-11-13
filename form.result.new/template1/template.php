<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if ($arResult["isFormErrors"] == "Y"): ?>
    <div class="error-message"><?= $arResult["FORM_ERRORS_TEXT"] ?></div>
<? endif; ?>

<?= $arResult["FORM_NOTE"] ?>

<? if ($arResult["isFormNote"] != "Y"): ?>


<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title">Связаться</div>
        <div class="contact-form__head-text">
            Наши сотрудники помогут выполнить подбор услуги и расчет цены с учетом ваших требований
        </div>
    </div>
    <?=$arResult["FORM_HEADER"]?>
    <form class="contact-form__form" action="/" method="POST">
        <div class="contact-form__form-inputs">
            <div class="input contact-form__input">
                <label class="input__label" for="form_text_1">
                    <div class="input__label-text">Ваше имя*</div>
                    <input class="input__input" type="text" id="form_text_1" name="form_text_1" required>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="form_email_2">
                    <div class="input__label-text">Email*</div>
                    <input class="input__input" type="email" id="form_email_2" name="form_email_2" required>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="form_text_3">
                    <div class="input__label-text">Компания/Должность*</div>
                    <input class="input__input" type="text" id="form_text_3" name="form_text_3" required>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="form_text_4">
                    <div class="input__label-text">Номер телефона*</div>
                    <input class="input__input" type="tel" id="form_text_4" name="form_text_4" required
                           data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12">
                </label>
            </div>
        </div>
        <div class="contact-form__form-message">
            <div class="input">
                <label class="input__label" for="form_text_5">
                    <div class="input__label-text">Сообщение</div>
                    <textarea class="input__input" id="form_text_5" name="form_text_5"></textarea>
                </label>
            </div>
        </div>
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">
                    Нажимая &laquo;Отправить&raquo;, Вы подтверждаете, что ознакомлены, полностью согласны и принимаете условия &laquo;Согласия на обработку персональных данных&raquo;.
                </div>
                <button class="form-button contact-form__bottom-button" type="submit" name="web_form_submit" value="Y">
                    <div class="form-button__title"><?= htmlspecialcharsbx($arResult["arForm"]["BUTTON"] ?: "Оставить заявку") ?></div>
                </button>
            </div>
        </form>
    </div>

    <?= $arResult["FORM_FOOTER"] ?>
<? endif; ?>
