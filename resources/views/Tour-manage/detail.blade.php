 @extends('Layout.default')
 @section('page_content')
     <div class="col-sm-12">
         <div class="card card-topline-yellow">
             <div class="card-head">
                 <header>Chi Tiết Tour</header>
                 <div class="tools">
                     <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                     <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                     <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                 </div>
             </div>
             <div class="card-body ">
                 <div class="table-scrollable">

                     <h4>Thông Tin Vận chuyển</h4>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <td>Đang cập nhật</td>
                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>

                         </thead>
                     </table>

                     <h4>Thông Tin khách Sạn</h4>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <td>Đang cập nhật</td>
                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>

                         </thead>
                     </table>

                     <h4>Thông Tin Hướng Dẫn Viên</h4>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <td>Đang cập nhật</td>
                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>

                         </thead>
                     </table>

                     <h4>Thông Tin Hướng Dẫn Viên Tiễn</h4>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <td>Đang cập nhật</td>
                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>

                         </thead>
                     </table>

                     <h4>Thông Tin Tập Trung</h4>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <td>Ngày giờ tập trung</td>
                                 <td>04/06/2021 06:00</td>
                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>

                         </thead>
                         <tbody>
                             <tr>
                                 <td>Nơi tập trung</td>
                                 <td>Viettravel</td>
                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>
                         </tbody>
                     </table>

                     <h4>Giá Tour & Phụ Thu Phòng Đơn</h4>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <th>Loại Khách</th>
                                 <th>Giá Tour</th>
                                 <th>Land Tour</th>
                                 <th>edit</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>Trẻ em (Từ 5 tuổi đến dưới 12 tuổi)</td>
                                 <td>1,495,000 đ</td>
                                 <td>2,990,000 đ</td>

                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>
                         </tbody>

                         <tbody>
                             <tr>
                                 <td>Người lớn (Từ 12 tuổi trở lên)</td>
                                 <td>2,990,000 đ</td>
                                 <td>2,990,000 đ</td>

                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>
                         </tbody>

                         <tbody>
                             <tr>
                                 <td>Trẻ nhỏ (Từ 2 tuổi đến dưới 5 tuổi)</td>
                                 <td>0 đ</td>
                                 <td>0 đ</td>

                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>
                         </tbody>

                         <tbody>
                             <tr>
                                 <td>Phụ thu phòng đơn</td>
                                 <td>1,1000 đ</td>
                                 <td>0 đ</td>

                                 <td>
                                     <a href="#" class="btn btn-tbl-edit btn-xs">
                                         <i class="fa fa-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-tbl-delete btn-xs">
                                         <i class="fa fa-trash-o "></i>
                                     </a>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 @endsection
