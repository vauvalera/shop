<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

	$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
?>
<!DOCTYPE html>
<!--[if lt IE 8]>  <html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]>  <html class="no-js"><![endif]-->
<head>

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$APPLICATION->ShowTitle();?></title>
		<?$APPLICATION->ShowHead();?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/common-styles.css');?>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/ico/favicon_bx.png">

    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/vendor/modernizr-html5shiv-respond.min.js')?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/vendor/modernizr.min.js')?>"></script>

</head>
<body>
    <!--[if lt IE 8]>
    <p class="chromeframe">Вы используете <strong>устаревший </strong> браузер. Пожалуйста <a
            href="http://browsehappy.com/">
        обновите свой браузер</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome
        Frame</a> чтобы улучшить взаимодействие с сайтом.</p>
    <![endif]-->
<?$APPLICATION->ShowPanel();?>
    <div class="sticky-wrap">
        <header>
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
												<?if($bIsMainPage):?>
												<span class="logo">
												<?else:?>
												<a class="logo" href="/">
												<?endif;?>
                                <div class="image">Одежда</div>
                                <div id="slogan-rand" class="slogan">
                                    <noscript>Сайты и реклама в интернете</noscript>
                                </div>
													<?if($bIsMainPage):?>
												</span>
											 <?else:?>
													</a>
											 <?endif;?>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-lg-7 col-xs-12 hidden-xs">
                                    <ul class="btn-list-inline">
																			<?$APPLICATION->IncludeFile(
																				SITE_DIR."/include/slogan.php",
																				array(),
																				array(
																					"MODE" => "text"
																				)
																				)?>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-xs-12 hidden-print">
                                    <div class="input-group-search">
                                        <input type="text" class="form-control" placeholder="Поиск...">
                                        <button class="btn btn-link" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <ul class="phone-list">
															<?$APPLICATION->IncludeFile(
																SITE_DIR."/include/phone1.php",
																array(),
																array(
																	"MODE" => "html"
																)
																)?>
																<?$APPLICATION->IncludeFile(
																	SITE_DIR."/include/phone2.php",
																	array(),
																	array(
																		"MODE" => "html"
																	)
																);?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
<?if($bIsMainPage):?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "index", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "N",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "5",	// Код информационного блока
		"IBLOCK_TYPE" => "index",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "50",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "url",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "TIMESTAMP_X",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

	 <div class="activities-description-wrap">
			 <div class="activities-description">
					 <div class="container">
							 <div class="activities-inner">
									 <h3>Последние посещенные вами страницы</h3>
									 <ul>
											 <li><a href="#">Мы стали использовать новую ткань</a></li>
											 <li><a href="#">Главная страница</a></li>
											 <li><a href="#">Контакты</a></li>
									 </ul>
							 </div>
					 </div>
			 </div>
	 </div>
	 <?$APPLICATION->IncludeComponent(
"bitrix:news.list",
"news",
array(
 "ACTIVE_DATE_FORMAT" => "j F Y",
 "ADD_SECTIONS_CHAIN" => "N",
 "AJAX_MODE" => "N",
 "AJAX_OPTION_ADDITIONAL" => "",
 "AJAX_OPTION_HISTORY" => "N",
 "AJAX_OPTION_JUMP" => "N",
 "AJAX_OPTION_STYLE" => "Y",
 "CACHE_FILTER" => "N",
 "CACHE_GROUPS" => "Y",
 "CACHE_TIME" => "36000000",
 "CACHE_TYPE" => "A",
 "CHECK_DATES" => "Y",
 "COMPONENT_TEMPLATE" => "news",
 "DETAIL_URL" => "/news/#ID#/",
 "DISPLAY_BOTTOM_PAGER" => "N",
 "DISPLAY_DATE" => "Y",
 "DISPLAY_NAME" => "Y",
 "DISPLAY_PICTURE" => "Y",
 "DISPLAY_PREVIEW_TEXT" => "Y",
 "DISPLAY_TOP_PAGER" => "N",
 "FIELD_CODE" => array(
	 0 => "NAME",
	 1 => "PREVIEW_TEXT",
	 2 => "PREVIEW_PICTURE",
	 3 => "DATE_ACTIVE_FROM",
	 4 => "",
 ),
 "FILTER_NAME" => "",
 "HIDE_LINK_WHEN_NO_DETAIL" => "N",
 "IBLOCK_ID" => "6",
 "IBLOCK_TYPE" => "news",
 "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
 "INCLUDE_SUBSECTIONS" => "N",
 "MESSAGE_404" => "",
 "NEWS_COUNT" => "50",
 "PAGER_BASE_LINK_ENABLE" => "N",
 "PAGER_DESC_NUMBERING" => "N",
 "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
 "PAGER_SHOW_ALL" => "N",
 "PAGER_SHOW_ALWAYS" => "N",
 "PAGER_TEMPLATE" => ".default",
 "PAGER_TITLE" => "РќРѕРІРѕСЃС‚Рё",
 "PARENT_SECTION" => "",
 "PARENT_SECTION_CODE" => "",
 "PREVIEW_TRUNCATE_LEN" => "",
 "PROPERTY_CODE" => array(
	 0 => "",
	 1 => "",
 ),
 "SET_BROWSER_TITLE" => "N",
 "SET_LAST_MODIFIED" => "N",
 "SET_META_DESCRIPTION" => "N",
 "SET_META_KEYWORDS" => "N",
 "SET_STATUS_404" => "N",
 "SET_TITLE" => "N",
 "SHOW_404" => "N",
 "SORT_BY1" => "ACTIVE_FROM",
 "SORT_BY2" => "SORT",
 "SORT_ORDER1" => "DESC",
 "SORT_ORDER2" => "ASC",
 "STRICT_SECTION_CHECK" => "N"
),
false
);?>
		 <?endif;?>

	<?if(ERROR_404=='Y'):?>
	<div class="page-not-found">
	<?else:?>
        <div class="container">
					<?if(!$bIsMainPage):?>
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
						"COMPONENT_TEMPLATE" => ".default",
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
	<?endif;?>
            <h1><?$APPLICATION->ShowTitle(false);?></h1>
        </div>
	<?endif;?>
        <div class="container">
