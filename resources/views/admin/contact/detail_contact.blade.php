<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalBody" class="modal-body">
                <div class="row">
                <div class="col-md-12">
                    <br>
                <div >
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-family: inherit">Tiêu đề</label>
                        </div>
                        <div id="name" class="col-md-8 col-6">
                            {{ $contact->title }}
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-family: inherit">Tên</label>
                        </div>
                        <div id="name" class="col-md-8 col-6">
                            {{ $contact->name }}
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-family: inherit">Email</label>
                        </div>
                        <div id="email" class="col-md-8 col-6">
                            {{ $contact->email }}
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-family: inherit">Số điện thoại</label>
                        </div>
                        <div id="phone" class="col-md-8 col-6">
                            {{ $contact->phone }}
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-12">
                            <label style="font-family: inherit">Nội dung liên hệ</label>
                        </div>

                    </div>

                </div>
                </div>
                    <div id="staff" class="">
                        {{ $contact->desc }}
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="closerUser" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
{{--                <button type="button" data-id="" id="editUser" class="btn btn-primary">Sửa</button>--}}
            </div>
        </div>
    </div>
</div>