<?php

namespace App\Http\Livewire\Admin\Reviews;

use App\Models\SiteRating;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ManageReview extends Component
{
    public $status;

    public function render()
    {
        $reviews = Cache::remember('review_list', 60 * 60, function(){
            return SiteRating::with('user')->paginate(10);
        });
        return view('livewire.admin.reviews.manage-review',[
            'reviews' => $reviews
        ]);
    }


    public function switchStatus($id){
        try {
            $review = SiteRating::where('id', $id)->first();
            $review->status =  $review->status == 0 ? 1 : 0;
            $review->save();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
