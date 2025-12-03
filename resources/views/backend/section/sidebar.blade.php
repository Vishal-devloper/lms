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
        <li>
            <a href="javascript:;" class="">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Managed Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.category.index') }}"><i class='bx bx-radio-circle'></i>Category</a>
                </li>
                <li> <a href="{{ route('admin.subCategory.index') }}"><i class='bx bx-radio-circle'></i>SubCategory</a>
                </li>
                <li> <a href="app-file-manager.html"><i class='bx bx-radio-circle'></i>File Manager</a>
                </li>
                <li> <a href="app-contact-list.html"><i class='bx bx-radio-circle'></i>Contatcs</a>
                </li>
                <li> <a href="app-to-do.html"><i class='bx bx-radio-circle'></i>Todo List</a>
                </li>
                <li> <a href="app-invoice.html"><i class='bx bx-radio-circle'></i>Invoice</a>
                </li>
                <li> <a href="app-fullcalender.html"><i class='bx bx-radio-circle'></i>Calendar</a>
                </li>
            </ul>
        </li>
        
        
        
    </ul>
    <!--end navigation-->
</div>