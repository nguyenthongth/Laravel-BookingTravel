@extends('Booking.booking')
@section('content-book')
        <main id="main">
          <!-- top information area -->
          <div class="inner-top">
            <div class="container">
              <h1 class="inner-main-heading">Đặt tour</h1>
              <!-- breadcrumb -->
              <nav class="breadcrumbs">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">pages</a></li>
                  <li><span>Đặt tour</span></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="inner-main common-spacing container">
            <!-- booking form -->
            <form class="booking-form" action="#">
              <div class="row same-height">
                <div class="col-md-6">
                  <div class="top-box">
                    <a href="#" class="holder height">
                      <span class="left">Bạn là khách hàng quay trở lại?</span>
                      <span class="right">Đăng nhập</span>
                      <span class="arrow"></span>
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="top-box">
                    <a href="#" class="holder height">
                      <span class="left">Bạn giảm giá khuyến mại? </span>
                      <span class="right">Nhập mã phiếu giảm giá</span>
                      <span class="arrow"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-holder">
                    <h2 class="small-size">Thông tin thanh toán</h2>
                    <div class="wrap">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="hold">
                            <label for="name">Họ Và Tên</label>
                            <input type="text" id="name" class="form-control" />
                          </div>
                        </div>
                        
                      </div>
                      <div class="hold">
                        <label for="address">Địa Chỉ</label>
                        <input type="text" id="address" class="form-control" />
                      </div>
                      <div class="hold">
                        <label for="city">Số Khách</label>
                        <input type="text" id="" class="form-control" />
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="hold">
                            <label for="em">Email</label>
                            <input type="email" id="em" class="form-control" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="hold">
                            <label for="phn">Điện thoại</label>
                            <input type="text" id="phn" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <ul class="option">
                        <li>
                          <header class="title">
                            <label class="custom-radio">
                              <input type="radio" name="pay" />
                              <span class="check-input"></span>
                              <span class="check-label">Kiểm tra thanh toán</span>
                            </label>
                          </header>
                          <div class="info-hold">
                            <p>
                              Please send your cheque to Entrada Inc. Address,
                              Thank You!
                            </p>
                          </div>
                        </li>
                        <li>
                          <header class="title">
                            <label class="custom-radio">
                              <input type="radio" name="pay" />
                              <span class="check-input"></span>
                              <span class="check-label">Thanh toán Paypal</span>
                            </label>
                          </header>
                          <div class="info-hold">
                            <p>
                             Nếu bạn không có tài khoản paypal - bạn vẫn có thể thanh toán bằng thẻ tín dụng!
                            </p>
                          </div>
                        </li>
                      </ul>
                      <ul class="payment-option">
                        <li>
                          <img alt="visa" src="img/footer/visa.png" />
                        </li>
                        <li>
                          <img
                            width="33"
                            height="20"
                            alt="master card"
                            src="img/footer/mastercard.png"
                          />
                        </li>
                        <li>
                          <img
                            width="72"
                            height="20"
                            alt="paypal"
                            src="img/footer/paypal.png"
                          />
                        </li>
                        <li>
                          <img
                            width="33"
                            height="20"
                            alt="maestro"
                            src="img/footer/maestro.png"
                          />
                        </li>
                        <li>
                          <img
                            width="55"
                            height="20"
                            alt="bank transfer"
                            src="img/footer/bank-transfer.png"
                          />
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-holder">
                    <h2 class="small-size">Ghi chú bổ sung</h2>
                    <div class="wrap">
                      <div class="hold">
                        <label for="txt">Ghi chú của bạn</label>
                        <textarea
                          id="txt"
                          class="form-control"
                          placeholder="Please enter any additional information here, eg. food/drug requirements etc."
                        ></textarea>
                      </div>
                    </div>
                    <div class="order-block">
                      <h2 class="small-size">Xem trước Đơn đặt hàng</h2>
                      <div class="wrap">
                        <table class="product-table">
                          <thead>
                            <tr>
                              <th>Chuyến tham quan đã chọn</th>
                              <th>Tổng giá</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <span class="title"
                                  >Everest Trekking &emsp;<span class="amount"
                                    >x&emsp; 3</span
                                  ></span
                                >
                                <time datetime="2016-09-29"
                                  >Booking Date:&emsp; 14th Jan 2016</time
                                >
                              </td>
                              <td>
                                <span class="amount">$2,999</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="title"
                                  >Bungee Jumping &emsp;<span class="amount"
                                    >x&emsp; 2</span
                                  ></span
                                >
                                <time datetime="2016-09-29"
                                  >Booking Date:&emsp; 14th Jan 2016</time
                                >
                              </td>
                              <td>
                                <span class="amount">$1,999</span>
                              </td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td>Tổng giá</td>
                              <td>$4,988</td>
                            </tr>
                          </tfoot>
                        </table>
                        <button type="submit" class="btn btn-default">
                          Xác nhận đặt chỗ
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </main>
@endsection