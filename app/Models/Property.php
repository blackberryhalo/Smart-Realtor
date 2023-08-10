<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','name_tr','featured_image','location_id','price','sale','type','bedrooms','drawing_rooms','bathrooms','net_sqm','gross_sqm','pool','overview','overview_tr','why_buy','why_buy_tr','description','description_tr',
    ];
    // protected $guarded = ['created_at', 'updated_at'];
    // protected $hidden = ['created_at', 'updated_at'];


    //    public function featured() {
    //        $this->belongsTo(Media::class, 'featured_media_id');
    //    }

    public function location() {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function gallery() {
        return $this->hasMany(Media::class, 'property_id');
    }

    public function dynamic_pricing($hkd) {
        $current_currency = Cookie::get('currency', 'tl');  //ekhane Cookie::get('key':'currency', default:'tl'); mane default hkd(tl) raktechi amra currency website e.
        if($current_currency == 'usd') {
            // Please set your api key here
            $get = Http::get('https://api.currencyapi.com/v3/latest?apikey=cur_live_8SXanOKNpljcR7ydgmGlu9PzRqojbEvKdl3OsM7u&currencies=&base_currency=HKD');
            if($get->successful()) {
                $usd = intval($hkd * $get->json()['data']['USD']['value']);
                $usd = number_format($usd, 2);
                return $usd . ' USD';
            }
        }
        else {
            $hkd = number_format($hkd, 2);
            return $hkd . ' HKD';
        }
    }

}
