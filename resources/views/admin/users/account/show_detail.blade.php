<div style="width: 600px;height: 600px;margin-left: 500px" class="container   modal fade card" id="show">
    <div class="model body">
    <div class="card-body">
        <div class="card-title mb-4">
            <div class="d-flex justify-content-start">
                <div class="image-container">
                    <div class="userData mt-3">
                        <p style="color: #0a0a0a;font-size: 20px; font-family: inherit">Thông tin Chi tiết</p>
                    </div>
                </div>
                <div class="ml-auto">
                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Chi
                            tiết</a>
                    </li>
                </ul>
                <div class="tab-content ml-1" id="myTabContent">
                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style=" font-family: inherit">Tên</label>
                            </div>
                            <div class="col-md-8 col-6">
                                <p  id="name1"></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-family: inherit">Email</label>
                            </div>
                            <div  class="col-md-8 col-6">
                                <p  id="email1"></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-family: inherit">Số điện thoại</label>
                            </div>
                            <div class="col-md-8 col-6">
                                <p  id="phone1"></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-family: inherit">Nhân viên</label>
                            </div>
                            <div  class="col-md-8 col-6">
                                <p id="staff1"></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-family: inherit">Chức vụ</label>
                            </div>
                            <div id="role" class="col-md-8 col-6">

                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row" style="margin-left: 400px">
                            <button class="btn btn-secondary waves-effect btn-default " data-dismiss="modal">
                                Đóng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<script></script>
