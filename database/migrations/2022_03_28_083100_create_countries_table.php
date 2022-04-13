<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country_name');
            $table->string('country_code');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        $this->_insertData();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
    public function _insertData()
    {
        $insertDataArray = array(
            array(
                'id' => 1,
                'country_name' => 'Abkhazia,Kazakhstan',
                'country_code' => 7
            ),
            array(
                'id' => 2,
                'country_name' => 'Afghanistan',
                'country_code' => 93
            ),
            array(
                'id' => 3,
                'country_name' => 'Albania',
                'country_code' => 355
            ),
            array(
                'id' => 4,
                'country_name' => 'Algeria',
                'country_code' => 213
            ),
            array(
                'id' => 5,
                'country_name' => 'American Samoa',
                'country_code' => 684
            ),
            array(
                'id' => 6,
                'country_name' => 'Andorra',
                'country_code' => 376
            ),
            array(
                'id' => 7,
                'country_name' => 'Angola',
                'country_code' => 244
            ),
            array(
                'id' => 8,
                'country_name' => 'Anguilla',
                'country_code' => 1264
            ),
            array(
                'id' => 9,
                'country_name' => 'Antigua and Barbuda',
                'country_code' => 1268
            ),
            array(
                'id' => 10,
                'country_name' => 'Argentina Republic',
                'country_code' => 54
            ),
            array(
                'id' => 11,
                'country_name' => 'Armenia',
                'country_code' => 374
            ),
            array(
                'id' => 12,
                'country_name' => 'Aruba',
                'country_code' => 297
            ),
            array(
                'id' => 13,
                'country_name' => 'Australia',
                'country_code' => 61
            ),
            array(
                'id' => 14,
                'country_name' => 'Austria',
                'country_code' => 43
            ),
            array(
                'id' => 15,
                'country_name' => 'Azerbaijan',
                'country_code' => 994
            ),
            array(
                'id' => 16,
                'country_name' => 'Bahamas',
                'country_code' => 1242
            ),
            array(
                'id' => 17,
                'country_name' => 'Bahrain',
                'country_code' => 973
            ),
            array(
                'id' => 18,
                'country_name' => 'Bangladesh',
                'country_code' => 880
            ),
            array(
                'id' => 19,
                'country_name' => 'Barbados',
                'country_code' => 1246
            ),
            array(
                'id' => 20,
                'country_name' => 'Belarus',
                'country_code' => 375
            ),
            array(
                'id' => 21,
                'country_name' => 'Belgium',
                'country_code' => 32
            ),
            array(
                'id' => 22,
                'country_name' => 'Belize',
                'country_code' => 501
            ),
            array(
                'id' => 23,
                'country_name' => 'Benin',
                'country_code' => 229
            ),
            array(
                'id' => 24,
                'country_name' => 'Bermuda',
                'country_code' => 1441
            ),
            array(
                'id' => 25,
                'country_name' => 'Bhutan',
                'country_code' => 975
            ),
            array(
                'id' => 26,
                'country_name' => 'Bolivia',
                'country_code' => 591
            ),
            array(
                'id' => 27,
                'country_name' => 'Bosnia & Herzegov.',
                'country_code' => 387
            ),
            array(
                'id' => 28,
                'country_name' => 'Botswana',
                'country_code' => 267
            ),
            array(
                'id' => 29,
                'country_name' => 'Brazil',
                'country_code' => 55
            ),
            array(
                'id' => 30,
                'country_name' => 'British Virgin Islands',
                'country_code' => 284
            ),
            array(
                'id' => 31,
                'country_name' => 'Brunei Darussalam',
                'country_code' => 673
            ),
            array(
                'id' => 32,
                'country_name' => 'Bulgaria',
                'country_code' => 359
            ),
            array(
                'id' => 33,
                'country_name' => 'Burkina Faso',
                'country_code' => 226
            ),
            array(
                'id' => 34,
                'country_name' => 'Burundi',
                'country_code' => 257
            ),
            array(
                'id' => 35,
                'country_name' => 'Cambodia',
                'country_code' => 855
            ),
            array(
                'id' => 36,
                'country_name' => 'Cameroon',
                'country_code' => 237
            ),
            array(
                'id' => 37,
                'country_name' => 'Canada,United States',
                'country_code' => 1
            ),
            array(
                'id' => 38,
                'country_name' => 'Cape Verde',
                'country_code' => 238
            ),
            array(
                'id' => 39,
                'country_name' => 'Cayman Islands',
                'country_code' => 1345
            ),
            array(
                'id' => 40,
                'country_name' => 'Central African Rep.',
                'country_code' => 236
            ),
            array(
                'id' => 41,
                'country_name' => 'Chad',
                'country_code' => 235
            ),
            array(
                'id' => 42,
                'country_name' => 'Chile',
                'country_code' => 56
            ),
            array(
                'id' => 43,
                'country_name' => 'China',
                'country_code' => 86
            ),
            array(
                'id' => 44,
                'country_name' => 'Colombia',
                'country_code' => 57
            ),
            array(
                'id' => 45,
                'country_name' => 'Comoros',
                'country_code' => 269
            ),
            array(
                'id' => 46,
                'country_name' => 'Congo. Dem. Rep.',
                'country_code' => 243
            ),
            array(
                'id' => 47,
                'country_name' => 'Congo. Republic',
                'country_code' => 242
            ),
            array(
                'id' => 48,
                'country_name' => 'Cook Islands',
                'country_code' => 682
            ),
            array(
                'id' => 49,
                'country_name' => 'Costa Rica',
                'country_code' => 506
            ),
            array(
                'id' => 50,
                'country_name' => 'Croatia',
                'country_code' => 385
            ),
            array(
                'id' => 51,
                'country_name' => 'Cuba',
                'country_code' => 53
            ),
            array(
                'id' => 52,
                'country_name' => 'Curacao',
                'country_code' => 599
            ),
            array(
                'id' => 53,
                'country_name' => 'Cyprus',
                'country_code' => 357
            ),
            array(
                'id' => 54,
                'country_name' => 'Czech Rep.',
                'country_code' => 420
            ),
            array(
                'id' => 55,
                'country_name' => 'Denmark',
                'country_code' => 45
            ),
            array(
                'id' => 56,
                'country_name' => 'Djibouti',
                'country_code' => 253
            ),
            array(
                'id' => 57,
                'country_name' => 'Dominica',
                'country_code' => 1767
            ),
            array(
                'id' => 58,
                'country_name' => 'Dominican Republic',
                'country_code' => 1809
            ),
            array(
                'id' => 59,
                'country_name' => 'Dominican Republic 2',
                'country_code' => 1829
            ),
            array(
                'id' => 60,
                'country_name' => 'Dominican Republic 3',
                'country_code' => 1849
            ),
            array(
                'id' => 61,
                'country_name' => 'Ecuador',
                'country_code' => 593
            ),
            array(
                'id' => 62,
                'country_name' => 'Egypt',
                'country_code' => 20
            ),
            array(
                'id' => 63,
                'country_name' => 'El Salvador',
                'country_code' => 503
            ),
            array(
                'id' => 64,
                'country_name' => 'Equatorial Guinea',
                'country_code' => 240
            ),
            array(
                'id' => 65,
                'country_name' => 'Eritrea',
                'country_code' => 291
            ),
            array(
                'id' => 66,
                'country_name' => 'Estonia',
                'country_code' => 372
            ),
            array(
                'id' => 67,
                'country_name' => 'Ethiopia',
                'country_code' => 251
            ),
            array(
                'id' => 68,
                'country_name' => 'Falkland Islands (Malvinas)',
                'country_code' => 500
            ),
            array(
                'id' => 69,
                'country_name' => 'Faroe Islands',
                'country_code' => 298
            ),
            array(
                'id' => 70,
                'country_name' => 'Fiji',
                'country_code' => 679
            ),
            array(
                'id' => 71,
                'country_name' => 'Finland',
                'country_code' => 358
            ),
            array(
                'id' => 72,
                'country_name' => 'France',
                'country_code' => 33
            ),
            array(
                'id' => 73,
                'country_name' => 'French Guiana',
                'country_code' => 594
            ),
            array(
                'id' => 74,
                'country_name' => 'French Polynesia',
                'country_code' => 689
            ),
            array(
                'id' => 75,
                'country_name' => 'Gabon',
                'country_code' => 241
            ),
            array(
                'id' => 76,
                'country_name' => 'Gambia',
                'country_code' => 220
            ),
            array(
                'id' => 77,
                'country_name' => 'Georgia',
                'country_code' => 995
            ),
            array(
                'id' => 78,
                'country_name' => 'Germany',
                'country_code' => 49
            ),
            array(
                'id' => 79,
                'country_name' => 'Ghana',
                'country_code' => 233
            ),
            array(
                'id' => 80,
                'country_name' => 'Gibraltar',
                'country_code' => 350
            ),
            array(
                'id' => 81,
                'country_name' => 'Greece',
                'country_code' => 30
            ),
            array(
                'id' => 82,
                'country_name' => 'Greenland',
                'country_code' => 299
            ),
            array(
                'id' => 83,
                'country_name' => 'Grenada',
                'country_code' => 1473
            ),
            array(
                'id' => 84,
                'country_name' => 'Guadeloupe',
                'country_code' => 590
            ),
            array(
                'id' => 85,
                'country_name' => 'Guam',
                'country_code' => 1671
            ),
            array(
                'id' => 86,
                'country_name' => 'Guatemala',
                'country_code' => 502
            ),
            array(
                'id' => 87,
                'country_name' => 'Guinea',
                'country_code' => 224
            ),
            array(
                'id' => 88,
                'country_name' => 'Guinea-Bissau',
                'country_code' => 245
            ),
            array(
                'id' => 89,
                'country_name' => 'Guyana',
                'country_code' => 592
            ),
            array(
                'id' => 90,
                'country_name' => 'Haiti',
                'country_code' => 509
            ),
            array(
                'id' => 91,
                'country_name' => 'Honduras',
                'country_code' => 504
            ),
            array(
                'id' => 92,
                'country_name' => 'Hongkong. China',
                'country_code' => 852
            ),
            array(
                'id' => 93,
                'country_name' => 'Hungary',
                'country_code' => 36
            ),
            array(
                'id' => 94,
                'country_name' => 'Iceland',
                'country_code' => 354
            ),
            array(
                'id' => 95,
                'country_name' => 'India',
                'country_code' => 91
            ),
            array(
                'id' => 96,
                'country_name' => 'Indonesia',
                'country_code' => 62
            ),
            array(
                'id' => 97,
                'country_name' => 'International Networks',
                'country_code' => 882
            ),
            array(
                'id' => 98,
                'country_name' => 'Iran',
                'country_code' => 98
            ),
            array(
                'id' => 99,
                'country_name' => 'Iraq',
                'country_code' => 964
            ),
            array(
                'id' => 100,
                'country_name' => 'Ireland',
                'country_code' => 353
            ),
            array(
                'id' => 101,
                'country_name' => 'Israel',
                'country_code' => 972
            ),
            array(
                'id' => 102,
                'country_name' => 'Italy',
                'country_code' => 39
            ),
            array(
                'id' => 103,
                'country_name' => 'Ivory Coast',
                'country_code' => 225
            ),
            array(
                'id' => 104,
                'country_name' => 'Jamaica',
                'country_code' => 1876
            ),
            array(
                'id' => 105,
                'country_name' => 'Japan',
                'country_code' => 81
            ),
            array(
                'id' => 106,
                'country_name' => 'Jordan',
                'country_code' => 962
            ),
            array(
                'id' => 108,
                'country_name' => 'Kenya',
                'country_code' => 254
            ),
            array(
                'id' => 109,
                'country_name' => 'Kiribati',
                'country_code' => 686
            ),
            array(
                'id' => 110,
                'country_name' => 'Korea N.. Dem. People`s Rep.',
                'country_code' => 850
            ),
            array(
                'id' => 111,
                'country_name' => 'Korea S. Republic of',
                'country_code' => 82
            ),
            array(
                'id' => 112,
                'country_name' => 'Kosovo',
                'country_code' => 383
            ),
            array(
                'id' => 113,
                'country_name' => 'Kuwait',
                'country_code' => 965
            ),
            array(
                'id' => 114,
                'country_name' => 'Kyrgyzstan',
                'country_code' => 996
            ),
            array(
                'id' => 115,
                'country_name' => 'Laos P.D.R.',
                'country_code' => 856
            ),
            array(
                'id' => 116,
                'country_name' => 'Latvia',
                'country_code' => 371
            ),
            array(
                'id' => 117,
                'country_name' => 'Lebanon',
                'country_code' => 961
            ),
            array(
                'id' => 118,
                'country_name' => 'Lesotho',
                'country_code' => 266
            ),
            array(
                'id' => 119,
                'country_name' => 'Liberia',
                'country_code' => 231
            ),
            array(
                'id' => 120,
                'country_name' => 'Libya',
                'country_code' => 218
            ),
            array(
                'id' => 121,
                'country_name' => 'Liechtenstein',
                'country_code' => 423
            ),
            array(
                'id' => 122,
                'country_name' => 'Lithuania',
                'country_code' => 370
            ),
            array(
                'id' => 123,
                'country_name' => 'Luxembourg',
                'country_code' => 352
            ),
            array(
                'id' => 124,
                'country_name' => 'Macao. China',
                'country_code' => 853
            ),
            array(
                'id' => 125,
                'country_name' => 'Macedonia',
                'country_code' => 389
            ),
            array(
                'id' => 126,
                'country_name' => 'Madagascar',
                'country_code' => 261
            ),
            array(
                'id' => 127,
                'country_name' => 'Malawi',
                'country_code' => 265
            ),
            array(
                'id' => 128,
                'country_name' => 'Malaysia',
                'country_code' => 60
            ),
            array(
                'id' => 129,
                'country_name' => 'Maldives',
                'country_code' => 960
            ),
            array(
                'id' => 130,
                'country_name' => 'Mali',
                'country_code' => 223
            ),
            array(
                'id' => 131,
                'country_name' => 'Malta',
                'country_code' => 356
            ),
            array(
                'id' => 132,
                'country_name' => 'Martinique (French Department of)',
                'country_code' => 596
            ),
            array(
                'id' => 133,
                'country_name' => 'Mauritania',
                'country_code' => 222
            ),
            array(
                'id' => 134,
                'country_name' => 'Mauritius',
                'country_code' => 230
            ),
            array(
                'id' => 135,
                'country_name' => 'Mexico',
                'country_code' => 52
            ),
            array(
                'id' => 136,
                'country_name' => 'Micronesia',
                'country_code' => 691
            ),
            array(
                'id' => 137,
                'country_name' => 'Moldova',
                'country_code' => 373
            ),
            array(
                'id' => 138,
                'country_name' => 'Monaco',
                'country_code' => 377
            ),
            array(
                'id' => 139,
                'country_name' => 'Mongolia',
                'country_code' => 976
            ),
            array(
                'id' => 140,
                'country_name' => 'Montenegro',
                'country_code' => 382
            ),
            array(
                'id' => 141,
                'country_name' => 'Montserrat',
                'country_code' => 1664
            ),
            array(
                'id' => 142,
                'country_name' => 'Morocco',
                'country_code' => 212
            ),
            array(
                'id' => 143,
                'country_name' => 'Mozambique',
                'country_code' => 258
            ),
            array(
                'id' => 144,
                'country_name' => 'Myanmar (Burma)',
                'country_code' => 95
            ),
            array(
                'id' => 145,
                'country_name' => 'Namibia',
                'country_code' => 264
            ),
            array(
                'id' => 146,
                'country_name' => 'Nepal',
                'country_code' => 977
            ),
            array(
                'id' => 147,
                'country_name' => 'Netherlands',
                'country_code' => 31
            ),
            array(
                'id' => 148,
                'country_name' => 'Netherlands Antilles',
                'country_code' => 599
            ),
            array(
                'id' => 149,
                'country_name' => 'New Caledonia',
                'country_code' => 687
            ),
            array(
                'id' => 150,
                'country_name' => 'New Zealand',
                'country_code' => 64
            ),
            array(
                'id' => 151,
                'country_name' => 'Nicaragua',
                'country_code' => 505
            ),
            array(
                'id' => 152,
                'country_name' => 'Niger',
                'country_code' => 227
            ),
            array(
                'id' => 153,
                'country_name' => 'Nigeria',
                'country_code' => 234
            ),
            array(
                'id' => 154,
                'country_name' => 'Niue',
                'country_code' => 683
            ),
            array(
                'id' => 155,
                'country_name' => 'Norway',
                'country_code' => 47
            ),
            array(
                'id' => 156,
                'country_name' => 'Oman',
                'country_code' => 968
            ),
            array(
                'id' => 157,
                'country_name' => 'Pakistan',
                'country_code' => 92
            ),
            array(
                'id' => 158,
                'country_name' => 'Palau (Republic of)',
                'country_code' => 680
            ),
            array(
                'id' => 159,
                'country_name' => 'Palestinian Territory',
                'country_code' => 970
            ),
            array(
                'id' => 160,
                'country_name' => 'Panama',
                'country_code' => 507
            ),
            array(
                'id' => 161,
                'country_name' => 'Papua New Guinea',
                'country_code' => 675
            ),
            array(
                'id' => 162,
                'country_name' => 'Paraguay',
                'country_code' => 595
            ),
            array(
                'id' => 163,
                'country_name' => 'Peru',
                'country_code' => 51
            ),
            array(
                'id' => 164,
                'country_name' => 'Philippines',
                'country_code' => 63
            ),
            array(
                'id' => 165,
                'country_name' => 'Poland',
                'country_code' => 48
            ),
            array(
                'id' => 166,
                'country_name' => 'Portugal',
                'country_code' => 351
            ),
            array(
                'id' => 167,
                'country_name' => 'Puerto Rico',
                'country_code' => 1787
            ),
            array(
                'id' => 168,
                'country_name' => 'Puerto Rico 2',
                'country_code' => 1939
            ),
            array(
                'id' => 169,
                'country_name' => 'Qatar',
                'country_code' => 974
            ),
            array(
                'id' => 170,
                'country_name' => 'Reunion',
                'country_code' => 262
            ),
            array(
                'id' => 171,
                'country_name' => 'Romania',
                'country_code' => 40
            ),
            array(
                'id' => 172,
                'country_name' => 'Russian Federation',
                'country_code' => 79
            ),
            array(
                'id' => 173,
                'country_name' => 'Rwanda',
                'country_code' => 250
            ),
            array(
                'id' => 174,
                'country_name' => 'Saint Kitts and Nevis',
                'country_code' => 1869
            ),
            array(
                'id' => 175,
                'country_name' => 'Saint Lucia',
                'country_code' => 1758
            ),
            array(
                'id' => 176,
                'country_name' => 'Samoa',
                'country_code' => 685
            ),
            array(
                'id' => 177,
                'country_name' => 'San Marino',
                'country_code' => 378
            ),
            array(
                'id' => 178,
                'country_name' => 'Sao Tome & Principe',
                'country_code' => 239
            ),
            array(
                'id' => 179,
                'country_name' => 'Satellite Networks',
                'country_code' => 870
            ),
            array(
                'id' => 180,
                'country_name' => 'Saudi Arabia',
                'country_code' => 966
            ),
            array(
                'id' => 181,
                'country_name' => 'Senegal',
                'country_code' => 221
            ),
            array(
                'id' => 182,
                'country_name' => 'Serbia',
                'country_code' => 381
            ),
            array(
                'id' => 183,
                'country_name' => 'Seychelles',
                'country_code' => 248
            ),
            array(
                'id' => 184,
                'country_name' => 'Sierra Leone',
                'country_code' => 232
            ),
            array(
                'id' => 185,
                'country_name' => 'Singapore',
                'country_code' => 65
            ),
            array(
                'id' => 186,
                'country_name' => 'Slovakia',
                'country_code' => 421
            ),
            array(
                'id' => 187,
                'country_name' => 'Slovenia',
                'country_code' => 386
            ),
            array(
                'id' => 188,
                'country_name' => 'Solomon Islands',
                'country_code' => 677
            ),
            array(
                'id' => 189,
                'country_name' => 'Somalia',
                'country_code' => 252
            ),
            array(
                'id' => 190,
                'country_name' => 'South Africa',
                'country_code' => 27
            ),
            array(
                'id' => 191,
                'country_name' => 'South Sudan',
                'country_code' => 211
            ),
            array(
                'id' => 192,
                'country_name' => 'Spain',
                'country_code' => 34
            ),
            array(
                'id' => 193,
                'country_name' => 'Sri Lanka',
                'country_code' => 94
            ),
            array(
                'id' => 194,
                'country_name' => 'St. Pierre & Miquelon',
                'country_code' => 508
            ),
            array(
                'id' => 195,
                'country_name' => 'St. Vincent & Gren.',
                'country_code' => 1784
            ),
            array(
                'id' => 196,
                'country_name' => 'Sudan',
                'country_code' => 249
            ),
            array(
                'id' => 197,
                'country_name' => 'Suriname',
                'country_code' => 597
            ),
            array(
                'id' => 198,
                'country_name' => 'Swaziland',
                'country_code' => 268
            ),
            array(
                'id' => 199,
                'country_name' => 'Sweden',
                'country_code' => 46
            ),
            array(
                'id' => 200,
                'country_name' => 'Switzerland',
                'country_code' => 41
            ),
            array(
                'id' => 201,
                'country_name' => 'Syrian Arab Republic',
                'country_code' => 963
            ),
            array(
                'id' => 202,
                'country_name' => 'Taiwan',
                'country_code' => 886
            ),
            array(
                'id' => 203,
                'country_name' => 'Tajikistan',
                'country_code' => 992
            ),
            array(
                'id' => 204,
                'country_name' => 'Tanzania',
                'country_code' => 255
            ),
            array(
                'id' => 205,
                'country_name' => 'Thailand',
                'country_code' => 66
            ),
            array(
                'id' => 206,
                'country_name' => 'Timor-Leste',
                'country_code' => 670
            ),
            array(
                'id' => 207,
                'country_name' => 'Togo',
                'country_code' => 228
            ),
            array(
                'id' => 208,
                'country_name' => 'Tonga',
                'country_code' => 676
            ),
            array(
                'id' => 209,
                'country_name' => 'Trinidad and Tobago',
                'country_code' => 1868
            ),
            array(
                'id' => 210,
                'country_name' => 'Tunisia',
                'country_code' => 216
            ),
            array(
                'id' => 211,
                'country_name' => 'Turkey',
                'country_code' => 90
            ),
            array(
                'id' => 212,
                'country_name' => 'Turkmenistan',
                'country_code' => 993
            ),
            array(
                'id' => 213,
                'country_name' => 'Turks and Caicos Islands',
                'country_code' => 1649
            ),
            array(
                'id' => 214,
                'country_name' => 'Tuvalu',
                'country_code' => 688
            ),
            array(
                'id' => 215,
                'country_name' => 'Uganda',
                'country_code' => 256
            ),
            array(
                'id' => 216,
                'country_name' => 'Ukraine',
                'country_code' => 380
            ),
            array(
                'id' => 217,
                'country_name' => 'United Arab Emirates',
                'country_code' => 971
            ),
            array(
                'id' => 218,
                'country_name' => 'United Kingdom',
                'country_code' => 44
            ),
            array(
                'id' => 220,
                'country_name' => 'Uruguay',
                'country_code' => 598
            ),
            array(
                'id' => 221,
                'country_name' => 'Uzbekistan',
                'country_code' => 998
            ),
            array(
                'id' => 222,
                'country_name' => 'Vanuatu',
                'country_code' => 678
            ),
            array(
                'id' => 223,
                'country_name' => 'Venezuela',
                'country_code' => 58
            ),
            array(
                'id' => 224,
                'country_name' => 'Viet Nam',
                'country_code' => 84
            ),
            array(
                'id' => 225,
                'country_name' => 'Virgin Islands. U.S.',
                'country_code' => 1340
            ),
            array(
                'id' => 226,
                'country_name' => 'Yemen',
                'country_code' => 967
            ),
            array(
                'id' => 227,
                'country_name' => 'Zambia',
                'country_code' => 260
            ),
            array(
                'id' => 228,
                'country_name' => 'Zimbabwe',
                'country_code' => 263
            )

        );
        foreach ($insertDataArray as $country) {
            DB::table('countries')->insert(
                $country
            );
        }
    }
};
