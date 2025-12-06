<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="{{ setSidebar(['admin.dashboard']) }}">
            <a href="{{ route('admin.dashboard') }}" class="">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            
        </li>
        <li class="{{ setSidebar(['admin.category*','admin.subCategory*']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Managed Category</div>
            </a>
            <ul>
                <li class="{{ setSidebar(['admin.category*']) }}"> <a href="{{ route('admin.category.index') }}"><i class='bx bx-radio-circle'></i>Category</a>
                </li>
                <li class="{{ setSidebar(['admin.subCategory*']) }}"> <a href="{{ route('admin.subCategory.index') }}"><i class='bx bx-radio-circle'></i>SubCategory</a>
                </li>
                
            </ul>
        </li>
        {{-- Slider --}}
        <li class="{{ setSidebar(['admin.slider*']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Application Settings</div>
            </a>
            <ul>
                <li class="{{ setSidebar(['admin.slider*']) }}"> <a href="{{ route('admin.slider.index') }}"><i class='bx bx-radio-circle'></i>Managed Slider</a>
                </li>
                
                
            </ul>
        </li>
        
        
        
    </ul>
    <!--end navigation-->
</div>