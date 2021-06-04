@extends('Layout.default')

@section('page_content')
       <!-- start Payment Details -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                         
                                <div class="card-body ">
                                 <div class="card card-box">
                                <div class="card-head">
                                    <header>Thêm tài khoản</header>
                                     <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
				                           <i class="material-icons">more_vert</i>
				                        </button>
				                        <div class="mdl-menu__container is-upgraded"><div class="mdl-menu__outline mdl-menu--bottom-right"></div><ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" data-mdl-for="panel-button" data-upgraded=",MaterialMenu,MaterialRipple">
				                           <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">assistant_photo</i>Action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
				                           <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">print</i>Another action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
				                           <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">favorite</i>Something else here<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
				                        </ul></div>
                                </div>
                                <div class="card-body " id="bar-parent">
                                    <!--hien thi thong bao -->
                                    @if(count($errors) > 0)
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $err)
                                                {{$err}}<br>
                                            @endforeach
                                        </div>
                                    @endif
                                    
                                    @if(session('thongbao'))
                                            <div class="alert alert-success">
                                                {{session('thongbao')}}
                                            </div>
                                    @endif

                                    <form action="{{route('account_manager.store')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="simpleFormName">Ten</label>
                                            <input type="email" class="form-control" name="txt_name" placeholder="Ten">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Email</label>
                                            <input type="email" class="form-control" name="txt_email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormPassword">Password</label>
                                            <input type="password" class="form-control" name="txt_password"  placeholder="Password">
                                        </div>
                                        {{-- <div class="form-group">
                                            <div class="checkbox checkbox-icon-black">
                                                <input id="rememberChk1" type="checkbox" checked="checked">
                                                <label for="rememberChk1">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div> --}}  
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        {{-- </div> --}}
                    </div>
        <!-- end Payment Details -->
@endsection
