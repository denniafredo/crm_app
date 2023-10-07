@extends('app') <!-- Extend the main template -->

@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-block card-stretch">
                                <div class="card-body p-0">
                                    <div class="d-flex justify-content-between align-items-center p-3">
                                        <h5 class="font-weight-bold">Employee List</h5>
                                        <a href="{{url('employee/add')}}"
                                           class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                            </svg>
                                            Add Employee
                                        </a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table data-table mb-0">
                                            <thead class="table-color-heading">
                                            <tr class="">
                                                <th scope="col">
                                                    Name
                                                </th>
                                                <th scope="col">
                                                    Email
                                                </th>
                                                <th scope="col">
                                                    Location
                                                </th>
                                                <th scope="col">
                                                    Phone
                                                </th>
                                                <th scope="col" class="text-right">
                                                    Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/1.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Christian Bale</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Vari tech
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>christian.Bale@blueberrye.com</td>
                                                <td>
                                                    Ohio, USA
                                                </td>
                                                <td>
                                                    +1 (021) 145-2256
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View" href="customer-view.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="customer-edit.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/2.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Matt Damon</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Galaxy Man
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>mattdamon@blueberry.com</td>
                                                <td>
                                                    Briston
                                                </td>
                                                <td>
                                                    +25 (100) 1254-662
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View"
                                                           href="{{url('employee/detail/1')}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="{{url('employee/1')}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/3.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Caitriona Balfe</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Manager
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>caitrionabalfe204@blueberry.com</td>
                                                <td>
                                                    Nevada, USA
                                                </td>
                                                <td>
                                                    +251 966 522 456
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View"
                                                           href="{{url('employee/detail/1')}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="{{url('employee/1')}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/4.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Josh Lucas</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Father and Son
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>joshlucas007@blueberry.com</td>
                                                <td>
                                                    Georgia
                                                </td>
                                                <td>
                                                    +5 20154-65755
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View" href="customer-view.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="customer-edit.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/5.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Jon Bernthal</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Morris Cafe
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>jon.Bernthal@blueberry.com</td>
                                                <td>
                                                    West Virginia, USA
                                                </td>
                                                <td>
                                                    +200 51145 65523
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View" href="customer-view.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="customer-edit.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/6.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Noah Jupe</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Grossman's
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>nnoahjupe@blueberry.com</td>
                                                <td>
                                                    Ohio, USA
                                                </td>
                                                <td>
                                                    +251 5225-98554
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View" href="customer-view.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="customer-edit.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/3.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Tracy Letts</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Jeans Unlimited
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>tracyetts@blueberry.com</td>
                                                <td>
                                                    Texas, USA
                                                </td>
                                                <td>
                                                    +22 562 4587 55
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View" href="customer-view.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="customer-edit.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/2.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Ray McKinnon</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Gene Man
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>raymcKinnon@blueberry.com</td>
                                                <td>
                                                    Nevada, USA
                                                </td>
                                                <td>
                                                    +66 4515585632
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View" href="customer-view.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="customer-edit.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/6.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Remo Girone</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Apple Walter
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>remo.girone420@blueberry.com</td>
                                                <td>
                                                    Bristow
                                                </td>
                                                <td>
                                                    +6 14552-15771
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View" href="customer-view.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="customer-edit.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" src="images/user/3.jpg">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="font-weight-bold">Jack McMullen</span>
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                                Noor Cafeteria
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>jackmullen@blueberry.com</td>
                                                <td>
                                                    California, USA
                                                </td>
                                                <td>
                                                    +25 4415-21445
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View" href="customer-view.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="customer-edit.html">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="text-secondary mx-4"
                                                                 width="20" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="" data-original-title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection