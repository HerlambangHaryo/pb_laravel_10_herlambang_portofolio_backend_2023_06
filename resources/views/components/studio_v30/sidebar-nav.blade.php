<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-header">Nav</div>
            
            <div class="menu-item @if($title == 'Dashboard') active @endif">
                <a href="{{ route('Dashboard.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </span>
                    <span class="menu-text">
                        Dashboard 
                    </span>
                </a>
            </div>   
            <div class="menu-item @if($title == 'WorkExperiences') active @endif">
                <a href="{{ route('WorkExperiences.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-building "></i>
                    </span>
                    <span class="menu-text">
                        Work Experience
                    </span>
                </a>
            </div>  
            <div class="menu-item @if($title == 'AcademicBackground') active @endif">
                <a href="{{ route('AcademicBackground.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-id-card "></i>
                    </span>
                    <span class="menu-text">
                        Academic Background
                    </span>
                </a>
            </div>  
            <div class="menu-item @if($title == 'Languages') active @endif">
                <a href="{{ route('Languages.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-id-card "></i>
                    </span>
                    <span class="menu-text">
                        Languages
                    </span>
                </a>
            </div>  
            <div class="menu-item @if($title == 'Organizations') active @endif">
                <a href="{{ route('Organizations.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-id-card "></i>
                    </span>
                    <span class="menu-text">
                        Organizations
                    </span>
                </a>
            </div>  
            <div class="menu-item @if($title == 'SkillsSpecialization') active @endif">
                <a href="{{ route('SkillsSpecialization.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-id-card "></i>
                    </span>
                    <span class="menu-text">
                        Skills Specialization
                    </span>
                </a>
            </div>  
            <div class="menu-item @if($title == 'TechStacks') active @endif">
                <a href="{{ route('TechStacks.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-id-card "></i>
                    </span>
                    <span class="menu-text">
                        Tech Stacks
                    </span>
                </a>
            </div>  
            <div class="menu-item @if($title == 'AboutApp') active @endif">
                <a href="{{ route('AboutApp.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-id-card "></i>
                    </span>
                    <span class="menu-text">
                        About App
                    </span>
                </a>
            </div>  

        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
    
    <!-- BEGIN mobile-sidebar-backdrop -->
    <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
    <!-- END mobile-sidebar-backdrop -->
</div>
<!-- END #sidebar -->