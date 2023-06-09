<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

use Jenssegers\Agent\Agent;
use DB;
 
use App\Models\Aboutapp; 

class AboutAppController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'AboutApp';
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
            $panel_name     = ucwords(str_replace("_"," ", $this->content));  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = Aboutapp::where('id', '=', 1)
                                ->get();
                                    
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
            $panel_name     = ucwords(str_replace("_"," ", $this->content));  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'edit';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = Aboutapp::findOrFail(1);
                                    
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
            //get post by ID
            $data = Aboutapp::findOrFail($id);

            //check if logo is uploaded
            if ($request->hasFile('logo')) {

                //upload new logo
                $logo = $request->file('logo');
                $logo->storeAs('public/aboutapp', $logo->hashName());

                //delete old logo
                Storage::delete('public/aboutapp/'.$data->logo); 

                $logo_status = 1;
            } 
            else 
            {
                $logo_status = 0;
            }

            
            //check if ico is uploaded
            if ($request->hasFile('ico')) {

                //upload new ico
                $ico = $request->file('ico');
                $ico->storeAs('public/aboutapp', $ico->hashName());

                //delete old ico
                Storage::delete('public/aboutapp/'.$data->ico);

                $ico_status = 1;
            } 
            else 
            {
                $ico_status = 0;
            }

            if($logo_status == 1 && $ico_status == 1)
            {
                //update post with new ico
                $data->update([
                    'name'      => $request->name, 
                    'theme'     => $request->theme, 
                    'mode'      => $request->mode, 
                    'color'     => $request->color, 
                    'logo'      => $logo->hashName(),
                    'ico'       => $ico->hashName(),
                ]); 

            }
            else
            { 
                //update post without logo and ico
                $data->update([
                    'name'     => $request->name, 
                    'theme'     => $request->theme, 
                    'mode'      => $request->mode, 
                    'color'     => $request->color, 
                ]); 
            }
                                    
        // ----------------------------------------------------------- Send  
            return redirect()
                ->route($content.'.index')
                ->with(['success' => 'Data Berhasil Diubah!']);
        ///////////////////////////////////////////////////////////////  
    }
}
