<?
    


    /*require_once("/Conekta/lib/Conekta/Util.php");
    require_once("/Conekta/lib/Conekta/Lang.php");
    require_once("/Conekta/lib/Conekta/Error.php");
    require_once("/Conekta/lib/Conekta/Requestor.php");
    require_once("/Conekta/lib/Conekta/Object.php");
    require_once("/Conekta/lib/Conekta/Resource.php");
    require_once("/Conekta/lib/Conekta/Conekta.php");
    require_once("/Conekta/lib/Conekta/Charge.php");
    require_once("/Conekta/lib/Conekta/PayoutMethod.php");
    require_once("/Conekta/lib/Conekta/PaymentMethod.php");
    require_once("/Conekta/lib/Conekta/Address.php");*/
    
    require_once("./path/to/lib/Conekta.php");
    Conekta::setApiKey("key_Es9ssKZyamyhe3Uz8fPSqA");
    

    $charge = Conekta_Charge::create(array(
  'description' => 'Stogies',
  'reference_id' => '9839-wolf_pack',
  'amount' => 20000,
  'currency' =>'MXN',
  'card' => 'tok_test_visa_4242',
  'details' => array(
    'name' => 'Rafael',
    'phone' => '403-342-0642',
    'email' => 'logan@x-men.org',
    'customer' => array(
      'corporation_name' => 'Conekta Inc.',
      'logged_in' => true,
      'successful_purchases' => 14,
      'created_at' => 1379784950,
      'updated_at' => 1379784950,
      'offline_payments' => 4,
      'score' => 9
    ),
    'line_items'=> array(
      array(
        'name'=> 'Box of Cohiba S1s',
        'description'=> 'Imported From Mex.',
        'unit_price'=> 20000,
        'quantity'=> 1,
        'sku'=> 'cohb_s1',
        'type'=> 'food'
      )
    ),
    'billing_address'=> array(
      'street1'=>'77 Mystery Lane',
      'street2'=> 'Suite 124',
      'street3'=> null,
      'city'=> 'Darlington',
      'state'=>'NJ',
      'zip'=> '10192',
      'country'=> 'Mexico',
      'phone'=> '77-777-7777',
      'email'=> 'purshasing@x-men.org'
    ),
    'shipment'=> array(
      'carrier'=> 'estafeta',
      'service'=> 'international',
      'price'=> 20000,
      'address'=> array(
        'street1'=> '250 Alexis St',
        'street2'=> null,
        'street3'=> null,
        'city'=> 'Red Deer',
        'state'=> 'Alberta',
        'zip'=> 'T4N 0B8',
        'country'=> 'Canada'
      )
    )
  )
));


