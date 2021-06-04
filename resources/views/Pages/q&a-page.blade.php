 @extends('Layout.default')
 @section('page_content')
<!-- start page content -->      
                      <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-gray">
                                <div class="card-body no-padding height-9">
									<div class="inbox">
				                        <div class="row">
				                            <div class="col-md-3">
				                                <div class="inbox-sidebar">
				                                    <a href="email_compose.html" data-title="Compose" class="btn red compose-btn btn-block">
				                                        <i class="fa fa-edit"></i> Compose </a>
				                                    <ul class="inbox-nav inbox-divider">
				                                        <li class="active"><a href="email_inbox.html"><i
																class="fa fa-inbox"></i> Inbox <span
																class="label mail-counter-style label-danger pull-right">2</span></a>
				                                        </li>
				                                        <li><a href="#"><i
																class="fa fa-envelope"></i> Sent Mail</a>
				                                        </li>
				                                        <li><a href="#"><i
																class="fa fa-briefcase"></i> Important</a>
				                                        </li>
				                                        <li><a href="#"><i
																class="fa fa-star"></i> Starred </a>
				                                        </li>
				                                        <li><a href="#"><i
																class=" fa fa-external-link"></i> Drafts <span
																class="label mail-counter-style label-info pull-right">30</span></a>
				                                        </li>
				                                        <li><a href="#"><i
																class=" fa fa-trash-o"></i> Trash</a>
				                                        </li>
				                                    </ul>
				                                    <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
				                                        <li>
				                                            <h4>Labels</h4>
				                                        </li>
				                                        <li><a href="#"><i
																class="fa fa-tags"></i>  Work</a>
				                                        </li>
				                                        <li>
				                                            <a href="#">
				                                                <i class=" fa fa-tags"></i> Design
				                                            </a>
				                                        </li>
				                                        <li>
				                                            <a href="#">
				                                                <i class=" fa fa-tags "></i> Family
				                                            </a>
				                                        </li>
				                                        <li>
				                                            <a href="#">
				                                                <i class=" fa fa-tags "></i> Friends
				                                            </a>
				                                        </li>
				                                        <li>
				                                            <a href="#">
				                                                <i class=" fa fa-tags "></i> Office
				                                            </a>
				                                        </li>
				                                    </ul>
				                                    <ul class="nav nav-pills nav-stacked labels-info inbox-divider ">
				                                        <li>
				                                            <h4>Buddy online</h4>
				                                        </li>
				                                        <li>
				                                            <a href="#">
				                                                <i class=" fa fa-comments text-success"></i> Jhone Doe
				                                               <span class="online-status">I do not think</span>
				                                            </a>
				                                        </li>
				                                        <li>
				                                            <a href="#">
				                                                <i class=" fa fa-comments text-danger"></i> Sumon
				                                                <span class="online-status">Busy with coding</span>
				                                            </a>
				                                        </li>
				                                        <li>
				                                            <a href="#">
				                                                <i class=" fa fa-comments text-muted "></i> Anjelina Joli
				                                                <span class="online-status">I out of control</span>
				                                            </a>
				                                        </li>
				                                        <li>
				                                            <a href="#">
				                                                <i class=" fa fa-comments text-muted "></i> Jonathan Smith
				                                                <span class="online-status">I am not here</span>
				                                            </a>
				                                        </li>
				                                        <li>
				                                            <a href="#">
				                                                <i class=" fa fa-comments text-muted "></i> Tawseef
				                                                <span class="online-status">I do not think</span>
				                                            </a>
				                                        </li>
				                                    </ul>
				                                </div>
				                            </div>
				                            <div class="col-md-9">
				                                <div class="inbox-body">
				                                    <div class="inbox-header">
				                                        <div class="mail-option no-pad-left">
				                                            <div class="btn-group group-padding">
				                                                <a class="btn mini tooltips" href="#" data-toggle="dropdown" data-placement="top" data-original-title="Refresh"> <i class=" fa fa-refresh fa-lg"></i>
				                                                </a>
				                                                <a class="btn mini tooltips" href="#" data-original-title="Archive"> <i class=" fa fa-archive fa-lg"></i>
				                                                </a>
				                                                <a class="btn mini tooltips" href="#" data-original-title="Trash"> <i class=" fa fa-trash-o fa-lg"></i>
				                                                </a>
				                                            </div>
				                                            <div class="btn-group res-email-btn">
				                                                <a class="btn mini tooltips" href="#" data-original-title="Folders"> <i class=" fa fa-folder fa-lg"></i>
				                                                </a>
				                                                <a class="btn mini tooltips" href="#" data-original-title="Tag"> <i class=" fa fa-tag fa-lg"></i>
				                                                </a>
				                                            </div>
				                                            <div class="btn-group hidden-phone">
				                                                <a class="btn mini blue-bgcolor" href="#" data-toggle="dropdown" aria-expanded="false"> More <i
																	class="fa fa-angle-down downcolor"></i>
																</a>
				                                                <ul class="dropdown-menu">
				                                                    <li><a href="#"><i
																			class="fa fa-pencil"></i> Mark as Read</a>
				                                                    </li>
				                                                    <li><a href="#"><i class="fa fa-ban"></i>
																			Spam</a>
				                                                    </li>
				                                                    <li class="divider"></li>
				                                                    <li><a href="#"><i
																			class="fa fa-trash-o"></i> Delete</a>
				                                                    </li>
				                                                </ul>
				                                            </div>
				                                            <div class="btn-group pull-right btn-prev-next">
				                                                <button class="btn btn-sm btn-primary" type="button">
				                                                    <i class="fa fa-chevron-left"></i>
				                                                </button>
				                                                <button class="btn btn-sm btn-primary" type="button">
				                                                    <i class="fa fa-chevron-right"></i>
				                                                </button>
				                                            </div>
            <!-- end page content -->
@endsection