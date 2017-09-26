<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="form-horizontal form-style-dashed">

	<h1>Задать вопрос:</h1>
<?=bitrix_sessid_post()?>
	<div class="row">
	                    <div class="col-lg-8 col-md-8">
	                        <div class="form-group">
	                           <label for="input-6" class="col-sm-4 col-xs-12 control-label<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>">Ваше имя:</label>

	                            <div class="col-sm-8">
	                                <input id="input-6" type="text" class="form-control" value="<?=$arResult["AUTHOR_NAME"]?>" required>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label for="input-9" class="col-sm-4 col-xs-12 control-label<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>" value="<?=$arResult["AUTHOR_EMAIL"]?>">E-mail:</label>
	                            <div class="col-sm-8">
	                                <input id="input-9" type="email" class="form-control" value="<?=$arResult["AUTHOR_EMAIL"]?>" required>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label for="input-10" class="col-sm-4 col-xs-12 control-label<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>">Текст сообщения:</label>
	                            <div class="col-sm-8">
																	<textarea class="form-control" rows="7" name="MESSAGE" id="input-10"<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>><?=$arResult["MESSAGE"]?></textarea>
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-sm-8 col-sm-offset-4">
	                                <button class="btn btn-primary" type="submit">Отправить</button>
	                            </div>
	                        </div>
	                    </div>
 </div>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="hidden" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
</form>
