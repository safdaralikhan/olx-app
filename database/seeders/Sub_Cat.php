<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class Sub_Cat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_categories = [
            [
                'id' => 11,
                'subcat_name' => 'Tablets',
                'category_id' => 1,
            ],
            [
                'id' => 12,
                'subcat_name' => 'Mobile Accessories',
                'category_id' => 1,
            ],
            [
                'id' => 13,
                'subcat_name' => 'Mobile Phones',
                'category_id' => 1,
            ],
            [
                'id' => 14,
                'subcat_name' => 'Car',
                'category_id' => 2,
            ],
            [
                'id' => 15,
                'subcat_name' => 'Car on Installments',
                'category_id' => 2,
            ],
            [
                'id' => 16,
                'subcat_name' => 'Cars Accessories',
                'category_id' => 2,
            ],
            [
                'id' => 17,
                'subcat_name' => 'Spare Parts',
                'category_id' => 2,
            ],
            [
                'id' => 18,
                'subcat_name' => 'Buses, Vans & Trucks',
                'category_id' => 2,
            ],
            [
                'id' => 19,
                'subcat_name' => 'Rickshaw & Chingchi',
                'category_id' => 2,
            ],
            [
                'id' => 20,
                'subcat_name' => 'Other Vehicles',
                'category_id' => 2,
            ],
            [
                'id' => 21,
                'subcat_name' => 'Boats',
                'category_id' => 2,
            ],
            [
                'id' => 22,
                'subcat_name' => 'Tractors & Trailers',
                'category_id' => 2,
            ],
            [
                'id' => 23,
                'subcat_name' => 'Land & Plots',
                'category_id' => 3,
            ],
            [
                'id' => 24,
                'subcat_name' => 'Houses',
                'category_id' => 3,
            ],
            [
                'id' => 25,
                'subcat_name' => 'Apartments & Flats',
                'category_id' => 3,
            ],
            [
                'id' => 26,
                'subcat_name' => 'Shops - Offices - Commercial Spaces',
                'category_id' => 3,
            ],
            [
                'id' => 27,
                'subcat_name' => 'Portions & Floors',
                'category_id' => 3,
            ],
            [
                'id' => 28,
                'subcat_name' => 'Houses',
                'category_id' => 4,
            ],
            [
                'id' => 29,
                'subcat_name' => 'Apartments & Flats',
                'category_id' => 4,
            ],
            [
                'id' => 30,
                'subcat_name' => 'Portions & Floors',
                'category_id' => 4,
            ],
            [
                'id' => 31,
                'subcat_name' => 'Shops - Offices - Commercials Spaces',
                'category_id' => 4,
            ],
            [
                'id' => 32,
                'subcat_name' => 'Roommates & Paying Guests',
                'category_id' => 4,
            ],
            [
                'id' => 33,
                'subcat_name' => 'Rooms',
                'category_id' => 4,
            ],
            [
                'id' => 34,
                'subcat_name' => 'Vacation Rentals - Guests Houses',
                'category_id' => 4,
            ],
            [
                'id' => 35,
                'subcat_name' => 'Land & Plots',
                'category_id' => 4,
            ],
            [
                'id' => 36,
                'subcat_name' => 'Computer & Accessories',
                'category_id' => 5,
            ],
            [
                'id' => 37,
                'subcat_name' => 'Tv - Video - Audio',
                'category_id' => 5,
            ],
            [
                'id' => 38,
                'subcat_name' => 'Cameras & Accessories',
                'category_id' => 5,
            ],
            [
                'id' => 39,
                'subcat_name' => 'Games & Entertainmint',
                'category_id' => 5,
            ],
            [
                'id' => 40,
                'subcat_name' => 'Cameras & Accessories',
                'category_id' => 5,
            ],
            [
                'id' => 41,
                'subcat_name' => 'Games & Entertainmint',
                'category_id' => 5,
            ],
            [
                'id' => 42,
                'subcat_name' => 'Other Home Appliances',
                'category_id' => 5,
            ],
            [
                'id' => 43,
                'subcat_name' => 'Generator UPS & Power Solution',
                'category_id' => 5,
            ],
            [
                'id' => 44,
                'subcat_name' => 'Kitchen Appliances',
                'category_id' => 5,
            ],
            [
                'id' => 45,
                'subcat_name' => 'Ac & Cooler',
                'category_id' => 5,
            ],
            [
                'id' => 46,
                'subcat_name' => 'Fridge & Freezer',
                'category_id' => 5,
            ],
            [
                'id' => 47,
                'subcat_name' => 'Washing Machine & Dryers',
                'category_id' => 5,
            ],
            [
                'id' => 48,
                'subcat_name' => 'Motorcycles',
                'category_id' => 6,
            ],
            [
                'id' => 49,
                'subcat_name' => 'Spare Parts',
                'category_id' => 6,
            ],
            [
                'id' => 50,
                'subcat_name' => 'Bycycles',
                'category_id' => 6,
            ],
            [
                'id' => 51,
                'subcat_name' => 'ATV & Quads',
                'category_id' => 6,
            ],
            [
                'id' => 52,
                'subcat_name' => 'Scooters',
                'category_id' => 6,
            ],
            [
                'id' => 53,
                'subcat_name' => 'Business For Sale',
                'category_id' => 7,
            ],
            [
                'id' => 54,
                'subcat_name' => 'Food & Restaurants',
                'category_id' => 7,
            ],
            [
                'id' => 55,
                'subcat_name' => 'Trade & Industrial',
                'category_id' => 7,
            ],
            [
                'id' => 56,
                'subcat_name' => 'Construction & Heavy Machinery',
                'category_id' => 7,
            ],
            [
                'id' => 57,
                'subcat_name' => 'Agriculture',
                'category_id' => 7,
            ],
            [
                'id' => 58,
                'subcat_name' => 'Other Business & Industry',
                'category_id' => 7,
            ],
            [
                'id' => 59,
                'subcat_name' => 'Medical & Pharma',
                'category_id' => 7,
            ],
            [
                'id' => 60,
                'subcat_name' => 'Education & Classess',
                'category_id' => 8,
            ],
            [
                'id' => 61,
                'subcat_name' => 'Travel & Visa',
                'category_id' => 8,
            ],
            [
                'id' => 62,
                'subcat_name' => 'Car Rental',
                'category_id' => 8,
            ],
            [
                'id' => 63,
                'subcat_name' => 'Drivers & Texi',
                'category_id' => 8,
            ],
            [
                'id' => 64,
                'subcat_name' => 'Web Development',
                'category_id' => 8,
            ],
            [
                'id' => 65,
                'subcat_name' => 'Other Services',
                'category_id' => 8,
            ],
            [
                'id' => 66,
                'subcat_name' => 'Electronics & Computer Repair',
                'category_id' => 8,
            ],
            [
                'id' => 67,
                'subcat_name' => 'Event Services',
                'category_id' => 8,
            ],
            [
                'id' => 68,
                'subcat_name' => 'Health & Beauty',
                'category_id' => 8,
            ],
            [
                'id' => 69,
                'subcat_name' => 'Maids & Domestic Help',
                'category_id' => 8,
            ],
            [
                'id' => 70,
                'subcat_name' => 'Movers & Packers',
                'category_id' => 8,
            ],
            [
                'id' => 71,
                'subcat_name' => 'Home & Office Repair',
                'category_id' => 8,
            ],
            [
                'id' => 72,
                'subcat_name' => 'Caterings & Resturants',
                'category_id' => 8,
            ],
            [
                'id' => 73,
                'subcat_name' => 'Farm & Fresh Food',
                'category_id' => 8,
            ],
            [
                'id' => 74,
                'subcat_name' => 'Online',
                'category_id' => 9,
            ],
            [
                'id' => 75,
                'subcat_name' => 'Markiting',
                'category_id' => 9,
            ],
            [
                'id' => 76,
                'subcat_name' => 'Advertising & PR',
                'category_id' => 9,
            ],
            [
                'id' => 77,
                'subcat_name' => 'Education',
                'category_id' => 9,
            ],
            [
                'id' => 78,
                'subcat_name' => 'Customer Services',
                'category_id' => 9,
            ],
            [
                'id' => 79,
                'subcat_name' => 'Sales',
                'category_id' => 9,
            ],
            [
                'id' => 80,
                'subcat_name' => 'IT & Networking',
                'category_id' => 9,
            ],
            [
                'id' => 81,
                'subcat_name' => 'Hotel & Tourism',
                'category_id' => 9,
            ],
            [
                'id' => 82,
                'subcat_name' => 'Clerical & Adminestration',
                'category_id' => 9,
            ],
            [
                'id' => 83,
                'subcat_name' => 'Human Resources',
                'category_id' => 9,
            ],
            [
                'id' => 84,
                'subcat_name' => 'Accounting & Finance',
                'category_id' => 9,
            ],
            [
                'id' => 85,
                'subcat_name' => 'Manufacturing',
                'category_id' => 9,
            ],
            [
                'id' => 86,
                'subcat_name' => 'Medical',
                'category_id' => 9,
            ],
            [
                'id' => 87,
                'subcat_name' => 'Domestic Staff',
                'category_id' => 9,
            ],
            [
                'id' => 88,
                'subcat_name' => 'Part - Time',
                'category_id' => 9,
            ],
            [
                'id' => 89,
                'subcat_name' => 'Other Jobs',
                'category_id' => 9,
            ],
            [
                'id' => 90,
                'subcat_name' => 'Fish & Aquariums',
                'category_id' => 10,
            ],
            [
                'id' => 91,
                'subcat_name' => 'Birds',
                'category_id' => 10,
            ],
            [
                'id' => 92,
                'subcat_name' => 'Hens & Aseel',
                'category_id' => 10,
            ],
            [
                'id' => 93,
                'subcat_name' => 'Cats',
                'category_id' => 10,
            ],
            [
                'id' => 94,
                'subcat_name' => 'Dogs',
                'category_id' => 10,
            ],
            [
                'id' => 95,
                'subcat_name' => 'Livestok',
                'category_id' => 10,
            ],
            [
                'id' => 96,
                'subcat_name' => 'Horses',
                'category_id' => 10,
            ],
            [
                'id' => 97,
                'subcat_name' => 'Pet Food & Accessories',
                'category_id' => 10,
            ],
            [
                'id' => 98,
                'subcat_name' => 'Other Animals',
                'category_id' => 10,
            ],
            [
                'id' => 99,
                'subcat_name' => 'Sofa & Chairs',
                'category_id' => 11,
            ],
            [
                'id' => 100,
                'subcat_name' => 'Beds & Wardrobes',
                'category_id' => 11,
            ],
            [
                'id' => 101,
                'subcat_name' => 'Home Decorations',
                'category_id' => 11,
            ],
            [
                'id' => 102,
                'subcat_name' => 'Tables & Dinings',
                'category_id' => 11,
            ],
            [
                'id' => 103,
                'subcat_name' => 'Garden & Outdoor',
                'category_id' => 11,
            ],
            [
                'id' => 104,
                'subcat_name' => 'Painting & Mirrors',
                'category_id' => 11,
            ],
            [
                'id' => 105,
                'subcat_name' => 'Rugs & Carpets',
                'category_id' => 11,
            ],
            [
                'id' => 106,
                'subcat_name' => 'Curtains & Blinds',
                'category_id' => 11,
            ],
            [
                'id' => 107,
                'subcat_name' => 'Office Furniture',
                'category_id' => 11,
            ],
            [
                'id' => 108,
                'subcat_name' => 'Other Households Items',
                'category_id' => 11,
            ],
            [
                'id' => 109,
                'subcat_name' => 'Accessories',
                'category_id' => 12,
            ],
            [
                'id' => 110,
                'subcat_name' => 'Clothes',
                'category_id' => 12,
            ],
            [
                'id' => 111,
                'subcat_name' => 'Footwear',
                'category_id' => 12,
            ],
            [
                'id' => 112,
                'subcat_name' => 'Jewellery',
                'category_id' => 12,
            ],
            [
                'id' => 113,
                'subcat_name' => 'Makup',
                'category_id' => 12,
            ],
            [
                'id' => 114,
                'subcat_name' => 'Skin & Hair',
                'category_id' => 12,
            ],
            [
                'id' => 115,
                'subcat_name' => 'Watches',
                'category_id' => 12,
            ],
            [
                'id' => 116,
                'subcat_name' => 'Wedding',
                'category_id' => 12,
            ],
            [
                'id' => 117,
                'subcat_name' => 'Lawn & Pretslets',
                'category_id' => 12,
            ],
            [
                'id' => 118,
                'subcat_name' => 'Couture',
                'category_id' => 12,
            ],
            [
                'id' => 119,
                'subcat_name' => 'Other Fashion',
                'category_id' => 12,
            ],
            [
                'id' => 120,
                'subcat_name' => 'Books & Magazines',
                'category_id' => 13,
            ],
            [
                'id' => 121,
                'subcat_name' => 'Musical Instruments',
                'category_id' => 13,
            ],
            [
                'id' => 122,
                'subcat_name' => 'Sport Equipments',
                'category_id' => 13,
            ],
            [
                'id' => 123,
                'subcat_name' => 'Gym & Fitness',
                'category_id' => 13,
            ],
            [
                'id' => 124,
                'subcat_name' => 'Other Hobbies',
                'category_id' => 13,
            ],
            [
                'id' => 125,
                'subcat_name' => 'Kids Furnitures',
                'category_id' => 14,
            ],
            [
                'id' => 126,
                'subcat_name' => 'Toys',
                'category_id' => 14,
            ],
            [
                'id' => 127,
                'subcat_name' => 'Parms & Walkers',
                'category_id' => 14,
            ],
            [
                'id' => 128,
                'subcat_name' => 'Swing & Slides',
                'category_id' => 14,
            ],
            [
                'id' => 129,
                'subcat_name' => 'Kids Bikes',
                'category_id' => 14,
            ],
            [
                'id' => 130,
                'subcat_name' => 'Kids Accessories',
                'category_id' => 14,
            ],
            
        ];
        DB::table('sub_categories')->insert($sub_categories);
    }
}
