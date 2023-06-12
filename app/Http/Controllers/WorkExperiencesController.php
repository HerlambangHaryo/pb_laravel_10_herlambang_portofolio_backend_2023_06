<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Support\Facades\Storage;

use Jenssegers\Agent\Agent;
use DB;
 
use App\Models\Work_experience; 

class WorkExperiencesController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'WorkExperiences';
    public $type        = 'backend';

    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();   

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = "Work Experiences";  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = Work_experience::get();
                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    // 'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data', 
                )
            );
        /////////////////////////////////////////////////////////////// 
    }
 
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();   

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = "Work Experiences";  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'create';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = array();
                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    // 'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data', 
                )
            );
        /////////////////////////////////////////////////////////////// 
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();   

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize 
            $content        = $this->content;  

        // ----------------------------------------------------------- Action  
            //validate form  
            if ($request->hasFile('company_logo')) 
            {
                //upload image
                $company_logo = $request->file('company_logo');
                $company_logo->storeAs('public/company', $company_logo->hashName());

                //create post
                Work_experience::create([
                    'company_logo'  => $company_logo->hashName(),
                    'title'         => $request->title,
                    'date_start'    => $request->date_start,
                    'date_end'      => $request->date_end,
                    'is_present'    => $request->is_present,
                    'company'       => $request->company, 
                    'city'          => $request->city,
                    'country'       => $request->country,
                    'task'          => $request->task, 
                ]);
            }
            else
            { 
                //create post
                Work_experience::create([ 
                    'title'         => $request->title,
                    'date_start'    => $request->date_start,
                    'date_end'      => $request->date_end,
                    'is_present'    => $request->is_present,
                    'company'       => $request->company, 
                    'city'          => $request->city,
                    'country'       => $request->country,
                    'task'          => $request->task, 
                ]);
            }
            
        // ----------------------------------------------------------- Send  
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data successfully saved!']);
        ///////////////////////////////////////////////////////////////  
    }
 
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();   

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = "Work Experiences";  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'edit';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = Work_experience::findOrFail($id);
                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    // 'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data', 
                )
            );
        ///////////////////////////////////////////////////////////////  
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();   

        // ----------------------------------------------------------- Agent

        // ----------------------------------------------------------- Initialize
            $content        = $this->content; 

        // ----------------------------------------------------------- Action  
            $data = Work_experience::findOrFail($id);

            //validate form  
            if ($request->hasFile('company_logo')) 
            {
                //upload image                
                $company_logo = $request->file('company_logo');
                $company_logo->storeAs('public/company', $company_logo->hashName());

                //delete old 
                Storage::delete('public/company/'.$data->company_logo);


                //update post
                $data->update([
                    'company_logo'  => $company_logo->hashName(),
                    'title'         => $request->title,
                    'date_start'    => $request->date_start,
                    'date_end'      => $request->date_end,
                    'is_present'    => $request->is_present,
                    'company'       => $request->company, 
                    'city'          => $request->city,
                    'country'       => $request->country,
                    'task'          => $request->task, 
                ]);
            }
            else
            { 
                //update post
                $data->update([
                    'title'         => $request->title,
                    'date_start'    => $request->date_start,
                    'date_end'      => $request->date_end,
                    'is_present'    => $request->is_present,
                    'company'       => $request->company, 
                    'city'          => $request->city,
                    'country'       => $request->country,
                    'task'          => $request->task, 
                ]);
            }
            
        // ----------------------------------------------------------- Send  
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data successfully saved!']); 
        ///////////////////////////////////////////////////////////////  
    }
 
    /**
     * deletedata
     *
     * @param  mixed $id
     * @return View
     */
    public function deletedata(string $id): View
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();   

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = "Work Experiences";  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'deletedata';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = Work_experience::findOrFail($id);
                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    // 'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data', 
                )
            );
        ///////////////////////////////////////////////////////////////  
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();   

        // ----------------------------------------------------------- Agent

        // ----------------------------------------------------------- Initialize
            $content        = $this->content; 

        // ----------------------------------------------------------- Action  
            //get by ID
            $data = Work_experience::findOrFail($id); 

            //delete image
            Storage::delete('public/company/'. $data->company_logo);

            //delete post
            $data->delete();  
        // ----------------------------------------------------------- Send  
            return redirect()
                ->route($content.'.index')
                ->with(['success' => 'Data Berhasil Dihapus!']);
        ///////////////////////////////////////////////////////////////   
    }
}
