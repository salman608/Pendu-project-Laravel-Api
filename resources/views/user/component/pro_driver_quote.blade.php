    <!-- Direct Quote Modal -->
    <!-- Large modal -->
    <div class="modal fade" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header become_modal_header">
              <h5 class="modal-title">Request a quote</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
  
            <div class="modal-body">
  
              <div class="become_tab">
  
  
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class='become_tab_name' >Select service</li>
                  <li class="nav-item mt-1">
                    <a class="nav-link  active" id="pills-shop" data-toggle="pill" href="#pills-tab1" role="tab" aria-controls="pills-tab1" aria-selected="true">Shop & drop</a>
                  </li>
                  <li class="nav-item mt-1">
                    <a class="nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Collect & drop</a>
                  </li>
                  <li class="nav-item mt-1">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Movers</a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-tab1" role="tabpanel" aria-labelledby="pills-shop">
                    <div class="shop_tab_content">
                      <form method="POST" action="{{route('quote.store')}}">
                          @csrf
                        <div class="form-group row">
                          <label for="input_text" class="col-sm-2 col-form-label">Categories</label>
                          <div class="col-sm-10">
                              <select multiple class="selectpicker w-100" id="procat_id" name="product_cats[]">
                                  @foreach ($product_cats as $p_cat)
                                      <option value="{{ $p_cat->id  }}">{{$p_cat->title}}</option>
                                  @endforeach
                              </select>
                          </div>
                        </div>
                        <input type="hidden" name="driver_id" value="" id="">
                        <div class="form-group row">
                          <label for="input_category" class="col-sm-2 col-form-label">Products</label>
                          <div class="col-sm-10">
                              <table class="table table-borderless border-top-0">
                                  <tbody>
                                      <tr class="top border-bottom border-light" id="tableRow_1">
                                          <td><input class="form-control" type="text" name="pro_name[]"  placeholder="Enter Product Name..."></td>
                                          <td class="qty">
                                              <span class="minus" style="background: #8f8f8f">-</span>
                                              <input type="number" class="count" name="qty[]" value="1">
                                              <span class="plus" style="background: #8f8f8f">+</span>
                                         </td>
                                          <td class="text-right"> <input type="text" id="pprice" name="pro_price[]" class="form-control" placeholder="Unit Price.."></td>
                                          <td class="text-right"><button type="button" class="btn btn-success plus-button" id="add_btn">+</button></td>
                                      </tr>
                                  </tbody>
                                  {{-- <tfoot >
                                        <tr >
                                            <td colspan="5" class="text-center">
                                                <button type="button" class="btn btn-success plus-button" id="add_btn">+</button>
                                            </td>
                                        </tr>
                                  </tfoot> --}}
                                  <thead>
                                  </thead>
                              </table>
                          </div>
                        </div>
  
                        <div class="form-group row">
                          <label for="input_product_cost" class="col-sm-2 col-form-label">Product cost</label>
                          <div class="col-sm-10">
                            <input name="product_cost" type="text" class="form-control" id="input_product_cost" >
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input_shop_pickup" class="col-sm-2 col-form-label">Enter shops/ Pickup address</label>
                          <div class="col-sm-10">
                              <div class="input-group">
                                  <input class="form-control input-group-lg" type="text" name="shop_address" id="shop_address"
                                     title="Enter your pickup address"
                                     placeholder="Enter your pickup address" required/>
                                  <div class="input-group-append cursor-pointer">
                                      <span class="input-group-text border-0 pickupModal" data-toggle="modal" data-target="#googleMapPicupModal" id="pickupSpanId">
                                          <img src="{{ asset('frontend/assets/images/Icons/location.svg') }}" alt="" width="20" height="auto">
                                      </span>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input_delivery_address" class="col-sm-2 col-form-label">Enter delivery address</label>
                          <div class="col-sm-10">
                              <div class="input-group">
                                  <input id="delivery_address" class="form-control input-group-lg" type="text" name="delivery_address"
                                     title="Enter your delivery address"
                                     placeholder="Enter your delivery address" required/>
                                  <div class="input-group-append cursor-pointer">
                                      <span class="input-group-text border-0 deliveryModal" data-toggle="modal" data-target="#googleMapDeliveryModal" id="deliverySpanId">
                                          <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" width="20" height="auto">
                                      </span>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input_offer" class="col-sm-2 col-form-label">Dalivery Time</label>
                          <div class="col-sm-10">
                              <div class="row">
                                  @foreach ($delivery_times as $d_time)
                                  <div class="pr-2" >
                                      <label >
                                          <input type="radio" name="delivery_time"  value="{{$d_time->id}}" >
                                          <div style="width:100px !important;">
                                              <label class="radio-btn-text delivery_time_checker" style="margin-top: 12px;font-size:15px;margin-left: 22px;" for="asap" >{{$d_time->title}}</label>
                                          </div>
                                      </label>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input_offer" class="col-sm-2 col-form-label">Offered delivery fee</label>
                          <div class="col-sm-10">
                            <input name="delivery_fee" type="text" class="form-control" id="input_offer" >
                          </div>
                        </div>
  
  
  
                        <div class="modal-footer become_footer">
                          <button  type="submit" class="btn ">Request quote</button>
  
                        </div>
  
  
                      </form>
                    </div>
                  </div>
  
                  {{-- collect and drop --}}
  
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <div class="shop_tab_content">
                          <form method="POST" action="{{route('quote.store')}}">
                              @csrf
  
                            <input type="hidden" name="driver_id" value="" id="">
                            <div class="form-group row">
                              <label for="input_category" class="col-sm-2 col-form-label">Products</label>
                              <div class="col-sm-10">
                                  <table class="table table-borderless border-top-0">
                                      <tbody>
                                          <tr class="top border-bottom border-light">
                                              <td><input class="form-control" type="text" name="pro_name[]"  placeholder="Enter Product Name..."></td>
                                              <td class="qty">
                                                  <span class="minus" style="background: #8f8f8f">-</span>
                                                  <input type="number" class="count" name="qty[]" value="1">
                                                  <span class="plus" style="background: #8f8f8f">+</span>
                                             </td>
                                              {{-- <td class="text-right"> <input type="text" id="pprice" name="pro_price[]" class="form-control" placeholder="Unit Price.."></td> --}}
                                              <td class="text-right"><button type="button" class="btn btn-success plus-button" id="addCollectButton">+</button></td>
                                          </tr>
                                      </tbody>
                                      {{-- <tfoot >
                                            <tr >
                                                <td colspan="5" class="text-center">
                                                    <button type="button" class="btn btn-success plus-button" id="add_btn">+</button>
                                                </td>
                                            </tr>
                                      </tfoot> --}}
                                      <thead>
                                      </thead>
                                  </table>
                              </div>
                            </div>
  
                            <div class="form-group row">
                              <label for="input_product_cost" class="col-sm-2 col-form-label">Product cost</label>
                              <div class="col-sm-10">
                                <input name="product_cost" type="text" class="form-control" id="input_product_cost" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="input_shop_pickup" class="col-sm-2 col-form-label">Enter shops/ Pickup address</label>
                              <div class="col-sm-10">
                                  <div class="input-group">
                                      <input class="form-control input-group-lg" type="text" name="shop_address" id="shop_address"
                                         title="Enter your pickup address"
                                         placeholder="Enter your pickup address" required/>
                                      <div class="input-group-append cursor-pointer">
                                          <span class="input-group-text border-0 pickupCollectModal" data-toggle="modal" data-target="#googleMapPicupCollectModal" id="pickupSpanId">
                                              <img src="{{ asset('frontend/assets/images/Icons/location.svg') }}" alt="" width="20" height="auto">
                                          </span>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="input_delivery_address" class="col-sm-2 col-form-label">Enter delivery address</label>
                              <div class="col-sm-10">
                                  <div class="input-group">
                                      <input id="delivery_address" class="form-control input-group-lg" type="text" name="delivery_address"
                                         title="Enter your delivery address"
                                         placeholder="Enter your delivery address" required/>
                                      <div class="input-group-append cursor-pointer">
                                          <span class="input-group-text border-0 deliveryCollectModal" data-toggle="modal" data-target="#googleMapDeliveryCollectModal" id="deliverySpanId">
                                              <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" width="20" height="auto">
                                          </span>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="input_offer" class="col-sm-2 col-form-label">Dalivery Time</label>
                              <div class="col-sm-10">
                                  <div class="row">
                                      @foreach ($delivery_times as $d_time)
                                      <div class="pr-2" >
                                          <label >
                                              <input type="radio" name="delivery_time"  value="{{$d_time->id}}" >
                                              <div style="width:100px !important;">
                                                  <label class="radio-btn-text delivery_time_checker" style="margin-top: 12px;font-size:15px;margin-left: 22px;" for="asap" >{{$d_time->title}}</label>
                                              </div>
                                          </label>
                                      </div>
                                      @endforeach
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="input_offer" class="col-sm-2 col-form-label">Offered delivery fee</label>
                              <div class="col-sm-10">
                                <input name="delivery_fee" type="text" class="form-control" id="input_offer" >
                              </div>
                            </div>
  
  
  
                            <div class="modal-footer become_footer">
                              <button  type="submit" class="btn ">Request quote</button>
  
                            </div>
  
  
                          </form>
                        </div>
                  </div>
                  {{-- mover section --}}
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                      <div class="shop_tab_content">
                          <form method="POST" action="{{route('quote.store')}}">
                              @csrf
                            <div class="form-group row">
                              <label for="input_text" class="col-sm-2 col-form-label">Vehicle Type</label>
                              <div class="col-sm-10">
                                  <div class="cc-selector">
                                      <div class="form-group">
                                          <div class="form-row" style="margin-top: -18px;">
  
                                              <div class="cc-selector">
                                                  <div class="row">
                                                  @foreach ($vehicles as $vehicle)
                                                  <label class="drinkcard-cc" for="checboxStrip">
                                                     <div class="col form-check">
                                                          <input id="checboxStrip@php echo $vehicle->id @endphp" type="checkbox" name="vahicle_id" value="{{$vehicle->id}}"/>
                                                         <img src="{{ $vehicle->icon }}" alt="">
                                                      </div>
                                                  </label>
  
                                                  @endforeach
  
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <input type="hidden" name="driver_id" value="" id="">
                            <div class="form-group row">
                              <label for="input_category" class="col-sm-2 col-form-label">Products</label>
                              <div class="col-sm-10">
                                  <table class="table table-borderless border-top-0">
                                      <tbody>
                                          <tr class="top border-bottom border-light" id="tableRow_1">
                                              <td><input class="form-control" type="text" name="pro_name[]"  placeholder="Enter Product Name..."></td>
                                              <td class="qty">
                                                  <span class="minus" style="background: #8f8f8f">-</span>
                                                  <input type="number" class="count" name="qty[]" value="1">
                                                  <span class="plus" style="background: #8f8f8f">+</span>
                                             </td>
                                              {{-- <td class="text-right"> <input type="text" id="pprice" name="pro_price[]" class="form-control" placeholder="Unit Price.."></td> --}}
                                              <td class="text-right"><button type="button" class="btn btn-success plus-button" id="addMoverButton">+</button></td>
                                          </tr>
                                      </tbody>
                                      {{-- <tfoot >
                                            <tr >
                                                <td colspan="5" class="text-center">
                                                    <button type="button" class="btn btn-success plus-button" id="add_btn">+</button>
                                                </td>
                                            </tr>
                                      </tfoot> --}}
                                      <thead>
                                      </thead>
                                  </table>
                              </div>
                            </div>
  
                            <div class="form-group row">
                              <label for="input_product_cost" class="col-sm-2 col-form-label">Product cost</label>
                              <div class="col-sm-10">
                                <input name="product_cost" type="text" class="form-control" id="input_product_cost" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="input_shop_pickup" class="col-sm-2 col-form-label">Enter shops/ Pickup address</label>
                              <div class="col-sm-10">
                                  <div class="input-group">
                                      <input class="form-control input-group-lg" type="text" name="shop_address" id="shop_address"
                                         title="Enter your pickup address"
                                         placeholder="Enter your pickup address" required/>
                                      <div class="input-group-append cursor-pointer">
                                          <span class="input-group-text border-0 pickupModal" data-toggle="modal" data-target="#googleMapPicupModal" id="pickupSpanId">
                                              <img src="{{ asset('frontend/assets/images/Icons/location.svg') }}" alt="" width="20" height="auto">
                                          </span>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="input_delivery_address" class="col-sm-2 col-form-label">Enter delivery address</label>
                              <div class="col-sm-10">
                                  <div class="input-group">
                                      <input id="delivery_address" class="form-control input-group-lg" type="text" name="delivery_address"
                                         title="Enter your delivery address"
                                         placeholder="Enter your delivery address" required/>
                                      <div class="input-group-append cursor-pointer">
                                          <span class="input-group-text border-0 deliveryModal" data-toggle="modal" data-target="#googleMapDeliveryModal" id="deliverySpanId">
                                              <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" width="20" height="auto">
                                          </span>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="input_offer" class="col-sm-2 col-form-label">Dalivery Time</label>
                              <div class="col-sm-10">
                                  <div class="row">
                                      @foreach ($delivery_times as $d_time)
                                      <div class="pr-2" >
                                          <label >
                                              <input type="radio" name="delivery_time"  value="{{$d_time->id}}" >
                                              <div style="width:100px !important;">
                                                  <label class="radio-btn-text delivery_time_checker" style="margin-top: 12px;font-size:15px;margin-left: 22px;" for="asap" >{{$d_time->title}}</label>
                                              </div>
                                          </label>
                                      </div>
                                      @endforeach
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="input_offer" class="col-sm-2 col-form-label">Offered delivery fee</label>
                              <div class="col-sm-10">
                                <input name="delivery_fee" type="text" class="form-control" id="input_offer" >
                              </div>
                            </div>
  
  
  
                            <div class="modal-footer become_footer">
                              <button  type="submit" class="btn ">Request quote</button>
  
                            </div>
  
  
                          </form>
                        </div>
                  </div>
                </div>
  
              </div>
            </div>
  
  
  
          </div>
        </div>
      </div>
  
  