<?php
require_once './libs/cls_ga.php';

$data = array(
	'trackingID' => 'UA-74300583-1',
	'plugins' => array('displayfeatures', 'ecommerce'),
	'sampleRate' => '100',
	'customDefinitions' => array(
		'document_group' => 'itempage',
		'cat1' => '2092101501',
		'cat2' => '2092073468',
		'cat3' => '2092097929',
		'cat4' => '2092097930',
		'cat5' => 'none',
		'cat6' => 'none',
		'cat1Name' => '女包精品與女鞋',
		'cat2Name' => '皮夾',
		'cat3Name' => '零錢包',
		'cat4Name' => '拉鍊式零錢包',
		'cat5Name' => 'none',
		'cat6Name' => 'none',
		'seller' => 'Y3056254072',
		'itemid' => '100144234642',
		'spaceid' => '2092111773',
		'subtype' => 'buynow'
	),
	'cdMap' => array(
		'document_group' => 'contentGroup1',
		'document_name' => 'dimension1',
		'subtype' => 'dimension2',
		'cat1Name' => 'dimension3',
		'cat2Name' => 'dimension4',
		'cat3Name' => 'dimension5',
		'cat4Name' => 'dimension6',
		'cat5Name' => 'dimension7',
		'cat6Name' => 'dimension8',
		'cat1' => 'dimension9',
		'cat2' => 'dimension10',
		'cat3' => 'dimension11',
		'cat4' => 'dimension12',
		'cat5' => 'dimension13',
		'cat6' => 'dimension14',
		'itemid' => 'dimension15',
		'itemname' => 'dimension16',
		'seller' => 'dimension17',
		'sellerName' => 'dimension18',
		'promotion_id' => 'dimension19',
		'activity_id' => 'dimension20',
		'checkout_step' => 'dimension21',
		'paytype' => 'dimension22',
		'delvtype' => 'dimension23',
		'vtestid' => 'dimension24',
		'spaceid' => 'dimension25',
		'coServerName' => 'dimension26',
		'coServerName2' => 'dimension27',
		'actCode' => 'dimension28',
		'bidType' => 'dimension30'
	),
	'trackedMods' => array(
		'.mei' => 'trackedMod01',
		'#mei' => 'trackedMod02'
	),
	'ecommerce' => array(
		'transaction' => array(
			'id' => '1234',
			'affiliation' => 'Acme Clothing',
			'revenue' => '11.99',
			'shipping' => '5',
			'tax' => '1.29'
		),
		'item' => array(
			array(
				'id' => '1234',
				'name' => 'Fluffy Pink Bunnies',
				'sku' => 'DD23444',
				'category' => 'Party Toys',
				'price' => '11.99',
				'quantity' => '1'
			),
			array(
				'id' => '1235',
				'name' => 'Fluffy Pink Bunnies2',
				'sku' => 'DD23445',
				'category' => 'Party Toys',
				'price' => '19.99',
				'quantity' => '2'
			)
		)
	)
);

$ga = new GA();
$ga = $ga->genConf($data);
?>
<!DOCTYPE html>
<html lang="en" x-frame-options="sameorigin">
<head>
<meta http-equiv="Content-Security-Policy1" content="default-src 'self' www.google-analytics.com; font-src * data:; style-src 'self' 'unsafe-inline'; img-src www.google-analytics.com;">
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
<meta http-equiv="PRAGMA" content="NO-CACHE">
<meta http-equiv="Expires" content="Wed, 26 Feb 1997 08:21:57 GMT">
<meta http-equiv="x-frame-options" content="sameorigin">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="GoogleAnalytics,ga,gaExt">
<meta name="description" content="藉由「gaExt」的導入, 可以大大的增強 Google Analytics 功能以及安裝初始設定, 簡單幾個設定便可以輕輕鬆鬆 tracking 到頁面 module view 以及 module click, 更可以避免 inline script 可能潛伏的 XSS 危機, 讓原本使用 Google Analytics 更為簡單, 愈加便利!!">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mei">
<meta name="twitter:creator" content="@mei">
<meta name="twitter:title" content="gaExt - enhance and complete Google Analytics features">
<meta name="twitter:description" content="藉由「gaExt」的導入, 可以大大的增強 Google Analytics 功能以及安裝初始設定, 簡單幾個設定便可以輕輕鬆鬆 tracking 到頁面 module view 以及 module click, 更可以避免 inline script 可能潛伏的 XSS 危機, 讓原本使用 Google Analytics 更為簡單, 愈加便利!!">
<meta name="twitter:image:src" content="http://mei.homin.com.tw/img/preview/gaExt.png">
<meta property="og:title" content="gaExt - enhance and complete Google Analytics features">
<meta property="og:site_name" content="mei">
<meta property="og:description" content="藉由「gaExt」的導入, 可以大大的增強 Google Analytics 功能以及安裝初始設定, 簡單幾個設定便可以輕輕鬆鬆 tracking 到頁面 module view 以及 module click, 更可以避免 inline script 可能潛伏的 XSS 危機, 讓原本使用 Google Analytics 更為簡單, 愈加便利!!">
<meta property="og:image" content="http://mei.homin.com.tw/img/preview/gaExt.png">
<title>gaExt - enhance and complete Google Analytics features</title>
<link rel="dns-prefetch" href="//mei.homin.com.tw">
<link rel="canonical" href="http://mei.homin.com.tw/GAPrototype.html">
<link rel="stylesheet" href="css/cssbase.css">
<link href="css/adornFormElements.css" rel="stylesheet">
<script src="script/pageRender.js" data-source="script/prototype-min.js&script/func.js&script/swiftMarkClass.js&script/socialShareClass.js&script/gaExt.js"></script>
<style>
#mei{margin-bottom:10px;}
#mei a+a{margin-left:7px;}
</style>
</head>

<body>
<header id="hd" role="banner">
	<h1>gaExt - enhance and complete Google Analytics features</h1>
</header>

<main id="bd" role="main">
	<section>
		<h3>GA tracking elements</h3>
		<div id="mei">
			<a href="#" class="buttons mei-b" data-slk="links">This is tag &lt;a&gt;</a>
			<a href="#" class="buttons mei-b">This is tag &lt;a&gt; without data-slk</a>
			<a href="#" class="buttons mei-b"><span>This is tag &lt;a&gt; wrapped by othe tags</span></a>
		</div>
		<form class="mei" method="post">
			<label class="inputText">
				<span>input[type=text]</span>
				<input class="decoration" placeholder="input [type=text]" maxlength="40">
			</label>
			<label class="textarea">
				<span>textarea</span>
				<textarea class="decoration" placeholder="textarea"></textarea>
			</label>
			<div class="radios mei-g">
				<div class="radio mei-u">
					<input id="radio0" type="radio" name="adornRadio" value="adornRadio0" checked>
					<label for="radio0">Radio 0</label>
				</div>
				<div class="radio mei-u">
					<input id="radio1" type="radio" name="adornRadio" value="adornRadio1" disabled>
					<label for="radio1">Radio 1 (disabled)</label>
				</div>
				<div class="radio mei-u">
					<input id="radio2" type="radio" name="adornRadio" value="adornRadio2">
					<label for="radio2">Radio 2</label>
				</div>
				<div class="radio mei-u">
					<input id="radio3" type="radio" name="adornRadio" value="adornRadio3">
					<label for="radio3">Radio 3</label>
				</div>
				<div class="radio mei-u">
					<input id="radio4" type="radio" name="adornRadio" value="adornRadio4">
					<label for="radio4">Radio 4</label>
				</div>
			</div>
			<div class="checkboxes mei-g">
				<div class="checkbox mei-u">
					<input id="checkbox0" type="checkbox" name="adornCheckbox" value="adornCheck0" checked>
					<label for="checkbox0">Checkbox 0</label>
				</div>
				<div class="checkbox mei-u">
					<input id="checkbox1" type="checkbox" name="adornCheckbox" value="adornCheck1" disabled>
					<label for="checkbox1">Checkbox 1 (disabled)</label>
				</div>
				<div class="checkbox mei-u">
					<input id="checkbox2" type="checkbox" name="adornCheckbox" value="adornCheck2">
					<label for="checkbox2">Checkbox 2</label>
				</div>
				<div class="checkbox mei-u">
					<input id="checkbox3" type="checkbox" name="adornCheckbox" value="adornCheck3">
					<label for="checkbox3">Checkbox 3</label>
				</div>
				<div class="checkbox mei-u">
					<input id="checkbox4" type="checkbox" name="adornCheckbox" value="adornCheck4">
					<label for="checkbox4">Checkbox 4</label>
				</div>
			</div>
			<label class="mei-b select-wrap">
				<p>select</p>
				<select>
					<option selected disabled>Select</option>
					<option value="select0">option0</option>
					<option value="select1">option1</option>
					<option value="select2">option2</option>
				</select>
				<em>arrow</em>
			</label>
			<div class="button-wrap mei-g">
				<label class="filePicker mei-b decoration">
					Pick up file
					<input type="file" multiple data-slk="inputFile">
				</label>
				<input type="submit" class="buttons mei-b decoration" value="Submit">
				<button class="buttons mei-b decoration">Button</button>
			</div>
		</form>
	</section>

	<swiftmark-module data-position="top-right" hidden>
		<h3>gaExt</h3>
		<a href="http://mei.homin.com.tw/GAPrototype.html" title="gaExt">
			<img src="img/gaExt/qrcode.png">
		</a>
	</swiftmark-module>

	<socialshare-module data-position="top-left" hidden>
		<h3>socialShare</h3>
		<a href="#facebook">share to facebook</a>
		<a href="#twitter">share to twitter</a>
		<a href="#tumblr">share to tumblr</a>
		<a href="#googleplus">share to googleplus</a>
		<a href="#pinterest">share to pinterest</a>
		<a href="#blogger">share to blogger</a>
		<a href="#mail">share to mail</a>
	</socialshare-module>
</main>

<footer id="ft">
	<small role="contentinfo">Powered by mei's studio.</small>
	<?php echo $ga; ?>
</footer>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "CreativeWork",
  "name": "gaExt prototype",
  "url": "http://mei.homin.com.tw/GAPrototype.html",
  "description": "藉由「gaExt」的導入, 可以大大的增強 Google Analytics 功能以及安裝初始設定, 簡單幾個設定便可以輕輕鬆鬆 tracking 到頁面 module view 以及 module click, 更可以避免 inline script 可能潛伏的 XSS 危機, 讓原本使用 Google Analytics 更為簡單, 愈加便利!!",
  "image": "http://mei.homin.com.tw/img/preview/gaExt.png",
  "author": {
	  "@type": "Person",
	  "name": "Paul Li",
	  "jobTitle": "Front End engineer",
	  "affiliation": "mei's studio",
	  "additionalName": "mei",
	  "url": "https://www.facebook.com/mei.studio.li",
	  "image": "https://graph.facebook.com/mei.studio.li/picture",
	  "brand": "mei's studio",
	  "familyName": "Li",
	  "gender": "M",
	  "givenName": "Paul",
	  "owns": "mei's studio",
	  "worksFor": "Yahoo",
	  "description": "People who loves all front end skills"
  },
  "dateCreated": "2016-03-08",
  "datePublished": "2016-03-08",
  "genre": "google analytics",
  "keywords": "google analytics,ga,gaExt"
}
</script>
</body>
</html>
