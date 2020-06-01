<?php

use App\CEO;
use Illuminate\Database\Seeder;

class CEOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ceos = [
            [
                'id' => 1, 'name' => 'Akio Toyoda', 'company_name' => 'Toyota', 'year' => 2009,
                'company_headquarters' => 'Toyota, Japan', 'what_company_does' => 'industrial',
            ],
            [
                'id' => 2, 'name' => 'Alan Joyce', 'company_name' => 'Qantas', 'year' => 2008,
                'company_headquarters' => 'Mascot, NSW, Australia',
                'what_company_does' => 'air travel',
            ],
            [
                'id' => 3, 'name' => 'Andrew Mackenzie', 'company_name' => 'BHP Billiton',
                'year' => 2013, 'company_headquarters' => 'Melbourne, Australia',
                'what_company_does' => 'resources',
            ],
            [
                'id' => 4, 'name' => 'Andrew Wilson', 'company_name' => 'Electronic Arts',
                'year' => 2013, 'company_headquarters' => 'Redwood City, CA, USA',
                'what_company_does' => 'games',
            ],
            [
                'id' => 5, 'name' => 'Andy Penn', 'company_name' => 'Telstra', 'year' => 2015,
                'company_headquarters' => 'Melbourne, Australia',
                'what_company_does' => 'communications',
            ],
            [
                'id' => 6, 'name' => 'Ann Sarnoff', 'company_name' => 'Warner Bros.',
                'year' => 2019, 'company_headquarters' => 'Burbank, CA, USA',
                'what_company_does' => 'entertainment',
            ],
            [
                'id' => 7, 'name' => 'Arvind Krishna', 'company_name' => 'IBM', 'year' => 2020,
                'company_headquarters' => 'Armonk, NY, USA', 'what_company_does' => 'computing',
            ],
            [
                'id' => 8, 'name' => 'Bob Chapek', 'company_name' => 'The Walt Disney Company',
                'year' => 2020, 'company_headquarters' => 'Burbank, CA, USA',
                'what_company_does' => 'entertainment',
            ],
            [
                'id' => 9, 'name' => 'Brian Cornell', 'company_name' => 'Target Corporation',
                'year' => 2014, 'company_headquarters' => 'Minneapolis, MN, USA',
                'what_company_does' => 'retail',
            ],
            [
                'id' => 10, 'name' => 'Charles Woodburn', 'company_name' => 'BAE Systems',
                'year' => 2008, 'company_headquarters' => 'Farnborough, UK',
                'what_company_does' => 'aeronautics',
            ],
            [
                'id' => 11, 'name' => 'Chris Beard', 'company_name' => 'Mozilla Corporation',
                'year' => 2014, 'company_headquarters' => 'Mountain View, CA, USA',
                'what_company_does' => 'computing',
            ],
            [
                'id' => 12, 'name' => 'Chuck Robbins', 'company_name' => 'Cisco Systems',
                'year' => 2015, 'company_headquarters' => 'San Jose, CA, USA',
                'what_company_does' => 'computing',
            ],
            [
                'id' => 13, 'name' => 'Daniel Zhang', 'company_name' => 'Alibaba',
                'year' => 2015, 'company_headquarters' => 'Hangzhou, China',
                'what_company_does' => 'technology',
            ],
            [
                'id' => 14, 'name' => 'Devin Wenig', 'company_name' => 'eBay', 'year' => 2015,
                'company_headquarters' => 'San Jose, CA, USA',
                'what_company_does' => 'technology',
            ],
            [
                'id' => 15, 'name' => 'Elon Musk', 'company_name' => 'Tesla, Inc.',
                'year' => 2008, 'company_headquarters' => 'Palo Alto, CA, USA',
                'what_company_does' => 'industrial',
            ],
            [
                'id' => 16, 'name' => 'Evan G. Greenberg', 'company_name' => 'Chubb Limited',
                'year' => 2004, 'company_headquarters' => 'Warren, NJ, USA',
                'what_company_does' => 'security',
            ],
            [
                'id' => 17, 'name' => 'Frederick W. Smith', 'company_name' => 'FedEx',
                'year' => 1971, 'company_headquarters' => 'Memphis, TN, USA',
                'what_company_does' => 'logistics',
            ],
            [
                'id' => 18, 'name' => 'Guillaume Faury', 'company_name' => 'Airbus',
                'year' => 2012, 'company_headquarters' => 'Leiden, Netherlands',
                'what_company_does' => 'aeronautics',
            ],
            [
                'id' => 19, 'name' => 'Harald Krüger', 'company_name' => 'BMW', 'year' => 2015,
                'company_headquarters' => 'Munich, Germany',
                'what_company_does' => 'automotive',
            ],
            [
                'id' => 20, 'name' => 'Herbert Diess', 'company_name' => 'Volkswagen Group',
                'year' => 2018, 'company_headquarters' => 'Wolfsburg, Germany',
                'what_company_does' => 'automotive',
            ],
            [
                'id' => 21, 'name' => 'Jack Dorsey', 'company_name' => 'Twitter',
                'year' => 2006, 'company_headquarters' => 'San Francisco, CA, USA',
                'what_company_does' => 'communications',
            ],
            [
                'id' => 22, 'name' => 'Jeff Bezos', 'company_name' => 'Amazon.com',
                'year' => 1994, 'company_headquarters' => 'Seattle, WA, USA',
                'what_company_does' => 'technology',
            ],
            [
                'id' => 23, 'name' => 'Jeff Clarke', 'company_name' => 'Eastman Kodak',
                'year' => 2014, 'company_headquarters' => 'Rochester, NY, USA',
                'what_company_does' => 'technology',
            ],
            [
                'id' => 24, 'name' => 'Jeffrey L. Bewkes', 'company_name' => 'Time Warner',
                'year' => 2008, 'company_headquarters' => 'New York, NY, USA',
                'what_company_does' => 'entertainment',
            ],
            [
                'id' => 25, 'name' => 'Jim Umpleby', 'company_name' => 'Caterpillar Inc.',
                'year' => 2017, 'company_headquarters' => 'Deerfield, IL, USA',
                'what_company_does' => 'industrial',
            ],
            [
                'id' => 26, 'name' => 'Kenichiro Yoshida', 'company_name' => 'Sony',
                'year' => 2018, 'company_headquarters' => 'Minato City, Tokyo, Japan',
                'what_company_does' => 'technology',
            ],
            [
                'id' => 27, 'name' => 'Lisa Su', 'company_name' => 'AMD', 'year' => 2014,
                'company_headquarters' => 'Santa Clara, CA, USA',
                'what_company_does' => 'microprocessors',
            ],
            [
                'id' => 28, 'name' => 'Marillyn Hewson', 'company_name' => 'Lockheed Martin',
                'year' => 2013, 'company_headquarters' => 'Bethesda, MD, USA',
                'what_company_does' => 'aeronautics',
            ],
            [
                'id' => 29, 'name' => 'Mark Hurd', 'company_name' => 'Oracle Corporation',
                'year' => 2014, 'company_headquarters' => 'Redwood City, CA, USA',
                'what_company_does' => 'software',
            ],
            [
                'id' => 30, 'name' => 'Mark Parker', 'company_name' => 'Nike', 'year' => 2006,
                'company_headquarters' => 'Beaverton, OR, USA',
                'what_company_does' => 'industrial',
            ],
            [
                'id' => 31, 'name' => 'Mark Shuttleworth', 'company_name' => 'Canonical Ltd.',
                'year' => 2017, 'company_headquarters' => 'London, UK',
                'what_company_does' => 'computing',
            ],
            [
                'id' => 32, 'name' => 'Mark Zuckerberg', 'company_name' => 'Facebook',
                'year' => 2004, 'company_headquarters' => 'Menlo Park, CA, USA',
                'what_company_does' => 'technology',
            ],
            [
                'id' => 33, 'name' => 'Meg Whitman',
                'company_name' => 'Hewlett Packard Enterprise', 'year' => 2015,
                'company_headquarters' => 'Palo Alto, CA, USA',
                'what_company_does' => 'computing',
            ],
            [
                'id' => 34, 'name' => 'Michael Dell', 'company_name' => 'Dell', 'year' => 1984,
                'company_headquarters' => 'Round Rock, TX, USA',
                'what_company_does' => 'computing',
            ],
            [
                'id' => 35, 'name' => 'Oh-Hyun Kwon', 'company_name' => 'Samsung',
                'year' => 2012, 'company_headquarters' => 'Seoul, South Korea',
                'what_company_does' => 'technology',
            ],
            [
                'id' => 36, 'name' => 'Randall L. Stephenson', 'company_name' => 'AT&T',
                'year' => 2007, 'company_headquarters' => 'Dallas, TX, USA',
                'what_company_does' => 'communications',
            ],
            [
                'id' => 37, 'name' => 'Robert H. Swan', 'company_name' => 'Intel',
                'year' => 2013, 'company_headquarters' => 'Santa Clara, CA, USA',
                'what_company_does' => 'computing',
            ],
            [
                'id' => 38, 'name' => 'Safra Catz', 'company_name' => 'Oracle Corporation',
                'year' => 2014, 'company_headquarters' => 'Redwood City, CA, USA',
                'what_company_does' => 'software',
            ],
            [
                'id' => 39, 'name' => 'Satya Nadella', 'company_name' => 'Microsoft',
                'year' => 2014, 'company_headquarters' => 'Redmond, WA, USA     ',
                'what_company_does' => 'computing',
            ],
            [
                'id' => 40, 'name' => 'Shantanu Narayen', 'company_name' => 'Adobe Systems',
                'year' => 2007, 'company_headquarters' => 'San Jose, CA, USA',
                'what_company_does' => 'software',
            ],
            [
                'id' => 41, 'name' => 'Sundar Pichai', 'company_name' => 'Google',
                'year' => 2015, 'company_headquarters' => 'Mountain View, CA, USA',
                'what_company_does' => 'computing',
            ],
            [
                'id' => 42, 'name' => 'Tatsumi Kimishima', 'company_name' => 'Nintendo',
                'year' => 2015, 'company_headquarters' => 'Kyoto, Japan',
                'what_company_does' => 'games',
            ],
            [
                'id' => 43, 'name' => 'Tim Cook', 'company_name' => 'Apple Inc.',
                'year' => 2011, 'company_headquarters' => 'Cupertino, CA, USA',
                'what_company_does' => 'computing',
            ],
            [
                'id' => 44, 'name' => 'Brad Banducci', 'company_name' => 'Woolworths',
                'year' => 2016, 'company_headquarters' => 'Bella Vista, NSW, Australia',
                'what_company_does' => 'retail',
            ],
            [
                'id' => 45, 'name' => 'Allen Lew', 'company_name' => 'Optus', 'year' => 2014,
                'company_headquarters' => 'Sydney, Australia',
                'what_company_does' => 'communications',
            ],
            [
                'id' => 46, 'name' => 'David Teoh', 'company_name' => 'TPG', 'year' => 2008,
                'company_headquarters' => 'North Ryde, NSW, Australia',
                'what_company_does' => 'communications',
            ],
            [
                'id' => 47, 'name' => 'Bernard Looney', 'company_name' => 'BP', 'year' => 2020,
                'company_headquarters' => 'London, UK', 'what_company_does' => 'resources',
            ],

        ];

        foreach ($ceos as $newCEO) {
            CEO::create($newCEO);
        }
    }
}