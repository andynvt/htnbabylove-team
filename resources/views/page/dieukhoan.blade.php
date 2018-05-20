@extends('master')

@section('content')
<div class="cnt-user">
        <div class="container-fluid">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('trang-chu') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Điều khoản sử dụng</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" id="pp-content">
                <div class="row">
                    <div class="col-12">
                        <h4><b>Điều khoản sử dụng</b></h4>
                        <hr class="hr-under-title">
                        <h6 class="tou-head">1. Giới thiệu điều khoản</h6>
                        <p class="tou-p-content">Chào mừng quý khách hàng đến với <b>HTNBabyLove.com</b>.
                            <br>
                            <br>Chúng tôi là Công ty Cổ phần Xuất Nhập khẩu Hoàng Thuỷ Nguyên có địa chỉ trụ sở tại 118E Mậu Thân, quận Ninh Kiều, tp. Cần Thơ, thành lập Sàn giao dịch thương mại điện tử thông qua website <b>www.HTNBabyLove.com</b> và đã được đăng ký chính thức với Bộ Công Thương Việt Nam.
                            <br>
                            <br>Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hoá này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.
                            <br>
                            <br>Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.</p>
                        <h6 class="tou-head">2. Hướng dẫn sử dụng website</h6>
                        <p class="tou-p-content">Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.
                            <br>
                            <br>Khi mua hàng, quý khách phải nhập thông tin xác thực về bản thân. Mỗi người truy cập phải có trách nhiệm với địa chỉ, thông tin tài khoản và hoạt động của mình trên web. Hơn nữa, quý khách hàng phải thông báo cho chúng tôi biết khi thông tin được sử dụng trái phép. Chúng tôi không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những thiệt hại hoặc mất mát gây ra do quý khách không tuân thủ quy định.
                            <br>
                            <br>Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</p>
                        <h6 class="tou-head">3. Ý kiến của khách hàng</h6>
                        <p class="tou-p-content">Tất cả nội dung trang web và ý kiến phê bình của quý khách đều là tài sản của chúng tôi. Nếu chúng tôi phát hiện bất kỳ thông tin giả mạo nào, chúng tôi sẽ xoá ý kiến phê bình của quý khách ngay lập tức hoặc áp dụng các biện pháp khác theo quy định của pháp luật Việt Nam.</p>
                        <h6 class="tou-head">4. Chấp nhận đơn hàng và giá cả</h6>
                        <p class="tou-p-content">Chúng tôi có quyền từ chối hoặc hủy đơn hàng của quý khách vì bất kỳ lý do gì liên quan đến lỗi kỹ thuật, hệ thống một cách khách quan vào bất kỳ lúc nào.
                            <br>
                            <br>Chúng tôi cam kết sẽ cung cấp thông tin giá cả chính xác nhất cho người tiêu dùng. Tuy nhiên, đôi lúc vẫn có sai sót xảy ra, ví dụ như trường hợp giá sản phẩm không hiển thị chính xác trên trang web hoặc sai giá, tùy theo từng trường hợp chúng tôi sẽ liên hệ hướng dẫn hoặc thông báo hủy đơn hàng đó cho quý khách. Chúng tôi cũng có quyền từ chối hoặc hủy bỏ bất kỳ đơn hàng nào dù đơn hàng đó đã hay chưa được xác nhận hoặc đã thanh toán. </p>
                        <h6 class="tou-head">5. Thay đổi hoặc hủy bỏ giao dịch</h6>
                        <p class="tou-p-content">Trong mọi trường hợp, khách hàng đều có quyền chấm dứt giao dịch nếu đã thực hiện các biện pháp sau đây:</p>
                        <ul class="tou-list">
                            <li>Thông báo cho <b>HTNBabyLove.com</b> về việc hủy giao dịch qua đường dây nóng (hotline) <a href="tel: 02923895554"><b class="tou-b">02923895554</b></a> hoặc <a href="tel: 0939058056 "><b class="tou-b">0939058056</b></a></li>
                            <li>Trả lại hàng hoá đã nhận nhưng chưa sử dụng hoặc hưởng bất kỳ lợi ích nào từ hàng hóa đó.</li>
                        </ul>
                        <br>
                        <h6 class="tou-head">6. Giải quyết hậu quả do lỗi nhập sai thông tin</h6>
                        <p class="tou-p-content">Khách hàng có trách nhiệm cung cấp thông tin đầy đủ và chính xác khi tham gia giao dịch tại <b>HTNBabyLove.com</b>. Trong trường hợp khách hàng nhập sai thông tin và gửi vào trang TMĐT <b>HTNBabyLove.com</b>, <b>HTNBabyLove.com</b> có quyền từ chối thực hiện giao dịch. Ngoài ra, trong mọi trường hợp, khách hàng đều có quyền đơn phương chấm dứt giao dịch nếu đã thực hiện các biện pháp sau đây:</p>
                        <ul class="tou-list">
                            <li>Thông báo cho <b>HTNBabyLove.com</b> về việc hủy giao dịch qua đường dây nóng (hotline) <a href="tel: 02923895554"><b class="tou-b">02923895554</b></a> hoặc <a href="tel: 0939058056 "><b class="tou-b">0939058056</b></a></li>
                            <li>Trả lại hàng hoá đã nhận nhưng chưa sử dụng hoặc hưởng bất kỳ lợi ích nào từ hàng hóa đó.</li>
                        </ul>
                        <br>
                        <p class="tou-p-content">Trong trường hợp sai thông tin phát sinh từ phía <b>HTNBabyLove.com</b> mà <b>HTNBabyLove.com</b> có thể chứng minh đó là lỗi của hệ thống hoặc từ bên thứ ba (sai giá sản phẩm, sai xuất xứ, …), <b>HTNBabyLove.com</b> sẽ đền bù cho khách hàng một mã giảm giá cho các lần mua sắm tiếp theo với mệnh giá tùy từng trường hợp cụ thể và có quyền không thực hiện giao dịch bị lỗi.</p>
                        <h6 class="tou-head">7. Thương hiệu và bản quyền</h6>
                        <p class="tou-p-content">Mọi quyền sở hữu trí tuệ (đã đăng ký hoặc chưa đăng ký), nội dung thông tin và tất cả các thiết kế, văn bản, đồ họa, phần mềm, hình ảnh, video, âm nhạc, âm thanh, biên dịch phần mềm, mã nguồn và phần mềm cơ bản đều là tài sản của chúng tôi. Toàn bộ nội dung của trang web được bảo vệ bởi luật bản quyền của Việt Nam và các công ước quốc tế. Bản quyền đã được bảo lưu.</p>
                        <h6 class="tou-head">8. Quyền pháp lý</h6>
                        <p class="tou-p-content">Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh bởi luật pháp Việt Nam và Tòa án có thẩm quyền tại Việt Nam sẽ giải quyết bất kỳ tranh chấp nào phát sinh từ việc sử dụng trái phép trang web này.</p>
                        <h6 class="tou-head">9. Quy định về bảo mật</h6>
                        <p class="tou-p-content">Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất bảo vệ thông tin của quý khách. Thông tin của quý khách trong quá trình thanh toán sẽ được mã hóa để đảm bảo an toàn. Sau khi quý khách hoàn thành quá trình đặt hàng, quý khách sẽ thoát khỏi chế độ an toàn.
                            <br>
                            <br>Quý khách không được sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Trang web cũng nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống. Cá nhân hay tổ chức vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.
                            <br>
                            <br>Mọi thông tin giao dịch sẽ được bảo mật ngoại trừ trong trường hợp cơ quan pháp luật yêu cầu. </p>
                        <h6 class="tou-head">10. Thanh toán an toàn và tiện lợi</h6>
                        <p class="tou-p-content"> <b><u>Cách 1:</u> Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán):</b>
                            <br>Bước 1: Người mua tìm hiểu thông tin về sản phẩm, dịch vụ được đăng tin;
                            <br>Bước 2: Người mua đến địa chỉ bán hàng Bước 3: Người mua thanh toán và nhận hàng;
                            <br>
                            <br><b><u>Cách 2:</u> Thanh toán sau (COD – giao hàng và thu tiền tận nơi):</b>
                            <br>Bước 1: Người mua tìm hiểu thông tin về sản phẩm, dịch vụ được đăng tin;
                            <br>Bước 2: Người mua xác thực đơn hàng (điện thoại, tin nhắn, email);
                            <br>Bước 3: Người bán xác nhận thông tin Người mua;
                            <br>Bước 4: Người bán chuyển hàng;
                            <br>Bước 5: Người mua nhận hàng và thanh toán.
                            <br>
                            <br><b><u>Cách 3:</u> Thanh toán online qua thẻ tín dụng, chuyển khoản</b>
                            <br>Bước 1: Người mua tìm hiểu thông tin về sản phẩm, dịch vụ được đăng tin;
                            <br>Bước 2: Người mua xác thực đơn hàng (điện thoại, tin nhắn, email);
                            <br>Bước 3: Người bán xác nhận thông tin Người mua;
                            <br>Bước 4: Người mua thanh toán;
                            <br>Bước 5: Người mua thông báo cho người bán là đã thanh toán;
                            <br>Bước 6: Người bán chuyển hàng;
                            <br>Bước 7: Người mua nhận hàng.</p>
                        <h6 class="tou-head">11. Đảm bảo an toàn giao dịch</h6>
                        <p class="tou-p-content">Chúng tôi sử dụng các dịch vụ để bảo vệ thông tin về nội dung sản phẩm trên <b>HTNBabyLove.com</b>. Để đảm bảo các giao dịch được tiến hành thành công, hạn chế tối đa rủi ro có thể phát sinh. </p>
                        <h6 class="tou-head">12. Luật pháp và thẩm quyền tại Lãnh thổ Việt Nam</h6>
                        <p class="tou-p-content">Tất cả các Điều Khoản và Điều Kiện này và Hợp Đồng (và tất cả nghĩa vụ phát sinh ngoài hợp đồng hoặc có liên quan) sẽ bị chi phối và được hiểu theo luật pháp của Việt Nam. Nếu có tranh chấp phát sinh bởi các Quy định Sử dụng này, quý khách hàng có quyền gửi khiếu nại/khiếu kiện lên Tòa án có thẩm quyền tại Việt Nam để giải quyết.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space30">&nbsp;</div>
</div>
@endsection