<?php

/**
* Muhammad Zulfikar
* https://github.com/razulasyura
* razul.asyura@gmail.com
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
use Breadcrumbs;
use SEO;
use URL;

use App\Volunteer;
use App\Team;

class FrontController extends Controller
{

    var $theme = 'default';

    public function index()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Index";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Load Data
        /* $trips = New Trip();
        $trip = $trips->all()->take(6); */
        // Render View
        return view(strtolower('index'), compact('page_title'));
    }

    public function about()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "About";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    public function team()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "team";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load Data
        $teams = New Team();
        $team = $teams->all();
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','team'));
    }

    public function volunteer()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "volunteer";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load Data
        $volunteers = New Volunteer();
        $data = $volunteers->all();
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','data'));
    }


    public function event()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Event";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    public function event_detail()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Event_detail";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    public function contact()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Contact";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    public function gallery()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "gallery";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    public function video()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "video";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }


 
    /**
     * Breadcrumbs
     *
     * @param  page_title  $value
     * @return breadcrumb
     */
    public function _breadcrumbs($page_title=NULL)
    {
        $breadcrumbs = Breadcrumbs::addCrumb('Home', URL::to('/'))
        ->addCrumb($page_title, strtolower($page_title))
        ->setCssClasses('breadcrumb text-center');
        return $breadcrumbs;
    }

    /**
     * SEO
     *
     * @param  page_title  $value,$page_description $value
     * @return SEO
     */    
    public function _seo($page_title=NULL,$page_description=NULL)
    {
        // SEO
        SEO::setTitle($page_title);
        SEO::setDescription($page_description);
        SEO::opengraph()->setUrl(URL::to('/'.strtolower($page_title)));
        SEO::opengraph()->addProperty('type', 'articles');
    }
}
