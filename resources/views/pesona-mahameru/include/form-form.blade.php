<section class="team-area section-padding-100-0">
    <h3 style="text-align: center;">@lang('form.header')</h3>
      <div class="container" >
          <div class="card card-solid " style="margin-bottom: 90px;background-color: #003579">
              <div class="card-body contact-form-area contact-page ">             
                <div class="row align-items-center">
                  <div class="col-12 col-md-4" style="">
                      
                        <div class="about-content mb-100">
                          <!-- Section Heading -->
                          <div class="section-heading">
                              <div class="line"></div>
                              <p>Take look at our</p>
                              
                          </div>
                          <p class="mb-0" style="color: white">@lang('form.p1')</p>
                          <p class="mb-0" style="color: white">@lang('form.p2')</p>             
                          <button class="btn credit-btn box-shadow" type="submit" style="margin-top: 20px"> <i class="fa fa-whatsapp"></i> Customer Service</button>
                      </div>
                  </div>
                  <hr>
                  <div class="col-12 col-md-8">
                    <form action="{{url("/send-visit")}}" method="post">
                      @csrf
                      <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label style="margin-left: 20px;color: white">Nama </label>
                                  <input type="text" class="form-control" name="name" placeholder="@lang('form.nama')" required>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label style="margin-left: 20px;color: white">Email </label>
                                <input type="email" class="form-control" name="email" placeholder="@lang('form.email')" required>
                              </div>
                            </div>
                            <div class="col-lg-6" style="margin-top: 20px">
                              <div class="form-group">
                                <label style="margin-left: 20px;color: white">Jenis Kelamin </label>
                                <select  class="form-control" name="jenis_kelamin" >
                                  <option value="" class="form-control" disabled>Select</option>
                                  <option value="Laki-laki" class="form-control">@lang('form.laki-laki')</option>
                                  <option value="Perempuan" class="form-control">@lang('form.perempuan')</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6" style="margin-top: 20px">
                              <div class="form-group">
                              <label style="margin-left: 20px;color: white">Tanggal </label>
                                <input type="date" class="form-control" name="tanggal" placeholder="Your E-mail" required>
                              </div>
                            </div>
                        <div class="col-lg-6" style="margin-top: 20px">
                          <div class="form-group">
                            <label style="margin-left: 20px;color: white">No Telp </label>
                              <input type="number" class="form-control" name="no_telp" placeholder="@lang('form.no_telp')" value="+62" required>
                          </div>
                        </div>
                        <div class="col-lg-6" style="margin-top: 20px">
                          <div class="form-group">
                            <label style="margin-left: 20px;color: white">Domisili </label>
                            <input type="text" class="form-control" name="domisili" placeholder="@lang('form.domisili')" required>
                          </div>
                        </div>
                          <div class="col-12" style="margin-top: 20px">
                              <div class="form-group">
                                <label style="margin-left: 20px;color: white">Budget </label>
                                <div >
                                 <label class="btn btn-secondary active">
                                  <input type="radio" name="budget" id="option1" autocomplete="off" checked="" value="Di Bawah 100 juta"> < 100 juta
                                 </label>
                                 <label class="btn btn-secondary active">
                                  <input type="radio" name="budget" id="option1" autocomplete="off" checked="" value="100 sampai 250 juta"> 100 - 250 juta
                                   </label>
                                   <label class="btn btn-secondary active">
                                    <input type="radio" name="budget" id="option1" autocomplete="off" checked="" value="250 sampai 500 juta"> 250-500 juta
                                     </label>
                                     <label class="btn btn-secondary active">
                                      <input type="radio" name="budget" id="option1" autocomplete="off" checked="" value="Di atas 500 juta"> >500 juta
                                       </label>
                                </div>
                                  
                              </div>
                          </div>
                          <div class="col-12" style="margin-top: 20px">
                              <div class="form-group">
                                  <textarea  class="form-control" name="detail" cols="30" rows="10" placeholder="@lang('form.pesan')" required></textarea>
                              </div>
                          </div>
                          <div class="col-12" style="margin-top: 20px">
                              <button class="btn credit-btn box-shadow" type="submit">Send</button>
                          </div>
                      </div>
                  </form>
                  </div>
              </div>
              </div>
              <!-- /.card-body -->
          </div>
      </div>
  </section>

  @section('footer-frontend')
  @if(Session::has('visit'))
  <script>
      toastr.success("Selamat ! Team kami akan menghubungi anda beberapa saat lagi");
  </script>
  @endif
  @endsection