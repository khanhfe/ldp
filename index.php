<?php
include_once('header.php');
include_once('sidebar-left.php');
?>
<div class="main">
    <form action="duyet-thu-2.php" method="post">
        <div class="main__header">
            <div class="main-container d-flex justify-between">
                <h2 class="main__header__title">TẠO ĐỀ XUẤT DUYỆT THU</h2>
                <div class="main__header__box-button">
                    <button type="submit" class="btn btn-primary">Gửi đề xuất</button>
                </div>
            </div>
        </div>
        <div class="main-table table-1">
            <div class="main-container">
                <h3 class="main-table__title">Mục đích thu</h3>
                <div class="main-table__row">
                    <div class="main-table__column label-140">Khoản mục mẹ:</div>
                    <div class="main-table__column field">
                        <select name="">
                            <option value="">Thu thanh lý, nhượng bán tài sản</option>
                            <option value="">Thu thanh lý</option>
                        </select>
                    </div>
                    <div class="main-table__column addition-field d-flex">
                        <span>Ghi chú:</span>
                        <input type="text" placeholder="-- nhập --" name="note">
                        <button type="button" name="">Tiếp tục</button>
                    </div>
                </div>
                <div class="main-table__row">
                    <div class="main-table__column label-140">Khoản mục con:</div>
                    <div class="main-table__column field">
                        <select name="">
                            <option value="">Thanh lý tài sản cố định</option>
                            <option value="">Thanh lý tài sản cố định</option>
                        </select>
                    </div>
                    <div class="main-table__column addition-field d-flex">
                        <span>Ghi chú:</span>
                        <input type="text" placeholder="-- nhập --" name="note">
                        <button type="button" name="">Tiếp tục</button>
                    </div>
                </div>
                <div class="main-table__row">
                    <div class="main-table__column label-140">Mức độ ưu tiên:</div>
                    <div class="main-table__column field">
                        <select name="">
                            <option value="" selected disabled>Gấp/ Thông thường</option>
                            <option value="">Gấp</option>
                            <option value="">Thông thường</option>
                        </select>
                    </div>
                    <div class="main-table__column addition-field d-flex">
                        <span>Ghi chú:</span>
                        <input type="text" placeholder="-- nhập --" name="note">
                        <button type="button" name="">Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-table table-2">
            <div class="main-container d-flex">
                <div class="table-left">
                    <h3 class="main-table__title">Chứng từ đi kèm</h3>
                    <div class="main-table__row">
                        <div class="main-table__column label-195">1. Bảng kê danh mục</div>
                        <div class="main-table__column field-radio">
                            <input id="yes1" type="radio" content="1">
                            <label for="yes1">
                                <span>Có</span>
                            </label>
                            <input id="no1" type="radio" selector="row1" content="0">
                            <label for="no1">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                    <div class="main-table__row">
                        <div class="main-table__column label-195">2. Quyết định thanh lý</div>
                        <div class="main-table__column field-radio">
                            <input id="yes2" type="radio" content="1">
                            <label for="yes2">
                                <span>Có</span>
                            </label>
                            <input id="no2" type="radio" selector="row2" content="0">
                            <label for="no2">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                    <div class="main-table__row">
                        <div class="main-table__column label-195">3. Biên bản giao nhận</div>
                        <div class="main-table__column field-radio">
                            <input id="yes3" type="radio" content="1">
                            <label for="yes3">
                                <span>Có</span>
                            </label>
                            <input id="no3" type="radio" selector="row3" content="0">
                            <label for="no3">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                    <div class="main-table__row">
                        <div class="main-table__column label-195">4. Hóa đơn bán hàng</div>
                        <div class="main-table__column field-radio">
                            <input id="bill-yes" type="radio" content="1">
                            <label for="bill-yes">
                                <span>Có</span>
                            </label>
                            <input id="bill-no" type="radio" selector="row4" content="0">
                            <label for="bill-no">
                                <span>Không có</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="table-right">
                    <h3 class="main-table__title">Loại</h3>
                    <div class="main-table__row field-radio row1">
                        <input id="hard_copy" type="radio" value="yes" name="hard_copy">
                        <label for="hard_copy">
                            <span>Bản cứng</span>
                        </label>
                        <input id="soft_copy" type="radio" value="no" name="hard_copy">
                        <label for="soft_copy">
                            <span>Bản mềm</span>
                        </label>
                        <input type="text" class="note" placeholder="-- nhập lý do  --" name="" id="">
                    </div>
                    <div class="main-table__row field-radio row2">
                        <input id="liquidation_decision_type-yes"  type="radio" value="yes" name="liquidation_decision_type">
                        <label for="liquidation_decision_type-yes">
                            <span>Có</span>
                        </label>
                        <input id="liquidation_decision_type-no"  type="radio" value="no" name="liquidation_decision_type">
                        <label for="liquidation_decision_type-no">
                            <span>Không có</span>
                        </label>
                        <input type="text" class="note" placeholder="-- nhập lý do  --" name="" id="">
                    </div>
                    <div class="main-table__row field-radio row3">
                        <input id="receipt_delivery_type-yes" type="radio" value="yes" name="receipt_delivery_type">
                        <label for="receipt_delivery_type-yes">
                            <span>Có</span>
                        </label>
                        <input id="receipt_delivery_type-no" type="radio" value="no" name="receipt_delivery_type">
                        <label for="receipt_delivery_type-no">
                            <span>Không có</span>
                        </label>
                        <input type="text" class="note" placeholder="-- nhập lý do  --" name="" id="">
                    </div>
                    <div class="main-table__row field-radio row4">
                        <input id="bill_type-yes" type="radio" value="yes" name="bill_type">
                        <label for="bill_type-yes">
                            <span>Có</span>
                        </label>
                        <input id="bill_type-no" type="radio" value="no" name="bill_type">
                        <label for="bill_type-no">
                            <span>Không có</span>
                        </label>
                        <input type="text" class="note" placeholder="-- nhập lý do  --" name="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-table table-3 payment_method">
            <div class="main-container">
                <h3 class="main-table__title">Hình thức thu tiền</h3>
                <div class="main-table__row">
                    <div class="main-table__column label-195">1. Thu tiền mặt</div>
                    <div class="main-table__column field-radio">
                        <input id="cash-yes" method="cash" checked type="radio" value="cash_yes" name="payment_method">
                        <label for="cash-yes" class="group">
                            <span>Có</span>
                        </label>
                        <input id="cash-no" method="banking" type="radio" value="cash_no" name="payment_method">
                        <label for="cash-no" class="group">
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
                    <div class="main-table__column field-radio">
                        <input id="banking-yes" method="banking" type="radio" value="banking_yes" name="payment_method">
                        <label for="banking-yes" class="group">
                            <span>Có</span>
                        </label>
                        <input id="banking-no" method="cash" type="radio" value="banking_no" name="payment_method">
                        <label for="banking-no" class="group">
                            <span>Không</span>
                        </label>
                    </div>
                    <div class="main-table__column d-flex align-center money disabled">
                        <label for="money_banking">Số tiền</label>
                        <input type="text" disabled class="vnd" name="money_banking" id="money_banking">
                    </div>
                </div>
                <div class="total-money">
                    Tổng số tiền đề nghị duyệt thu: <span>890.000</span> VND
                </div>
            </div>
        </div>
    </form>
</div>
<div class="sidebar-right sidebar"></div>
<script type="text/javascript" defer>
    window.addEventListener('load', function() {
        $(document).ready(function() {
            $('select').focus();
            $('.field select').on('change', function() {
                $(this).parent().siblings('.addition-field').fadeIn(0).css('display', 'flex')
            });

            // input radio
            $('input:radio').change(function() {
                if ($(this).is(':checked')) {
                    const content = parseInt($(this).attr('content'))

                    if (!content) {
                        const selector = $(this).attr('selector');
                        $('.'+selector).find('input:radio').attr('disabled', '').prop('checked', false);
                        $('.'+selector).find('input:text').show();
                    }

                    const payment_method = $(this).attr('method');
                    if(payment_method == 'cash'){
                        $('#money_cash').removeAttr('disabled').parent();
                        $('#money_cash').parent().removeClass('disabled');
                        $('#money_banking').attr('disabled', '').parent();
                        $('#money_banking').parent().addClass('disabled');
                    }else{
                        $('#money_cash').attr('disabled', '');
                        $('#money_cash').parent().addClass('disabled');
                        $('#money_banking').removeAttr('disabled');
                        $('#money_banking').parent().removeClass('disabled');
                    }
                }
            });
        });
    })
</script>
<?php
include_once('footer.php');
?>