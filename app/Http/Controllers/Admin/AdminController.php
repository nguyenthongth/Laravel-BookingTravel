<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NoteTour;
use App\ProgramTour;
use App\Tour;
use App\TourDetail;

class AdminController extends Controller
{
    public function index()
    {
        return view("Pages.home-page");
    }

    public function toPost()
    {
        $data = Tour::query()->select('*')->get();
        return view("Pages.post-page")->with('tours', $data);
    }

    public function programtour()
    {
        $data = ProgramTour::query()->select('program.name', 'program.content', 'program.nr_day', 'tour.code', 'program.time')
            ->join('tour', 'tour.id', 'program.tour_id')->orderByDesc('program.nr_day')->get();
        return view("Tour-manage.program")->with('programtours', $data);
    }

    public function programtour_index($id)
    {
        $data = ProgramTour::query()->select('program.name', 'program.content', 'program.nr_day', 'tour.code', 'program.time')
            ->join('tour', 'tour.id', 'program.tour_id')->orderByDesc('program.nr_day')
            ->where('tour.id', $id)
            ->get();
        return  $data;
    }

    public function note_index($id){
        $data = NoteTour::query()->select('*')->join('tour', 'tour.id', 'note_tour.tour_id')->where('tour.id', $id)->first();
        $result = json_encode($data);
        // var_dump($result);die;
        return $result;
    }

    public function detailtour_index($id)
    {
        $data = TourDetail::query()->select('detail_tour.transfer_info', 'detail_tour.hotel_info', 'detail_tour.tour_guide_info', 'tour.code', 'detail_tour.generate_time', 'generate_address', 'detail_tour.note')
            ->join('tour', 'tour.id', 'detail_tour.tour_id')
            ->where('tour.id', $id)
            ->first();
        return  $data;
    }

    public function detailtour()
    {
        return view("Tour-manage.detail");
    }

    public function notetour()
    {
        return view("Tour-manage.note");
    }

    public function contacttour()
    {
        return view("Tour-manage.contact");
    }


    public function reviewstour()
    {
        return view("Tour-manage.reviews");
    }
    //    public function toqanda(){
    //     return view("Pages.q&a-page");
    // }

}
