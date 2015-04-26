<?php namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HomeComposer {

    public $activeSection;
    public $showBreadcrumb;

    public function getBreadcrumb(Request $request) {
        $activeSection = '';

//        if ($request->is('about')) {
        if (\Request::is('about')) {
            $activeSection = "เกี่ยวกับสารานุกรมกว๊านพะเยา";
        } elseif (Request::path() == 'general') {
            $activeSection = "ข้อมูลทั่วไปกว๊านพะเยา";
        } elseif (Request::path() == 'ecology') {
            $activeSection = "นิเวศวิทยาและสิ่งแวดล้อม";
        } elseif (Request::path() == 'travel') {
            $activeSection = "เศรษฐกิจและการท่องเที่ยว";
        } elseif (Request::path() == 'water-resources') {
            $activeSection = "การจัดการทรัพยากรธรรมชาติ";
        } elseif (Request::path() == 'history') {
            $activeSection = "ประวัติศาสตร์และวัฒนธรรม";
        } elseif (Request::path() == 'register' || Request::path() == 'register/profile' || Request::path() == 'register/account') {
            $activeSection = "ลงทะเบียน";
        }

        if($activeSection == '') {
            $showBreadcrumb = false;
        } else {
            $showBreadcrumb = true;
        }

        $this->activeSection = $activeSection;
        $this->showBreadcrumb = $showBreadcrumb;
//        $this->showBreadcrumb = true;
    }

    public function compose(View $view) {
        $view->with([
           'activeSection' => $this->activeSection,
//           'showBreadcrumb' => $this->showBreadcrumb
           'showBreadcrumb' => true
        ]);
    }

}