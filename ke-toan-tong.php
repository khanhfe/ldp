<?php
include_once('header.php');
include_once('sidebar-left.php');
?>
<div class="main">
    <form action="/duyet-thu-2.html" method="post">
        <div class="main__header">
            <div class="main-container">
                <div class="main__header__left">
                    <h2 class="main__header__title">[ERP duyệt thu] - Yêu cầu PT2303001</h2>
                    <div class="main__header__meta">
                        <span class="date-time">
                            Thời hạn xử lý: <span class="value">15:45 - 15/03/2023</span>
                        </span>
                        <span class="time-remaining">
                            Thời gian còn lại: <span class="value">18:05</span>
                        </span>
                    </div>
                    <div class="main__header__meta status ">
                        Trạng thái: <span class="value success">Khởi tạo</span>
                    </div>
                </div>
                <div class="main__header__flex-button d-flex w-100 gap-2 gap-3 pd-r30 mb-12">
                    <button type="button" data-action="accept" class="btn btn-primary w-100">Duyệt yêu
                        cầu</button>
                    <button type="button" data-action="refuse" class="btn btn-danger w-100">Từ chối
                        duyệt</button>
                    <button type="button" data-action="back" class="btn btn-warning w-100">Trả về kế
                        toán</button>
                </div>
            </div>
        </div>
        <div class="main-table table-1">
            <div class="main-container">
                <h3 class="main-table__title">Thông tin chung</h3>
                <div class="main-table__row">
                    <div class="main-table__column label-195 d-flex color-gray">
                        <img class="icon" src="assets/images/icons/person.svg" alt="">
                        <span class="label">Người tạo đề xuất: </span>
                    </div>
                    <div class="main-table__column value color-bold semibold">
                        Đàm Ánh Dương
                    </div>
                </div>
                <div class="main-table__row">
                    <div class="main-table__column label-195 d-flex color-gray">
                        <img class="icon" src="assets/images/icons/block.svg" alt="">
                        <span class="label">Khối/ BP: </span>
                    </div>
                    <div class="main-table__column value color-bold semibold">
                        HRBO
                    </div>
                </div>
                <div class="main-table__row">
                    <div class="main-table__column label-195 d-flex color-gray">
                        <img class="icon" src="assets/images/icons/time.svg" alt="">
                        <span class="label">Thời gian tạo: </span>
                    </div>
                    <div class="main-table__column value color-bold semibold">
                        15:45 - 14/03/2023
                    </div>
                </div>
            </div>
        </div>
        <div class="main-table table-2">
            <div class="main-container">
                <h3 class="main-table__title">Mục đích chi</h3>
                <div class="main-table__row">
                    <div class="main-table__column flex-150">Khoản mục mẹ:</div>
                    <div class="main-table__column semibold">Thu thanh lý, nhượng bán tài sản</div>
                </div>
                <div class="main-table__row">
                    <div class="main-table__column flex-150">Khoản mục con:</div>
                    <div class="main-table__column semibold">Thanh lý tài sản cố định</div>
                </div>
                <div class="main-table__row">
                    <div class="main-table__column flex-150">Ghi chú:</div>
                    <div class="main-table__column light italic color-gray">thanh lý ghế xoay</div>
                </div>
            </div>
        </div>
        <div class="main-table table-2">
            <div class="main-container d-flex">
                <div class="table-left">
                    <h3 class="main-table__title">Chứng từ đi kèm</h3>
                    <div class="main-table__row">
                        <div class="main-table__column label-195">1. Bảng kê danh mục</div>
                        <div class="main-table__column field-radio disable">
                            <input id="yes1" type="radio" value="yes" name="1">
                            <label for="yes1">
                                <span>Có</span>
                            </label>
                            <input id="no1" type="radio" value="no" name="1">
                            <label for="no1">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                    <div class="main-table__row">
                        <div class="main-table__column label-195">2. Quyết định thanh lý</div>
                        <div class="main-table__column field-radio disable">
                            <input id="yes2" type="radio" value="yes" name="2">
                            <label for="yes2">
                                <span>Có</span>
                            </label>
                            <input id="no2" type="radio" value="no" name="2">
                            <label for="no2">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                    <div class="main-table__row">
                        <div class="main-table__column label-195">3. Biên bản giao nhận</div>
                        <div class="main-table__column field-radio disable">
                            <input id="yes3" type="radio" value="yes" name="3">
                            <label for="yes3">
                                <span>Có</span>
                            </label>
                            <input id="no3" type="radio" value="no" name="3">
                            <label for="no3">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                    <div class="main-table__row">
                        <div class="main-table__column label-195">4. Hóa đơn bán hàng</div>
                        <div class="main-table__column field-radio disable">
                            <input id="bill-yes" type="radio" value="yes" name="bill">
                            <label for="bill-yes">
                                <span>Có</span>
                            </label>
                            <input id="bill-no" type="radio" value="no" name="bill">
                            <label for="bill-no">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="table-right">
                    <h3 class="main-table__title">Loại</h3>
                    <div class="main-table__row">
                        <div class="main-table__column field-radio disable">
                            <input id="hard_copy" type="radio" value="yes" name="hard_copy">
                            <label for="hard_copy">
                                <span>Bản cứng</span>
                            </label>
                            <input id="soft_copy" type="radio" value="no" name="hard_copy">
                            <label for="soft_copy">
                                <span>Bản mềm</span>
                            </label>
                        </div>
                    </div>
                    <div class="main-table__row">
                        <div class="main-table__column field-radio disable">
                            <input id="liquidation_decision_type-yes" type="radio" value="yes" name="liquidation_decision_type">
                            <label for="liquidation_decision_type-yes" class="disable">
                                <span>Có</span>
                            </label>
                            <input id="liquidation_decision_type-no" type="radio" value="no" name="liquidation_decision_type">
                            <label for="liquidation_decision_type-no" class="disable">
                                <span>Không có</span>
                            </label>
                            <input type="text" value="Bổ sung sau" class="note" name="note-liquidation-decision" id="">
                        </div>
                    </div>
                    <div class="main-table__row">
                        <div class="main-table__column field-radio disable">
                            <input id="receipt_delivery_type-yes" type="radio" value="yes" name="receipt_delivery_type">
                            <label for="receipt_delivery_type-yes">
                                <span>Có</span>
                            </label>
                            <input id="receipt_delivery_type-no" type="radio" value="no" name="receipt_delivery_type">
                            <label for="receipt_delivery_type-no">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                    <div class="main-table__row">
                        <div class="main-table__column field-radio disable">
                            <input id="bill_type-yes" type="radio" value="yes" name="bill_type">
                            <label for="bill_type-yes">
                                <span>Có</span>
                            </label>
                            <input id="bill_type-no" type="radio" value="no" name="bill_type">
                            <label for="bill_type-no">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-table table-3">
            <div class="main-container">
                <h3 class="main-table__title">Hình thức thu tiền</h3>
                <div class="main-table__row">
                    <div class="main-table__column label-195">1. Thu tiền mặt</div>
                    <div class="main-table__column field-radio disable">
                        <input id="cash-yes" type="radio" value="yes" name="cash">
                        <label for="cash-yes">
                            <span>Có</span>
                        </label>
                        <input id="cash-no" type="radio" value="no" name="cash">
                        <label for="cash-no">
                            <span>Không</span>
                        </label>
                    </div>
                    <div class="main-table__column d-flex align-center money">
                        <label for="money_cash">Số tiền</label>
                        <input type="text" name="money_cash" class="vnd" id="money_cash">
                    </div>
                </div>
                <div class="main-table__row">
                    <div class="main-table__column label-195">2. Chuyển khoản</div>
                    <div class="main-table__column field-radio disable">
                        <input id="banking-yes" type="radio" value="yes" name="bank_transfer">
                        <label for="banking-yes">
                            <span>Có</span>
                        </label>
                        <input id="banking-no" type="radio" value="no" name="bank_transfer">
                        <label for="banking-no">
                            <span>Không</span>
                        </label>
                    </div>
                    <div class="main-table__column d-flex align-center money">
                        <label for="bank_cash">Số tiền</label>
                        <input type="text" class="disable" name="bank_cash" id="bank_cash">
                    </div>
                </div>
                <div class="total-money">
                    Tổng số tiền đề nghị duyệt thu: <span>890.000</span> VND
                </div>
            </div>
        </div>
    </form>
</div>
<?php
include_once('sidebar-right.php');
include_once('modal.php');
include_once('footer.php');
?>