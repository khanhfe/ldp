<div class="modal">
    <div class="modal-content">
        <div class="modal-content__inner" data-modal="accept">
            <div class="title">Bạn muốn duyệt yêu cầu này?</div>
            <p>Nhập comment (không bắt buộc)</p>
            <textarea name="" id="" cols="43" rows="5"></textarea>
            <div class="d-flex box-button">
                <button type="button" class="btn btn-primary">Ok</button>
                <button type="button" class="btn btn-secondary" data-action="close">Back</button>
            </div>
        </div>
        <div class="modal-content__inner" data-modal="refuse">
            <div class="title">Từ chối duyệt?</div>
            <p>Vui lòng chọn lý do từ chối (bắt buộc)</p>
            <select name="" id="">
                <option value="" disabled selected>Chọn lý do</option>
            </select>
            <textarea name="" id="" placeholder="Thêm comment (không bắt buộc)" cols="43" rows="5"></textarea>
            <div class="d-flex box-button">
                <button type="button" class="btn btn-danger">Từ chối duyệt</button>
                <button type="button" class="btn btn-secondary" data-action="close">Back</button>
            </div>
        </div>
        <div class="modal-content__inner" data-modal="back">
            <div class="title">Trả về Kế toán?</div>
            <p>Vui lòng chọn lý do trả về (bắt buộc)</p>
            <select name="" id="">
                <option value="" disabled selected>Chọn lý do</option>
            </select>
            <textarea name="" id="" placeholder="Thêm comment (không bắt buộc)" cols="43" rows="5"></textarea>
            <div class="d-flex box-button">
                <button type="button" class="btn btn-warning">Trả về KT</button>
                <button type="button" class="btn btn-secondary" data-action="close">Back</button>
            </div>
        </div>
    </div>
    <div class="backdrop"></div>
</div>