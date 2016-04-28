<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index() {
    	$featuredProducts = $this->getFeatureProducts();
        $welcomeContent = $this->getWelcomeContent();
        $serviceContent = $this->getWelcomeContent();
        $hours = $this->getHoursContent();
        $phone = $this->getPhoneContent();
        $location = $this->getLocationContent();

    	return view('welcome', compact('featuredProducts', 'welcomeContent', 'serviceContent', 'hours', 'phone', 'location'));
    }

    private function getFeatureProducts() {
    	return array(
    		array(
    			'name' => 'Desserts',
    			'description' => "This is a delicious treat! Get one now!
    						      You'll definitely enjoy the dessert.
    						      Enjoy with friends and family! ",
    			'img' => '/img/dessert.png'
    		),
    		array(
				'name' => 'Pastry',
    			'description' => "This is a delicious treat! Get one now!
    						      You'll definitely enjoy the dessert.
    						      Enjoy with friends and family! ",
    			'img' => '/img/pastry.png'
			),
    		array(
    			'name' => 'Macarons',
    			'description' => "This is a delicious treat! Get one now!
    						      You'll definitely enjoy the dessert.
    						      Enjoy with friends and family! ",
    			'img' => '/img/macarons.png'
			),
    		array(
    			'name' => 'Breads',
    			'description' => "This is a delicious treat! Get one now!
    						      You'll definitely enjoy the dessert.
    						      Enjoy with friends and family! ",
    			'img' => 'img/bread.png'
			)
		);
    }

    private function getWelcomeContent() {
        return "Lorem ipsum dolor sit amet,
                consectetur adipiscing elit,
                sed o eiusmod tempor incidid
                unt ut labore et dolore magna
                aliqua. Stay here and love love
                Ut enim ad minim veniam, this
                quis nostrud exercitation shou
                ullamco laboris nisi ut aliquip
                 ex ea commodo consequat
                ris nisi ut aliquip. Come here
                enjoy the baked goods, pastries
                and have fun with you friends!
                Come here enjoy the baked goods,
                pastries and have fun with you friends...";
    }

    private function getHoursContent() {
        return array(
            array(
                'name' => 'Weekdays',
                'hours' => '8am - 5pm'
            ),
            array(
                'name' => 'Weekends',
                'hours' => '11am - 5pm'
            )
        );
    }

    private function getPhoneContent() {
        return '(604) 555-55-55';
    }

    private function getLocationContent() {
        return "192 151 Street
                Surrey British Columbia
                V3R0V4";
    }
}
