<?php
class GA {
	private $conf = array(
		'trackingID' => 'UA-74300583-1'
	);
	private $cdMap = array(
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
	);
	//method
	public function genConf($data=null) {
		if (!$data) return '';

		//basic
		$conf = array(
			'trackingID' => $this->conf['trackingID'],
			'sampleRate' => (isset($data['sampleRate'])) ? $data['sampleRate'] : '100',
			'signEsc' => (isset($data['signEsc'])) ? $data['signEsc'] : 'ga-esc'
		);

		//customDefinitions
		if ($data['customDefinitions']) {
			$conf['customDefinitions'] = array();
			$conf['cdMap'] = array();
			foreach($data['customDefinitions'] as $key => $value) {
				if (!array_key_exists($key, $this->cdMap)) continue;
				$conf['customDefinitions'][$key] = $value;
				$conf['cdMap'][$key] = $this->cdMap[$key];
			}//end for
		}//end if

		//trackedMods
		if ($data['trackedMods']) $conf['trackedMods'] = $data['trackedMods'];
		
		//ecommerce
		if ($data['ecommerce']) $conf['ecommerce'] = $data['ecommerce'];

		$conf = '<var id="gaConf" data-conf=\''.htmlspecialchars(json_encode($conf), ENT_QUOTES, 'UTF-8').'\' hidden>ga conf</var>';
		return $conf;
	}
}

// $data = array(
//	'signEsc' => 'ga-esc',
// 	'sampleRate' => '100',
// 	'customDefinitions' => array(
// 		'document_group' => 'itempage',
// 		'cat1' => '2092101501',
// 		'cat2' => '2092073468',
// 		'cat3' => '2092097929',
// 		'cat4' => '2092097930',
// 		'cat5' => 'none',
// 		'cat6' => 'none',
// 		'cat1Name' => '女包精品與女鞋',
// 		'cat2Name' => '皮夾',
// 		'cat3Name' => '零錢包',
// 		'cat4Name' => '拉鍊式零錢包',
// 		'cat5Name' => 'none',
// 		'cat6Name' => 'none',
// 		'seller' => 'Y3056254072',
// 		'itemid' => '100144234642',
// 		'spaceid' => '2092111773',
// 		'subtype' => 'buynow'
// 	),
// 	'cdMap' => array(
// 		'document_group' => 'dimension1',
// 		'subtype' => 'dimension2',
// 		'cat1Name' => 'dimension3',
// 		'cat2Name' => 'dimension4',
// 		'cat3Name' => 'dimension5',
// 		'cat4Name' => 'dimension6',
// 		'cat5Name' => 'dimension7',
// 		'cat6Name' => 'dimension8',
// 		'cat1' => 'dimension9',
// 		'cat2' => 'dimension10',
// 		'cat3' => 'dimension11',
// 		'cat4' => 'dimension12',
// 		'cat5' => 'dimension13',
// 		'cat6' => 'dimension14',
// 		'itemid' => 'dimension15',
// 		'itemname' => 'dimension16',
// 		'seller' => 'dimension17',
// 		'sellerName' => 'dimension18',
// 		'promotion_id' => 'dimension19',
// 		'activity_id' => 'dimension20',
// 		'checkout_step' => 'dimension21',
// 		'paytype' => 'dimension22',
// 		'delvtype' => 'dimension23',
// 		'vtestid' => 'dimension24',
// 		'spaceid' => 'dimension25',
// 		'coServerName' => 'dimension26',
// 		'coServerName2' => 'dimension27',
// 		'actCode' => 'dimension28',
// 		'bidType' => 'dimension30'
// 	),
// 	'trackedMods' => array(
// 		'mei' => 'seller-infos'
// 	),
// 	'ecommerce' => array(
// 		'transaction' => array(
// 			'id' => '1234',
// 			'affiliation' => 'Acme Clothing',
// 			'revenue' => '11.99',
// 			'shipping' => '5',
// 			'tax' => '1.29'
// 		),
// 		'item' => array(
// 			array(
// 				'id' => '1234',
// 				'name' => 'Fluffy Pink Bunnies',
// 				'sku' => 'DD23444',
// 				'category' => 'Party Toys',
// 				'price' => '11.99',
// 				'quantity' => '1'
// 			),
// 			array(
// 				'id' => '1235',
// 				'name' => 'Fluffy Pink Bunnies2',
// 				'sku' => 'DD23445',
// 				'category' => 'Party Toys',
// 				'price' => '19.99',
// 				'quantity' => '2'
// 			)
// 		)
// 	)
// );

// $ga = new GA();
// echo $ga->genConf($data);
/*programed by mei(李維翰), https://www.facebook.com/mei.studio.li*/
?>