<?php 

    if(!function_exists('define_additionalview'))
    {
        function define_additionalview($isDesktop, $isMobile, $isTablet)
        {
            // ----------------------------------------------------------- Initialize 

            // ----------------------------------------------------------- Action   
                if($isDesktop == 1)
                {
                    $isi = 'desktop';
                }
                elseif($isTablet == 1)
                {
                    $isi = 'tablet';
                } 
                elseif($isMobile == 1)
                {
                    $isi = 'mobile';
                }  

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_view'))
    {
        function define_view($template, $type, $content, $additional_view, $view_file)
        {
            // ----------------------------------------------------------- Initialize 

            // ----------------------------------------------------------- Action   
                $isi = 'contents.'.$template.'.'.$type.'.'.$additional_view.'.'.strtolower($content).'.'.$view_file;

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_preview'))
    {
        function define_preview($template, $type, $content, $additional_view)
        {
            // ----------------------------------------------------------- Initialize 

            // ----------------------------------------------------------- Action   
                $isi = 'content.'.$template.'.'.$type.'.'.$additional_view.'.'.strtolower($content);

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }