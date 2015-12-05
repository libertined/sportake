<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();
?>
<?if($USER->IsAuthorized()):?>
	<?LocalRedirect("/cabinet/");?>
<?else:?>
	<div class="wrapper-style">
		<div class="wrapper-style__header"><?=GetMessage("AUTH_REGISTER")?></div>
		<div class="wrapper-style__body">
			<form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data" autocomplete="off">
			<? if($arResult["BACKURL"] <> ''):?>
				<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
			<? endif;?>
				<div class="wrapper-style__note">Если у вас есть своя фирма или магазин проката спорт-инвентаря, зарегистрируйтесь на нашем сайте и получите доступ к личному кабинету, где вы сможете создавать и публиковать страницы вашего магазина и товаров.</div>

				<div class="form-page form-page--icon form-page--icon-name marg-t-20">
					<input placeholder="ФИО" name="REGISTER[NAME]" value="<?=$arResult["VALUES"]["NAME"]?>" type="text" class="form-page__input" />
				</div>
				<div class="form-page form-page--icon form-page--icon-email marg-t-10">
					<input placeholder="E-mail" name="REGISTER[LOGIN]" value="<?=$arResult["VALUES"]["LOGIN"]?>" type="text" class="form-page__input" />
				</div>
				<div class="form-page form-page--icon form-page--icon-pass marg-t-10">
					<input placeholder="Пароль" name="REGISTER[PASSWORD]" value="<?=$arResult["VALUES"]["PASSWORD"]?>" type="password" class="form-page__input" />
				</div>
				<div class="form-page form-page--icon form-page--icon-pass marg-t-10">
					<input placeholder="Подтверждение пароля" name="REGISTER[CONFIRM_PASSWORD]" value="<?=$arResult["VALUES"]["CONFIRM_PASSWORD"]?>" type="password" class="form-page__input" />
				</div>

				<div class="pseudo-check marg-t-10">
					<div class="pseudo-check__img"></div>
					<div class="pseudo-check__text">Я согласен с <a href="" target="_blank">условиями пользовательского соглашения</a></div>
					<input name="" value="" type="checkbox" class="pseudo-check__real" />
				</div>

				<div class="pos-right marg-t-10">
					<button name="register_submit_button" class="btn btn--orange"><?=GetMessage("AUTH_REGISTER")?></button>
				</div>
				<?if (count($arResult["ERRORS"]) > 0):?>
				<div class="mess-page mess-page--error marg-t-10">
					<ul>
						<?foreach ($arResult["ERRORS"] as $key => $error):?>
							<? if (intval($key) == 0 && $key !== 0)
								$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;",
									$error);?>
							<li><?=$arResult["ERRORS"][$key]?></li>
						<?endforeach;?>
					</ul>
				</div>
				<?endif;?>
				<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
					<p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
				<?endif?>
			</form>
		</div>
	</div>
<?endif;?>
<? /* CAPTCHA */
/*if ($arResult["USE_CAPTCHA"] == "Y")
{
	?>
		<tr>
			<td colspan="2"><b><?=GetMessage("REGISTER_CAPTCHA_TITLE")?></b></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
			</td>
		</tr>
		<tr>
			<td><?=GetMessage("REGISTER_CAPTCHA_PROMT")?>:<span class="starrequired">*</span></td>
			<td><input type="text" name="captcha_word" maxlength="50" value="" /></td>
		</tr>
	<?
}*/
/* !CAPTCHA */?>