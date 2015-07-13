<?php
namespace App\Controller;

use App\Controller\AppController;

class ConvertController extends AppController
{
    public function index()
    {

    }
    
    public function convert()
    {
        function converCurrency($from,$to,$amount){
            $url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to"; 
            $request = curl_init(); 
            $timeOut = 0; 
            curl_setopt ($request, CURLOPT_URL, $url); 
            curl_setopt ($request, CURLOPT_RETURNTRANSFER, 1); 
            curl_setopt ($request, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
            curl_setopt ($request, CURLOPT_CONNECTTIMEOUT, $timeOut); 
            $response = curl_exec($request); 
            curl_close($request); 
            return $response;
        } 
        
        $from_currency    = 'RUB';
        $to_currency    = 'PLN';
        $amount            = $this->request->param('convertFromValue');
        $results = converCurrency($from_currency,$to_currency,$amount);
        $regularExpression     = '#\<span class=bld\>(.+?)\<\/span\>#s';
        preg_match($regularExpression, $results, $finalData);
        
        $this->set('result', $amount.' RUB = '.$finalData[0]);
        //disable layout, we want only pure text
        $this->layout = false;
        
    }
}

