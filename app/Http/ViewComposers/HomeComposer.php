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
            $activeSection = "����ǡѺ���ҹء�����ҹ�����";
        } elseif (Request::path() == 'general') {
            $activeSection = "�����ŷ���仡��ҹ�����";
        } elseif (Request::path() == 'ecology') {
            $activeSection = "������Է���������Ǵ����";
        } elseif (Request::path() == 'travel') {
            $activeSection = "���ɰ�Ԩ��С�÷�ͧ�����";
        } elseif (Request::path() == 'water-resources') {
            $activeSection = "��èѴ��÷�Ѿ�ҡø����ҵ�";
        } elseif (Request::path() == 'history') {
            $activeSection = "����ѵ���ʵ������Ѳ�����";
        } elseif (Request::path() == 'register' || Request::path() == 'register/profile' || Request::path() == 'register/account') {
            $activeSection = "ŧ����¹";
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